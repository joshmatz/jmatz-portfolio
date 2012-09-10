

/**************************
* Application
**************************/
var Folio = Em.Application.create({
  ready: function() {
    this._super();

    Folio.GetPostsFromServer();
  }
});

Folio.GetPostsFromServer = function() {
  // URL to data feed that I plan to consume
  //var feed = "http://blog.chromium.org/feeds/posts/default?alt=rss";
  //feed = encodeURIComponent(feed);

  // Feed parser that supports CORS and returns data as a JSON string
  //var feedPipeURL = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20xml%20where%20url%3D'";
  //feedPipeURL += feed + "'&format=json";

  var feedPipeURL = "http://localhost:8888/?wpapi=get_posts&type=post&content=1"
  console.log("Starting AJAX Request:", feedPipeURL);

  jQuery.ajax({
    url: feedPipeURL,
    dataType: 'json',
    success: function(data) {

      // Get the items object from the result
      var posts = data.posts;
      

      // Use map to iterate through the items and create a new JSON object for
      //  each item
      posts.map(function(entry) {
        var post = {};

        post.id = entry.id;
        post.key = post.id;
        post.type = entry.type;
        post.slug = entry.slug;
        post.url = entry.url;
        post.title = entry.title;
        post.title_plain = entry.title_plain;
        post.date = new Date(entry.date);
        post.modified = new Date(entry.modified);
        post.excerpt = entry.excerpt;
        post.parent = entry.parent;
        post.category = entry.category;
        post.tag = entry.tag;
        post.comment_count = entry.comment_count;
        post.comment_status = entry.comment_status;
        post.read = false;
        post.starred = false;

        // Create the Ember object based on the JavaScript object
        var emPost = Folio.Post.create(post);
        console.log("Here's the current posts: ", emPost);
        // Try to add the item to the data controller, if it's successfully
        //  added, we get TRUE and add the item to the local data store,
        //  otherwise it's likely already in the local data store.
        Folio.dataController.addPost(emPost);
      });

      // Refresh the visible items
      Folio.postsController.showDefault();
    }
  });
};

/**************************
* Controllers
**************************/
// dataController is in charge of all loaded data, visible or not
Folio.dataController = Em.ArrayController.create({
  // content array for Ember's data
  content: [],

  // Adds an item to the controller if it's not already in the controller
  addPost: function(item) {
    // Check to see if there are any items in the controller with the same
    //  item_id already
    var exists = this.filterProperty('id', item.id).length;
    if (exists === 0) {
      // If no results are returned, we insert the new item into the data
      // controller in order of publication date
      var length = this.get('length'), idx;
      idx = this.binarySearch(Date.parse(item.get('date')), 0, length);
      this.insertAt(idx, item);
      return true;
    } else {
      // It's already in the data controller, so we won't re-add it.
      return false;
    }
  },

  // Binary search implementation that finds the index where a entry
  // should be inserted when sorting by date.
  binarySearch: function(value, low, high) {
    var mid, midValue;
    if (low === high) {
      return low;
    }
    mid = low + Math.floor((high - low) / 2);
    midValue = Date.parse(this.objectAt(mid).get('date'));

    if (value < midValue) {
      return this.binarySearch(value, mid + 1, high);
    } else if (value > midValue) {
      return this.binarySearch(value, low, mid);
    }
    return mid;
  },

  // A 'property' that returns the count of items
  itemCount: function() {
    return this.get('length');
  }.property('@each'),

  // A 'property' that returns the count of read items
  readCount: function() {
    return this.filterProperty('read', true).get('length');
  }.property('@each.read'),

  // A 'property' that returns the count of unread items
  unreadCount: function() {
    return this.filterProperty('read', false).get('length');
  }.property('@each.read'),

  // A 'property' that returns the count of starred items
  starredCount: function() {
    return this.filterProperty('starred', true).get('length');
  }.property('@each.starred')
});

// PostsController is in charge of visible posts.
Folio.postsController = Em.ArrayController.create({
  // content array for Ember's data
  content: [],

  // Sets content[] to the filtered results of the data controller
  filterBy: function(key, value) {
    this.set('content', Folio.dataController.filterProperty(key, value));
  },

  // Sets content[] to all items in the data controller
  clearFilter: function() {
    this.set('content', Folio.dataController.get('content'));
  },

  // Shortcut for filterBy
  showDefault: function() {
    this.filterBy('read', false);
  },

  // Mark all visible items read
  markAllRead: function() {
    // Iterate through all items, and set read=true in the item controller
    this.forEach(function(item) {
      item.set('read', true);
    });
  },

  // A 'property' that returns the count of visible items
  itemCount: function() {
    return this.get('length');
  }.property('@each'),

  // A 'property' that returns the count of read items
  readCount: function() {
    return this.filterProperty('read', true).get('length');
  }.property('@each.read'),

  // A 'property' that returns the count of unread items
  unreadCount: function() {
    return this.filterProperty('read', false).get('length');
  }.property('@each.read'),

  // A 'property' that returns the count of starred items
  starredCount: function() {
    return this.filterProperty('starred', true).get('length');
  }.property('@each.starred')

});

/**************************
* Models
**************************/

Folio.Post = Em.Object.extend({
  //TODO:
  id: null,
  type: null, // post, page, custom-post
  slug: null, 
  url: null, // Need to edit json API to allow customized permalinks
  viewed: false,
  starred: false,
  title: null,
  title_plain: null,
  date: null,
  modified: null,
  excerpt: null,
  parent: null,
  comment_count: null,
  comment_status: null, // open, closed
  tag: null,
  category: null
});

/**************************
* Views
**************************/
Folio.NavBarView = Em.View.extend({
  // A 'property' that returns the count of items
  itemCount: function() {
    return Folio.dataController.get('itemCount');
  }.property('Folio.dataController.itemCount'),

  // A 'property' that returns the count of unread items
  unreadCount: function() {
    return Folio.dataController.get('unreadCount');
  }.property('Folio.dataController.unreadCount'),

  // A 'property' that returns the count of starred items
  starredCount: function() {
    return Folio.dataController.get('starredCount');
  }.property('Folio.dataController.starredCount'),

  // A 'property' that returns the count of read items
  readCount: function() {
    return Folio.dataController.get('readCount');
  }.property('Folio.dataController.readCount'),

  // Click handler for menu bar
  showAll: function() {
    Folio.postsController.clearFilter();
  },

  // Click handler for menu bar
  showUnread: function() {
    Folio.postsController.filterBy('read', false);
  },

  // Click handler for menu bar
  showStarred: function() {
    Folio.postsController.filterBy('starred', true);
  },

  // Click handler for menu bar
  showRead: function() {
    Folio.postsController.filterBy('read', true);
  },

  // Click handler for menu bar
  refresh: function() {
    Folio.GetPostsFromServer();
  }
});

Folio.SummaryListView = Em.View.extend({
  //TODO:

  tagName: 'article',

  classNames: ['well', 'summary'],

  classNameBindings: ['read', 'starred'],

  // Enables/Disables the read CSS class
  read: function() {
    var read = this.get('content').get('read');
    return read;
  }.property('Folio.postsController.@each.read'),

  // Enables/Disables the read CSS class
  starred: function() {
    var starred = this.get('content').get('starred');
    return starred;
  }.property('Folio.postsController.@each.starred'),

  // Returns the date in a human readable format
  formattedDate: function() {
    console.log("Content for ListView: ", this.get('content'));
    var d = this.get('content').get('date');
    return moment(d).format('MMMM Do, YYYY');
  }.property('Folio.postsController.@each.date')
});

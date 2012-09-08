

/**************************
* Application
**************************/
var App = Em.Application.create();

/**************************
* Controllers
**************************/


/**************************
* Models
**************************/

/**************************
* Views
**************************/
App.MyView = Em.View.extend({
  mouseDown: function() {
    window.alert("hello world!");
  }
});

App.PostContent = Em.View.extend({

});


<?php

/*-----------------------------------------------------------------------------------

	Add image upload metaboxes to Portfolio items

-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Define Metabox Fields
/*-----------------------------------------------------------------------------------*/

$prefix = 'tz_';
 
$meta_box = array(
	'id' => 'tz-meta-box-portfolio',
	'title' =>  __('Image Settings', 'framework'),
	'page' => 'portfolio',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
    	array(
			'name' =>  __('Image Thumbnail', 'framework'),
			'desc' => __('220px x 160px', 'framework'),
			'id' => $prefix.'portfolio_thumb',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_thumb_button',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 1 Height', 'framework'),
			'desc' => __('You need to define a height of the first image to enable the autoHeight feature. E.g. 500', 'framework'),
			'id' => $prefix.'portfolio_image_height',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' =>  __('Image 1', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 2', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image2',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button2',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 3', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image3',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button3',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 4', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image4',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button4',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 5', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image5',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button5',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 6', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image6',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button6',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 7', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image7',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button7',
			'type' => 'button',
			'std' => 'Browse'
		),		
    	array(
			'name' =>  __('Image 8', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image8',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button8',
			'type' => 'button',
			'std' => 'Browse'
		),		
    	array(
			'name' =>  __('Image 9', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image9',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button9',
			'type' => 'button',
			'std' => 'Browse'
		),
    	array(
			'name' =>  __('Image 10', 'framework'),
			'desc' => __('680px x unlimited', 'framework'),
			'id' => $prefix.'portfolio_image10',
			'type' => 'text',
			'std' => ''
		),
    	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'portfolio_image_button10',
			'type' => 'button',
			'std' => 'Browse'
    	),
	),
	
);

$meta_box_portfolio_video = array(
	'id' => 'tz-meta-box-portfolio-video',
	'title' => __('Video Settings', 'framework'),
	'page' => 'portfolio',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array( "name" => __('Video Height','framework'),
				"desc" => __('The video height (e.g. 500).','framework'),
				"id" => $prefix."video_height",
				"type" => "text",
				'std' => ''
			),
		array( "name" => __('M4V File URL','framework'),
				"desc" => __('The URL to the .m4v video file','framework'),
				"id" => $prefix."video_m4v",
				"type" => "text",
				'std' => ''
			),
		array( "name" => __('OGV File URL','framework'),
				"desc" => __('The URL to the .ogv video file','framework'),
				"id" => $prefix."video_ogv",
				"type" => "text",
				'std' => ''
			),
		array( "name" => __('Poster Image','framework'),
				"desc" => __('The preivew image.','framework'),
				"id" => $prefix."video_poster",
				"type" => "text",
				'std' => ''
			),
		array(
			'name' => __('Embedded Code', 'framework'),
			'desc' => __('If you are using something other than self hosted video such as Youtube or Vimeo, paste the embed code here. Width is best at 680px with any height.<br><br> This field will override the above.', 'framework'),
			'id' => $prefix.'portfolio_embed_code',
			'type' => 'textarea',
			'std' => ''
		)
	),
	
);

$meta_box_portfolio_audio = array(
	'id' => 'tz-meta-box-portfolio-audio',
	'title' =>  __('Audio Settings', 'framework'),
	'page' => 'portfolio',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array( "name" => __('MP3 File URL','framework'),
				"desc" => __('The URL to the .mp3 audio file','framework'),
				"id" => $prefix."audio_mp3",
				"type" => "text",
				'std' => ''
			),
		array( "name" => __('OGA File URL','framework'),
				"desc" => __('The URL to the .oga, .ogg audio file','framework'),
				"id" => $prefix."audio_ogg",
				"type" => "text",
				'std' => ''
			)
	),
	
	
);


add_action('admin_menu', 'tz_add_box_portfolio');


/*-----------------------------------------------------------------------------------*/
/*	Add metabox to edit page
/*-----------------------------------------------------------------------------------*/
 
function tz_add_box_portfolio() {
	global $meta_box, $meta_box_portfolio_video, $meta_box_portfolio_audio;
	
	add_meta_box($meta_box['id'], $meta_box['title'], 'tz_show_box_portfolio', $meta_box['page'], $meta_box['context'], $meta_box['priority']);

	add_meta_box($meta_box_portfolio_video['id'], $meta_box_portfolio_video['title'], 'tz_show_box_portfolio_video', $meta_box_portfolio_video['page'], $meta_box_portfolio_video['context'], $meta_box_portfolio_video['priority']);
	
	add_meta_box($meta_box_portfolio_audio['id'], $meta_box_portfolio_audio['title'], 'tz_show_box_portfolio_audio', $meta_box_portfolio_audio['page'], $meta_box_portfolio_audio['context'], $meta_box_portfolio_audio['priority']);

}


/*-----------------------------------------------------------------------------------*/
/*	Callback function to show fields in meta box
/*-----------------------------------------------------------------------------------*/

function tz_show_box_portfolio() {
	global $meta_box, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('Upload an image and then click "insert into post". To delete an image, simply clear the field.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
			
			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break;
		}

	}
 
	echo '</table>';
}


function tz_show_box_portfolio_video() {
	global $meta_box_portfolio_video, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('These settings enable you to embed videos into your portfolio pages.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_portfolio_video['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:20px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'],'" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" rows="8" cols="5" style="width:100%; margin-right: 20px; float:left;">', $meta ? $meta : $field['std'], '</textarea>';
			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
		}

	}
 
	echo '</table>';
}

function tz_show_box_portfolio_audio() {
	global $meta_box_portfolio_audio, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('These settings enable you to embed videos into your portfolio pages.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_portfolio_audio['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:20px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'],'" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" rows="8" cols="5" style="width:100%; margin-right: 20px; float:left;">', $meta ? $meta : $field['std'], '</textarea>';
			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
		}

	}
 
	echo '</table>';
}
 
add_action('save_post', 'tz_save_data_portfolio');


/*-----------------------------------------------------------------------------------*/
/*	Save data when post is edited
/*-----------------------------------------------------------------------------------*/
 
function tz_save_data_portfolio($post_id) {
	global $meta_box, $meta_box_portfolio_video, $meta_box_portfolio_audio;
 
	// verify nonce
	if (!wp_verify_nonce($_POST['tz_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
 
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
 
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
 
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
	
	foreach ($meta_box_portfolio_video['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
	
	foreach ($meta_box_portfolio_audio['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

}


/*-----------------------------------------------------------------------------------*/
/*	Queue Scripts
/*-----------------------------------------------------------------------------------*/
 
function tz_admin_scripts_portfolio() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('tz-upload', get_template_directory_uri() . '/functions/js/upload-button.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('tz-upload');
}
function tz_admin_styles_portfolio() {
	wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'tz_admin_scripts_portfolio');
add_action('admin_print_styles', 'tz_admin_styles_portfolio');
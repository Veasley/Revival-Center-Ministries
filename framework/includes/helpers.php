<?php
// Put any helper functions for the theme here, however
// please consider putting custom functions in a custom site plugin.
// ===================================================

/*========================================================
// CUSTOM LOGIN LOGO
// Switching out Wordpress logo to our own logo
========================================================*/

/*function custom_login_logo() {
	
    echo '<style type="text/css">
    
    	body.login {
			background-color: #000 !important;
		}

        h1 a { 
        	background-image:url(/images/logo.jpg) !important; 
          	background-size: 85%;
			width: 100%;
			height: 112px;
			background-position: center center;
        }
    </style>';
}

add_action('login_head', 'custom_login_logo');*/


/*========================================================
// ACF OPTIONS PAGE
// Adding Advance Custom Fields OPTIONS page
//source(https://www.advancedcustomfields.com/resources/options-page/)
========================================================*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}




/*// CUSTOM Next / Previous Trigger for Posts
//
// Add Custom Next / Previous Post Code
// =============================================================================
add_action ('the_content', 'bk_add_next_post_item_link' );

function bk_add_next_post_item_link ( $content ) {
	
	if ( is_singular('post') || is_singular('x-portfolio') ) {
		$next_name = "Next Project >";
		$prev_name = "< Prev Project";
		//$back_blog = '<a href="/news" class="x-btn x-btn-global">Back to News</a>';
		$next_link = get_next_post() ? '<a style="float: left;" href="' . get_permalink( get_next_post()->ID ) . '">' . $prev_name . '</a>' : '';
		$prev_link = get_previous_post() ? '<a style="float: right;" href="' . get_permalink( get_previous_post()->ID ) . '">' . $next_name . '</a>' : '';
		$posts = '<div class="wp-post-navigation-next">'.$next_link.$prev_link.'</div>';
		return $content . $posts;
	} else {
		return $content;
	}
}*/

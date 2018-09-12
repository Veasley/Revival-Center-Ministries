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



//--------------------------------------------------------------------------------------------



// CUSTOM Next / Previous Trigger for Posts
// =============================================================================
add_action ('the_content', 'dcm_add_next_post_item_link' );

function dcm_add_next_post_item_link ( $content ) {

	if ( is_singular('post') || is_singular('x-portfolio') ) {
		$next_name = "Next Post >";
		$prev_name = "< Prev Post";
// 		$back_blog = '<a href="/news" class="x-btn x-btn-global">Back to News</a>';
		$next_link = get_next_post() ? '<a style="float: left;" href="' . get_permalink( get_next_post()->ID ) . '">' . $prev_name . '</a>' : '';
		$prev_link = get_previous_post() ? '<a style="float: right;" href="' . get_permalink( get_previous_post()->ID ) . '">' . $next_name . '</a>' : '';
		$posts = '<div class="wp-post-navigation-next">'.$next_link.$prev_link.'</div>';
		return $content . $posts;
	} else {
		return $content;
	}
}



//----------------------------------------------------------------------------------------------



// Add Social Sharing to single posts
// =============================================================================
function x_add_social_sharing ( $content ) {
	
  if ( is_singular('post') ) {
	  
    echo do_shortcode('[share title="Share this Post" facebook="true" twitter="true" google_plus="true" linkedin="true" pinterest="false" reddit="false" email="true"]');
    
  }
}
add_action('x_before_the_content_end', 'x_add_social_sharing');


//----------------------------------------------------------------------------------------------


// Add custom header - NEWS PAGE
// =============================================================================

function add_custom_news_header(){ ?>
  
<!--
  <?php 
	 // Set the Default Title
	 $title = 'Invotec <strong>News</strong>'; 
	 
	 // If we are on a single post, change the title to the
	 // title of the post
	 
	 if( is_singular( 'post' ) ){
		 $title = get_the_title();
	 }
	 
  ?>
-->
  
  
  <?php if ( is_home() || is_singular( 'post' ) || is_search() || is_archive() || is_singular( 'mec-events' ) ) : ?>
  
  	<!-- our custom header codes here -->
		  
	<div class="e242-1 x-section _before _gradient-overlay newsheader" id="inner-hero">
    		  
		<div class="e242-2 x-container max width">
			<div class="e242-3 x-column x-sm x-1-1">
			    <div class="x-text -white head-title _max-1000 _center"><h1>News</h1></div>
			</div>
		</div>
  </div>
		  
  <?php endif; ?>
  
<?php }
add_action('x_after_view_renew__landmark-header', 'add_custom_news_header');




// Add custom header - SHOP PAGE
// =============================================================================

function add_custom_shop_header(){ ?>
    
  
  <?php if ( is_woocommerce() || is_shop() || is_cart() || is_product() || is_checkout() ) : ?>
  
  	<!-- our custom header codes here -->
		  
	<div class="e242-1 x-section _before _gradient-overlay" id="inner-hero">
    		  
		<div class="e242-2 x-container max width">
			<div class="e242-3 x-column x-sm x-1-1">
			    <div class="x-text -white head-title _max-1000 _center"><h1>Bookstore</h1></div>
			</div>
		</div>
  </div>
		  
  <?php endif; ?>
  
<?php }
add_action('x_after_view_renew__landmark-header', 'add_custom_shop_header');


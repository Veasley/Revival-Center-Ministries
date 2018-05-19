<?php
// This File Is Responsible for enqueueing any custom JS files
// ==============================================

//On Scroll Script
wp_register_script( 'onScroll', '/wp-content/themes/x-child/framework/assets/js/dist/on-scroll-min.js', null, null, true );
wp_enqueue_script('onScroll');
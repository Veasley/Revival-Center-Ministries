<?php
// ================================================================================
// FUNCTIONS.PHP
// ---------------------------------------------------------------------------------------------------------------------------------------------
// This file should be used ONLY for those items outlined in the Table of Contens below, or items similar
// to those outlined. This file should NOT be used to hold functions or functionality.
// To understand X, please reference the X theme KB: https://community.theme.co/kb/
// 
// @since 1.1.0
// ===============================================================================

// ===============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Define Constants & Declare Variables
// 	03. Include Additional Files
// =============================================================================


// 01. Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true', 99999999999);



// 02. Define Constants
// ==================

if ( ! defined( 'XCHILD_ASSET_URL' ) ){
	define( 'XCHILD_ASSET_URL', get_stylesheet_directory() . '/framework/assets' );
}

if ( ! defined( 'XCHILD_ASSET_PATH' ) ){
	define( 'XCHILD_ASSET_PATH', get_stylesheet_directory_uri() . '/framework/assets' );
}

// 02. Declare Variables for File Paths
// @note - these variables are only scoped to this file
// ========================================

$inc_path       	= 	'framework/includes';
$enqueue_path 	= 	'framework/includes/enqueues';
$loader_path 	= 	'framework/includes/loaders';



// 03. Include Files
// =====================


//
// Helper Functions
//

include_once( $inc_path . '/helpers.php' );

//
// Enqueues
//

include_once( $enqueue_path . '/scripts.php' );
include_once( $enqueue_path . '/styles.php' );

//
// View Loaders
//

include_once( $loader_path . '/global-view-loader.php' );
include_once( $loader_path . '/stack-view-loader.php' );
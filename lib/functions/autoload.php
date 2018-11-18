<?php
/**
 * @package mdbcreative;
 * User: mallorydibartolo
 * Date: 11/6/18
 * Time: 8:39 PM
 */

namespace mdbcreative;

//* Setup Theme
include_once(get_stylesheet_directory() . '/lib/theme-defaults.php');


//* Add Image upload and Color select to WordPress Theme Customizer
require_once(get_stylesheet_directory() . '/lib/customize.php');

//* Include Customizer CSS
include_once(get_stylesheet_directory() . '/lib/css-handler.php');

$folder_lib_root = CHILD_THEME_DIR . '/lib/';

/**
 * Loads non admin files
 *
 * @since 1.0.0
 *
 * @return void
 *
 *
 *
 */
function load_nonadmin_files() {
     $filenames = array(
         'setup.php',
         'components/customizer/css-handler.php',
         'components/customizer/helpers.php',
         'functions/formatting.php',
         'functions/load-assets.php',
         'functions/markup.php',
         'structure/archive.php',
         'structure/comments.php',
         'structure/footer.php',
         'structure/header.php',
         'structure/menu.php',
         'structure/post.php',
         'structure/sidebar.php',
     );
    load_specified_files($filenames);

 }

 add_action('admin_init', __NAMESPACE__ . '\load_admin_files');
/**
 * Loads admin files
 *
 * @since 1.0.0
 *
 * @return void
 *
 *
 *
 */
function load_admin_files() {
    $filenames = array(
        'components/customizer/customize.php',
    );
    load_specified_files($filenames);
}

/**
 *
 * Load each of the specified files
 * @param array $filenames
 * @param string $folder_root
 *
 *
 */
function load_specified_files(array $filenames, $folder_root = '') {
    $folder_root = $folder_root ?: CHILD_THEME_DIR . '/lib/';

    foreach($filenames as $filename) {
        include($folder_lib_root . $filename);
    }
}

load_nonadmin_files();





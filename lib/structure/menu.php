<?php
/**
 *
 * Menu HTML markup structure
 *
 * @package mdbcreative
 * User: mallorydibartolo
 * Date: 11/6/18
 * Time: 8:42 PM
 */

namespace mdbcreative;

/**
 * Unregister menu callbacks
 *
 * @since 1.0.0
 *
 * @return void
 *
 */

function unregister_menu_callbacks() {
    remove_action('genesis_after_header', 'genesis_do_subnav');
}


//* Reposition the secondary navigation menu
remove_action('genesis_after_header', 'genesis_do_subnav');
add_action('genesis_footer', 'genesis_do_subnav', 5);

//* Reduce the secondary navigation menu to one level depth
add_filter('wp_nav_menu_args', __NAMESPACE__ . '\setup_secondary_menu_args');

/**
 *
 * Reduce the secondary navigation menu to one level depth
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 *
 *
 */
function setup_secondary_menu_args(array $args)
{

    if ('secondary' != $args['theme_location']) {
        return $args;
    }

    $args['depth'] = 1;

    return $args;

}
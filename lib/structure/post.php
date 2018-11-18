<?php
/**
 * @package mdbcreative
 * User: mallorydibartolo
 * Date: 11/6/18
 * Time: 8:42 PM
 */

namespace mdbcreative;


add_filter('genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size');
/**
 * Modify size of the Gravatar in the author box
 *
 * @since 1.0.0
 *
 * @param $size
 *
 * @return int
 */
function setup_author_box_gravatar_size($size)
{

    return 90;

}
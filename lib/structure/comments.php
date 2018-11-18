<?php
/**
 *
 * Comments HTML markup structure
 *
 * @package mdbcreative
 * User: mallorydibartolo
 * Date: 11/6/18
 * Time: 8:42 PM
 */

namespace mdbcreative;

//* Modify size of the Gravatar in the entry comments
add_filter('genesis_comment_list_args', __NAMESPACE__ . '\setup_comments_gravatar');

/**
 * Modify size of the Gravatar in the entry comments
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return mixed
 *
 */
function setup_comments_gravatar(array $args)
{

    $args['avatar_size'] = 60;

    return $args;

}
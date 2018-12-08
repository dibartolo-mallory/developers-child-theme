<?php
/**
 * Created by PhpStorm.
 * User: mallorydibartolo
 * Date: 11/6/18
 * Time: 8:29 PM
 */

include_once('lib/init.php');

include_once('lib/functions/autoload.php');




add_action( 'genesis_after_header', 'home_page_banner' );

/** Banner Image on Home Page
 *
 * @author Mallory Di Bartolo
 *
 *
 */

function home_page_banner() {

    if ( ! is_front_page() ) {
        return;
    } ?>


    <div class="home-banner">
        <img src="http://placehold.it/1600x222&amp;text=Banner" alt="Banner" />
    </div>

    <?php
}
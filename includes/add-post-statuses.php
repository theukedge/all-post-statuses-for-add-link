<?php

function apsfal_post_status_filter( $query ) {
    $query['post_status'] = 'any';

    return $query;
}

add_filter( 'wp_link_query_args', 'apsfal_post_status_filter' );
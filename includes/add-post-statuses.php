<?php

function apsfal_post_status_filter( $query ) {
  $types = $query['post_type'];

  if( ($key = array_search('attachment', $types) ) !== false ) {
    unset($types[$key]);
  }
  $query['post_status'] = 'any';
  $query['post_type'] = $types;

  return $query;
}

add_filter( 'wp_link_query_args', 'apsfal_post_status_filter' );

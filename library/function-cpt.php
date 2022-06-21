<?php

  /* ***** ----------------------------------------------- ***** **
  ** ***** News Custom Post Type (example)
  ** ***** ----------------------------------------------- ***** */

  // Create custom post type
  function bml_create_news_cpt() {

    $labels = array(
      'name' => _x( 'News', 'post type general name', 'bymattlee' ),
      'singular_name' => _x( 'News', 'post type singular name', 'bymattlee' ),
      'menu_name' => _x( 'News', 'admin menu', 'bymattlee' ),
      'name_admin_bar' => _x( 'News', 'add new on admin bar', 'bymattlee' ),
      'add_new' => _x( 'Add New', 'news', 'bymattlee' ),
      'add_new_item' => __( 'Add New News', 'bymattlee' ),
      'new_item' => __( 'New News', 'bymattlee' ),
      'edit_item' => __( 'Edit News', 'bymattlee' ),
      'view_item' => __( 'View News', 'bymattlee' ),
      'all_items' => __( 'All News', 'bymattlee' ),
      'search_items' => __( 'Search News', 'bymattlee' ),
      'parent_item_colon' => __( 'Parent News:', 'bymattlee' ),
      'not_found' => __( 'No News found.', 'bymattlee' ),
      'not_found_in_trash' => __( 'No News found in Trash.', 'bymattlee' )
    );

    $args = array(
      'labels' => $labels,
      'description' => __( 'Description.', 'bymattlee' ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'news' ),
      'capability_type' => 'post',
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-admin-post',
      'show_in_rest' => true,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' )
    );

    register_post_type( 'bml-news', $args );

  }

  add_action( 'init', 'bml_create_news_cpt' );

  // function bml_create_news_taxonomies() {
    
  //   // Add new taxonomy, make it hierarchical (like categories)
  //   $labels = array(
  //     'name' => _x( 'Genres', 'taxonomy general name', 'bymattlee' ),
  //     'singular_name' => _x( 'Genre', 'taxonomy singular name', 'bymattlee' ),
  //     'search_items' => __( 'Search Genres', 'bymattlee' ),
  //     'all_items' => __( 'All Genres', 'bymattlee' ),
  //     'parent_item' => __( 'Parent Genre', 'bymattlee' ),
  //     'parent_item_colon' => __( 'Parent Genre:', 'bymattlee' ),
  //     'edit_item' => __( 'Edit Genre', 'bymattlee' ),
  //     'update_item' => __( 'Update Genre', 'bymattlee' ),
  //     'add_new_item' => __( 'Add New Genre', 'bymattlee' ),
  //     'new_item_name' => __( 'New Genre Name', 'bymattlee' ),
  //     'menu_name' => __( 'Genres', 'bymattlee' ),
  //   );

  //   $args = array(
  //     'hierarchical' => true,
  //     'labels' => $labels,
  //     'show_ui' => true,
  //     'show_admin_column' => true,
  //     'query_var' => true,
  //     'rewrite' => array( 'slug' => 'genre' ),
  //   );

  //   register_taxonomy( 'bml-genre', array( 'bml-news' ), $args );

  //   // Add new taxonomy, NOT hierarchical (like tags)
  //   $labels = array(
  //     'name' => _x( 'Writers', 'taxonomy general name', 'bymattlee' ),
  //     'singular_name' => _x( 'Writer', 'taxonomy singular name', 'bymattlee' ),
  //     'search_items' => __( 'Search Writers', 'bymattlee' ),
  //     'popular_items' => __( 'Popular Writers', 'bymattlee' ),
  //     'all_items' => __( 'All Writers', 'bymattlee' ),
  //     'parent_item' => null,
  //     'parent_item_colon' => null,
  //     'edit_item' => __( 'Edit Writer', 'bymattlee' ),
  //     'update_item' => __( 'Update Writer', 'bymattlee' ),
  //     'add_new_item' => __( 'Add New Writer', 'bymattlee' ),
  //     'new_item_name' => __( 'New Writer Name', 'bymattlee' ),
  //     'separate_items_with_commas' => __( 'Separate writers with commas', 'bymattlee' ),
  //     'add_or_remove_items' => __( 'Add or remove writers', 'bymattlee' ),
  //     'choose_from_most_used' => __( 'Choose from the most used writers', 'bymattlee' ),
  //     'not_found' => __( 'No writers found.', 'bymattlee' ),
  //     'menu_name' => __( 'Writers', 'bymattlee' ),
  //   );

  //   $args = array(
  //     'hierarchical' => false,
  //     'labels' => $labels,
  //     'show_ui' => true,
  //     'show_admin_column' => true,
  //     'update_count_callback' => '_update_post_term_count',
  //     'query_var' => true,
  //     'rewrite' => array( 'slug' => 'writer' ),
  //   );

  //   register_taxonomy( 'bml-writer', 'bml-news', $args );
  // }

  // add_action( 'init', 'bml_create_news_taxonomies', 0 );
  


  function bml_create_jobs_cpt() {

    $labels = array(
      'name' => _x( 'Jobs', 'post type general name', 'bymattlee' ),
      'singular_name' => _x( 'Jobs', 'post type singular name', 'bymattlee' ),
      'menu_name' => _x( 'Jobs', 'admin menu', 'bymattlee' ),
      'name_admin_bar' => _x( 'Jobs', 'add new on admin bar', 'bymattlee' ),
      'add_new' => _x( 'Add New', 'Jobs', 'bymattlee' ),
      'add_new_item' => __( 'Add New Jobs', 'bymattlee' ),
      'new_item' => __( 'New Jobs', 'bymattlee' ),
      'edit_item' => __( 'Edit Jobs', 'bymattlee' ),
      'view_item' => __( 'View Jobs', 'bymattlee' ),
      'all_items' => __( 'All Jobs', 'bymattlee' ),
      'search_items' => __( 'Search Jobs', 'bymattlee' ),
      'parent_item_colon' => __( 'Parent Jobs:', 'bymattlee' ),
      'not_found' => __( 'No Jobs found.', 'bymattlee' ),
      'not_found_in_trash' => __( 'No Jobs found in Trash.', 'bymattlee' )
    );

    $args = array(
      'labels' => $labels,
      'description' => __( 'Description.', 'bymattlee' ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'jobs' ),
      'capability_type' => 'post',
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-admin-post',
      'show_in_rest' => true,
      'supports' => array( 'title', 'editor', 'revisions' )
    );

    register_post_type( 'bml-jobs', $args );

  }

  add_action( 'init', 'bml_create_jobs_cpt' );
?>
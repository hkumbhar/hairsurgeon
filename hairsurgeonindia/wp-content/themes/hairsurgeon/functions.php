<?php/**
 * The template includes necessary functions for theme.
 *
 * @since 1.0.0
 *
 */
?>

<?php add_theme_support('post-thumbnails');?> 

<?php
//Create featured image section in admin panel
add_theme_support( 'title-tag' );
      
      
      
      register_nav_menu( 'primary', __( 'Primary Menu', 'hotel-melbourne' ) );
      

//function to create post for home page three boxes
//Custom post type three boxes
add_action( 'init', 'create_post_type_three_box' );
function create_post_type_three_box() {
  register_post_type( 'boxes',
    array(
      'labels' => array(
        'name' => __( 'Three Boxes' ),
        'singular_name' => __( 'Three Boxes' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}



//function to create post for home page statistics section
//Custom post type statistics section
add_action( 'init', 'create_post_type_statistics' );
function create_post_type_statistics() {
  register_post_type( 'statistics',
    array(
      'labels' => array(
        'name' => __( 'Statistics' ),
        'singular_name' => __( 'Statistics' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );  
}

//Option Page Setting fuction
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  }
?>
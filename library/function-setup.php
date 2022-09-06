<?php
/**
 * The starting point for setting up a new theme.
 * Go through this file to setup your preferences
 *
 * @author      Andrea Musso
 *
 *
 */

/*=======================================================
Table of Contents:
–––––––––––––––––––––––––––––––––––––––––––––––––––––––––
  1.0 LOCALE SETTING
  2.0 DEFAULT BLOCK STYLES
  3.0 GOOGLE TAG MANAGER
  4.0 SETUP WP-MENUS
  5.0 SETUP LOGIN PAGE 
=======================================================*/

/*==================================================================================
  1.0 LOCALE SETTING
==================================================================================*/
// Define local time, date and language-location (PHP-only, does not affect WordPress)
// => http://php.net/manual/function.setlocale.php
setlocale(LC_ALL, 'en_US.UTF-8');

/*==================================================================================
  2.0 DEFAULT GUTENBERG BLOCK STYLES
==================================================================================*/
// Gutenberg comes with default styles for all blocks
// by default these styles are disabled. Change this to `true` to enqueue them
$load_default_block_styles = true;



/*==================================================================================
  3.0 GOOGLE TAG MANAGER
==================================================================================*/
// embed the GTM-scripts into head and body => WPSeed_gtm()
// add your GTM_id (for example 'GTM-ABC1234') or leave empty to not enqueue any GTM-script
$GTM_id = '';


/*==================================================================================
  4.0 SETUP WP-MENUS
==================================================================================*/
// loads wordpress-menus, add your custom menus here or remove if not needed
// by default, only 'mainmenu' is shown
// => https://codex.wordpress.org/Function_Reference/register_nav_menus
function wpseed_register_theme_menus() {
  register_nav_menus([
    'mainmenu' => __('Main menu'),
    'footermenu' => __('Footer menu')
  ]);
}
add_action( 'init', 'wpseed_register_theme_menus');


 // Custom walker for slideout menu that removes all unnecessary classes
 class Site_Nav_Walker extends Walker_Nav_Menu {

  // Rename sub menu class name
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"o-nav-subMenu\">";
  }

  // Add main/sub classes to li's and links
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    global $wp_query;
    
    $item_output = '';
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

    // Passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    // Define new array of classes with new naming structure
    $list_classes = array( 'o-nav-menuListItem', 'js-nav-menuListItem' );

    // If custom classes are used, add to the list tag class array
    if ( $classes[0] != '' ) $list_classes[] = $classes[0];

    // If initial class array contains 'current-menu-item', 'current-menu-ancestor' or 'current-page-ancestor', add current marker to the list tag class array
    // Also check if current post type slug matches the menu item, if so, add current marker (but disregard category nav items)
    if ( in_array( 'current-menu-item', $classes ) 
      || in_array( 'current-menu-ancestor', $classes )
      || in_array( 'current-page-ancestor', $classes ) ) {
      $list_classes[] = 'o-nav-menuListItem--current';
    }

    // If class array contains 'menu-item-has-children', rename to 'has_submenu' and add to the list tag class array
    if ( in_array( 'menu-item-has-children', $classes ) ) $list_classes[] = 'o-nav-menuListItem--hasSubmenu';

    $list_classes = esc_attr( implode( ' ', $list_classes ) );

    // Build html
    // If current item has a submenu, add class to list item
    $output .= $indent . "\n<li class=\"" . $list_classes . "\">\n";

    // Link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="o-nav-menuItem js-nav-menuItem"';

    // Build content inside of anchor tag
    $anchor_content = apply_filters( 'the_title', $item->title, $item->ID );

    if ( is_object( $args) ) {
      $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        $anchor_content,
        $args->link_after,
        $args->after
      );
    }

    // Build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

  }
}



/*==================================================================================
  5.0 SETUP LOGIN PAGE 
==================================================================================*/

$gFontUrl = "https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600;700&display=swap";
$fontFamily = "'League Spartan', sans-serif";
$customLogo = get_stylesheet_directory_uri()."/dist/images/rebel-lion-logo.svg";
$mainColor = "#F39200";



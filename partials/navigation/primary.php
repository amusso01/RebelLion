<?php
/**
 * Primary Nav
 * 
 * @author Andrea Musso
 * 
 * @package Foundry
 */

if ( has_nav_menu( 'mainmenu' ) ) :
    wp_nav_menu([
        'theme_location'    => 'mainmenu',
        'menu_class'        => 'menu-main',
        'menu_id'           => 'menu_main',
        'container'         => 'nav',
        'walker' => new Site_Nav_Walker(),
        'container_class'   => 'primary-menu',
        'depth'             => 1
    ]);
endif;

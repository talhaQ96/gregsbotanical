<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'parent_slug' => '',
        'position' => false,
        'icon_url' => false
    ]);

    acf_add_options_sub_page([
        'page_title' => 'General Settings',
        'menu_title' => 'General Settings',
        'menu_slug' => 'theme-options-general',
        'capability' => 'edit_posts',
        'parent_slug' => 'theme-options',
        'position' => false,
        'icon_url' => false
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Footer Settings',
        'menu_title' => 'Footer Settings',
        'menu_slug' => 'theme-options-footer',
        'capability' => 'edit_posts',
        'parent_slug' => 'theme-options',
        'position' => false,
        'icon_url' => false
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Other Settings',
        'menu_title' => 'Other Settings',
        'menu_slug' => 'theme-options-other',
        'capability' => 'edit_posts',
        'parent_slug' => 'theme-options',
        'position' => false,
        'icon_url' => false
    ]);

}
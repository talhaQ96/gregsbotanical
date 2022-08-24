<?php

//add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
//function add_block_editor_assets(){
//    wp_enqueue_style( 'homepage', get_template_directory_uri() . '/dist/css/homepage.css', array(), '1.0.0' );
//    wp_enqueue_style( 'general', get_template_directory_uri() . '/dist/css/general-admin.css', array(), '1.0.0' );
//}


add_action('acf/init', 'home_landing_section');
function home_landing_section() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a homepage slider block
        /*acf_register_block_type(
            [
                'name'              => 'homepage-slider',
                'title'             => __('Homepage Slider'),
                'description'       => __('Homepage Slider Block'),
                'render_template'   => 'template-parts/blocks/homepage-slider.php',
                'category'          => 'greg-botanical',
                'icon'              => 'slides',
                'keywords'          => array( 'homepage', 'slider' ),
                'mode'              => 'edit'
            ]
        );

        acf_register_block_type(
            [
                'name'              => 'content-with-image',
                'title'             => __('Content with image'),
                'description'       => __('Content with image block'),
                'render_template'   => 'template-parts/blocks/content-with-image.php',
                'category'          => 'greg-botanical',
                'icon'              => 'text',
                'keywords'          => array( 'content', 'with', 'image' ),
                'mode'              => 'edit'
            ]
        );

        acf_register_block_type(
            [
                'name'              => 'blog-banner',
                'title'             => __('Blog Banner'),
                'description'       => __('Blog Banner block'),
                'render_template'   => 'template-parts/blocks/blog-banner.php',
                'category'          => 'greg-botanical',
                'icon'              => 'text',
                'keywords'          => array( 'blog', 'banner' ),
                'mode'              => 'edit'
            ]
        );


        acf_register_block_type(
            [
                'name'              => 'product-grid',
                'title'             => __('Product Grid'),
                'description'       => __('Product Grid With 3 Columns'),
                'render_template'   => 'template-parts/blocks/product-grid.php',
                'category'          => 'greg-botanical',
                'icon'              => 'text',
                'keywords'          => array( 'product', 'grid'),
                'mode'              => 'edit'
            ]
        );

        acf_register_block_type(
            [
                'name'              => 'featured-products-slider',
                'title'             => __('Featured Products Slider'),
                'description'       => __('Featured products slider with 4 columns'),
                'render_template'   => 'template-parts/blocks/featured-products-slider.php',
                'category'          => 'greg-botanical',
                'icon'              => 'star-filled',
                'keywords'          => array( 'featured', 'products', 'slider'),
                'mode'              => 'edit'
            ]
        );

        acf_register_block_type(
            [
                'name'              => 'certifications',
                'title'             => __('Certifications'),
                'description'       => __('Certifications'),
                'render_template'   => 'template-parts/blocks/certifications.php',
                'category'          => 'greg-botanical',
                'icon'              => 'star-filled',
                'keywords'          => array( 'certifications', 'certification'),
                'mode'              => 'edit'
            ]
        );

        acf_register_block_type(
            [
                'name'              => 'blog-grid',
                'title'             => __('Blog Grid'),
                'description'       => __('Blog Grid'),
                'render_template'   => 'template-parts/blocks/blog-grid.php',
                'category'          => 'greg-botanical',
                'icon'              => 'star-filled',
                'keywords'          => array( 'blog', 'grid'),
                'mode'              => 'edit'
            ]
        );

        acf_register_block_type(
            [
                'name'              => 'reviews-slider',
                'title'             => __('Reviews Slider'),
                'description'       => __('Reviews Slider'),
                'render_template'   => 'template-parts/blocks/reviews-slider.php',
                'category'          => 'greg-botanical',
                'icon'              => 'star-filled',
                'keywords'          => array( 'reviews', 'slider'),
                'mode'              => 'edit'
            ]
        );

        acf_register_block_type(
            [
                'name'              => 'brands-slider',
                'title'             => __('Brands Slider'),
                'description'       => __('Brands Slider'),
                'render_template'   => 'template-parts/blocks/brands-slider.php',
                'category'          => 'greg-botanical',
                'icon'              => 'slides',
                'keywords'          => array( 'brands', 'slider'),
                'mode'              => 'edit'
            ]
        );*/

//        acf_register_block_type(
//            [
//                'name'              => 'newsletter',
//                'title'             => __('newsletter'),
//                'description'       => __('newsletter'),
//                'render_template'   => 'template-parts/blocks/newsletter.php',
//                'category'          => 'greg-botanical',
//                'icon'              => 'slides',
//                'keywords'          => array( 'newsletter'),
//                'mode'              => 'edit'
//            ]
//        );



    }
}
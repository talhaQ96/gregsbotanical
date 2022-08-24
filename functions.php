<?php
/**
 * greg-botanical functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greg-botanical
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function greg_botanical_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on greg-botanical, use a find and replace
		* to change 'greg-botanical' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'greg-botanical', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu-1' => esc_html__( 'Header Menu', 'greg-botanical' ),
			'footer-menu-1' => esc_html__( 'Footer Menu', 'greg-botanical' ),
			'footer-menu-2' => esc_html__( 'Footer Menu 2 (Bottom Bar)', 'greg-botanical' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'greg_botanical_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	
	add_theme_support('woocommerce');
	
	/*add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );*/
}
add_action( 'after_setup_theme', 'greg_botanical_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greg_botanical_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greg_botanical_content_width', 640 );
}
add_action( 'after_setup_theme', 'greg_botanical_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greg_botanical_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'greg-botanical' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'greg-botanical' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'greg_botanical_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greg_botanical_scripts() {
	/*wp_enqueue_style( 'greg-botanical-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'greg-botanical-style', 'rtl', 'replace' );*/
	
	if(is_product()){
        wp_enqueue_style('bootstrap-styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css', array(), _S_VERSION);
    }
	
	wp_enqueue_style('slick-styles', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), _S_VERSION);
	wp_enqueue_style('general-styles', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	
	

    if(is_front_page()){
        wp_enqueue_style('homepage', get_template_directory_uri() . '/assets/css/home.css', array(), _S_VERSION);
    }

    /*if(is_product_category()){
        wp_enqueue_style('homepage', get_template_directory_uri() . '/assets/css/product-category.css', array(), _S_VERSION);
    }*/

    if(is_product()){
        wp_enqueue_style('product', get_template_directory_uri() . '/assets/css/product.css', array(), _S_VERSION);
    }
	
	if ( is_page_template( 'page-about.php' ) ) {
		wp_enqueue_style('product', get_template_directory_uri() . '/assets/css/about.css', array(), _S_VERSION);
	}
	
	//wp_enqueue_script('slick-carousel', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), _S_VERSION, true);
	
	if(is_product()){
		wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);
	}
	
	wp_enqueue_script( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'greg-botanical-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if(is_single() && comments_open()){
		wp_enqueue_script( 'greg-botanical-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js', array('jquery'), _S_VERSION, true);
	}
}
add_action( 'wp_enqueue_scripts', 'greg_botanical_scripts' );

function hide_admin_bar_from_front_end(){
  if (is_blog_admin()){
    return true;
  }
  return false;
}
add_filter('show_admin_bar','hide_admin_bar_from_front_end');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load ACF Theme opions
 */
require get_template_directory() . '/inc/acf-options.php';

/**
 * Load ACF Blocks
 */
require get_template_directory() . '/inc/acf-blocks.php';

/**
 * Set Favicon for wp-admin
 */
/*function favicon_admin() {
    $favicon = get_field('favicon', 'option');
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.$favicon['url'].'" />';
}
add_action( 'admin_head', 'favicon_admin' );*/

function the_wp_custom_pagination($args = [], $class = 'pagination') {

    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

    $args = wp_parse_args( $args, [
        'mid_size'           => 2,
        'prev_next'          => false,
        'prev_text' => __( '<span class="page-icon prev-page-icon"><i class="fas fa-chevron-left"></i></span><span>Previous</span>', 'textdomain' ),
        'next_text' => __( '<span>Next</span><span class="page-icon next-page-icon"><i class="fas fa-chevron-right"></i></span>', 'textdomain' ),
        'screen_reader_text' => __('Posts navigation', 'textdomain'),
    ]);

    $links     = paginate_links($args);
    $prev_link = get_previous_posts_link($args['prev_text']);
    $next_link = get_next_posts_link($args['next_text']);
    $prev_link_rel = str_replace('<a ', '<a rel="prev" ', $prev_link);
    $next_link_rel = str_replace('<a ', '<a rel="next" ', $next_link);
    $check_prev = (!empty($prev_link))?$prev_link:'Previous';
    $check_next = (!empty($next_link))?$next_link:'Next';
    $template  = apply_filters( 'navigation_markup_template', '
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s<div class="page-numbers-container">%4$s</div>%5$s</div>
    </nav>', $args, $class);

    echo sprintf($template, $class, $args['screen_reader_text'], $prev_link_rel, $links, $next_link_rel);
	
}

add_action( 'wp_footer', 'converts_product_attributes_from_select_options_to_div' );
function converts_product_attributes_from_select_options_to_div() {

    ?>
        <script type="text/javascript">

            jQuery(function($){
				
				function set_quantity_data(){
					if($('body').hasClass('single-product')){
						if($('table.variations').length){
							if($('.dropdown.qty-drop').length){
								$('.dropdown.qty-drop').remove();
							}
							var min_v = $('body').find('.quantity input').attr('min');
							var max_v = $('body').find('.quantity input').attr('max');
							var list_options = '';
							
							/*console.log(min_v);
							console.log(max_v);*/
							
							if (min_v == 1 && max_v == ''){
								for(var i=min_v;i <= 10;i++){
									 list_options += '<li><a href="javascript:void(0);" data-value="' + i + '">'+i+'</a></li>';
								}
							}
							else{
								for(var i=min_v;i <= max_v;i++){
									 list_options += '<li><a href="javascript:void(0);" data-value="' + i + '">'+i+'</a></li>';
								}
							}
							
							var dropdown_data = '<div class="dropdown qty-drop"><button class="qty-drop-button dropdown-toggle" type="button" data-toggle="dropdown">Quantity<span><span class="selected-dd-value">1</span><span class="fas fa-angle-down"></span></span></button><ul class="dropdown-menu qty-dropdown-ul-menu">'+list_options+'</ul></div>';
							
							$(dropdown_data).insertAfter('.quantity');
							//console.log(dropdown_data);
						}
					}
				}

                // clones select options for each product attribute
                var clone = $(".single-product-data-main-details-cart-wrap table.variations select").clone(true,true);

                // adds a "data-parent-id" attribute to each select option
                $(".single-product-data-main-details-cart-wrap table.variations select option").each(function(){
                    $(this).attr('data-parent-id',$(this).parent().attr('id'));
                });
				
				//var new_option_list = '';

                // converts select options to div
                $(".single-product-data-main-details-cart-wrap table.variations select option").unwrap().each(function(){
                    if ( $(this).val() == '' ) {
                        $(this).remove();
                        return true;
                    }
                    /*var option = $('<div class="custom_option is-visible" data-parent-id="'+$(this).data('parent-id')+'" data-value="'+$(this).val()+'">'+$(this).text()+'</div>');
                    $(this).replaceWith(option);*/
					
					//console.log(b);
					var option = $('<li class="custom_option is-visible" data-parent-id="'+$(this).data('parent-id')+'" data-value="'+$(this).val()+'">'+$(this).text()+'</li>');
					
					//new_option_list += '<li class="custom_option is-visible" data-parent-id="'+$(this).data('parent-id')+'" data-value="'+$(this).val()+'">'+$(this).text()+'</li>';
					
                    $(this).replaceWith(option);
                });
				
				//console.log(new_option_list);
                
                // reinsert the clone of the select options of the attributes in the page that were removed by "unwrap()"
                $(clone).insertBefore('.single-product-data-main-details-cart-wrap table.variations .reset_variations').hide();

                // when a user clicks on a div it adds the "selected" attribute to the respective select option
                $(document).on('click', '.custom_option', function(){
                    var parentID = $(this).data('parent-id');
                    if ( $(this).hasClass('on') ) {
                        $(this).removeClass('on');
                        //$(".single-product-data-main-details-cart-wrap table.variations select#"+parentID).val('').trigger("change");
						$(this).addClass('on');
                        $(".single-product-data-main-details-cart-wrap table.variations select#"+parentID).val($(this).data("value")).trigger("change");
                    } else {
                        $('.custom_option[data-parent-id='+parentID+']').removeClass('on');
                        $(this).addClass('on');
                        $(".single-product-data-main-details-cart-wrap table.variations select#"+parentID).val($(this).data("value")).trigger("change");
                    }
                    
					set_quantity_data();
                });
				
				if($('body').hasClass('single-product')){
					if($('td.value').length){
						$('td.value').each(function(){
							var get_current_data = $(this).html();
							//var 
							var get_attribute_name = $(this).find('li').data('parent-id');
							
							$(this).html('<div class="dropdown dd-options-drop"><button class="dd-options-drop-button dropdown-toggle" type="button" data-toggle="dropdown">'+get_attribute_name+'<span><span class="selected-dd-value">Choose an option</span><span class="fas fa-angle-down"></span></span></button><ul class="dropdown-menu dd-options-dropdown-ul-menu">'+get_current_data+'</ul></div>');
						});
					}
				}

                // if a select option is already selected, it adds the "on" attribute to the respective div
                $(".single-product-data-main-details-cart-wrap table.variations select").each(function(){
                    if ( $(this).find("option:selected").val() ) {
                        var id = $(this).attr('id');
                        $('.custom_option[data-parent-id='+id+']').removeClass('on');
                        var value = $(this).find("option:selected").val();
                        //$('.custom_option[data-parent-id='+id+'][data-value='+value+']').addClass('on');
						$('.custom_option').each(function(){
							if($(this).data('value') == value){
								$(this).addClass('on');
								$(this).closest('.dropdown').find('.selected-dd-value').html($(this).data('value'));
							}
						});
						//console.log(value);
                    }
                });

                // when the select options change based on the ones selected, it shows or hides the respective divs
                $('body').on('check_variations', function(){
                    $('div.custom_option').removeClass('is-visible');
                    $('.single-product-data-main-details-cart-wrap table.variations select').each(function(){
                        var attrID = $(this).attr("id");
                        $(this).find('option').each(function(){
                            if ( $(this).val() == '' ) {
                                return;
                            }
                            $('div[data-parent-id="'+attrID+'"][data-value="'+$(this).val()+'"]').addClass('is-visible');
                        });
                    });
                });
				
				set_quantity_data();
				
            });

        </script>
    <?php

}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text', 9999);

function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add To Basket', 'woocommerce' ); 
}

/*
function woocommerce_quantity_input( $args = array(), $product = null, $echo = true ) {

   if ( is_null( $product ) ) {
	  $product = $GLOBALS['product'];
   }
 
   $defaults = array(
	  'input_id' => uniqid( 'quantity_' ),
	  'input_name' => 'quantity',
	  'input_value' => '1',
	  'classes' => apply_filters( 'woocommerce_quantity_input_classes', array( 'input-text', 'qty', 'text' ), $product ),
	  'max_value' => apply_filters( 'woocommerce_quantity_input_max', -1, $product ),
	  'min_value' => apply_filters( 'woocommerce_quantity_input_min', 0, $product ),
	  'step' => apply_filters( 'woocommerce_quantity_input_step', 1, $product ),
	  'pattern' => apply_filters( 'woocommerce_quantity_input_pattern', has_filter( 'woocommerce_stock_amount', 'intval' ) ? '[0-9]*' : '' ),
	  'inputmode' => apply_filters( 'woocommerce_quantity_input_inputmode', has_filter( 'woocommerce_stock_amount', 'intval' ) ? 'numeric' : '' ),
	  'product_name' => $product ? $product->get_title() : '',
   );
 
   $args = apply_filters( 'woocommerce_quantity_input_args', wp_parse_args( $args, $defaults ), $product );
  
   
   $args['min_value'] = max( $args['min_value'], 0 );
   $args['max_value'] = 0 < $args['max_value'] ? $args['max_value'] : 20;

	if ( '' !== $args['max_value'] && $args['max_value'] < $args['min_value'] ) {
	  $args['max_value'] = $args['min_value'];
   }
  
   $options = '';
   
   $list_options = '';
	
   for ( $count = $args['min_value']; $count <= $args['max_value']; $count = $count + $args['step'] ) {

	  if ( '' !== $args['input_value'] && $args['input_value'] >= 1 && $count == $args['input_value'] ) {
		$selected = 'selected';      
	  } else $selected = '';
 
	  $options .= '<option value="' . $count . '"' . $selected . '>' . $count . '</option>';
	  
	  $list_options .= '<li><a href="javascript:void(0);" data-value="' . $count . '"' . $selected . '>'. $count .'</a></li>';
 
   }
	 
   $string = '<div class="quantity"><span>Quantity</span><select name="' . $args['input_name'] . '">' . $options . '</select></div>';
   
   $string .= '<div class="dropdown qty-drop"><button class="qty-drop-button dropdown-toggle" type="button" data-toggle="dropdown">Quantity<span><span class="selected-dd-value">'.$args['min_value'].'</span><span class="fas fa-angle-down"></span></span></button><ul class="dropdown-menu qty-dropdown-ul-menu">'.$list_options.'</ul></div>';
 
   if ( $echo ) {
	  echo $string;
   } else {
	  return $string;
   }
}*/

/*add_action('woocommerce_after_shop_loop_item', 'add_star_rating' );
function add_star_rating()
{
	global $woocommerce, $product;
	$average = $product->get_average_rating();

	echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
}

add_filter( 'woocommerce_product_reviews_tab_title', 'add_stars_to_review_tab', 98 );
function add_stars_to_review_tab( $title ) {
    global $product;

    $average_rating = $product->get_average_rating();
    $rating_count = $product->get_rating_count();
    $review_count = $product->get_review_count();

    if( ! empty($average_rating) && $average_rating > 0 ) {
        return '<div>' . $title . '</div>' . wc_get_rating_html($average_rating) . sprintf(
            '<div class="stars">%s / 5 (%s %s)</div>',
            $average_rating,
            $review_count,
            _n( "review", "reviews", $review_count, "woocommerce" )
        );
    }
    return $title;
}*/

add_filter( 'woocommerce_add_to_cart_fragments', 'refresh_cart_count', 50, 1 );
function refresh_cart_count( $fragments ){
    ob_start();
	
	$items_count = WC()->cart->get_cart_contents_count();
    ?>
    <span id="greg-cart-count" class="cart-main-count<?php if(!$items_count){echo ' no-cart-count';}?>">
		<?php echo $items_count ? $items_count : '&nbsp;'; ?>
	</span>
    <?php
     $fragments['#greg-cart-count'] = ob_get_clean();

    return $fragments;
}

/**
 * Hide the "In stock" message on product page.
 *
 * @param string $html
 * @param string $text
 * @param WC_Product $product
 * @return string
 */
function my_wc_hide_in_stock_message( $html, $text, $product ) {
    $availability = $product->get_availability();

    if ( isset( $availability['class'] ) && 'in-stock' === $availability['class'] ) {
        return '';
    }

    return $html;
}

add_filter( 'woocommerce_stock_html', 'my_wc_hide_in_stock_message', 10, 3 );

/********************************/
function comment_validation_init(){
  if(is_single() && comments_open()){
	  ?>
    <script type="text/javascript">
    jQuery(document).ready(function($){
	    $('#commentform').validate({

		    rules:{
		      author:{
		        required:true,
		        minlength:2
		      },

		      email:{
		        required:true,
		        email:true
		      },

		      comment:{
		        required:true,
		        minlength:20
		      }
		    },

		    messages:{
		      author:"Please fill name field and minimum character limit is 2.",
		      email:"Please enter a valid email address.",
		      comment:"Please fill comment field and minimum character limit is 20."
		    },

		    errorElement:"div",
		    errorPlacement:function(error,element){
		      element.after(error);
		    }

	    });
    });
    </script>
    <?php
  }
}
add_action('wp_footer','comment_validation_init');
/********************************/

function my_custom_admin() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/assets/css/admin-login.css" />';
}
add_action('login_head', 'my_custom_admin');

function wpc_url_login(){
  return "https://gregsbotanical.wpengine.com/"; // 
}
add_filter('login_headerurl', 'wpc_url_login');

add_action('woocommerce_before_add_to_cart_form', 'selected_variation_price_replace_variable_price_range');
function selected_variation_price_replace_variable_price_range(){
    global $product;

    if( $product->is_type('variable') ):
    ?><style> .woocommerce-variation-price {display:none;} </style>
    <script>
    jQuery(function($) {
        var p = '.sin-prd-price-main-wrap'
            q = $(p).html();

        $('form.cart').on('show_variation', function( event, data ) {
            if ( data.price_html ) {
                $(p).html(data.price_html);
            }
        }).on('hide_variation', function( event ) {
            $(p).html(q);
        });
    });
    </script>
    <?php
    endif;
}

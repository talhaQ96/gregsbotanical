<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greg-botanical
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php body_class(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="w-T-Pg3rM3Dt6Cnn165MbPboiiwX3K-cHPX9DEsf_-I" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"
          integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
          media="print"
          onload="this.media='all'; this.onload = null"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"
          integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
          media="print"
          onload="this.media='all'; this.onload = null"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css"
          integrity="sha512-tk4nGrLxft4l30r9ETuejLU0a3d7LwMzj0eXjzc16JQj+5U1IeVoCuGLObRDc3+eQMUcEQY1RIDPGvuA7SNQ2w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
          media="print"
          onload="this.media='all'; this.onload = null"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/regular.min.css"
          integrity="sha512-XE9wQlFttk3S1cE3YxkSCTl/TSs3SYYiO0x5RlZ3oxWkk/qSmqQLgdoPF67ndBq1ayu2EnaQ2cpQ5XTvtkvllg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
          media="print"
          onload="this.media='all'; this.onload = null"
    />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@400;500;700;800&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php

$top_background_color = get_field('top_background_color', 'option');
$top_bar_content_html = get_field('top_bar_content_html', 'option');

?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'greg-botanical' ); ?></a>
	
	<?php
	if($top_background_color && $top_bar_content_html){
		?>
		<div class="top-bar-wrapper" style="background-color:<?php echo $top_background_color;?>;">
			<div class="container">
				<div class="top-bar-content-wrap text-center"><?php echo $top_bar_content_html;?></div>
			</div>
		</div>
		<?php
	}
	?>

	<header id="masthead" class="site-header">
		<?php /*<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$greg_botanical_description = get_bloginfo( 'description', 'display' );
			if ( $greg_botanical_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $greg_botanical_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'greg-botanical' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->*/?>
		<div class="site-header-wrap">
			<div class="container">
				<div class="site-inner-head-wrap">
					<div class="small-view mobile-menu-wrap">
						<a href="javascript:void(0)" class="nav-trigger">
							<svg xmlns="http://www.w3.org/2000/svg" width="16.999" height="16" viewBox="0 0 16.999 16">
							  <path id="Ic-Menu" d="M-3487,16a1,1,0,0,1-1-1,1,1,0,0,1,1-1h7a1,1,0,0,1,1,1,1,1,0,0,1-1,1Zm0-7a1,1,0,0,1-1-1,1,1,0,0,1,1-1h11a1,1,0,0,1,1,1,1,1,0,0,1-1,1Zm0-7a1,1,0,0,1-1-1,1,1,0,0,1,1-1h15a1,1,0,0,1,1,1,1,1,0,0,1-1,1Z" transform="translate(3488)" fill="#1e1e1e"/>
							</svg>
							<span class="mobile-menu-text visually-hidden">Hamburger Mobile Menu</span>
						</a>
					</div>
					<div class="site-logo-wrap">
						<?php the_custom_logo();?>
					</div>
					<nav id="site-navigation" class="navbar mini-container site-nav-main-wrap">
						<span class="close-icon fa fa-times nav-trigger"></span>
						<?php
						wp_nav_menu([
							'theme_location' => 'header-menu-1',
							'menu_id' => 'primary-menu',
							'container' => 'ul',
							'menu_class' => 'nav-menu'
						]);
						?>
					</nav>
					<div class="site-search-acc-cart-wrap">
						<div class="search-main-wrap medium-view">
							<?php //get_search_form(); ?>
							<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
								<input class="search-field search__input" autocomplete="off" type="search" name="s" id="text1" placeholder="Search products" aria-label="Search">
								<button class="submit" type="submit">
									<svg id="Ic-Search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									  <g id="search">
										<rect id="Rectangle_353" data-name="Rectangle 353" width="24" height="24" fill="#1e1e1e" opacity="0"/>
										<path id="Path_426" data-name="Path 426" d="M20.71,19.29l-3.4-3.39A7.92,7.92,0,0,0,19,11a8,8,0,1,0-8,8,7.92,7.92,0,0,0,4.9-1.69l3.39,3.4a1,1,0,1,0,1.42-1.42ZM5,11a6,6,0,1,1,6,6,6,6,0,0,1-6-6Z" fill="#1e1e1e"/>
									  </g>
									</svg>
									<span class="submit-button-search-text visually-hidden">Submit</span>
								</button>
							</form>
						</div>
						<div class="site-account-profile-wrap medium-view">
							<a href="<?php echo get_site_url(); ?>/my-account/">
								<svg xmlns="http://www.w3.org/2000/svg" width="29.99" height="23.11" viewBox="0 0 29.99 23.11">
								  <defs>
									<clipPath id="clip-path1">
									  <rect id="Rectangle_356" data-name="Rectangle 356" width="29.99" height="23.11" fill="#1e1e1e"/>
									</clipPath>
								  </defs>
								  <g id="Ic-Profile" transform="translate(0 1.758)">
									  <circle id="Ellipse_2" data-name="Ellipse 2" cx="10.5" cy="10.5" r="10.5" transform="translate(9 -1.758)" fill="#84b915" style="transform:translate(4px,0px);"></circle>
									  <g id="Group_765" data-name="Group 765" transform="translate(0 0)" clip-path="url(#clip-path1)">
									  <path  d="M15.777,12.763a6.03,6.03,0,1,0-7.457,0,10.049,10.049,0,0,0-6.251,8.22,1.011,1.011,0,1,0,2.01.221,8.039,8.039,0,0,1,15.978,0,1,1,0,0,0,1,.894h.111a1,1,0,0,0,.884-1.105,10.049,10.049,0,0,0-6.281-8.23Zm-3.728-.713a4.02,4.02,0,1,1,4.02-4.02A4.02,4.02,0,0,1,12.049,12.049Z" transform="translate(-2.064 -1.995)" fill="#1e1e1e"/>
									  </g>
								  </g>
								</svg>
								<span class="my-account-link-text visually-hidden">My Account</span>
							</a>
						</div>
						<?php 
						$items_count = WC()->cart->get_cart_contents_count();
						?>
						<div class="site-cart-wrap">
							<a href="<?php echo get_site_url(); ?>/cart/">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="21.758" viewBox="0 0 30 21.758">
								  <defs>
									<clipPath id="clip-path">
									  <rect id="Rectangle_355" data-name="Rectangle 355" width="27.526" height="20" fill="#1e1e1e"/>
									</clipPath>
								  </defs>
								  <g id="Ic-Cart" transform="translate(0 1.758)">
									<circle id="Ellipse_1" data-name="Ellipse 1" cx="10.5" cy="10.5" r="10.5" transform="translate(9 -1.758)" fill="#84b915"/>
									<g id="Group_764" data-name="Group 764" transform="translate(0 0)" clip-path="url(#clip-path)">
									  <path id="Path_428" data-name="Path 428" d="M26.524,6.244H24.478L18.528.293A1,1,0,0,0,17.11,1.713l4.531,4.531H6.107l4.53-4.531A1,1,0,0,0,9.219.293L3.269,6.244H1A1,1,0,1,0,1,8.251H2.825L4.365,18.26A1.95,1.95,0,0,0,6.224,20h15.3a1.95,1.95,0,0,0,1.86-1.74l1.54-10.009h1.6a1,1,0,1,0,0-2.007M21.376,17.993H6.348c.006-.007.006-.019,0-.038l-1.5-9.7H22.891Z" transform="translate(0 0)" fill="#1e1e1e"/>
									  <path id="Path_429" data-name="Path 429" d="M9.209,14.5a1,1,0,0,0,1-1V10.562a1,1,0,1,0-2.006,0V13.5a1,1,0,0,0,1,1" transform="translate(0.937 1.091)" fill="#1e1e1e"/>
									  <path id="Path_430" data-name="Path 430" d="M12.455,14.5a1,1,0,0,0,1-1V10.562a1,1,0,0,0-2.006,0V13.5a1,1,0,0,0,1,1" transform="translate(1.308 1.091)" fill="#1e1e1e"/>
									  <path id="Path_431" data-name="Path 431" d="M15.7,14.5a1,1,0,0,0,1-1V10.562a1,1,0,0,0-2.006,0V13.5a1,1,0,0,0,1,1" transform="translate(1.679 1.091)" fill="#1e1e1e"/>
									</g>
								  </g>
								</svg>
								<span class="cart-link-text visually-hidden">Cart</span>
								<span id="greg-cart-count" class="cart-main-count<?php if(!$items_count){echo ' no-cart-count';}?>">
									<?php echo $items_count ? $items_count : '&nbsp;'; ?>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

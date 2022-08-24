<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greg-botanical
 */

get_header();
?>
	<div class="theme-bg-wrap">
		<main id="primary" class="site-main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;
				?>
				<div class="product-grid grid-4 grid md-flex-grid">
					<div class="grid-content-outer-wrap">
						<div class="grid-content group justify-left search-outer-loop">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					//get_template_part( 'template-parts/content', get_post_type() );
					?>
					<div class="sin-post-main-outer-wrap">
						<div class="sin-post-box">
							<div class="sin-post-img-wrap">
								<?php greg_botanical_post_thumbnail();?>
							</div>
							
							<div class="sin-post-content-data-wrap">
								<div class="sin-post-title">
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
								</div>
								<div class="sin-post-excerpt">
									<?php the_excerpt();?>
								</div>
								<div class="sin-post-more">
									<a href="<?php the_permalink();?>">
										<span>Read More</span>
										<span class="more-link-icon"><i class="fas fa-chevron-right"></i></span>
									</a>
								</div>
								
								<div class="sin-post-date-wrap">
									<?php
										$get_month = get_the_date('M', $post->ID);
										$get_date = get_the_date('d', $post->ID);
									?>
									<div class="sin-post-month-wrap"><?php echo $get_month;?></div>
									<div class="sin-post-d-date-wrap"><?php echo $get_date;?></div>
								</div>
							</div>
							
						</div>
					</div>
					<?php

				endwhile;

				//the_posts_navigation();
				?>
						</div>
					</div>
				</div>
				<div class="pagination container category-pagination">
					<?php
						the_wp_custom_pagination();
					?>
				</div>
				<?php

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div>

<?php
//get_sidebar();
get_footer();

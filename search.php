<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package greg-botanical
 */

get_header();
?>
	<div class="theme-bg-wrap">
		<main id="primary" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'greg-botanical' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->
				<div class="product-grid grid-4 grid md-flex-grid">
					<div class="grid-content-outer-wrap">
						<div class="grid-content group justify-left search-outer-loop">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

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

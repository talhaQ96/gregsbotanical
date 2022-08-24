<?php
/**
 * Template Name: Kratompage
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
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main>
	</div>
	<?php
		$get_category_posts = get_field("select_post_category",get_the_ID());
		if($get_category_posts){
			//print_r($get_category_posts);
			$limit_posts = 50;
			if(get_field("limit_number_of_posts",get_the_ID())){
				$limit_posts = get_field("limit_number_of_posts",get_the_ID());
			}
		?>
		<div class="theme-bg-wrap">
			<main id="primary" class="site-main">
				<div class="product-grid grid-4 grid md-flex-grid">
					<div class="grid-content-outer-wrap">
						<div class="grid-content group justify-left search-outer-loop">
							<?php
							global $post;
							$args  = array(
								'cat'        =>  $get_category_posts,
								'order'           => 'DESC',
								'post_type'       => 'post',
								'post_status'     => 'publish',
								'posts_per_page'  => $limit_posts
							);
							
							$the_query = new WP_Query( $args );

							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								//$pages[] = $post;
								$default_search_placehodler = get_field('search_default_placeholder_image', 'option');
								?>
								<div class="sin-post-main-outer-wrap">
									<div class="sin-post-box">
										<div class="sin-post-img-wrap">
											<?php 
												if ( has_post_thumbnail() ) {
													greg_botanical_post_thumbnail();
												}
												else { 
													if($default_search_placehodler){
														?>
															<a class="post-thumbnail" href="<?php the_permalink();?>">
																<img src="<?php echo $default_search_placehodler['url'];?>" alt="<?php echo $default_search_placehodler['alt'];?>" />
															</a>
														<?php
													}
													else{
												?>
														<a class="post-thumbnail" href="<?php the_permalink();?>">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
																<g><path d="M881.1,132.5H118.9C59,132.5,10,181.5,10,241.4v517.3c0,59.9,49,108.9,108.9,108.9h762.2c59.9,0,108.9-49,108.9-108.9V241.4C990,181.5,941,132.5,881.1,132.5z M949.2,747.3c0,54.9-24.5,79.4-79.4,79.4H130.3c-54.9,0-79.4-24.5-79.4-79.4V252.7c0-54.9,24.5-79.4,79.4-79.4h739.5c54.9,0,79.4,24.5,79.4,79.4V747.3z M316.3,418.3L418.3,500l265.4-224.6l204.2,183.8v306.3H112.1V581.7L316.3,418.3z M193.8,234.6c-45.1,0-81.7,36.6-81.7,81.7s36.6,81.7,81.7,81.7s81.7-36.6,81.7-81.7S238.9,234.6,193.8,234.6z"/></g>
															</svg>
														</a>
													<?php }
													} ?>
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
							}
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</main>
		</div>
	<?php }?>
<?php
get_footer();

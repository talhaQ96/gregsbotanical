<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greg-botanical
 */

?>

<?php /*<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			greg_botanical_posted_on();
			greg_botanical_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php greg_botanical_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php greg_botanical_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->*/
$post_type = get_post_type( $post->ID );
//echo $post_type;
if($post_type == 'product'){
	?>
	<div class="sin-prd-main-outer-wrap">
		<div class="sin-prd-wrap">
			
			<?php 
				$product = wc_get_product($post->ID);
				$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-thumbnail' );//print_r($image);
				$permalink = $product->get_permalink();
			?>
			<div class="sin-prd-img-wrap">
				<a href="<?php echo $permalink?>">
					<div class="product-grid-image">
						<?php /*<img src="<?php  echo $image[0]; ?>">*/?>
						<?php echo woocommerce_get_product_thumbnail('woocommerce_full_size');?>
					</div>
				</a>
				
				<a href="#" class="grid-quick-view yith-wcqv-button" data-product_id="<?php echo $product->get_id();?>">
					<span><i class="fas fa-eye"></i></span>
					<span>Quick View</span>
				</a>
			</div>
			
			<div class="grid-star-rating">
				<?php 
					if ( function_exists( 'wc_yotpo_show_bottomline' ) ) { wc_yotpo_show_bottomline(); }
					else{
						$average = $product->get_average_rating();

						echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
					}
				?>
			</div>
			  
			<div class="product-grid-price-wrap">
				<?php echo $product->get_price_html();?>
			</div>
			
			<div class="sin-prd-title"><a href="<?php echo $permalink;?>"><?php the_title();?></a></div>
			
			<div class="sin-prd-more-details"><a href="<?php echo $permalink;?>">More Details</a></div>
			
			<div class="sin-prd-cats-multi">
			<?php 
				//echo wc_get_product_category_list($product->get_id());
				$terms = get_the_terms ( $product->get_id(), 'product_cat' );
				foreach ( $terms as $term ) {
					//print_r($term->name);
					if($term->name == 'White' || $term->name == 'Green' || $term->name == 'Red'){
						?>
						<div class="cat-flex-wrap sin-prd-cat-font-<?php echo strtolower($term->name);?>">
							<div class="sin-prd-cat-svg-wrap sin-prd-cat-<?php echo strtolower($term->name);?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="18.201" height="15.8" viewBox="0 0 18.201 15.8">
								  <path id="Ic-LeafGreen" d="M19.025,3.587c-4.356,2.556-4.044,7.806-7.1,10.175-2.3,1.783-5.538.88-7.412.113a18.212,18.212,0,0,0-2.181,3.74c-.305.717-1.644-.073-1.409-.68C3.9,9.25,14.037,5.416,14.037,5.416A15.289,15.289,0,0,0,2.11,11.356a7.736,7.736,0,0,1,3.36-7.65C10.486.495,20.042,2.991,19.025,3.587Z" transform="translate(-0.899 -2.1)"/>
								</svg>
							</div>
							<div class="sin-prd-cat-title-wrap">
								<?php echo $term->name;?>
							</div>
						</div>
						<?php
					}
				}
			?>
			</div>
			
			<?php 
				$stock_msg = '';$add_cart_btn_txt = '';
				if($product->get_stock_quantity() > 0){$stock_msg = 'In Stock';}else{$stock_msg = 'Out Of Stock';}
				if($product->get_stock_quantity() > 0){$add_cart_btn_txt = 'Add to basket';}/*else{$add_cart_btn_txt = 'Sold out';}*/
				
				if($product->is_purchasable()){$add_cart_btn_txt = 'Add to basket';}
				else if($product->is_type('grouped')){$add_cart_btn_txt = 'Select Options';}
				else{$add_cart_btn_txt = 'Sold out';}
				
				$best_seller_tag = intval(is_object_in_term( $product->get_id(), 'product_tag', 'best-seller' ));
				$new_tag = intval(is_object_in_term( $product->get_id(), 'product_tag', 'new' ));
				$popular_tag = intval(is_object_in_term( $product->get_id(), 'product_tag', 'popular' ));
				
				if($best_seller_tag === 1){
					?>
					<div class="sin-prd-stock-msg best-seller-tag">
						Best Seller
					</div>
					<?php
				}
				else if($new_tag === 1){
					?>
					<div class="sin-prd-stock-msg new-tag">
						New
					</div>
					<?php
				}
				else if($popular_tag === 1){
					?>
					<div class="sin-prd-stock-msg popular-tag">
						Popular
					</div>
					<?php
				}
				else{
			?>
					<div class="sin-prd-stock-msg<?php if($stock_msg == 'In Stock'){echo ' in-stock';}/*else{echo ' out-of-stock';}*/?>">
						<?php echo $stock_msg;?>
					</div>
				<?php }?>
			
			<div class="sin-prd-add-to-cart">
				<?php
				if($add_cart_btn_txt == 'Sold out'){?>
					<input type="submit" class="button" value="<?php echo $add_cart_btn_txt;?>" disabled>
				<?php }
				else{
					if( $product->is_type( 'simple' ) ) {
						echo apply_filters(
							'woocommerce_loop_add_to_cart_link',
							sprintf(
								'<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
								esc_url( $product->add_to_cart_url() ),
								esc_attr( $product->get_id() ),
								esc_attr( $product->get_sku() ),
								$product->is_purchasable() ? 'add_to_cart_button' : '',
								esc_attr( $product->product_type ),
								esc_html( $add_cart_btn_txt )
							),
							$product
						);
					}
					else if($product->is_type( 'variable' )){
						?>
						<a href="<?php echo $permalink?>" class="button">Choose Options</a>
						<?php
					}
					else if($product->is_type( 'grouped' )){
						?>
						<a href="<?php echo $permalink?>" class="button">Select Options</a>
						<?php
					}
				}?>
			</div>
		</div>
	</div>
	<?php
}
else{
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
?>


<?php get_header(); ?>

<?php
// get the current taxonomy term
//$term = get_queried_object();
$term = get_option( 'woocommerce_shop_page_id' );
$create_additional_category_content='';
?>

<?php
if(have_rows('category_additional_content',$term)){
	$create_additional_category_content = '<div class="category-description-layout-wrap">';
	$create_additional_category_content .= '<div class="container">';
	$create_additional_category_content .= '<div class="content sm-content-spacing category-top-border">';
	$create_additional_category_content .= '<div class="category-description-inner-layout-wrap">';
	
					$i=0;
					while(have_rows('category_additional_content',$term)) : the_row();
					$category_description_title = get_sub_field('additional_content_title');
					$category_description_content = get_sub_field('additional_content_description');
					$extra_classes = '';
					
					$cat_inner_desc_title = '';
					$cat_inner_desc_desc_content = '';
					
					if($i > 0){$extra_classes .= ' sm-after-first';}
					if($i > 1){$extra_classes .= ' md-after-second';}
					
					if($i % 2 === 0){$extra_classes .= ' even-cat-desc-content';}else{$extra_classes .= ' odd-cat-desc-content';}
					
					
					if($category_description_title){
						$cat_inner_desc_title = $category_description_title;
					}
					
					if($category_description_content){
						$cat_inner_desc_desc_content = $category_description_content;
					}
					
	$create_additional_category_content .= '<div class="category-description-content-wrap'. $extra_classes.'">';
	$create_additional_category_content .= '<h2 class="category-desc-title-wrap">';
	$create_additional_category_content .= $cat_inner_desc_title;
	$create_additional_category_content .= '</h2>';
	$create_additional_category_content .= '<div class="category-desc-content-wrap">';
	$create_additional_category_content .= $cat_inner_desc_desc_content;
	$create_additional_category_content .= '</div>';
	$create_additional_category_content .= '</div>';
	$i++;endwhile;
	$create_additional_category_content .= '</div>';
	$create_additional_category_content .= '</div>';
	$create_additional_category_content .= '</div>';
	$create_additional_category_content .= '</div>';
 }?>

	<div class="section">
		<div class="category-banner-section">
			<?php
			$category_banner_image = get_field("category_banner_image",$term);
			$category_banner_text = get_field("category_banner_text",$term);
			
			if($category_banner_image){
				?>
				<div class="category-banner-main-section-wrap">
					<style type="text/css">
					.category-banner-main-section-wrap{
						background-size:cover;
						background-repeat:no-repeat;
						background-image:url(<?php echo $category_banner_image['url'];?>);
					}
					@media (min-width:801px){
						.category-banner-main-section-wrap{
							padding: 0;
						}
					}
					</style>
					<div class="container banner-content-container">
						<div class="banner-content-wrap">
							<?php 
								if($category_banner_text): ?>
								<div class="category-banner-title-wrap"><?php echo $category_banner_text; ?></div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
    </div>
	
	<div class="breadcrumb-cat-wrap">
		<?php
			/**
			 * woocommerce_before_main_content hook
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
		?>
	</div>
	
	<?php //if( !empty( do_action( 'woocommerce_archive_description' )) ): ?>

		<div class="category-top section">
		
			<div class="content container">
				<div class="category-desc-wrap">
					<?php 
					do_action( 'woocommerce_archive_description' );
					?>
				</div>
			</div>
			
		</div>
	
	<?php //endif;?>
	
	<?php if ( have_posts() ) : ?>
		
		<div class="content large-content sm-content-spacing container product-main-grid-outer-wrapper">
		<?php
		$check_filters_data = do_shortcode('[br_filters_group group_id=476]');
		//echo $check_filters_data;
		$check_filters_data = strip_tags($check_filters_data);
		
		$check_filters_data2 = do_shortcode('[br_filters_group group_id=664]');
		//echo $check_filters_data2;
		$check_filters_data2 = strip_tags($check_filters_data2);
		?>
			<div class="product-grid<?php if(!empty($check_filters_data) || !empty($check_filters_data2)){?> grid-3<?php }else{?> grid-4<?php }?> grid md-flex-grid">
			
				<?php
				if(!empty($check_filters_data)){
				?>
				<div class="filters-sidebar-container">
					<div class="filter-sidebar-title-wrap">
						<div class="filter-sidebar-title">Filter By:</div>
						<i class="filter-accordion fa fa-minus" aria-hidden="true"></i>
					</div>
					<div class="filters-data-main-wrapper">
						<?php 
							echo do_shortcode('[br_filters_group group_id=476]');
						?>
					</div>
				</div>
				<?php }
				
				if(!empty($check_filters_data2)){
				?>
				<div class="filters-sidebar-container">
					<div class="filter-sidebar-title-wrap">
						<div class="filter-sidebar-title">Filter By:</div>
						<i class="filter-accordion fa fa-minus" aria-hidden="true"></i>
					</div>
					<div class="filters-data-main-wrapper">
						<?php 
							echo do_shortcode('[br_filters_group group_id=664]');
						?>
					</div>
				</div>
				<?php }
				?>
				<div class="grid-content-outer-wrap">
					<div id = "wt-grid-content" class="grid-content group justify-left">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="sin-prd-main-outer-wrap">
								<div class="sin-prd-wrap">
									
									<?php 
										$product = wc_get_product(get_the_ID());
										$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail' );//print_r($image);
										$permalink = $product->get_permalink();
										//echo $product->get_type();
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
											else if ( function_exists( 'wc_yotpo_show_buttomline' ) ) { 
												//wc_yotpo_show_buttomline();
												?>
												<div class="yotpo bottomLine" data-product-id="<?php echo $product->get_id();?>" data-name="<?php the_title(); ?>"></div>
												<?php
											}
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
										
										if($product->get_stock_quantity() > 0){$stock_msg = 'In Stock';}/*else{$stock_msg = 'Out Of Stock';}*/
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
						<?php endwhile;wp_reset_postdata(); ?>
						
						
					</div>
				</div>
					
			</div>
		</div>
		
		<div class="pagination container category-pagination">
			<?php
				the_wp_custom_pagination();
			?>
	    </div>

	<?php endif; 
	?>
	
	<?php echo $create_additional_category_content;?>
	
<?php
get_footer(); ?>
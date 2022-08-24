<?php get_header(); ?>

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
	
	<div class="container">
		<div class="product-page-custom-notices">
			<?php wc_print_notices();?>
		</div>
	</div>
	
	<div class="container">
		<div class="single-product-grid md-grid-half">
			<div class="sin-product-image-wrap">
				<div class="sin-product-gallery-container">
					<div class="right mob-prd-prv-nxt shop-slider">
						<?php
						global $post, $product;
						//$product = new WC_Product(get_the_ID());
						$product = wc_get_product( get_the_ID() );
						$attachment_ids = $product->get_gallery_image_ids();
						
						//echo get_the_post_thumbnail_url(get_the_ID());
						?>
						<div class="photo-sin-wrap">
							<?php echo woocommerce_get_product_thumbnail('woocommerce_full_size');?>
						</div>
						<?php
						foreach( $attachment_ids as $attachment_id ) 
							{
							  
							  //echo $Original_image_url = wp_get_attachment_url( $attachment_id );

						?>
							  <div class="photo-sin-wrap">
								<?php echo wp_get_attachment_image($attachment_id, 'full');?>
							  </div>
							<?php }
						?>
					</div>
					<?php 
						$sin_stock_msg = '';
						if($product->get_stock_quantity() > 0){$sin_stock_msg = 'In Stock';}/*else{$sin_stock_msg = 'Out Of Stock';}*/
						
						$best_seller_tag = intval(is_object_in_term( $product->get_id(), 'product_tag', 'best-seller' ));
						$new_tag = intval(is_object_in_term( $product->get_id(), 'product_tag', 'new' ));
						
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
						else{
					?>
						<div class="sin-prd-stock-msg<?php if($sin_stock_msg == 'In Stock'){echo ' in-stock';}/*else{echo ' out-of-stock';}*/?>">
							<?php echo $sin_stock_msg;?>
						</div>
					<?php }?>
				</div>
			</div>
			
			<div class="sin-product-details-wrap">
				<h1 class="sin-product-title-wrap"><?php the_title(); ?></h1>
				
				<div class="sin-product-reviews-wrap">
					<div class="product-flex-rating">
						<?php 
							if ( function_exists( 'wc_yotpo_show_bottomline' ) ) { wc_yotpo_show_bottomline(); }
							else{
								$average = $product->get_average_rating();

								echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';?>
								<div class="product-flex-count-reviews">
									<?php 
									$review_text = 'Review';
									if($product->get_rating_count() > 1){
										$review_text = 'Reviews';
									}
									if($product->get_rating_count() < 1){
										$review_text = 'There are no reviews yet';
									}
									if($product->get_rating_count() > 0){
										echo $product->get_rating_count().' '.$review_text;
									}
									else{
										echo $review_text;
									}
									?>
								</div>
								<?php
							}
						?>
					</div>
				</div>
				
				<div class="sin-prd-price-main-wrap">
					<?php 
					$get_price = $product->get_price_html();
					echo $product->get_price_html();
					?>
				</div>
				
				<div class="sin-prd-cats-multi">
					<?php 
						//echo wc_get_product_category_list($product->get_id());
						$terms = get_the_terms ( $product->get_id(), 'product_cat' );
						foreach ( $terms as $term ) {
							//print_r($term->name);
							if($term->name == 'Green' || $term->name == 'White' || $term->name == 'Red'){
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
				$get_prd_short_description = $product->get_short_description();
				if (!empty($get_prd_short_description)){?>
				<div itemprop="description" class="prd-short-desc-main-wrap">
					<?php 
						//the_content();
						echo $get_prd_short_description;
					?>
				</div>
				<?php }?>
				
				<div class="single-product-data-main-details-cart-outer-wrap">
					<div class="single-product-data-main-details-cart-wrap">
						<?php 
						$variations = '';
							if( $product->is_type( 'simple' ) ) {
								woocommerce_simple_add_to_cart();
							}
							else if($product->is_type( 'variable' )){
								$attributes = $product->get_variation_attributes();
								$attribute_keys  = array_keys( $attributes );
								
								/*$product = wc_get_product($product->get_id());*/
								$variations = $product->get_available_variations();
								
								//$attribute_keys  = array_keys( $attributes );
								$variations_json = wp_json_encode( $variations );
								$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );
								
								// Enqueue variation scripts
								wp_enqueue_script( 'wc-add-to-cart-variation' );

								// Load the template
								woocommerce_get_template( 'single-product/add-to-cart/variable.php', array(
										'available_variations'  => $product->get_available_variations(),
										'attributes'            => $product->get_variation_attributes(),
										'selected_attributes'   => $product->get_variation_default_attributes()
								) );
							}
							else if($product->is_type( 'grouped' )){
								foreach( $product->get_children() as $children_id ){
									$grouped_products[] = wc_get_product($children_id);
								}

								wc_get_template( 'single-product/add-to-cart/grouped.php', array('grouped_products' => $grouped_products ));
							}
						?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<?php
	//$product_description_tab = get_field("product_description",get_the_ID());
	//$product_description_tab = '';
	$product_description_tab = get_field("product_description_tab_title",get_the_ID());
	$product_more_info_tab = get_field("product_more_info_tab_title",get_the_ID());
	$product_description_inner_tab_title = get_field("product_description_inner_tab_title",get_the_ID());
	$product_more_info_inner_tab_title = get_field("product_more_info_inner_tab_title",get_the_ID());
	$product_description_content = get_field("product_description_content",get_the_ID());
	$product_more_info_content = get_field("product_more_info_content",get_the_ID());
	$product_reviews_tab_title = get_field("product_reviews_tab_title",get_the_ID());
	
	//echo $product_reviews_tab_title;
	
	if ($product_description_tab || $product_more_info_tab || $product_reviews_tab_title){
	?>
	<div class="product-tabs-main-wrapper">
		<div class="container">
			<div class="product-tabs-outer-wrap">
				<ul class="tabs-container-wrap">
					<?php if ($product_description_tab){?>
					<li class="prd-tab-wrap active" data-tab="1"><?php echo $product_description_tab;?></li>
					<?php }?>
					
					<?php if ($product_more_info_tab){?>
					<li class="prd-tab-wrap<?php if($product_description_tab === ''){?> active<?php }?>" data-tab="2"><?php echo $product_more_info_tab;?></li>
					<?php }?>
					
					<?php if ($product_reviews_tab_title){?>
					<li class="prd-tab-wrap<?php if(($product_description_tab === '') && ($product_more_info_tab === '')){?> active<?php }?>" data-tab="3">Reviews</li>
					<?php }?>
					
				</ul>
				<div class="tabs-content-container-data">
					<?php if (!empty($product_description_inner_tab_title) || !empty($product_description_content)){?>
					<div class="tab-data-content active" data-tab="1">
					
						<?php if (!empty($product_description_inner_tab_title)){?>
						<div class="tab-data-inner-title">
							<?php echo $product_description_inner_tab_title;?>
						</div>
						<?php }?>
						
						<?php if (!empty($product_description_content)){?>
						<div class="tab-data-inner-content">
							<?php echo $product_description_content;?>
						</div>
						<?php }?>
						
					</div>
					<?php }?>
					
					<?php if (!empty($product_more_info_inner_tab_title) || !empty($product_more_info_content)){?>
					<div class="tab-data-content<?php if($product_description_tab === ''){?> active<?php }?>" data-tab="2">
					
						<?php if (!empty($product_more_info_inner_tab_title)){?>
						<div class="tab-data-inner-title">
							<?php echo $product_more_info_inner_tab_title;?>
						</div>
						<?php }?>
						
						<?php if (!empty($product_more_info_content)){?>
						<div class="tab-data-inner-content">
							<?php echo $product_more_info_content;?>
						</div>
						<?php }?>
						
					</div>
					<?php }?>
					
					<?php if ($product_reviews_tab_title){?>
					<div class="tab-data-content<?php if(($product_description_tab === '') && ($product_more_info_tab === '')){?> active<?php }?>" data-tab="3">
						<?php if ( function_exists( 'wc_yotpo_show_widget' ) ) { 
							wc_yotpo_show_widget(); 
						}
						else{
							echo comments_template();
						}
						?>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<?php
	}?>
	
	<div class="product-related-data">
		<div class="container">
			<?php
			$custom_related_products = wc_get_related_products( $product->get_id(), $limit = 8, $exclude_ids = array() );
			if (isset($custom_related_products)){
			?>
				<div class="related-prds-main-wrapper">
					<div class="best-selling-title-wrap">
						<div class="best-selling-inner-title-wrap green-font">Related</div>
						<div class="best-selling-inner-subtitle-wrap">Products</div>
					</div>
					<div class="related-slider-outer-wrap">
						<div class="related-slider-nav">
							
							<?php foreach($custom_related_products as $post):
								setup_postdata($post);
								//print_r($post);
								/*$post = json_decode($post, true);*/
								?>
								<?php $rel_product = wc_get_product($post); ?>
								<div class="sin-prd-main-outer-wrap">
									<div class="sin-prd-wrap">
										
										<?php 
											$image = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'single-post-thumbnail' );//print_r($image);
											$permalink = $rel_product->get_permalink();
										?>
										<div class="sin-prd-img-wrap">
											<a href="<?php echo $permalink?>">
												<div class="product-grid-image">
													<?php /*<img src="<?php  echo $image[0]; ?>">*/?>
													<?php echo woocommerce_get_product_thumbnail('woocommerce_full_size');?>
												</div>
											</a>
											
											<a href="#" class="grid-quick-view yith-wcqv-button" data-product_id="<?php echo $rel_product->get_id();?>">
												<span><i class="fas fa-eye"></i></span>
												<span>Quick View</span>
											</a>
										</div>
										
										<div class="grid-star-rating">
											<?php 
												if ( function_exists( 'wc_yotpo_show_bottomline' ) ) { wc_yotpo_show_bottomline(); }
												else{
													$average = $rel_product->get_average_rating();

													echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
												}
											?>
										</div>
										  
										<div class="product-grid-price-wrap">
											<?php echo $rel_product->get_price_html();?>
										</div>
										
										<div class="sin-prd-title"><a href="<?php echo $permalink;?>"><?php echo $rel_product->post->post_title;?></a></div>
										
										<div class="sin-prd-more-details"><a href="<?php echo $permalink;?>">More Details</a></div>
										
										<div class="sin-prd-cats-multi">
										<?php 
											//echo wc_get_product_category_list($rel_product->get_id());
											$terms = get_the_terms ( $rel_product->get_id(), 'product_cat' );
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
											if($rel_product->get_stock_quantity() > 0){$stock_msg = 'In Stock';}else{$stock_msg = 'Out Of Stock';}
											if($rel_product->get_stock_quantity() > 0){$add_cart_btn_txt = 'Add to basket';}/*else{$add_cart_btn_txt = 'Sold out';}*/
											
											if($rel_product->is_purchasable()){$add_cart_btn_txt = 'Add to basket';}
											else if($rel_product->is_type('grouped')){$add_cart_btn_txt = 'Select Options';}
											else{$add_cart_btn_txt = 'Sold out';}
											
											$best_seller_tag = intval(is_object_in_term( $rel_product->get_id(), 'product_tag', 'best-seller' ));
											$new_tag = intval(is_object_in_term( $rel_product->get_id(), 'product_tag', 'new' ));
											
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
												if( $rel_product->is_type( 'simple' ) ) {
													echo apply_filters(
														'woocommerce_loop_add_to_cart_link',
														sprintf(
															'<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
															esc_url( $rel_product->add_to_cart_url() ),
															esc_attr( $rel_product->get_id() ),
															esc_attr( $rel_product->get_sku() ),
															$rel_product->is_purchasable() ? 'add_to_cart_button' : '',
															esc_attr( $rel_product->product_type ),
															esc_html( $add_cart_btn_txt )
														),
														$rel_product
													);
												}
												else if($rel_product->is_type( 'variable' )){
													?>
													<a href="<?php echo $permalink?>" class="button">Choose Options</a>
													<?php
												}
												else if($rel_product->is_type( 'grouped' )){
													?>
													<a href="<?php echo $permalink?>" class="button">Select Options</a>
													<?php
												}
											}?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<?php wp_reset_postdata();?>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
	
	<?php
	if(have_rows('product_additional_content',get_the_ID())){?>
	<div class="category-description-layout-wrap remove-product-desc-bg">
		<div class="container">
			<div class="content sm-content-spacing">
				<div class="category-description-inner-layout-wrap">
					<?php
					$i=0;
					while(have_rows('product_additional_content',get_the_ID())) : the_row();
					$category_description_title = get_sub_field('additional_content_title');
					$category_description_content = get_sub_field('additional_content_description');?>
					<div class="category-description-content-wrap <?php if($i > 0){?> sm-after-first<?php } if($i > 1){?> md-after-second<?php } if($i % 2 === 0){echo ' even-cat-desc-content';}else{echo ' odd-cat-desc-content';}?>">
						<?php if($category_description_title){?>
							<div class="category-desc-title-wrap">
								<?php echo $category_description_title;?>
							</div>
						<?php } 
						
							if($category_description_content){?>
							<div class="category-desc-content-wrap product-desc-additional-content-wrap">
								<?php echo $category_description_content;?>
							</div>
						<?php }?>
					</div>
					<?php $i++;endwhile;?>
				</div>
			</div>
		</div>
	</div>
	<?php }
get_footer();
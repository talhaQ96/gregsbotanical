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
				</div>
			</div>
			
			<div class="sin-product-details-wrap">
				<div class="sin-product-title-wrap"><?php the_title(); ?></div>
				
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
				
				<div>
					<div>
						<?php 
							$attributes = $product->get_attributes();
							$attribute_keys  = array_keys( $attributes );
							
							/*$product = wc_get_product($product->get_id());*/
							$variations = $product->get_available_variations();
							
							
						?>
					</div>
					<div class="text-box-wrapper align-flex-end qty-num-submit-wrapper">
						<div class="sin-field-wrap-contaner">
							<?php /*<label for="unit-qty">Quantity</label>*/?>
							<input type="number" id="unit-qty" class="sin-prd-text-field" value="1" min="0" pattern="[0-9]*">
						</div>
						<div class="full-flex-stretch add-to-cart-link-wrap">
							
						</div>
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
	if (!empty($product_description_tab) || !empty($product_more_info_tab)){
	?>
	<div class="product-tabs-main-wrapper">
		<div class="container">
			<?php 
			if (!empty($product_description_tab) || !empty($product_more_info_tab)){
			?>
				<div class="product-tabs-outer-wrap">
					<ul class="tabs-container-wrap">
						<?php if (!empty($product_description_tab)){?>
						<li class="prd-tab-wrap active" data-tab="1"><?php echo $product_description_tab;?></li>
						<?php }?>
						
						<?php if (!empty($product_more_info_tab)){?>
						<li class="prd-tab-wrap" data-tab="2"><?php echo $product_more_info_tab;?></li>
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
						<div class="tab-data-content" data-tab="2">
						
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
					</div>
				</div>
			<?php
			}?>
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
										<a href="<?php echo $permalink?>">
											<div class="product-grid-image">
												<img src="<?php  echo $image[0]; ?>">
											</div>
										</a>
										  
										<div class="product-grid-price-wrap">
											<?php echo $rel_product->get_price_html();?>
										</div>
										
										<div class="sin-prd-title"><a href="<?php echo $permalink;?>"><?php echo $rel_product->post->post_title;?></a></div>
										
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
											if($rel_product->get_stock_quantity() > 0){$add_cart_btn_txt = 'Add to basket';}else{$add_cart_btn_txt = 'Sold out';}
											
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
												<div class="sin-prd-stock-msg<?php if($stock_msg == 'In Stock'){echo ' in-stock';}else{echo ' out-of-stock';}?>">
													<?php echo $stock_msg;?>
												</div>
											<?php }?>
										
										<div class="sin-prd-add-to-cart">
											<?php
											if($add_cart_btn_txt == 'Sold out'){?>
												<input type="submit" class="button" value="<?php echo $add_cart_btn_txt;?>" disabled>
											<?php }
											else{
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
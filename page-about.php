<?php
/**
 * Template Name: Aboutpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greg-botanical
 */

get_header();?>

		<?php
			$start_sidebar_title = get_field("start_sidebar_title",get_the_ID());
			$behind_the_name_sidebar_title = get_field("behind_the_name_sidebar_title",get_the_ID());
			$farm_fresh_sidebar_title = get_field("farm_fresh_sidebar_title",get_the_ID());
			$msv_sidebar_title = get_field("msv_sidebar_title",get_the_ID());
			$dpc_sidebar_title = get_field("dpc_sidebar_title",get_the_ID());
			$reach_out_sidebar_title = get_field("reach_out_sidebar_title",get_the_ID());
			
			$start_section_id = get_field("start_section_id",get_the_ID());
			$behind_the_name_id = get_field("behind_the_name_id",get_the_ID());
			$farm_fresh_id = get_field("farm_fresh_id",get_the_ID());
			$multiple_strain_varieties_id = get_field("multiple_strain_varieties_id",get_the_ID());
			$diverse_product_choices_id = get_field("diverse_product_choices_id",get_the_ID());
			$reach_out_id = get_field("reach_out_id",get_the_ID());
			
			if(($start_sidebar_title && $start_section_id) || ($behind_the_name_sidebar_title && $behind_the_name_id) || ($farm_fresh_sidebar_title && $farm_fresh_id) || ($msv_sidebar_title && $multiple_strain_varieties_id) || ($dpc_sidebar_title && $diverse_product_choices_id) || ($reach_out_sidebar_title && $reach_out_id)){
				?>
				<div class="sidebar-sticky-md-visible">
					<ul>
						<li><a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $start_section_id;?>"><?php echo $start_sidebar_title;?></a></li>
						<li><a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $behind_the_name_id;?>"><?php echo $behind_the_name_sidebar_title;?></a></li>
						<li><a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $farm_fresh_id;?>"><?php echo $farm_fresh_sidebar_title;?></a></li>
						<li><a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $multiple_strain_varieties_id;?>"><?php echo $msv_sidebar_title;?></a></li>
						<li><a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $diverse_product_choices_id;?>"><?php echo $dpc_sidebar_title;?></a></li>
						<li><a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $reach_out_id;?>"><?php echo $reach_out_sidebar_title;?></a></li>
					</ul>
				</div>
				<?php
			}
		?>
	
		<?php
		$start_background_image = get_field("start_background_image",get_the_ID());
		$start_title = get_field("start_title",get_the_ID());
		$start_image = get_field("start_image",get_the_ID());
		$start_content = get_field("start_content",get_the_ID());
		$start_reading_text = get_field("start_reading_text",get_the_ID());
		
		if($start_background_image){
			?>
			<div class="about-story-main-wrap start-story-section-wrap" id="<?php echo $start_section_id;?>">
				<div class="story-banner-main-section-wrap">
					<div class="story-main-img-wrap">
						<img src="<?php echo $start_background_image['url'];?>" alt="<?php echo $start_background_image['alt'];?>" />
					</div>
					<div class="container story-banner-content-container">
						<div class="story-banner-content-wrap">
							<?php 
								if($start_title): ?>
								<div class="story-banner-title-wrap"><?php echo $start_title; ?></div>
							<?php endif; ?>
							
							<?php if($start_image): ?>
								<div class="story-img-wrap">
									<img src="<?php echo $start_image['url'];?>" alt="<?php echo $start_image['alt'];?>" />
								</div>
							<?php endif; ?>
							
							<?php 
								if($start_content): ?>
								<div class="story-content-wrap"><?php echo $start_content; ?></div>
							<?php endif; ?>
							
							<?php 
								if($start_reading_text): ?>
								<div class="story-reading-link-main-wrap">
									<a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $behind_the_name_id;?>">
										<div class="reading-link-icon-wrap"><i class="fa fa-chevron-down"></i></div>
										<div><?php echo $start_reading_text; ?></div>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
		
		<?php
		$behind_the_name_leaf = get_field("behind_the_name_leaf",get_the_ID());
		$behind_the_name_background_image = get_field("behind_the_name_background_image",get_the_ID());
		$behind_the_name_title = get_field("behind_the_name_title",get_the_ID());
		$behind_the_name_content = get_field("behind_the_name_content",get_the_ID());
		$behind_the_name_image = get_field("behind_the_name_image",get_the_ID());
		$behind_the_name_arrow_image = get_field("behind_the_name_arrow_image",get_the_ID());
		$behind_the_name_desc_title1 = get_field("behind_the_name_desc_title1",get_the_ID());
		$behind_the_name_desc_title2 = get_field("behind_the_name_desc_title2",get_the_ID());
		$behind_the_name_description = get_field("behind_the_name_description",get_the_ID());
		$behind_the_name_up_next = get_field("behind_the_name_up_next",get_the_ID());
		$behind_the_name_farm_fresh = get_field("behind_the_name_farm_fresh",get_the_ID());
		
		if($behind_the_name_background_image){
			?>
			<div class="about-story-main-wrap behind-the-name-main-wrap behind-the-name-leaf behind-the-name-top-section-wrap" id="<?php echo $behind_the_name_id;?>">
				<?php
				if($behind_the_name_leaf){?>
				<style type="text/css">
				.behind-the-name-leaf::before{
					top:0;
					height: 280px;
					width:241px;
					background-image:url(<?php echo $behind_the_name_leaf['url'];?>);
					background-size:cover;
					left:50%;
					transform:translateX(-50%);
					z-index: 2;
				}
				</style>
				<?php
				}?>
				<div class="story-banner-main-section-wrap">
					<div class="story-main-img-wrap">
						<img src="<?php echo $behind_the_name_background_image['url'];?>" alt="<?php echo $behind_the_name_background_image['alt'];?>" />
					</div>
					<div class="story-banner-content-container behind-the-name-content-container">
						<div class="container">
							<div class="story-banner-content-wrap">
								<?php 
									if($behind_the_name_title): ?>
									<div class="story-banner-title-wrap behind-title-wrap"><?php echo $behind_the_name_title; ?></div>
								<?php endif; ?>
								
								<?php 
									if($behind_the_name_content): ?>
									<div class="behind-the-name-content-wrap"><?php echo $behind_the_name_content; ?></div>
								<?php endif; ?>
								
								<div class="about-md-flex">
									<?php if($behind_the_name_image): ?>
										<div class="story-img-wrap">
											<img src="<?php echo $behind_the_name_image['url'];?>" alt="<?php echo $behind_the_name_image['alt'];?>" />
											<?php if($behind_the_name_arrow_image): ?>
												<div class="behind-the-arrow-img-wrap behind-md-left-img"><img src="<?php echo $behind_the_name_arrow_image['url'];?>" alt="<?php echo $behind_the_name_arrow_image['alt'];?>" /></div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									
									<div class="behind-the-name-section-content-wrap">
										<div class="max-width-400-md margin-right-auto">
											<?php if($behind_the_name_desc_title1 || $behind_the_name_desc_title2){?>
											<div class="best-selling-title-wrap">
											
												<?php if($behind_the_name_desc_title1){?>
												<div class="best-selling-inner-title-wrap green-font">
													<?php echo $behind_the_name_desc_title1;?>
												</div>
												<?php }?>
												
												<?php if($behind_the_name_desc_title2){?>
												<div class="best-selling-inner-subtitle-wrap">
													<?php echo $behind_the_name_desc_title2;?>
												</div>
												<?php }?>
												
											</div>
											<?php }?>
											<?php 
												if($behind_the_name_description): ?>
												<div class="story-content-wrap behind-the-name-desc-wrap"><?php echo $behind_the_name_description; ?></div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php 
					if($behind_the_name_up_next || $behind_the_name_farm_fresh): ?>
					<div class="next-link-wrap-container behind-the-name-content-container story-banner-content-container">
						<div class="container">
							<div class="story-reading-link-main-wrap">
								<a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $farm_fresh_id;?>">
									<?php if($behind_the_name_up_next): ?>
										<div class="up-next-text-wrap"><?php echo $behind_the_name_up_next; ?></div>
									<?php endif; ?>
									<?php if($behind_the_name_farm_fresh): ?>
										<div class="next-section-text-wrap"><?php echo $behind_the_name_farm_fresh; ?></div>
									<?php endif; ?>
									<div class="reading-link-icon-wrap dark-green"><i class="fa fa-chevron-down"></i></div>
								</a>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php
		}
		?>
		
		<?php
		$farm_fresh_leaf = get_field("farm_fresh_leaf",get_the_ID());
		$farm_fresh_background_image = get_field("farm_fresh_background_image",get_the_ID());
		$farm_fresh_title = get_field("farm_fresh_title",get_the_ID());
		$farm_fresh_content = get_field("farm_fresh_content",get_the_ID());
		$farm_fresh_image = get_field("farm_fresh_image",get_the_ID());
		$farm_fresh_arrow_image = get_field("farm_fresh_arrow_image",get_the_ID());
		$farm_fresh_desc_title1 = get_field("farm_fresh_desc_title1",get_the_ID());
		$farm_fresh_desc_title2 = get_field("farm_fresh_desc_title2",get_the_ID());
		$farm_fresh_description = get_field("farm_fresh_description",get_the_ID());
		$farm_fresh_up_next = get_field("farm_fresh_up_next",get_the_ID());
		$farm_fresh_msv = get_field("farm_fresh_msv",get_the_ID());
		
		if($farm_fresh_background_image){
			?>
			<div class="about-story-main-wrap behind-the-name-main-wrap farm-fresh-leaf farm-fresh-top-section-wrap" id="<?php echo $farm_fresh_id;?>">
				<?php
				if($farm_fresh_leaf){?>
				<style type="text/css">
				.farm-fresh-leaf::before{
					top:0;
					height: 280px;
					width:241px;
					background-image:url(<?php echo $farm_fresh_leaf['url'];?>);
					background-size:cover;
					left:50%;
					transform:translateX(-50%);
					z-index: 2;
				}
				</style>
				<?php
				}?>
				<div class="story-banner-main-section-wrap">
					<div class="story-main-img-wrap">
						<img src="<?php echo $farm_fresh_background_image['url'];?>" alt="<?php echo $farm_fresh_background_image['alt'];?>" />
					</div>
					<div class="story-banner-content-container behind-the-name-content-container">
						<div class="container">
							<div class="story-banner-content-wrap">
								<?php 
									if($farm_fresh_title): ?>
									<div class="story-banner-title-wrap behind-title-wrap"><?php echo $farm_fresh_title; ?></div>
								<?php endif; ?>
								
								<?php 
									if($farm_fresh_content): ?>
									<div class="behind-the-name-content-wrap"><?php echo $farm_fresh_content; ?></div>
								<?php endif; ?>
								
								<div class="about-md-flex reverse-flex-md">
									<?php if($farm_fresh_image): ?>
										<div class="story-img-wrap">
											<img src="<?php echo $farm_fresh_image['url'];?>" alt="<?php echo $farm_fresh_image['alt'];?>" />
											<?php if($farm_fresh_arrow_image): ?>
												<div class="behind-the-arrow-img-wrap behind-md-right-img"><img src="<?php echo $farm_fresh_arrow_image['url'];?>" alt="<?php echo $farm_fresh_arrow_image['alt'];?>" /></div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									
									<div class="behind-the-name-section-content-wrap">
										<div class="max-width-400-md margin-left-auto">
											<?php if($farm_fresh_desc_title1 || $farm_fresh_desc_title2){?>
											<div class="best-selling-title-wrap">
											
												<?php if($farm_fresh_desc_title1){?>
												<div class="best-selling-inner-title-wrap green-font">
													<?php echo $farm_fresh_desc_title1;?>
												</div>
												<?php }?>
												
												<?php if($farm_fresh_desc_title2){?>
												<div class="best-selling-inner-subtitle-wrap">
													<?php echo $farm_fresh_desc_title2;?>
												</div>
												<?php }?>
												
											</div>
											<?php }?>
											<?php 
												if($farm_fresh_description): ?>
												<div class="story-content-wrap behind-the-name-desc-wrap"><?php echo $farm_fresh_description; ?></div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php 
						if($farm_fresh_up_next || $farm_fresh_msv): ?>
						<div class="next-link-wrap-container behind-the-name-content-container story-banner-content-container">
							<div class="container">
								<div class="story-reading-link-main-wrap">
									<a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $multiple_strain_varieties_id;?>">
										<?php if($farm_fresh_up_next): ?>
											<div class="up-next-text-wrap"><?php echo $farm_fresh_up_next; ?></div>
										<?php endif; ?>
										<?php if($farm_fresh_msv): ?>
											<div class="next-section-text-wrap"><?php echo $farm_fresh_msv; ?></div>
										<?php endif; ?>
										<div class="reading-link-icon-wrap dark-green"><i class="fa fa-chevron-down"></i></div>
									</a>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php
		}
		?>
		
		<?php
		$msv_leaf = get_field("msv_leaf",get_the_ID());
		$msv_background_image = get_field("msv_background_image",get_the_ID());
		$msv_title = get_field("msv_title",get_the_ID());
		$msv_content = get_field("msv_content",get_the_ID());
		$msv_image = get_field("msv_image",get_the_ID());
		$msv_arrow_image = get_field("msv_arrow_image",get_the_ID());
		$msv_desc_title1 = get_field("msv_desc_title1",get_the_ID());
		$msv_desc_title2 = get_field("msv_desc_title2",get_the_ID());
		$msv_description = get_field("msv_description",get_the_ID());
		$msv_up_next = get_field("msv_up_next",get_the_ID());
		$msv_dpc = get_field("msv_dpc",get_the_ID());
		
		if($msv_background_image){
			?>
			<div class="about-story-main-wrap behind-the-name-main-wrap msv-leaf msv-top-section-wrap" id="<?php echo $multiple_strain_varieties_id;?>">
				<?php
				if($msv_leaf){?>
				<style type="text/css">
				.msv-leaf::before{
					top:0;
					height: 280px;
					width:241px;
					background-image:url(<?php echo $msv_leaf['url'];?>);
					background-size:cover;
					left:50%;
					transform:translateX(-50%);
					z-index: 2;
				}
				</style>
				<?php
				}?>
				<div class="story-banner-main-section-wrap">
					<div class="story-main-img-wrap">
						<img src="<?php echo $msv_background_image['url'];?>" alt="<?php echo $msv_background_image['alt'];?>" />
					</div>
					<div class="story-banner-content-container behind-the-name-content-container">
						<div class="container">
							<div class="story-banner-content-wrap">
								<?php 
									if($msv_title): ?>
									<div class="story-banner-title-wrap behind-title-wrap"><?php echo $msv_title; ?></div>
								<?php endif; ?>
								
								<?php 
									if($msv_content): ?>
									<div class="behind-the-name-content-wrap"><?php echo $msv_content; ?></div>
								<?php endif; ?>
								
								<div class="about-md-flex">
									<?php if($msv_image): ?>
										<div class="story-img-wrap">
											<img src="<?php echo $msv_image['url'];?>" alt="<?php echo $msv_image['alt'];?>" />
											<?php if($msv_arrow_image): ?>
												<div class="behind-the-arrow-img-wrap behind-md-left-img"><img src="<?php echo $msv_arrow_image['url'];?>" alt="<?php echo $msv_arrow_image['alt'];?>" /></div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									
									<div class="behind-the-name-section-content-wrap">
										<div class="max-width-400-md margin-right-auto">
											<?php if($msv_desc_title1 || $msv_desc_title2){?>
											<div class="best-selling-title-wrap">
											
												<?php if($msv_desc_title1){?>
												<div class="best-selling-inner-title-wrap green-font">
													<?php echo $msv_desc_title1;?>
												</div>
												<?php }?>
												
												<?php if($msv_desc_title2){?>
												<div class="best-selling-inner-subtitle-wrap">
													<?php echo $msv_desc_title2;?>
												</div>
												<?php }?>
												
											</div>
											<?php }?>
											<?php 
												if($msv_description): ?>
												<div class="story-content-wrap behind-the-name-desc-wrap"><?php echo $msv_description; ?></div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php 
						if($msv_up_next || $msv_dpc): ?>
						<div class="next-link-wrap-container behind-the-name-content-container story-banner-content-container">
							<div class="container">
								<div class="story-reading-link-main-wrap">
									<a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $diverse_product_choices_id;?>">
										<?php if($msv_up_next): ?>
											<div class="up-next-text-wrap"><?php echo $msv_up_next; ?></div>
										<?php endif; ?>
										<?php if($msv_dpc): ?>
											<div class="next-section-text-wrap"><?php echo $msv_dpc; ?></div>
										<?php endif; ?>
										<div class="reading-link-icon-wrap dark-green"><i class="fa fa-chevron-down"></i></div>
									</a>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php
		}
		?>
		
		<?php
		$dpc_leaf = get_field("dpc_leaf",get_the_ID());
		$dpc_background_image = get_field("dpc_background_image",get_the_ID());
		$dpc_title = get_field("dpc_title",get_the_ID());
		$dpc_content = get_field("dpc_content",get_the_ID());
		$dpc_image = get_field("dpc_image",get_the_ID());
		$dpc_arrow_image = get_field("dpc_arrow_image",get_the_ID());
		$dpc_desc_title1 = get_field("dpc_desc_title1",get_the_ID());
		$dpc_desc_title2 = get_field("dpc_desc_title2",get_the_ID());
		$dpc_description = get_field("dpc_description",get_the_ID());
		$dpc_up_next = get_field("dpc_up_next",get_the_ID());
		$dpc_reach_out = get_field("dpc_reach_out",get_the_ID());
		
		if($dpc_background_image){
			?>
			<div class="about-story-main-wrap behind-the-name-main-wrap dpc-leaf dpc-top-section-wrap" id="<?php echo $diverse_product_choices_id;?>">
				<?php
				if($dpc_leaf){?>
				<style type="text/css">
				.dpc-leaf::before{
					top:0;
					height: 280px;
					width:241px;
					background-image:url(<?php echo $dpc_leaf['url'];?>);
					background-size:cover;
					left:50%;
					transform:translateX(-50%);
					z-index: 2;
				}
				</style>
				<?php
				}?>
				<div class="story-banner-main-section-wrap">
					<div class="story-main-img-wrap">
						<img src="<?php echo $dpc_background_image['url'];?>" alt="<?php echo $dpc_background_image['alt'];?>" />
					</div>
					<div class="story-banner-content-container behind-the-name-content-container">
						<div class="container">
							<div class="story-banner-content-wrap">
								<?php 
									if($dpc_title): ?>
									<div class="story-banner-title-wrap behind-title-wrap"><?php echo $dpc_title; ?></div>
								<?php endif; ?>
								
								<?php 
									if($dpc_content): ?>
									<div class="behind-the-name-content-wrap"><?php echo $dpc_content; ?></div>
								<?php endif; ?>
								
								<div class="about-md-flex reverse-flex-md">
									<?php if($dpc_image): ?>
										<div class="story-img-wrap">
											<img src="<?php echo $dpc_image['url'];?>" alt="<?php echo $dpc_image['alt'];?>" />
											<?php if($dpc_arrow_image): ?>
												<div class="behind-the-arrow-img-wrap behind-md-right-img dpc-arrow-img"><img src="<?php echo $dpc_arrow_image['url'];?>" alt="<?php echo $dpc_arrow_image['alt'];?>" /></div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									
									<div class="behind-the-name-section-content-wrap">
										<div class="max-width-400-md margin-left-auto">
											<?php if($dpc_desc_title1 || $dpc_desc_title2){?>
											<div class="best-selling-title-wrap">
											
												<?php if($dpc_desc_title1){?>
												<div class="best-selling-inner-title-wrap green-font">
													<?php echo $dpc_desc_title1;?>
												</div>
												<?php }?>
												
												<?php if($dpc_desc_title2){?>
												<div class="best-selling-inner-subtitle-wrap">
													<?php echo $dpc_desc_title2;?>
												</div>
												<?php }?>
												
											</div>
											<?php }?>
											<?php 
												if($dpc_description): ?>
												<div class="story-content-wrap behind-the-name-desc-wrap"><?php echo $dpc_description; ?></div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php 
						if($dpc_up_next || $dpc_reach_out): ?>
						<div class="next-link-wrap-container behind-the-name-content-container story-banner-content-container">
							<div class="container">
								<div class="story-reading-link-main-wrap">
									<a href="javascript:void(0);" class="scroll-to-next-section" data-href="<?php echo $reach_out_id;?>">
										<?php if($dpc_up_next): ?>
											<div class="up-next-text-wrap"><?php echo $dpc_up_next; ?></div>
										<?php endif; ?>
										<?php if($dpc_reach_out): ?>
											<div class="next-section-text-wrap"><?php echo $dpc_reach_out; ?></div>
										<?php endif; ?>
										<div class="reading-link-icon-wrap dark-green"><i class="fa fa-chevron-down"></i></div>
									</a>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php
		}
		?>
		
		<?php
		$reach_out_leaf = get_field("reach_out_leaf",get_the_ID());
		$reach_out_background_image = get_field("reach_out_background_image",get_the_ID());
		$reach_out_title = get_field("reach_out_title",get_the_ID());
		$reach_out_content = get_field("reach_out_content",get_the_ID());
		$reach_out_after_leaf = get_field("reach_out_after_leaf",get_the_ID()); 
		
		if($reach_out_background_image){
			?>
			<div class="about-story-main-wrap behind-the-name-main-wrap reach-out-leaf reach-out-top-section-wrap" id="<?php echo $reach_out_id;?>">
				<?php
				if($reach_out_leaf){?>
				<style type="text/css">
				.reach-out-leaf::before{
					top:0;
					height: 280px;
					width:241px;
					background-image:url(<?php echo $reach_out_leaf['url'];?>);
					background-size:cover;
					left:50%;
					transform:translateX(-50%);
					z-index: 2;
				}
				</style>
				<?php
				}?>
				
				<?php
				if($reach_out_after_leaf){?>
				<style type="text/css">
				.reach-out-leaf::after{
					bottom:-80px;
					height: 204px;
					width:220px;
					background-image:url(<?php echo $reach_out_after_leaf['url'];?>);
					background-size:cover;
					left:50%;
					transform:translateX(-50%);
					z-index: 2;
				}
				</style>
				<?php
				}?>
				
				<div class="story-banner-main-section-wrap">
					<div class="story-main-img-wrap container">
						<img src="<?php echo $reach_out_background_image['url'];?>" alt="<?php echo $reach_out_background_image['alt'];?>" />
					</div>
					<div class="story-banner-content-container behind-the-name-content-container">
						<div class="container">
							<div class="story-banner-content-wrap">
								<?php 
									if($reach_out_title): ?>
									<div class="story-banner-title-wrap behind-title-wrap"><?php echo $reach_out_title; ?></div>
								<?php endif; ?>
								
								<?php 
									if($reach_out_content): ?>
									<div class="behind-the-name-content-wrap reach-out-content"><?php echo $reach_out_content; ?></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	
<?php
get_footer();
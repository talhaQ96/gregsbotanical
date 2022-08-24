<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greg-botanical
 */

?>

	<footer id="colophon" class="site-footer">
		<?php
			$footer_ripped_bg_top = get_field("footer_ripped_bg_top",'option');
			$footer_background_image = get_field("footer_background_image",'option');
			$footer_background_image_product_page = get_field("footer_background_image_product_page",'option');
			$footer_logo = get_field("footer_logo",'option');
			$footer_column_2_title = get_field("footer_column_2_title",'option');
			$footer_phone_number = get_field("footer_phone_number",'option');
			$footer_email_address = get_field("footer_email_address",'option');
			$footer_business_address = get_field("footer_business_address",'option');
			$footer_column_3_title = get_field("footer_column_3_title",'option');
			$footer_resources_menu_link = get_field("footer_resources_menu_link",'option');
			$footer_column_4_title = get_field("footer_column_4_title",'option');
			$footer_newsletter_form_shortcode = get_field("footer_newsletter_form_shortcode",'option');
			$footer_disclaimer_content = get_field("footer_disclaimer_content",'option');
			$footer_copyright_content = get_field("footer_copyright_content",'option');
			$footer_copyright_menu_links = get_field("footer_copyright_menu_links",'option');
			
			/*if($footer_ripped_bg_top){ 
			//print_r($footer_background_image);?>
			<style type="text/css">
			footer.site-footer{
				padding-top:159px;
				position:relative;
			}
			footer.site-footer::after{
				content:'';
				position:absolute;
				top:85px;
				height:159px;
				width:100%;
				background-image:url(<?php echo $footer_ripped_bg_top['url'];?>);
				background-size:cover;
			}
			</style>
			<?php
			}*/
			if(is_product()){
				if($footer_background_image_product_page){
				//print_r($footer_background_image);?>
				<style type="text/css">
				.site-info{
					background-image: url(<?php echo $footer_background_image_product_page['url'];?>);
					background-size: cover;
					background-repeat: no-repeat;
				}
				</style>
				<?php
				}
			}
			else{
				if($footer_background_image){
				//print_r($footer_background_image);?>
				<style type="text/css">
				.site-info{
					background-image: url(<?php echo $footer_background_image['url'];?>);
					background-size: cover;
					background-repeat: no-repeat;
				}
				</style>
				<?php
				}
			}
		?>
		<div class="site-info">
			<div class="footer-top">
				<div class="container">
					<div class="footer-row footer-md-flex-row">
						<div class="footer-logo-wrap">
							<?php if($footer_logo) {?>
								<img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>" />
							<?php }?>
						</div>
						<div class="footer-contact-wrap">
							<?php if($footer_column_2_title) {?>
								<h2 class="foot-col-title"><?php echo $footer_column_2_title;?></h2>
							<?php }?>
							<ul class="footer-column-menu-wrap">
								<?php if($footer_phone_number) {?>
								<li>
									<a href="tel:<?php echo $footer_phone_number;?>">
										<span class="footer-icons-spacing"><span class="fas fa-phone-alt"></span></span>
										<span><?php echo $footer_phone_number;?></span>
									</a>
								</li>
								<?php }?>
								
								<?php if($footer_email_address) {?>
								<li>
									<a href="mailto:<?php echo $footer_email_address;?>">
										<span class="footer-icons-spacing"><span class="fa fa-envelope"></span></span>
										<span><?php echo $footer_email_address;?></span>
									</a>
								</li>
								<?php }?>
								
								<?php if($footer_business_address) {?>
								<li>
									<address class="footer-address">
										<span class="footer-icons-spacing"><span class="fas fa-map-marker-alt"></span></span>
										<span><?php echo $footer_business_address;?></span>
									</address>
								</li>
								<?php }?>
							</ul>
						</div>
						<div class="footer-resources-menu-wrap">
							<?php if($footer_column_3_title) {?>
								<h2 class="foot-col-title"><?php echo $footer_column_3_title;?></h2>
							<?php }?>
							<ul class="footer-column-menu-wrap">
								<?php if($footer_resources_menu_link) {?>
								<li>
									<?php echo $footer_resources_menu_link;?>
								</li>
								<?php }?>
							</ul>
						</div>
						
						<div class="footer-newsletter-wrap">
							<?php if($footer_column_4_title) {?>
								<h2 class="foot-col-title"><?php echo $footer_column_4_title;?></h2>
							<?php }?>
							<ul class="footer-column-menu-wrap">
								<?php if($footer_newsletter_form_shortcode) {?>
								<li>
									<?php echo $footer_newsletter_form_shortcode;?>
								</li>
								<?php }
								else {?>
								<li>
									<div  id="springbot-embedded-form" data-guid="66E552CC-5820-ABA1-A1EA-07965A673D44" data-recaptcha-sitekey="" data-form-identifier="f921d8a9-4f57-4888-a6c5-9114d5ad8006" class="springbot-embedded springbot-form">
									  <div class="embeded-springot-form-form">
										<div class="content">
											<form class="springmod-form newsletter-signup-form">
											  <div type="text" name="First Name" required="false" show-label="false" placeholder="First Name" label-value="" class="springbot-form-group form-group springbot-form-group__input">
												<input type="text" name="First Name" placeholder="First Name" class="springbot-form-input">
											  </div>
											  
											  <div checked="false" label-value="Label" show-label="false" required="true" type="email" name="Email" placeholder="Email" class="springbot-form-group form-group springbot-form-group__input">
												<input type="email" name="Email" required="true" placeholder="Email" class="springbot-form-input">
											  </div>
											  
											  <div class="form-group button-springbot-submit-wrap">
												<input id="springmod_submit" class="springmod_submit" value="I Want To Get The Latest Updates" type="submit">
											  </div>
											</form>
										</div>
									  </div>
									  <div class="springbot-popup springbot-success" style="background: none 0px 0px / cover repeat scroll padding-box border-box white; border: medium none currentcolor; inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; float: none; font-variant: normal; letter-spacing: normal; list-style: outside none disc; margin: 0px; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; quotes: &quot;&quot; &quot;&quot;; table-layout: auto; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; font-size: medium; line-height: 1; direction: ltr; text-align: start; font-family: Arial, Helvetica, sans-serif; color: black; font-style: normal; font-weight: normal; text-decoration: none; align-self: flex-start; border-radius: 4px; height: auto; max-width: 90vw; padding: 25px; width: 600px; position: relative; box-sizing: border-box; display: none !important;">
										<div class="springbot-row" style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; background: none 0px 0px / cover repeat scroll padding-box border-box transparent; inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: normal; font-weight: inherit; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; padding: 0px; position: static; quotes: '' ''; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; flex-direction: row; table-layout: fixed; border-collapse: collapse; margin: 0px; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; display: flex; align-items: center; box-sizing: border-box;">
										  <div class="springbot-cell" style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; background: none 0px 0px / cover repeat scroll padding-box border-box transparent; inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: normal; font-weight: inherit; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; position: static; quotes: '' ''; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; display: flex; flex-direction: column; justify-content: flex-start; table-layout: fixed; border-collapse: collapse; margin: 0px; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; align-items: center; padding: 0px; flex-grow: 1; box-sizing: border-box;">
											<div class="springbot-row" style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; background: none 0px 0px / cover repeat scroll padding-box border-box transparent; inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: normal; font-weight: inherit; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; padding: 0px; position: static; quotes: '' ''; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; flex-direction: row; table-layout: fixed; border-collapse: collapse; margin: 0px; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; display: flex; align-items: center; box-sizing: border-box;">
											  <div class="springbot-cell" style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; background: none 0px 0px / cover repeat scroll padding-box border-box rgb(255, 255, 255); inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: normal; font-weight: inherit; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; position: static; quotes: '' ''; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; display: flex; flex-direction: column; justify-content: flex-start; table-layout: fixed; border-collapse: collapse; margin: 0px; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; align-items: center; padding: 0px; flex-grow: 1; box-sizing: border-box;">
												<div class="springbot-row" style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; background: none 0px 0px / cover repeat scroll padding-box border-box transparent; inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: normal; font-weight: inherit; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; padding: 0px; position: static; quotes: '' ''; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; flex-direction: row; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; table-layout: fixed; border-collapse: collapse; margin: 0px; display: flex; align-items: center; box-sizing: border-box;">
												  <div class="springbot-cell" style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; background: none 0px 0px / cover repeat scroll padding-box border-box rgb(255, 255, 255); inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: normal; font-weight: inherit; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; position: static; quotes: '' ''; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; display: flex; flex-direction: column; justify-content: flex-start; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; table-layout: fixed; border-collapse: collapse; margin: 0px; align-items: center; padding: 10px; flex-grow: 1; box-sizing: border-box;">
													<div style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; padding-top: 0.67em; padding-right: 0px; padding-bottom: 0.67em; padding-left: 0px; background: none 0px 0px / cover repeat scroll padding-box border-box transparent; inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-style: inherit; font-variant: normal; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; position: static; quotes: '' ''; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; display: block; font-weight: 700; font-size: 32px; padding: 0.67em 0px; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; table-layout: fixed; border-collapse: collapse; margin: 0px; text-align: center; color: black; box-sizing: border-box;">Thank You!</div>
													<p style="background-attachment: scroll; background-color: transparent; background-image: none; background-position-x: 0px; background-position-y: 0px; background-repeat-x: repeat; background-repeat-y: repeat; border-top-color: currentcolor; border-right-color: currentcolor; border-bottom-color: currentcolor; border-left-color: currentcolor; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: medium; border-right-width: medium; border-bottom-width: medium; border-left-width: medium; bottom: auto; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: normal; font-variant-east-asian: normal; left: auto; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; right: auto; text-decoration-line: inherit; text-decoration-thickness: inherit; text-decoration-style: inherit; text-decoration-color: inherit; top: auto; background-origin: padding-box; background-clip: border-box; background-size: cover; border-image-source: none; border-image-slice: 100%; border-image-width: 1; border-image-outset: 0; border-image-repeat: stretch; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; column-count: auto; column-rule-width: medium; column-rule-style: none; column-rule-color: black; column-width: auto; overflow-x: visible; overflow-y: visible; transition-duration: 0s; transition-timing-function: ease; transition-delay: 0s; transition-property: all; margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; background: none 0px 0px / cover repeat scroll padding-box border-box transparent; inset: auto; clear: none; clip: auto; counter-increment: none; counter-reset: none; cursor: auto; direction: inherit; float: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: normal; font-weight: inherit; letter-spacing: normal; line-height: inherit; list-style-type: inherit; list-style-position: outside; list-style-image: none; max-height: none; min-height: 0px; min-width: 0px; opacity: 1; padding: 0px; position: static; quotes: '' ''; text-decoration: none; text-indent: 0px; text-transform: none; unicode-bidi: normal; vertical-align: baseline; visibility: inherit; white-space: normal; word-spacing: normal; z-index: auto; -webkit-border-image: none; border: 0px solid rgb(0, 0, 0); border-radius: 0px; box-shadow: none; columns: auto auto; column-gap: normal; column-rule: medium none black; font-feature-settings: normal; overflow: visible; hyphens: manual; perspective: none; perspective-origin: 50% 50%; backface-visibility: visible; text-shadow: none; transition: all 0s ease 0s; transform: none; transform-origin: 50% 50%; transform-style: flat; word-break: normal; display: block; width: 100%; max-width: 100%; height: auto; border-spacing: 0px; table-layout: fixed; border-collapse: collapse; margin: 0px; text-align: center; box-sizing: border-box;">We'll send you great deals and more!</p>
												  </div>
												</div>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								</li>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<?php if($footer_disclaimer_content) {?>
			<div class="footer-disclaimer-wrap">
				<div class="container">
					<div class="footer-inner-disclaimer-content-wrap">
						<?php echo $footer_disclaimer_content;?>
					</div>
				</div>
			</div>
			<?php }?>
			
			<?php if($footer_copyright_content || $footer_copyright_menu_links) {?>
			<div class="footer-copyright-content-wrap">
				<div class="container">
					<div class="md-flex-copyright-wrap">
						<?php if($footer_copyright_content) {?>
						<div class="foot-copyright-text-wrap">
							<?php echo $footer_copyright_content;?>
						</div>
						<?php }?>
						
						<?php if($footer_copyright_menu_links) {?>
						<div class="foot-copyright-bar-menu">
							<?php echo $footer_copyright_menu_links;?>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greg-botanical
 */

get_header();
?>
	
	<div class="banner-section">
		<?php
		$home_desktop_banner_image = get_field("home_desktop_banner_image",get_the_ID());
		$home_mobile_banner_image = get_field("home_mobile_banner_image",get_the_ID());
		$home_banner_title = get_field("home_banner_title",get_the_ID());
		$home_banner_content = get_field("home_banner_content",get_the_ID());
		
		if($home_desktop_banner_image){
			?>
			<div class="banner-main-section-wrap">
				<style type="text/css">
				<?php
				if($home_mobile_banner_image){
				?>
				.banner-main-section-wrap{
					background-image:url(<?php echo $home_mobile_banner_image['url'];?>);
					background-size:cover;
					background-repeat:no-repeat;
					padding: 85% 0 25%;
				}
				<?php }
				else{?>
				.banner-main-section-wrap{
					background-size:cover;
					background-repeat:no-repeat;
					padding: 85% 0 25%;
					background-image:url(<?php echo $home_desktop_banner_image['url'];?>);
				}
				<?php }?>
				@media (min-width:801px){
					.banner-main-section-wrap{
						padding: 0 0 47.125%;
						background-image:url(<?php echo $home_desktop_banner_image['url'];?>);
					}
				}
				</style>
				<div class="container banner-content-container">
					<div class="banner-content-wrap">
						<?php 
							if($home_banner_title): ?>
							<div class="banner-title-wrap"><?php echo $home_banner_title; ?></div>
						<?php endif; ?>
						
						<?php 
							if($home_banner_content): ?>
							<div class="banner-inner-content-wrap"><?php echo $home_banner_content; ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
	
	<div class="home-gregs-farm-wrap">
		<?php
			$gregsfarm_left_image = get_field("gregsfarm_left_image",get_the_ID());
			$gregsfarm_logo_image = get_field("gregsfarm_logo_image",get_the_ID());
			$gregsfarm_content = get_field("gregsfarm_content",get_the_ID());
			$gregsfarm_discount_text = get_field("gregsfarm_discount_text",get_the_ID());
			$gregsfarm_use_code_text = get_field("gregsfarm_use_code_text",get_the_ID());
			$gregsfarm_coupon_code = get_field("gregsfarm_coupon_code",get_the_ID());
			$gregsfarm_coupon_description = get_field("gregsfarm_coupon_description",get_the_ID());
			
			$gregsfarm_ripped_paper_gray_bg = get_field("gregsfarm_ripped_paper_gray_bg",get_the_ID());
			$gregsfarm_ripped_paper_green_bg = get_field("gregsfarm_ripped_paper_green_bg",get_the_ID());
			
			if($gregsfarm_left_image || $gregsfarm_logo_image){
		?>
			<div class="container">
				<div class="home-gregs-farm-inner-wrap md-flex-wrap">
					<?php if($gregsfarm_left_image): ?>
						<div class="gregs-farm-img-wrap">
							<img src="<?php echo $gregsfarm_left_image['url'];?>" alt="<?php echo $gregsfarm_left_image['alt'];?>" />
						</div>
					<?php 
					else : ?>
						<div class="gregs-farm-img-wrap">
							<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1002 817" width="1002" height="817">
								<defs>
									<linearGradient id="g1" x1="243.9" y1="221.1" x2="246" y2="231.8" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#432323"/>
									</linearGradient>
									<linearGradient id="g2" x1="217.5" y1="222.6" x2="218.6" y2="228.1" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#432323"/>
									</linearGradient>
									<linearGradient id="g3" x1="256" y1="242.6" x2="260.1" y2="234.2" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g4" x1="234" y1="236.7" x2="238.6" y2="227.2" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g5" x1="234.2" y1="237.6" x2="237.3" y2="231.2" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g6" x1="256.3" y1="232" x2="255.4" y2="230.4" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g7" x1="254.6" y1="236.2" x2="265.8" y2="233.6" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g8" x1="246.5" y1="266.9" x2="253.7" y2="269.1" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g9" x1="225.2" y1="257.2" x2="229.5" y2="258.5" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g10" x1="228.8" y1="244" x2="237.1" y2="231.9" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g11" x1="249.5" y1="265.9" x2="260.3" y2="250.2" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g12" x1="249.5" y1="267" x2="260.3" y2="251.3" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g13" x1="250.6" y1="245.1" x2="246.1" y2="239" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g14" x1="209.5" y1="213.7" x2="207.9" y2="218" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#432323"/>
									</linearGradient>
									<linearGradient id="g15" x1="207.7" y1="231.9" x2="204.7" y2="234.6" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g16" x1="204.6" y1="228" x2="203.6" y2="230.8" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g17" x1="238.6" y1="202.1" x2="222.1" y2="188" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g18" x1="233.9" y1="268.6" x2="228.2" y2="264.7" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g19" x1="244.5" y1="257.7" x2="223.2" y2="262.8" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g20" x1="214" y1="232.5" x2="209" y2="234.6" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g21" x1="373.4" y1="306.5" x2="294.9" y2="339.5" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g22" x1="411.7" y1="293.6" x2="400.4" y2="344" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g23" x1="165.3" y1="313.4" x2="154.8" y2="360.1" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g24" x1="99.7" y1="275" x2="89" y2="322.5" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g25" x1="136.8" y1="306.5" x2="122.5" y2="369.7" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g26" x1="254.5" y1="631.9" x2="215.5" y2="545.4" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g27" x1="193.5" y1="614" x2="159.7" y2="538.9" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g28" x1="0" y1="0" x2="0" y2="0" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g29" x1="251.6" y1="664" x2="226.5" y2="608.3" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g30" x1="273.1" y1="669.5" x2="265.7" y2="653.1" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g31" x1="163.4" y1="636.7" x2="181.1" y2="636.7" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g32" x1="192.2" y1="610.6" x2="197.2" y2="610.6" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g33" x1="187.9" y1="546.4" x2="189.2" y2="546.4" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g34" x1="241" y1="559.9" x2="243.9" y2="559.9" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g35" x1="242.4" y1="585.9" x2="248.4" y2="585.9" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g36" x1="184.4" y1="562.9" x2="190.9" y2="562.9" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g37" x1="188.9" y1="576.6" x2="192.4" y2="576.6" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g38" x1="188.4" y1="545.4" x2="192.4" y2="545.4" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g39" x1="360.7" y1="0" x2="0" y2="0" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g40" x1="500.2" y1="0" x2="0" y2="0" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g41" x1="190.4" y1="619.9" x2="194.9" y2="619.9" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g42" x1="357.2" y1="0" x2="0" y2="0" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g43" x1="376.6" y1="305.4" x2="377.9" y2="305.4" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g44" x1="306.4" y1="315.3" x2="365.8" y2="315.3" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g45" x1="343.9" y1="315.1" x2="356.4" y2="315.1" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g46" x1="334.4" y1="309.4" x2="343.9" y2="309.4" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
									<linearGradient id="g47" x1="122.9" y1="313.7" x2="138.8" y2="313.7" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<stop offset="1" stop-color="#7b3801"/>
									</linearGradient>
								</defs>
								<style>
									.s0 { fill: #227102 } 
									.s1 { fill: #48b3d1;stroke: #132430 } 
									.s2 { fill: #132430 } 
									.s3 { fill: #422323 } 
									.s4 { fill: none;stroke: #422323;stroke-width: 2 } 
									.s5 { fill: none;stroke: #422323;stroke-linecap: round;stroke-linejoin: round;stroke-width: 2 } 
									.s6 { mix-blend-mode: multiply;fill: none;stroke: #422323;stroke-width: 2 } 
									.s7 { opacity: .7;mix-blend-mode: multiply;fill: none;stroke: #422323;stroke-width: 2 } 
									.s8 { opacity: 1;fill: none;stroke: #422323;stroke-width: 2 } 
									.s9 { opacity: .6;mix-blend-mode: multiply;fill: none;stroke: #422323;stroke-width: 2 } 
									.s10 { opacity: .4;mix-blend-mode: multiply;fill: none;stroke: #422323;stroke-width: 2 } 
									.s11 { opacity: .3;mix-blend-mode: multiply;fill: none;stroke: #422323;stroke-width: 2 } 
									.s12 { opacity: .2;mix-blend-mode: multiply;fill: none;stroke: #422323;stroke-width: 2 } 
									.s13 { opacity: .5;fill: none;stroke: #422323;stroke-linecap: round;stroke-linejoin: round;stroke-width: 2 } 
									.s14 { opacity: .9;fill: none;stroke: #422323;stroke-linecap: round;stroke-linejoin: round;stroke-width: 2 } 
									.s15 { opacity: .7;fill: none;stroke: #422323;stroke-linecap: round;stroke-linejoin: round;stroke-width: 2 } 
									.s16 { opacity: .3;fill: none;stroke: #422323;stroke-width: 2 } 
									.s17 { opacity: .8;fill: none;stroke: #422323;stroke-width: 2 } 
									.s18 { opacity: .5;fill: none;stroke: #422323;stroke-width: 2 } 
									.s19 { fill: #919395;stroke: #5b5b5d } 
									.s20 { fill: #fac3a2;stroke: #422323 } 
									.s21 { fill: #9d8d85;stroke: #231f20 } 
									.s22 { fill: none;stroke: #422323;stroke-width: .5 } 
									.s23 { fill: #b9bbbd;stroke: #422323 } 
									.s24 { fill: #806465 } 
									.s25 { fill: #fac3a2;stroke: #422323;stroke-linecap: round;stroke-linejoin: round } 
									.s26 { mix-blend-mode: multiply;fill: url(#g1) } 
									.s27 { mix-blend-mode: multiply;fill: url(#g2) } 
									.s28 { opacity: .7;mix-blend-mode: multiply;fill: #806465 } 
									.s29 { opacity: 1;fill: #422323 } 
									.s30 { opacity: 1;fill: #fefefe } 
									.s31 { opacity: .6;mix-blend-mode: multiply;fill: #7b3801 } 
									.s32 { opacity: .4;mix-blend-mode: multiply;fill: #7b3801 } 
									.s33 { opacity: .3;mix-blend-mode: multiply;fill: #ee3835 } 
									.s34 { opacity: .2;mix-blend-mode: multiply;fill: #7b3801 } 
									.s35 { opacity: .2;mix-blend-mode: multiply;fill: url(#g3) } 
									.s36 { opacity: .2;mix-blend-mode: multiply;fill: url(#g4) } 
									.s37 { opacity: .2;mix-blend-mode: multiply;fill: url(#g5) } 
									.s38 { opacity: .4;mix-blend-mode: multiply;fill: url(#g6) } 
									.s39 { opacity: .4;mix-blend-mode: multiply;fill: url(#g7) } 
									.s40 { opacity: .4;mix-blend-mode: multiply;fill: url(#g8) } 
									.s41 { opacity: .4;mix-blend-mode: multiply;fill: url(#g9) } 
									.s42 { opacity: .3;mix-blend-mode: multiply;fill: url(#g10) } 
									.s43 { opacity: .3;mix-blend-mode: multiply;fill: url(#g11) } 
									.s44 { opacity: .3;mix-blend-mode: multiply;fill: url(#g12) } 
									.s45 { opacity: .4;mix-blend-mode: multiply;fill: url(#g13) } 
									.s46 { opacity: .3;mix-blend-mode: multiply;fill: url(#g14) } 
									.s47 { opacity: .4;mix-blend-mode: multiply;fill: url(#g15) } 
									.s48 { opacity: .4;mix-blend-mode: multiply;fill: url(#g16) } 
									.s49 { opacity: .5;fill: none;stroke: #f6f3f3;stroke-linecap: round;stroke-linejoin: round;stroke-width: .8 } 
									.s50 { opacity: .9;fill: none;stroke: #f6f3f3;stroke-linecap: round;stroke-linejoin: round;stroke-width: .8 } 
									.s51 { opacity: .7;fill: none;stroke: #f6f3f3;stroke-linecap: round;stroke-linejoin: round;stroke-width: .8 } 
									.s52 { opacity: .5;fill: none;stroke: #422323;stroke-linecap: round;stroke-linejoin: round;stroke-width: .8 } 
									.s53 { opacity: .4;mix-blend-mode: multiply;fill: url(#g17) } 
									.s54 { opacity: .3;fill: #fefefe } 
									.s55 { opacity: .4;mix-blend-mode: multiply;fill: url(#g18) } 
									.s56 { fill: #fefefe } 
									.s57 { opacity: .8;fill: #fefefe } 
									.s58 { opacity: .5;fill: #fefefe } 
									.s59 { opacity: .4;mix-blend-mode: multiply;fill: url(#g19) } 
									.s60 { opacity: .3;mix-blend-mode: multiply;fill: url(#g20) } 
									.s61 { fill: none;stroke: #231f20;stroke-width: .5 } 
									.s62 { opacity: .3;mix-blend-mode: multiply;fill: #231f20 } 
									.s63 { fill: none;stroke: #231f20;stroke-width: .8 } 
									.s64 { fill: none;stroke: #231f20;stroke-width: .4 } 
									.s65 { opacity: .6;mix-blend-mode: multiply;fill: #968980 } 
									.s66 { fill: #c2b6b1 } 
									.s67 { fill: #b1a39d } 
									.s68 { fill: #bcb0aa } 
									.s69 { fill: none;stroke: #5b5b5d;stroke-width: .5 } 
									.s70 { fill: #b9bbbd;stroke: #231f20;stroke-width: .5 } 
									.s71 { opacity: .4;mix-blend-mode: multiply;fill: url(#g21) } 
									.s72 { opacity: .4;mix-blend-mode: multiply;fill: url(#g22) } 
									.s73 { opacity: .4;mix-blend-mode: multiply;fill: url(#g23) } 
									.s74 { opacity: .4;mix-blend-mode: multiply;fill: url(#g24) } 
									.s75 { opacity: .4;mix-blend-mode: multiply;fill: url(#g25) } 
									.s76 { opacity: .4;mix-blend-mode: multiply;fill: url(#g26) } 
									.s77 { opacity: .4;mix-blend-mode: multiply;fill: url(#g27) } 
									.s78 { opacity: .4;mix-blend-mode: multiply;fill: url(#g28) } 
									.s79 { opacity: .4;mix-blend-mode: multiply;fill: url(#g29) } 
									.s80 { opacity: .4;mix-blend-mode: multiply;fill: url(#g30) } 
									.s81 { opacity: .4;mix-blend-mode: multiply;fill: url(#g31) } 
									.s82 { opacity: .4;mix-blend-mode: multiply;fill: url(#g32) } 
									.s83 { opacity: .4;mix-blend-mode: multiply;fill: url(#g33) } 
									.s84 { opacity: .4;mix-blend-mode: multiply;fill: url(#g34) } 
									.s85 { opacity: .4;mix-blend-mode: multiply;fill: url(#g35) } 
									.s86 { opacity: .4;mix-blend-mode: multiply;fill: url(#g36) } 
									.s87 { opacity: .4;mix-blend-mode: multiply;fill: url(#g37) } 
									.s88 { opacity: .4;mix-blend-mode: multiply;fill: url(#g38) } 
									.s89 { opacity: .4;mix-blend-mode: multiply;fill: url(#g39) } 
									.s90 { opacity: .4;mix-blend-mode: multiply;fill: url(#g40) } 
									.s91 { opacity: .4;mix-blend-mode: multiply;fill: url(#g41) } 
									.s92 { opacity: .4;mix-blend-mode: multiply;fill: url(#g42) } 
									.s93 { opacity: .4;mix-blend-mode: multiply;fill: url(#g43) } 
									.s94 { opacity: .4;mix-blend-mode: multiply;fill: url(#g44) } 
									.s95 { opacity: .4;mix-blend-mode: multiply;fill: url(#g45) } 
									.s96 { opacity: .4;mix-blend-mode: multiply;fill: url(#g46) } 
									.s97 { opacity: .4;mix-blend-mode: multiply;fill: url(#g47) } 
									.s98 { fill: none;stroke: #132430;stroke-width: 8 } 
									.s99 { fill: #3f5968;stroke: #132430 } 
									.s100 { fill: none;stroke: #132430 } 
									.s101 { fill: #fefefe;stroke: #132430 } 
									.s102 { fill: #95a1aa } 
									.s103 { fill: #d3d9dd } 
									.s104 { fill: #8499a6 } 
									.s105 { opacity: .2;fill: #8499a6 } 
								</style>
								<path id="Path_777" fill-rule="evenodd" class="s0" d="m978.9 356.2q0.9 0.7 1.7 1.3c-6.8 21.3-24.1-2.2-34.8 8.5-11.4 11.3-29.8 8.5-43.4 17-13.1 8.1-30.9 6.1-42.2 18-0.8 9.4 12.4 6.3 12.1 14.7-12.2 15.8-43.2-9.6-49.2 24.3 17.9-0.8 34.7-1.4 51.6-2.3 4.1-0.1 8.1 0.1 10.3 3.8 2.6 4.6-0.3 6.7-4.3 8.7-7.6 3.9-5.5 8.6-0.7 13.7q1.2 1.3 2.4 2.7 1.1 1.4 2.1 2.9 1 1.5 1.9 3.1 0.8 1.6 1.5 3.3c2.3 7-1.7 16.8 7.9 20.4 7.9 3 14.9-2.9 22.5-4.2q5.4-1.5 10.9-2.3 5.6-0.8 11.2-1 5.6-0.1 11.2 0.4 5.6 0.5 11.1 1.6c-43.3 56-86.8 108.7-160.6 124.9q-10.5 2.6-20.9 6.1-10.3 3.4-20.4 7.5-10.1 4.2-19.8 9.1-9.7 4.9-19.1 10.5-7 3-14.1 5.8-7.1 2.7-14.3 5.2-7.3 2.4-14.6 4.5-7.3 2.1-14.7 3.9-5.4 0.9-10.6 2.7-5.2 1.8-10.1 4.3-4.8 2.6-9.2 5.9-4.5 3.2-8.3 7.1c7.2 27.4 4.3 32-16.1 49.1q-9.8 7.2-20.1 13.6-10.4 6.3-21.2 11.8-10.9 5.4-22.1 9.9-11.3 4.5-22.9 8c-41.7 15.7-83 34.2-129.3 36.2-15.9 0.7-22.7-3.3-23.4-17.2-0.5-8.9-10.6-14.5-7.4-23.7 5.2-4.7 9.7-0.6 14.3 0 7.7 1.2 14.6 0.5 14-9.4-0.5-8.5-3.1-14.7-14.9-11.6-19.2 4.9-39 7.9-62.1 12.4 2.8-14.2 19.5-27 6-35.4-13.4-8.4-5.6-24.8-17.1-31.4-8.4-4.7-9-13.5-13.2-20-3.7-6.1-8.3-11.6-13.5-16.4-5.3-4.9-11.3-8.9-17.7-12-6.4-3.1-13.3-5.3-20.3-6.4-7.1-1.2-14.3-1.4-21.4-0.5-19.6 1.9-41.8 2-50.7-13.3-11.3-19.4-26-18.2-42.4-20.3-13.5-1.8-29.6-1.7-23.1-23.7q0.1-1 0-2.1-0.1-1-0.4-2-0.4-1-0.9-1.9-0.6-0.9-1.4-1.6c-11.3-8.6-9.3-16.7 1.3-23.1 10.7-6.4 7-13 4.5-22.2-6.9-25.9-26.5-29.3-51-28.8 5.1-11.8 18.4-21.7-0.2-31.2-10.3-5.3-6.1-14 2.7-20.6 4.5-3.4 11-4.8 10.1-15.2-1.1-12.6-26.9-3.7-16.2-20.3 8-12.4 1.7-20.1-4-29.1-5.8-8.9 7.4-15.2 2.6-24.8-7.2-14.5 9.3-10.6 14-16.1q2.2-3.6 5.1-6.8 2.9-3.1 6.4-5.5 3.6-2.4 7.5-4.1 3.9-1.6 8.1-2.4 1.5-0.3 2.8-1.1 1.3-0.8 2.2-2 0.9-1.2 1.3-2.7 0.4-1.4 0.3-2.9c-0.7-13.9 11.8-20.4 18.4-32.3-21.7-5-33.9 17.3-56.6 18.7 11-16.5 28.3-22.4 33.7-38.8-10.3-4.1-16.4 4.4-23.6 8-11.9 5.8-19.1 3.4-22.4-9.3 14.4-4.5 18.6-26.6 37.1-22.8 25.4 5.1 43.7-13.8 66.2-19.2q8.4-2.6 16.8-5.5 8.3-2.8 16.5-6 8.2-3.1 16.3-6.5 8.1-3.4 16.1-7.1 8.6-4 17.3-7.5 8.7-3.6 17.6-6.7 8.8-3.2 17.8-6 9-2.8 18.1-5.3 5.6-1 11.2-2.5 5.5-1.5 10.9-3.6 5.4-2.1 10.6-4.6 5.1-2.6 10-5.7c10-6.6 27 0.6 36.6-12.1l0.2 0.4v0.1c23.6-6.2 47.1-12.7 70.9-18.2 12.6-2.9 17-7.6 4.8-16-5.2-3.6-4.5-3.4-0.6-7.2q4.5-3.6 9.5-6.6 5-3 10.3-5.3 5.4-2.3 11-3.8 5.6-1.6 11.4-2.4c6.9 0.3 5.8-6.6 10.7-6.9 8-0.5 13.8-13.6 23.6-4.1 3-11.4 8.6-16 19.3-7.5 18.3-17 43.8-3.1 63.4-15 13.7-8.3 27.2-2.6 40.1 3.4 3.8 1.6 7.7 2.6 11.7 3.1 4 0.5 8.1 0.4 12.1-0.2 4-0.7 7.9-1.9 11.6-3.6 3.7-1.7 7.1-3.9 10.2-6.5q5.3-6 11.2-11.3 5.9-5.2 12.4-9.8 6.5-4.6 13.5-8.5 6.9-3.8 14.3-6.8 3.2 0.3 6.5 0.3 3.3 0 6.5-0.4 3.3-0.4 6.5-1.2 3.2-0.7 6.2-1.8 2.3 0.2 4.5 0.5 2.1 0.3 4.3 0.8 2.2 0.4 4.3 1 2.2 0.5 4.3 1.2c7.2 2.4 10.7-3.3 16.3-3.5 3.8-0.1 9.3-4 10.9-2.6q1 0.9 2.1 1.7 1.2 0.9 2.3 1.6 1.2 0.7 2.5 1.3 1.2 0.5 2.6 1-0.6 0.6-1.1 1.3-0.6 0.6-1.1 1.3-0.5 0.6-1 1.3-0.5 0.7-0.9 1.4 2.5-0.2 5-0.7 2.4-0.5 4.8-1.3 2.4-0.8 4.7-1.8 2.3-1 4.5-2.3c7.3-2.7 14.4-7.8 21.8-10.2q1.6-0.5 3.2-0.9 1.5-0.4 3.1-0.8 1.6-0.3 3.2-0.6 1.6-0.4 3.3-0.6 0.4 0 0.8 0.1 0.4 0.1 0.8 0.1 0.4 0.1 0.8 0.2 0.4 0.1 0.8 0.1c-6.6 12-19.1 18.4-18.4 32.3q0.1 1.5-0.4 2.9-0.4 1.5-1.3 2.7-0.9 1.2-2.2 2-1.3 0.8-2.8 1.1-4.2 0.8-8.1 2.4-3.9 1.7-7.5 4.1-3.5 2.5-6.4 5.6-2.9 3.1-5.1 6.7c-4.7 5.5-21.2 1.6-14 16.2 4.8 9.6-8.3 15.9-2.6 24.8 5.7 8.9 12 16.6 4 29-10.7 16.6 15.1 7.7 16.2 20.3 0.9 10.4-5.6 11.8-10.1 15.2-8.8 6.6-13.1 15.3-2.7 20.6 18.7 9.6 5.3 19.4 0.2 31.3 24.5-0.6 44.1 2.8 51 28.7 2.5 9.3 6.3 15.9-4.4 22.3-10.7 6.3-12.6 14.4-1.3 23q0 0.1 0 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.1 0.1-0.1 0.3-0.2 0.5-0.1 0.3-0.1 0.6-0.1 0.2-0.1 0.5 0 0.3 0.1 0.5 0.1 0.5 0.3 0.9 0.2 0.4 0.6 0.7 0.3 0.3 0.7 0.5 0.4 0.2 0.9 0.3 0.1 0.4 0.1 0.7 0.1 0.3 0.1 0.7 0 0.3 0 0.7-0.1 0.3-0.1 0.7c-6.5 21.9 9.6 21.8 23 23.6 16.4 2.1 31.2 0.9 42.5 20.3 8.9 15.3 31.1 15.3 50.7 13.3q3.6-0.5 7.1-0.4zm-613.8-209.7c0 0.3-0.1 0.6-0.1 0.6zm-231.1 133c-0.5-1.1-1.2-2-2.1-2.8-0.9-0.7-2-1.3-3.1-1.7-1.1-0.3-2.3-0.5-3.5-0.4-1.2 0.1-2.3 0.5-3.4 1-5.8 3.2-2.6 8-1 13.2 3-1 1.8 9.2 6.1 3 2.5-3.5 11.8-5.1 7-12.3zm47.6-9q-1.1-1.2-2.3-2.4-1.2-1.1-2.5-2.2-1.2-1-2.6-2-1.4-0.9-2.8-1.7c-3.9 1.6-3.6 4.4-3.1 7.2 0.8 4 2.3 7.8 7.6 6.3 2.8-0.7 7-3.1 5.7-5.2zm29.7-29.7c4.3-2.4 8.3-5.2 12-8.5 3.6-3.3 6.9-6.9 9.7-11 2.9-4 5.2-8.3 7.1-12.8q-8.1 3.6-16.4 6.9-8.3 3.3-16.7 6.3-8.4 3-16.9 5.6-8.5 2.7-17.2 5c-7.4 2.2-14.8 4.6-22.1 7.3-5.6 2.2-1.7 18.5-15.1 10.1-1.1-0.7-3.3 4.9-0.6 6.9 5.6 4.2 9.3 12.6 19.4 6.2q5.1-2.7 10.4-5.1 5.3-2.4 10.8-4.4 5.4-2 11-3.7 5.5-1.7 11.2-3.1c4.6-1.4 9.2-3.3 13.4-5.7zm130.4-58.4q0.1-0.6 0-1.2-0.1-0.6-0.3-1.2-0.2-0.5-0.5-1c-3.1-1.5-6.8-4.2-9.9-0.4-0.8 1.1 0.2 3.5 0.4 5.3q1.1 0.9 2.4 1.3 1.3 0.5 2.7 0.4 1.4 0 2.7-0.6 1.3-0.5 2.3-1.4 0.2-0.7 0.2-1.2zm31.8-9.1q-0.6-0.4-1.2-0.7-0.6-0.3-1.2-0.6-0.6-0.3-1.2-0.5-0.6-0.3-1.3-0.5c-0.4 2.6-1.8 5.5-1.1 7.8 1 3.3 4 2.3 5.7 1.4 3.4-2.7 2.7-5.1 0.3-6.9zm51 576.8c-5.4-12.1-13.5-8-21.7-3.9-3.6 3.7-12.5 2.9-10 11.7 2.5 8.4 15.8 9.9 28.8 3.4 4.6-2.3 5.3-5.9 2.9-11.2zm38.3-6.6c2.9-0.5 5.7-1.4 8.3-2.7 2.6-1.4 5-3.1 7.1-5.1 2.1-2 3.9-4.3 5.3-6.9-14.2 4.9-24.5-0.9-30.8 10q-0.1 0.7 0 1.3 0 0.7 0.2 1.3 0.2 0.6 0.5 1.2 0.3 0.6 0.7 1.1c2.9 0.3 5.9 0.3 8.7-0.2zm162.1-55.2c-3-3.3-5.5-7.2-11.3-5.3-8.3 2.8-16.8 5-25 7.5-26.5 7.9-52.1 18.3-81 28.9 2.9 1.9 6 3.5 9.3 4.5 3.2 1 6.7 1.6 10.1 1.5 3.5 0 6.9-0.5 10.2-1.6 3.3-1 6.4-2.6 9.2-4.6 13.7-8.8 29.6-21.9 43.6-19.1 16.8 3.3 24.5-5.2 34.9-11.8zm223.5-227.1q-0.3 0.9-0.5 1.8-0.1 0.9-0.1 1.9 0.1 0.9 0.3 1.8c0.7 2.5 3.3 5 5.9 3.5 3.8-2.1 3.2-6 1.9-9.6-1.8-2.8-4.7-3.4-6.6-1.1q-0.6 0.8-0.9 1.7zm-50 90q0.2-0.6 0.3-1.1 0.1-0.6 0.2-1.1 0.1-0.6 0.1-1.2 0.1-0.5 0.1-1.1c-7-6.5-9.1 1.2-12.2 4.8-3.1 3.6 0.5 4.9 3.1 5.5 4.7 1.1 7.1-2 8.4-5.8zm22-12.9c-5.2 1-15.2-2.6-20.8 7.9 15.1 21.4 16.8-2.8 20.8-7.9zm33.3-152.1q0.8-0.7 1.3-1.6 0.6-0.9 0.7-1.9 0.2-1-0.1-2.1c-0.3-2.2-2.1-3.7-3.4-2.4q-0.7 0.8-1.3 1.6-0.5 0.8-1 1.7-0.5 0.9-0.8 1.9-0.4 0.9-0.7 1.9c-0.5 1.9 1.1 2.8 3.4 1.8q1-0.3 1.9-0.9z"/>
								<g id="Layer 1">
									<path id="&lt;Path&gt;" class="s1" d="m868 395.9c0 133-161.6 240.8-360.8 240.8-199.2 0-360.7-107.8-360.7-240.8 0-132.9 161.5-240.7 360.7-240.7 199.2 0 360.8 107.8 360.8 240.7z"/>
									<path id="&lt;Path&gt;" class="s2" d="m853.9 419.8c1.5-3.4 35.4-44.6 38.8-45.5 3.4-1 27.2 22.8 27.2 22.8v4.8"/>
									<path id="&lt;Path&gt;" class="s2" d="m293.3 464.1c-0.4-25.7 1.5-17.9 5.9-25.7 4.3-7.7 0.4-13.6 1.4-22.8 1-9.2 4.4-11.1 9.7-17.9 5.3-6.8 18-9.2 33-18.4 15-9.3 19.4-3.9 43.1-4.9 23.8-1 29.1 0.5 59.2 2 30.1 1.4 37.3 4.3 43.2 4.3 5.8 0 241.9-5.3 247.3-5.3 5.3 0 177.4 21.8 177.4 21.8l26.2 43.6-24.2-4.8-12.6 4.4 1.9 6.3c26.2 47 15 95.5 4.9 106.6-10.2 11.2 54.3-1.4 49.4 0.5-4.8 2-362.7 100.4-407.8 115-45.1 14.5-271.5-88.3-279.8-96.1-8.2-7.7 64.5-38.8 64.5-38.8"/>
									<path id="&lt;Path&gt;" class="s2" d="m419.6 497.2c0 44.6-34.3 80.8-76.6 80.8-42.3 0-76.5-36.2-76.5-80.8 0-44.6 34.2-80.8 76.5-80.8 42.3 0 76.6 36.2 76.6 80.8z"/>
									<path id="&lt;Path&gt;" class="s2" d="m608.8 563.6c0 56.4-38.2 102.1-85.4 102.1-47.1 0-85.3-45.7-85.3-102.1 0-56.4 38.2-102.1 85.3-102.1 47.2 0 85.4 45.7 85.4 102.1z"/>
									<path id="&lt;Path&gt;" class="s3" d="m196.9 635.9c0 0 41-1 40 3-1 4 33 24 33 24l-86-12z"/>
									<g id="&lt;Group&gt;">
										<g id="&lt;Group&gt;">
											<path id="&lt;Path&gt;" class="s4" d="m239.9 632.5l35 8.8c0 0 15 12.7 15.8 13 0.7 0.2-4.3 9-9.8 11-5.5 2-18.2-3.8-20-4.5-1.7-0.8-5.5-5-5.5-5 0 0-7.5-2.3-9.5-2.3-2 0-10.7-4.5-12-5.7-1.2-1.3-1.5-7-1.2-8.8 0.2-1.7 6.2-5.7 6.2-5.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m265.2 551.3c2 1.3-0.3 30-1.7 33.6-1.3 3.7-2.6 32.4-2.3 36.4 0.3 4 10 15.3 10 15.3l13 12c0 0-0.7 4.3-0.7 5.3 0 1-1.3 3.4-0.3 5.4 1 2-3 4-4 4-1 0-6-2.7-6.3-4-0.4-1.4-4.7-0.7-7-1-2.4-0.4-5-3.7-5.4-5.7-0.3-2-13.3-8.7-17-9.3-3.6-0.7-4-10-4-10 0 0 1.7-4.4 3-7 1.4-2.7 0.7-30.4-3.3-39.7-4-9.3-5.3-29.7-5.3-29.7l-0.4-4.6c0 0 29.7-2.4 31.7-1z"/>
											<path id="&lt;Path&gt;" class="s4" d="m256.2 425.3c0 0 3 1.3 4.7 3 1.6 1.6 2.6 9.6 3.3 11.6 0.7 2 2 7.4 3 9 1 1.7-0.3 2.4-2.3 4-2 1.7-0.4 3.7 0 5 0.3 1.4 1 18.7 1 19.7 0 1 1.6 2.3 1.6 2.3 0 0 0.7 1.7-0.3 3.4-1 1.6 1.7 37.3 1.7 40.6 0 3.4-2.7 4.7-2.7 4.7l-0.7 11.3 1.4 2-0.4 11.4-1 0.6c0 0-4.3 3-8.3 4.4-4 1.3-28-6-28-6 0 0-7.7 0.6-10 0.6-2.3 0-1-8.3-1-8.3l1-1.3-0.7-5.7c0 0-1.6-21.7-2-22.7-0.3-1-3.6-23-3.6-25l-1 3c0 0-1.4 5.4-1.4 6.4 0 1-2 9-4 17.3-2 8.3-8 17-8 17 0 0 0 3 0.4 5.3 0.3 2.4-0.7 0.7-2 0.7-1.4 0-13 12.7-17 14.3-4 1.7-13.7-1-13.7-1l0.3-4.6-2.3-12.7-0.3-6c0 0-0.7-1.3-3.7-2.3-3-1-5-17.4-5-17.4l-1.7-8.6 3.4-3.4c0 0-1.4-12-1.4-13.6 0-1.7 2.7-4 2.7-4l-3.7-46.4 1-10.6 0.7-7.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m162.9 329.3c-1.4 6-37.7 18-37.7 18l-2-0.7c0 0-2.7-3.7-11-8-8.3-4.3-23.7-26.7-24.3-28.7-0.7-2 8.3-14 9-11.3 0.6 2.7 17.6 13.7 24.3 16.3 6.7 2.7 8 2.9 8 2.9l22-15.5c0 0 13 21 11.7 27z"/>
											<path id="&lt;Path&gt;" class="s4" d="m128.9 317.9c0 0 4.6 3 5.3 6.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m88.5 309.6c-2 3-16.3-9.7-17.6-12-1.4-2.3 2.6-14.3 2.6-14.3 0 0 6-6.4 6.7-5.4 0.7 1 6.3 4.4 6.3 4.4-7-16.4 2-17.4 2-14.4 0 3 7.7 20 9 23.4 1.4 3.3-0.6 9.3-0.6 9.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m76.2 281l-4-6.7c0 0-2.3-5.8-3.3-8.5-1-2.8 1-3.5 2.3-3.5 1.2 0 6.2 9.5 6.2 9.5l4.3 7.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m70.9 292.3c0 0-8.9-10.8-9.7-12.5-1.8-4 0.2-4.5 0.2-4.5-1.5-2-1.7-6 0.5-6.5 2.3-0.5 6.5 5.5 6.5 5.5l6.8 7.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m72.4 298.8c-1-0.5-6.7-5.8-6.7-5.8l-3.8-8.2c0 0 1.5-4 3.8-1.8 2.2 2.3 5.7 9.3 5.7 9.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m61.9 275c0 0 9.3 8.8 11 12.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m74.2 285.3l1.7-2.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m87.4 283l1.5 4.3c0 0-3.2 6.2 0.3 13"/>
											<path id="&lt;Path&gt;" class="s4" d="m304.9 302.8l9.8 5.2c0 0 30.7 0 34 0.3 3.2 0.2 27.2-0.5 27.2-0.5 0 0 1 13.2-1.2 14.2-2.3 1-50 9-55.8 8.5-5.7-0.5-6.5-0.5-6.5-0.5 0 0-11-7-13.2-7.5-2.3-0.5 2.5-19.5 5.7-19.7z"/>
											<path id="&lt;Path&gt;" class="s4" d="m313.9 310.3c0 0-1.2 3.5-1 5.2"/>
											<path id="&lt;Path&gt;" class="s4" d="m375.2 308.3l7.5-13.5c0 0 5.2-6.8 4.2-8-1-1.3 7.8 1 0.8 12.5l1 0.7 8.2-3c0 0 1.8 13.5-0.2 16.8-2 3.2-14.3 7.2-14.3 7.2l-7.5 1"/>
											<path id="&lt;Path&gt;" class="s4" d="m392.2 298.8l5.7-3.8 12.5-4.5c0 0 2.8 2.8 0.3 4.8-2.5 2-8.3 4.5-8.3 4.5l-5.5 4.2"/>
											<path id="&lt;Path&gt;" class="s4" d="m395.9 303l6.8-3.7 8.5-4.3 4.5-0.5c0 0 3.5 2.8-1.5 5.5 0 0 2.7 2.5-2.5 5l-14 5.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m396.4 310.5l4.8-0.7c0 0 2.7-1.8 6.7-3.3 4-1.5 3.3 1 3.3 1l-6 5.5-10.3 2.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m397.2 307.3l10.7-5.8 6.3-1.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m386.2 313c2.5-3.7 0.2-9.7 0.2-9.7l1.3-4.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m394.7 300.3c0 0 1.2 1.2 1.2 3"/>
											<path id="&lt;Path&gt;" class="s4" d="m376.7 317.5l2.7 2"/>
											<path id="&lt;Path&gt;" class="s4" d="m251.7 267.3v1.5l22.5 3.5c0 0 17 16.5 20 20.5 3 4 12.5 8.5 12.5 8.5l-0.5 2.5-3.5 20-6.5 6-13.5-8-6.5 2-14.5 85-3.5 5v7.5l-6 8c0 0-17 6-49 1-32-5-49.5-16.5-49.5-16.5 0 0 4.5-9.5 4.5-11 0-1.5 2.5-9.5 2.5-9.5l4-24 2.5-3c0 0 1-4.5 0.5-9.5-0.5-5 1.5-28 1.5-28 0 0-5.5 4.5-8.5 5-3 0.5-23-23-23-23 0 0 36.5-38 39.5-37.5 3 0.5 32.5-6 32.5-6l2-1.5 5.5-1.5z"/>
											<g id="&lt;Group&gt;">
												<path id="&lt;Path&gt;" class="s4" d="m251.9 198c0 0 16.2 10.3 10.2 23-5.9 12.7-0.8 0.3-0.8 0.3l-13.8-20.7"/>
												<path id="&lt;Path&gt;" class="s4" d="m249.2 254.3c-6.5 10.9-3.4 17.3-1.8 21.9 1.7 4.7-6.2 9.9-16.1 7.5-10-2.4-16.5-4.4-13.9-12.4 2.6-7.9-4.4-24.5-4.4-24.5"/>
												<g id="&lt;Group&gt;">
													<g id="&lt;Group&gt;">
														<path id="&lt;Path&gt;" class="s4" d="m252.9 202.5c0 0 10.8 7.2 9.2 18.5-1.5 11.3-2 13.3-2 13.3 0 0 2.5-0.7 3.1 1.4 0.6 2.1-3.7 6-3.2 7.8 0.5 1.7-1.4 5.4-1.9 4.9-0.6-0.5-2.3 6.7-3.2 11.3-1 4.7-10 10.4-13.6 11.8-3.5 1.5-6.7-0.3-6.7-0.3 0 0-11.8-6.9-16-10.5-4.1-3.6-5.2-8.1-6-11.8-0.9-3.7-1.7 1.3-6.2-7.8-4.5-9.2 1.1-15.1 3.1-13.2 2 1.9 1.2 0.5 1.2 0.5 0 0 0.7-11.3 1.2-17.7 0.4-6.4 7-12.6 18.8-14.9 11.9-2.4 21.5 6.5 21.5 6.5"/>
														<path id="&lt;Path&gt;" class="s5" d="m245.1 269c0 0-2.6 4.8-8.6 3.2-5.9-1.6-6.7-4.5-6.7-4.5"/>
													</g>
													<path id="&lt;Path&gt;" class="s6" d="m257.7 227.4c-0.2-0.4-5.5-2-7.5-2.2-2-0.3-3.1 1.1-3.1 1.1 0 0-0.3-0.5-0.2-1.4 0-0.8 0.5-2.6 3.6-1.9 3.2 0.8 5.5 1.3 7.1 2.1 1.6 0.8 1.2 4.8 1.2 4.8 0 0-0.9-2.1-1.1-2.5z"/>
													<path id="&lt;Path&gt;" class="s6" d="m235.6 222.7c0 0 1.1 2.1-0.6 2.3-1.6 0.3-9-0.4-11 0.2-2 0.7-3.3 2.2-3.3 2.2l-0.3-0.3c0 0 2.2-3.9 4.7-4.6 2.4-0.7 10.6-0.1 10.6-0.1"/>
													<path id="&lt;Path&gt;" class="s4" d="m255.3 204.3c0 0 5.9 1.1 7.8 8.3 1.9 7.1-2 14.4-2 14.4 0 0 0.8-10.5-0.9-15.3-1.7-4.9-4.9-7.4-4.9-7.4z"/>
													<path id="&lt;Path&gt;" class="s4" d="m251.1 201.3c0 0-4.8-2.6-8.7-2.5-3.9 0-6.6-0.7-12.7-1.5-6.2-0.9-13.9 6.3-14.6 8.8-0.6 2.5-1.4 10.3-0.4 11.5 1 1.3-2.9 7.6-2.7 9.7 0.1 2.2-0.1 3.5-0.1 3.5l-1.7-2c0 0-1.3-12.8-0.5-16.9 0.9-4.2 5.9-10.6 9.1-12.4 3.2-1.9 6.2-8.7 17.5-8.4 11.4 0.4 19.4 3.7 15.1 9.6"/>
													<path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="s7" d="m224.1 251.5c0-2.5 5.2-3.1 7.4-5 2.1-1.8 4.2-1.9 5.7-1.9 1.5 0 2.1 0.6 2.1 0.6 0 0 1.1 1.2 1.8 0.5 0.7-0.6 2.6-0.5 4.1 0.7q0 0 0.2 0.2c0.4 0.6 1.4 2 3.3 2.5 2.3 0.5 2.7 2.4 2.8 3.3 0.1 0.9-0.3 1.9-0.3 1.9 0 0 1.2 2.1 0.6 6.9-0.5 4.9-5.6 6.9-5.6 6.9 0 0-3.6 4.2-8 4-4.4-0.3-4.9-1.2-6.8-3-1.9-1.8-6.3-3.5-7-5.9-0.7-2.4-0.3-9.2-0.3-11.7zm5.7 8.6c1.7-1.2 4.3-2.7 8.8-2.7 4.4 0 6.1 0.6 6.9 3.2 0.9 2.7 3 2.6 3.6 0.6 0.7-2.1 2.1-8.5-0.2-8 0 0-1.7 0.1-3.1-1-1.3-1.1-2.3-2.1-4.4-1.8-2.1 0.2-2.4-0.2-4-0.8-1.5-0.6-3.1-0.3-6.1 1.1-2.9 1.4-5.2-1.8-5.1 1.8 0.1 3.6 2 8.8 3.6 7.6z"/>
													<path id="&lt;Path&gt;" class="s8" d="m256.1 232c0 0-0.1-1-0.8-1.5-0.7-0.4-4.6-1-5.9-1-1.3 0-2.7 1.3-2.7 1.3l-0.3-0.1c0 0 0.3-1.2 1.9-1.5 1.6-0.3 6 0.4 7.1 1 1.1 0.6 0.9 1.6 0.9 1.6"/>
													<path id="&lt;Path&gt;" class="s8" d="m253.8 230.1c0 0-0.2 2-2.3 1.9-2.2-0.1-2.2-2.5-2-2.8 0.2-0.2 3.9 0.5 3.9 0.5"/>
													<path id="&lt;Path&gt;" class="s8" d="m245.6 229.2c0 0 0.1-1.1 2.9-1.2 2.8-0.1 5.1 1.3 5.1 1.3-6.3-2.3-8-0.1-8-0.1z"/>
													<path id="&lt;Path&gt;" class="s8" d="m234.8 229.3c0 0-1.4 0.4-2.1-0.2-0.6-0.7-2.1-0.9-4.2-1-2.2 0-2.3 0.5-3.6 1.3-1.2 0.8-3.3 0.2-3.3 0.2 0 0 0.7-0.1 1.5 0 0.9 0 2.1-1.4 4.6-1.7 2.6-0.3 4 0.1 4.9 0.7 0.9 0.5 2 0.6 2 0.6"/>
													<path id="&lt;Path&gt;" class="s8" d="m234.1 228c0 0-0.4-1.2-1.8-1.3-1.4 0-4.6 0.8-6.3 0.9-1.7 0.1-3.2 1.4-3.2 1.4 0 0 1-1.4 3.1-1.6 2.1-0.2 4.1-0.5 5.6-0.9 1.5-0.3 2.8 1.2 2.7 1.7"/>
													<path id="&lt;Path&gt;" class="s8" d="m230.8 228.1c0 0 0.6 2-1.8 2.4-2.3 0.4-2.9-1.5-2.8-2.1 0.1-0.6 2.8-0.7 4.5-0.4"/>
													<path id="&lt;Path&gt;" class="s8" d="m255.3 231.7c-0.4 0.3-2.8 0.2-2.2 0 0.6-0.2 1-1.4 1-1.4 1.7 0.8 1.5 1.1 1.2 1.4z"/>
													<path id="&lt;Path&gt;" class="s8" d="m249.2 229.7c0 0 0 1.1 0.4 1.6 0.4 0.5 0.4 0.5 0.4 0.5 0 0-1-0.3-1.9-0.7-0.9-0.4-1.1-0.3-1.1-0.3 0 0 0.8-1.1 2.1-1.1"/>
													<path id="&lt;Path&gt;" class="s8" d="m231 228.6c0.7 0.1 2 0.5 1.6 1.1-0.5 0.6-3.2 0.9-2.3 0.5 0.8-0.4 0.7-1.6 0.8-1.5"/>
													<path id="&lt;Path&gt;" class="s8" d="m226 229c0 0 0.4 0.8 0.6 1.1 0.3 0.3-2-0.2-2.1-0.4"/>
													<path id="&lt;Path&gt;" class="s8" d="m248.6 253.8c0 0 0.2 0.1-0.1 0.4-0.3 0.3-4.4-0.4-5.3-0.7-0.9-0.3-3-0.1-4 0.2-0.9 0.2-2.7-0.7-3.5-1-0.8-0.3-6.7-0.1-7.4-0.4-0.7-0.3 0-0.7 0-0.7 0 0 1.1 0.6 2.7 0.7 1.6 0.1 4.6-0.4 5.9 0.5 1.4 0.9 2.8 0.2 4 0.2 1.2 0 3 0.2 4.2 0.7 1.2 0.6 3.4 0.1 3.4 0.1"/>
													<path id="&lt;Path&gt;" class="s8" d="m243.4 256.3l-0.6 0.3c0 0 0.8 0.2 0.9 0.5 0 0.2-0.8 0.1-0.8 0.1l0.3 0.6-0.7-0.3 0.2 0.6-1.1-0.2-0.4 0.3-0.6-0.4-0.4 0.2-0.9-0.3-0.2 0.4-0.7-0.3c0 0-0.4 0.2-1 0-0.6-0.2-0.1-0.3-0.1-0.3 0 0-0.7 0.2-0.9 0.1-0.2-0.1 0.1-0.8 0.2-1 0.1-0.1-0.1 0.2-0.7 0.3-0.5 0.1 0-0.5 0-0.5l-0.8-0.5c0 0 0.3 0.1 2.7 0.4 2.5 0.3 4.4 0.1 4.4 0.1"/>
													<path id="&lt;Path&gt;" class="s8" d="m260.6 233.7c0 0-0.8 1.9-0.7 5.3 0 3.4-2.8 7.2-2.8 7.2 0 0 2.2-2.9 2.3-6.6 0.1-3.8 0.9-6.7 0.9-6.7"/>
													<path id="&lt;Path&gt;" class="s8" d="m241.6 243.7c0 0 2.8-2.1 3.3-1.4 0.4 0.8-0.9 1-2.1 1.1"/>
													<path id="&lt;Path&gt;" class="s8" d="m237.7 241.9c0 0-0.4 0.7-0.9 0.8-0.4 0.1-1.3-1.3-0.2-1.6 1.1-0.3 2 0.9 2 0.9"/>
													<path id="&lt;Path&gt;" class="s8" d="m243.4 229.5c0 0 1.5 6.5 1 7.9-0.4 1.3 1.3 1.1 2.2 2.4q0.3 0.3 0.4 0.8c0.7 2.2-0.8 2.5-0.8 2.5 0 0 1.5-2.8-0.4-3.5-1.9-0.8-2-1.2-1.8-2.2 0.2-1 0-3.3-0.7-8.1"/>
													<path id="&lt;Path&gt;" class="s9" d="m229.2 244.5c-0.3 0.9-3.1 3.3-4.3 4.7-1.3 1.5-2 4.7-2 4.7 0 0 0 0 0.4-2.4q0.1-0.9 0.7-1.7 0.3-0.5 0.7-0.9c1.3-1.5 3-2.9 4-4.2 1.5-2 3.5-3 3.5-3"/>
													<path id="&lt;Path&gt;" class="s9" d="m249.5 246.5c0 0 3.2 6 2 7.1"/>
													<path id="&lt;Path&gt;" class="s10" d="m246.6 239.8c1.3 1.5 0.3 3.3-0.1 3.5-0.4 0.1-4.2 0.7-4.7 1.2-0.5 0.5-1.4 0.7-1.9-0.1-0.5-0.8-3.1-1-3.8-1.7-0.7-0.6-0.8-1.8 0.5-2.2 1.4-0.4 3.3 1.7 4.4 1.7 3.2-0.1 2.4-1.5 4-2 1.6-0.5 1.8 1.1 1.8 1.1"/>
													<path id="&lt;Path&gt;" class="s11" d="m247.8 254.2c0 0-2 0-3.1 0.3-1.2 0.3-1.4 1.5-3.8 1.3-2.4-0.2-5.5-0.3-7.1-1.5-1.6-1.2-5.4-2.5-5.4-2.5 0 0 0 0 1 0.2 1.1 0.3 3.8-0.7 5.5-1.4 1.7-0.6 2.7 0.1 3.6 0.4 0.8 0.3 2.3 0.2 2.7 0 0.4-0.1 1.6 0 3.4 1.6 1.8 1.5 3.4 1.3 3.4 1.3"/>
													<path id="&lt;Path&gt;" class="s12" d="m254.3 224.5c0 0 3.8 0.8 4.7 3.2 0.9 2.5-2.3 6.1-2.4 4.7-0.2-1.4-2.6-2.8-6.4-3.2-3.8-0.4-5.2 0.8-5.2 0.8 0 0-1.6-0.5 0.2-1.4 1.8-0.9 4.3-0.7 6.7-0.3 2.4 0.5 2-2.2 2-2.2"/>
													<path id="&lt;Path&gt;" class="s12" d="m257.8 230.8c1.1 3.4-2.6 9.3-5.6 8.8-2.9-0.6-7.5-4.9-7.8-7.6-0.2-2.6-3.7-4.8-1.9-5.4 1.8-0.7 4.7 0.5 3.5 1.9-1.1 1.5-0.4 2 1.5 2.7 1.9 0.6 8 1 8 1"/>
													<path id="&lt;Path&gt;" class="s12" d="m235.4 223.4c0 0 1.8 2.8 1.3 4.2-0.5 1.4-1.7 1.9-1.7 1.9 0 0-1.5 0.1-3.1-1-1.5-1.1-4.7-0.5-6.3 0-1.6 0.6-2.5 1.8-4.4 1.1-2-0.7-2.3-0.9-2.3-0.9 0 0 3.2 0 5.8-1.2 2.6-1.3 7.2-1.2 7.8-1 0.5 0.1-1.6-2.2-2.1-2.5"/>
													<path id="&lt;Path&gt;" class="s12" d="m235.5 228.7c0 0 0.4 2.3-1.5 4.2-2 1.9-5.5 2.5-7.7 0.6-2.2-1.9-6.1-2.7-4-3.1 2.1-0.4 3.1 0.6 7 0.6 3.9 0 4.7-1.7 4.7-1.7"/>
													<path id="&lt;Path&gt;" class="s10" d="m254.7 232.7c0 0-1.8 1.7-5.4 1-3.6-0.7-4.7-3.8-3.6-3 1.1 0.8 7.5 1.7 7.5 1.7"/>
													<path id="&lt;Path&gt;" class="s10" d="m247.9 198.9c8.7 5.8 12.3 8.2 12.4 18.2 0.2 10-1.3 16-1.3 16 0 0 0.7-4.7-0.8-7.7-1.5-3-4.8-2.9-6.7-4.4-2-1.4 0.5-7.5 0.5-11.2 0-3.8-6.4-11-6.4-11"/>
													<path id="&lt;Path&gt;" class="s10" d="m260.3 236.4c0 0-0.1 1.9-1.1 5.7-1 3.9-4 12.6-4.3 16.7-0.3 4-5.5 7.2-5.5 7.2 0 0 2.6-4 1.7-7.7-0.8-3.7 2-5.7 3-7 1-1.3 1.7-4.7-0.3-6.4-2.1-1.7-6.1-8.3-4.5-7.4 1.7 1 4.7 3.7 6.5 3.1 1.9-0.6 4-3.4 4-3.4"/>
													<path id="&lt;Path&gt;" class="s10" d="m233.8 240.1c0 0-1.5 1.7-5.8 6.9-4.4 5.2-4.4 7.9-4.4 7.9 0 0-2.6-1.3 0.3-6.1 2.9-4.8 9.5-8.4 9.5-8.4"/>
													<path id="&lt;Path&gt;" class="s11" d="m232.2 235.2c-2.1 4.1-7.4 4.8-10.2 2.3-2.7-2.4-6.3-0.5-6.3-0.5 0 0-0.6-2.8 1.7-4.5 2.2-1.7 4.8 1.7 7.6 3 2.8 1.3 6.6-0.5 6.6-0.5"/>
													<path id="&lt;Path&gt;" class="s11" d="m245.5 250.7c0 0 4.8 1.1 4.9 1.4 0.1 0.4 0.7 5.8 0.3 8.2-0.3 2.3-3.7 4.4-4.6 2.5-0.9-1.8-2.3-3.3-2.7-4.7-0.4-1.3 1.5-2.7 2.7-3.4 1.1-0.7-0.9-3.1-0.9-3.1"/>
													<path id="&lt;Path&gt;" class="s11" d="m245.5 251.7c0 0 4.8 1.1 4.9 1.5 0.1 0.4 0.6 5.8 0.3 8.1-0.3 2.4-3.7 4.4-4.6 2.6-0.9-1.9-2.3-3.3-2.7-4.7-0.4-1.4 1.5-2.7 2.7-3.4 1.1-0.7-0.9-3.1-0.9-3.1"/>
													<path id="&lt;Path&gt;" class="s10" d="m245.7 243.4q0 0 0.2 3.2c0.1 2.2-0.4 4.1-0.6 4.2-0.3 0.2-1.9-0.2-2.2-1.9-0.4-1.7-1.5-3.3-1.2-4.3 0.4-1.1 4.6-1.9 4.6-1.9"/>
													<path id="&lt;Path&gt;" class="s11" d="m214.1 219.4c0 0-0.1 13.8-1.4 13.2-1.3-0.6-2.2-3.4-2.2-3.4 0 0-1.8-8.9-0.3-14.5"/>
													<path id="&lt;Path&gt;" class="s10" d="m209.8 232.7c0 0 2.3 1.8 0.5 3.5-1.8 1.7-1 3.1 0.4 3.7 1.4 0.5 0.9 2.5 0.9 2.5 0 0-0.9-1.4-2.2-1.6-1.3-0.2-2.8-1.5-2.1-3.4 0.6-1.9 3.2-3.4 2.2-4.9"/>
													<path id="&lt;Path&gt;" class="s10" d="m206.4 238.3c0 0-0.4-1.2-0.7-4-0.4-2.8 1.1-4.9 2.3-5.1 1.2-0.2 1.1 1.3 1.1 1.3-4-0.3-2.7 7.8-2.7 7.8z"/>
													<path id="&lt;Path&gt;" class="s13" d="m243.2 261c0.5-0.5 1.4 1 1.4 1.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m243.5 261.9c0.8 0.4 0.3 1.2 0.1 1.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m242.4 263c0.4 0.6 0.6 1.6-0.4 1.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m241.6 260.9c0.3 0.6 0.6 1.3 0.1 1.9"/>
													<path id="&lt;Path&gt;" class="s14" d="m243.2 267.4c0.3 0.9 0.6 3.1-0.8 3.2"/>
													<path id="&lt;Path&gt;" class="s14" d="m242.6 268.8c-0.2 0.6-1 3.2-2 2.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m241 269.4c-0.3 0.6-0.8 1.3-1.6 1.5"/>
													<path id="&lt;Path&gt;" class="s13" d="m238.6 269.7c-0.5 0.2-0.5 0.9-1.1 1 0-0.1-0.1-0.2-0.1-0.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m250.5 260.4c0.3 0.6 1 1.7 1.8 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m250.5 261.8c0 0.4 1.7 1.6 0.6 1.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m250 263.1c0.5 0.3 1.3 2 0.2 2.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m249.3 265c0.2 0.4-0.1 1.6-0.5 1.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m251.5 259.3c-0.3-0.1-0.5-0.4-0.7-0.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m251.3 257.5c-0.4-0.1-0.6-0.5-0.8-0.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m249.3 250q0.7 0.5 0.9 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m248.9 250.2c0.3 0.3 0.9 0.9 0.5 1.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m246.8 249.4c0.4 0.3 1.5 1.4 0.7 1.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m245.8 248.5c0.4 0.3 1.2 1.7 0.5 2.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m244.7 247.4c0.7 0.9 0.6 1.8-0.1 2.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m244 247.6c0.1 0.4 0.4 0.9 0.1 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m243 247.4c0.3 0.6 0.1 1.1-0.3 1.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m241.6 247.6c-0.1 0.4-0.4 0.7-0.7 0.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m237.9 246.3c-0.6 0.4-1.7 0.9-1.5 1.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m236.3 246.4c-0.5 0.2-1.2 0.6-1.1 1.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m234.6 246.5c-0.6-0.1-1.6 1.1-1.6 1.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m232.6 246.6c0.1 0.9-2.3 1.5-1.7 2.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m230.5 247.7c-0.5 0.3-1 1.3-0.9 2"/>
													<path id="&lt;Path&gt;" class="s13" d="m229 248.5c-0.4 0.3-0.6 0.8-0.4 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m227.1 249.7c0 0.3-0.6 1-0.8 1.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.7 266.6c-0.2 0.4-1 1.9-1.4 1.3"/>
													<path id="&lt;Path&gt;" class="s14" d="m247.1 266.1c-0.1 0.6-0.4 1.3-1.1 1.4"/>
													<path id="&lt;Path&gt;" class="s14" d="m244.9 267c0.2 0.7 0.2 1.2-0.3 1.8"/>
													<path id="&lt;Path&gt;" class="s14" d="m237.5 268c-0.8 0.7-2.1 1-3.1 1.3"/>
													<path id="&lt;Path&gt;" class="s14" d="m235.3 268c-0.3 0.7-2.1 1.2-2.9 1.1"/>
													<path id="&lt;Path&gt;" class="s14" d="m234.1 267.6c-0.2 0.6-2.1 1.3-2.4 0.4"/>
													<path id="&lt;Path&gt;" class="s15" d="m232.5 266.7c0 0.6-1.8 1.2-2.3 0.4"/>
													<path id="&lt;Path&gt;" class="s15" d="m231.1 266c-0.6 0.2-2.1 1.1-2.6 0.3"/>
													<path id="&lt;Path&gt;" class="s15" d="m229.8 265.2c-0.7 0.5-1.6 0.4-2.2-0.1"/>
													<path id="&lt;Path&gt;" class="s15" d="m228.7 264.1c-0.6 0.1-1.6 0.7-2.1 0.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m236.6 269.6c-0.2 0.3-1.9 1.5-2.4 0.8"/>
													<path id="&lt;Path&gt;" class="s15" d="m227.7 263.1c0 0.3-1 0.5-1.5 0.5"/>
													<path id="&lt;Path&gt;" class="s13" d="m248.7 265.7c0.2 0.4-0.1 0.7-0.3 1.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m248.8 263.8q0.1 0 0.1 0"/>
													<path id="&lt;Path&gt;" class="s13" d="m250.5 254.3c0.2 0.4 0.6 0.7 1.1 0.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m250.6 253q0.3 0.3 0.7 0.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m225.8 252c-0.4 0.3-0.6 0.8-0.9 1.1"/>
													<path id="&lt;Path&gt;" class="s15" d="m225.7 253.6c-0.8 0-1.1 1-1.3 1.7"/>
													<path id="&lt;Path&gt;" class="s15" d="m225.7 256.1c-0.4 0.2-0.4 1.2-1 1.5"/>
													<path id="&lt;Path&gt;" class="s15" d="m225.9 257.3c0.1 0.4-0.3 1.2-0.8 1.3"/>
													<path id="&lt;Path&gt;" class="s15" d="m225.9 259.2c-0.2 0.4-0.7 0.8-1.1 1.1"/>
													<path id="&lt;Path&gt;" class="s15" d="m226.2 260.9c-0.5 0.1-0.8 0.5-1.1 0.9"/>
													<path id="&lt;Path&gt;" class="s15" d="m226.3 262.1c-0.6 0-0.8 0.7-1 1.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m238.7 263.7c0.4 0.5-0.2 1.5-0.5 1.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m237.7 263.8c-0.3 0.1-0.3 0.3-0.5 0.5-0.4 0.3-0.9 0.5-1.3 0.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m235.6 263.2c0.3 0.8-1.2 1-1.7 1.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m233.8 263c0.2 0.3-0.3 0.6-0.7 0.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m245.3 262.8c0.8-0.3 1.4 0.8 1.5 1.5"/>
													<path id="&lt;Path&gt;" class="s13" d="m245.2 263.3q0.2-0.1 0.3 0c0.3 0.5 0.7 1.7 0.1 2.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m244.8 264.1c1 0.7 0.5 2.2-0.1 3"/>
													<path id="&lt;Path&gt;" class="s13" d="m244 264.5c0.8 1.1 1.3 2.7-0.5 3.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m243.6 265.1c0.3 1 0.2 2.2-1 2.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m242.4 265.8c0.3 1-0.5 2.6-1.6 2.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m247.8 263c0.5 0.3 0.6 1.2 0.3 1.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.9 268.2c0.8-0.4 0.8-1.2 0.6-1.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.3 265.4c0.6 1.6-2.2 3.1-3.4 2.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m239 266.2c0.2 0.8-1.7 2-2.2 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m237.6 266.1c-0.3 0.8-1.6 1.2-2.3 1.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m236.6 265.8c0.1 0.7-1.7 1.5-2.1 0.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m235.7 265.4c-0.6 0.2-1.9 1.2-2.3 0.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m233.7 265.1c0.3 0.5-1.9 1-2.5 0.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m239.8 268.7c0.3 1.1-1.1 1.9-1.8 2.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m237.6 268.8c1 0.9-1.7 1.8-2.2 1.9q-0.1-0.2-0.1-0.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.5 266.2c1-0.5 0.3-1.9-0.1-2.5"/>
													<path id="&lt;Path&gt;" class="s13" d="m241.8 263.6c0.2 0.5 0.3 1.4-0.1 1.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m239.7 264.4c0.3 1 0.1 1.9-1 2.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m240 262c0.2 0.5 0.4 1.3-0.3 1.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m239.2 262.2c-0.4 0.2-0.5 0.7-1.1 0.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m237.6 261.5c0.4 0.9-0.9 1.1-1.5 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m241.5 268.4c0.3 0.4-0.3 1.8-0.9 1.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.4 268.3c0.8 0.8-0.5 1.8-1.2 2.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m239.2 268.6c0.2 0.5-0.1 1.7-0.8 1.7q0 0 0-0.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m246.7 263.7c0.5 0.1 0.8 2.1 0.1 2.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m246 264.1c0.8 0.5 1.2 2.5-0.1 2.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m245.1 264.4c1.3 0.8 0.5 2.6-0.5 3.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m244.4 265.1c1 0.4-0.3 1.8-0.9 1.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m243.3 265.8c0.8 0.9 0 1.8-1 2"/>
													<path id="&lt;Path&gt;" class="s13" d="m242 266.8c0.5 1.1-0.5 1.8-1.5 2.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.5 268.6c0.5 0.7-0.3 2.5-1.2 2"/>
													<path id="&lt;Path&gt;" class="s13" d="m245.2 260.8c0.2 0.5 0.4 1 0.4 1.5"/>
													<path id="&lt;Path&gt;" class="s13" d="m239.6 247.5c0.2 0.6-0.2 1.3 0 1.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m239 247.4c-0.3 0.6-0.5 1.1-0.6 1.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m238.4 247.3c-0.3 0.6-0.6 1.2-0.9 1.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.1 249q0.3 0.2 0.6 0.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m234.5 247.8c-0.5 0.2-0.7 0.9-0.6 1.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m232.8 248.7c-0.1 0.1-0.2 0.2-0.2 0.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m232.2 248.3c-0.2 0.4-0.2 1-0.1 1.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m231.3 249.5q-0.3 0.4-0.4 0.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m230.4 249.8q0 0.4-0.1 0.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m228.8 250c0.2 0.4 0.1 0.9-0.2 1.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m249 252c0.2 0.2 0.3 0.5 0.4 0.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m247.4 252.9c0.4-0.2 0.4-0.8 0.1-1.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m246.5 251c0.6 0.4 0.2 1.1-0.1 1.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m245.5 250.4c0.2 0.2 0.2 0.5 0 0.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m244.3 249.7c-0.2 0.1-0.2 0.3-0.2 0.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m243.5 249c-0.3 0.4-0.4 0.9-0.5 1.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m242.5 248.7c0 0.6-0.3 1-0.2 1.6"/>
													<path id="&lt;Path&gt;" class="s13" d="m242 249.1c-0.3 0.3-0.1 0.7-0.2 1.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m243.4 259.3c0.5 0 1 0.7 1.1 1.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m241.9 259.8c0.4 0 1 0.9 0.6 1.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.4 260.6c0.3 0.1 0.6 0.9 0.1 1"/>
													<path id="&lt;Path&gt;" class="s13" d="m239.1 260.6c0.1 0.3 0.1 0.6-0.2 0.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m237.6 260.8c0.2 0.7-0.4 1.2-1.1 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m236.1 261.1c0.2 0.8-1.3 2-1.7 1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m241.2 263.2c0.3 0.8-0.8 2.6-1.5 1.9"/>
													<path id="&lt;Path&gt;" class="s13" d="m239.9 263.1c0.7 1-0.8 1.9-1.4 2.5"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.6 264.2c1.5 1.4-0.3 2.9-1.8 3.1"/>
													<path id="&lt;Path&gt;" class="s13" d="m241.4 264.7c0.4 1.5 0.9 2.9-1 3.4"/>
													<path id="&lt;Path&gt;" class="s13" d="m240.6 264.4c0.4 1.2-0.8 2.5-2 2.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m250.1 259.1c0.2 0.3 0.4 0.5 0.4 0.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m249.2 264.9c0.1-0.4-0.2-0.9 0-1.3"/>
													<path id="&lt;Path&gt;" class="s13" d="m248.1 265.2c0.2 0.5 0.6 1.5-0.2 1.7"/>
													<path id="&lt;Path&gt;" class="s13" d="m248.7 262c0.8 0 1.4 1.4 1.6 2.2"/>
													<path id="&lt;Path&gt;" class="s13" d="m249.5 261.6q0.1 0.5 0.3 0.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m228.6 261.5c-0.4 0-0.8 0.4-0.8 0.8"/>
													<path id="&lt;Path&gt;" class="s13" d="m227.1 260.7c-0.6 0.1-1.2 0.7-1.2 1.3"/>
													<path id="&lt;Path&gt;" class="s10" d="m216.2 216.9c-0.9-5.8-1.5-9.6 2.4-14.9 4-5.4 13.7-4.7 13.7-4.7 0 0-2.9 0.8 0.2 9 3.2 8.2-0.1 11.6-4.6 12.3-4.5 0.6-7.3 6.7-7.3 6.7-3.6 4.3-3.5-2.6-4.4-8.4z"/>
													<path id="&lt;Path&gt;" class="s16" d="m242.5 253.8c0.1 0.1 0.3 0.5 0.3 0.7 0 0.3-0.4 0.4-0.6 0.5"/>
													<path id="&lt;Path&gt;" class="s16" d="m241.9 254c0.2 0.2 0.1 0.5 0 0.8-0.1 0.2-0.6 0.7-0.9 0.5"/>
													<path id="&lt;Path&gt;" class="s16" d="m238.2 254.2c0.5 0.2-0.3 0.5-0.6 0.4-0.1 0-0.5-0.2-0.3-0.4"/>
													<path id="&lt;Path&gt;" class="s16" d="m236.5 253.9c0.2 0.2-0.8 0.4-1 0.3-0.1 0-0.5-0.4-0.2-0.5"/>
													<path id="&lt;Path&gt;" class="s16" d="m234.9 253.5c0.2 0.3-1.2 0.6-0.9-0.2"/>
													<path id="&lt;Path&gt;" class="s16" d="m243.8 254c0.2 0.1-0.1 0.4-0.2 0.4-0.3 0.1-0.4-0.1-0.5-0.3"/>
												</g>
												<path id="&lt;Path&gt;" class="s15" d="m250.9 200.3c0 0 1.2-3.8-4.1-6.2"/>
												<path id="&lt;Path&gt;" class="s15" d="m250 200.2c0 0-0.7-5.9-7.8-7.6"/>
												<path id="&lt;Path&gt;" class="s15" d="m240.9 198c0 0-1.9-5.7-5.8-6.1"/>
												<path id="&lt;Path&gt;" class="s15" d="m238.8 197.7c0 0-1.7-5.3-6.5-5.4"/>
												<path id="&lt;Path&gt;" class="s15" d="m236.5 196.9c0 0-1.1-4.3-6.7-4.2"/>
												<path id="&lt;Path&gt;" class="s15" d="m232.7 197.3c0 0-3.6-3.5-7.1-3.2"/>
												<path id="&lt;Path&gt;" class="s15" d="m229.8 196.7c0 0-1.2-1.9-4.7-1.9"/>
												<path id="&lt;Path&gt;" class="s15" d="m227.4 196.6l-4.7-0.7"/>
												<path id="&lt;Path&gt;" class="s15" d="m225.6 196.9l-3.1-0.1"/>
												<path id="&lt;Path&gt;" class="s15" d="m221.8 198.6c0 0-0.7-0.1-2.1 0.4"/>
												<path id="&lt;Path&gt;" class="s15" d="m216.3 204.1c0 0-5.9 5.4-6.3 7.5"/>
												<path id="&lt;Path&gt;" class="s15" d="m215.2 207.4c0 0-5.4 3.9-5.8 5.4"/>
												<path id="&lt;Path&gt;" class="s15" d="m215 209.5c0 0-4.1 2.6-5 5.2"/>
												<path id="&lt;Path&gt;" class="s15" d="m214 212.4c0 0-3.5 3.4-3.7 4.5"/>
												<path id="&lt;Path&gt;" class="s15" d="m257.7 206.4c0 0 3.4 1.6 4 2.8"/>
												<path id="&lt;Path&gt;" class="s15" d="m258.8 208.2c0 0 4 1.9 4.3 3.2"/>
												<path id="&lt;Path&gt;" class="s15" d="m260.1 210.5c0 0 3.1 1 3.5 2.8"/>
												<path id="&lt;Path&gt;" class="s15" d="m261.4 213.2c0 0 1.1 1.8 1.2 2.2"/>
												<path id="&lt;Path&gt;" class="s15" d="m214.9 216.8c0 0-3.3 2.9-4.6 7.9"/>
												<path id="&lt;Path&gt;" class="s15" d="m214.2 215.5c0 0-4.4 4.7-4.8 8.4"/>
												<path id="&lt;Path&gt;" class="s10" d="m234.2 271.6c0 0-4.1 1-4.8 4.3-0.8 3.3-0.9 4.4-0.9 4.4 0 0-7.1 1-8.5-5.5-1.5-6.5-0.2-8-1.5-11.5-1.3-3.6-1.3-3.6-1.3-3.6l11.4 8.1"/>
												<path id="&lt;Path&gt;" class="s4" d="m227.1 228.5c0.2 0 0.4 0.2 0.5 0.6 0.1 0.4 0 0.7-0.2 0.8-0.2 0-0.4-0.2-0.5-0.6-0.1-0.4 0-0.7 0.2-0.8z"/>
												<path id="&lt;Path&gt;" class="s4" d="m250.9 229.7c0.2 0 0.4 0.2 0.5 0.6 0.1 0.4 0 0.7-0.2 0.8-0.1 0-0.4-0.3-0.5-0.6-0.1-0.4 0-0.8 0.2-0.8z"/>
												<path id="&lt;Path&gt;" class="s17" d="m241.5 239.9c0.7-0.2 1.4 0 1.5 0.3 0 0.4-0.5 0.8-1.2 1-0.8 0.2-1.5 0-1.6-0.3 0-0.4 0.5-0.8 1.3-1z"/>
												<path id="&lt;Path&gt;" class="s18" d="m231.3 240.5c0 0-8.3 4.6-7.2 6.2"/>
												<path id="&lt;Path&gt;" class="s18" d="m250.1 246c0 0 4.2 5.2 2.6 5.7"/>
												<path id="&lt;Path&gt;" class="s10" d="m237.6 278c-1.2-2.1-13.9-13.8-13.9-13.8 0 0 6.3 4.8 9.6 6.5 3.3 1.8 5.7 1.7 5.7 1.7l8.1-4.5c0 0-8.3 12.1-9.5 10.1z"/>
												<path id="&lt;Path&gt;" class="s11" d="m225.1 265.1c0 0-3.9-0.5-10-9.3-6.1-8.8-2.3-21.7-2.3-21.7 0 0 0.2 4.6 3.5 8.7 3.3 4 4 4.8 3.1 10.6-0.9 5.8 4.7 10.4 4.7 10.4"/>
											</g>
											<path id="&lt;Path&gt;" class="s4" d="m168.2 330.3c0 0 11.5-10 12-8"/>
											<path id="&lt;Path&gt;" class="s4" d="m275.2 326.3c0 0 2-35 0-37"/>
											<path id="&lt;Path&gt;" class="s4" d="m252.5 270.9c0 0 2 5.7 1.7 8-0.3 2.4-6.7 10.7-17 11-10.3 0.4-20-4-23.7-8.6-3.6-4.7-0.6-14.4-0.6-14.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m168.5 319.3c0 0 16.7 0.6 20.7 11.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m276.2 323.6c0 0 15-7 17.3-5"/>
											<path id="&lt;Path&gt;" class="s4" d="m177.9 273.6c0 0 4 19.3 0.3 35.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m273.5 276.9v4.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m179.9 400.6l-3-9.7c0 0-2.7-1-3.4 0-0.6 1-6.6-24.6-6.6-24.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m167.9 341.9c0 0 5.3 8.4 5.3 9.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m259.9 410.3c0 0-13.7 8.6-14 11.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m258.5 419.9c0 0-3.3 3-6.6 5.7-3.4 2.7-58.7-1.3-70-4-11.4-2.7-26-11-26-11"/>
											<path id="&lt;Path&gt;" class="s4" d="m262.2 297.9l0.7 2.7c0 0-16-0.7-17.7-0.7-1.7 0-47.3-2.6-47.3-2.6l0.3-1.7z"/>
											<path id="&lt;Path&gt;" class="s4" d="m263.9 304.9l-0.4 4.7h-1.6l-63.7-2.7-0.7-5.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m262.5 313.9l-0.3 1.7-62.7-1-0.6-2.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m263.9 320.9l0.3 3.7c0 0-20.3 0.3-21.3-0.3-1-0.7-18-1-18-1h-26.7l1.3-4z"/>
											<path id="&lt;Path&gt;" class="s4" d="m264.2 329.9v2.7l-35.7-1.3-30.6-2v-2"/>
											<path id="&lt;Path&gt;" class="s4" d="m263.2 336.9l-1 3-64.7-1v-4.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m261.9 344.6v2.7l-63-1.7-1.7-2"/>
											<path id="&lt;Path&gt;" class="s4" d="m259.5 352.3v4.3l-15 1-47-4-0.3-4.7z"/>
											<path id="&lt;Path&gt;" class="s4" d="m258.9 362.3l-0.4 2.6-61.3-4v-2.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m258.9 369.3c0 0 0 1.6-0.7 3.6-0.7 2-61-4-61-4l-0.7-4"/>
											<path id="&lt;Path&gt;" class="s4" d="m257.5 377.3v2.3c0 0-59-2.7-60-3-1-0.3 0-2.7 0-2.7"/>
											<path id="&lt;Path&gt;" class="s11" d="m156.5 328.9c0 0 23.4-5.6 16.4-5.6-7 0-13-3-13-3 0 0 26.6-6.4 35.3 13l-10.7-6.7c0 0 4.4 7.3-2.6 6-7-1.3 0 12 6.3 20.7 6.3 8.6 6.3 11.6 6.3 11.6 0 0-5.6-13-10.3-10-4.7 3-3 5.7-5.7 6-2.6 0.4-5.3-2.3-5.3-2.3 0 0 13.7 32 12 28.3-1.7-3.6-17-28.6-17-32.6 0-4 3-24 3-24l-2.7-2-8 5"/>
											<path id="&lt;Path&gt;" class="s11" d="m158.9 298.9c0 0 20 11.4 25 10.7"/>
											<path id="&lt;Path&gt;" class="s11" d="m172.9 293.3l12 4.3"/>
											<path id="&lt;Path&gt;" class="s11" d="m194.5 272.9c0 0 26 18.7 48 19"/>
											<path id="&lt;Path&gt;" class="s11" d="m205.9 269.9c0 0 2 7.7 6.3 7.7"/>
											<path id="&lt;Path&gt;" class="s11" d="m259.5 274.3c0 0 1.4 6-0.3 7.6"/>
											<path id="&lt;Path&gt;" class="s11" d="m275.2 306.6l20-10-15.7 11 20.7 0.3c0 0-15 3-14.3 6 0.6 3 12.6 13 10.6 12-2-1-14.3-6.6-16-6-1.6 0.7-7.3 13.4-7.3 13.4l1-40"/>
											<path id="&lt;Path&gt;" class="s11" d="m268.2 278.6c0 0 10.3 13.7 9.7 20.3"/>
											<path id="&lt;Path&gt;" class="s11" d="m159.5 399.3c0 0 38.7 10 49.7 18"/>
											<path id="&lt;Path&gt;" class="s11" d="m263.2 384.6c-1 0.7-24 12.7-30.3 17.7"/>
											<path id="&lt;Path&gt;" class="s11" d="m157.5 406.9c0 0 7.4 12.7 29.4 13 22 0.4 13.6-2 13.6-2 0 0 35 4.7 37.4 4.7 2.3 0 18.3-0.7 18.3-0.7 0 0-10 9-24.7 9-14.6 0-71.3-12.6-73.3-17.6"/>
											<path id="&lt;Path&gt;" class="s11" d="m192.9 392.9c0 0 12.3 11.7 13.3 10.4"/>
											<path id="&lt;Path&gt;" class="s11" d="m141.2 310.3c0 0 14.7 7 15.3 14.3"/>
											<path id="&lt;Path&gt;" class="s11" d="m181.9 275.6c0 0 10.3 23.7 14 25.3"/>
											<path id="&lt;Path&gt;" class="s11" d="m264.2 272.9c0 0 0.3 12-1.7 13.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m164.5 478.6h-1.6v1.7l-3.7-1"/>
											<path id="&lt;Path&gt;" class="s4" d="m166.5 480.6l-2.6 4.7 3 11-1 3.3 2 17.7-0.7 3.6 1.3 5.4-3.3 2"/>
											<path id="&lt;Path&gt;" class="s4" d="m156.2 499.3c0 0 3.7-1.7 4.7 0.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m163.2 527.6l-4.7-20.3 3.4-5"/>
											<path id="&lt;Path&gt;" class="s4" d=""/>
											<path id="&lt;Path&gt;" class="s4" d="m213.5 488.9l-1-34c0 0 0.7-2.6 1.7-4.6 1-2-1-18-1-18"/>
											<path id="&lt;Path&gt;" class="s4" d="m156.5 451.3c0 0 0 0 0-6.7 0-6.7 5-11.7 5-11.7 0 0 0.7-2 0.7-4.3 0-2.3 0.7-5 0.7-5l3-3.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m264.2 453.6l-4.3-2.3-2-10.4h-1.4l-5-11"/>
											<path id="&lt;Path&gt;" class="s4" d="m257.5 430.3l2 5.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m218.5 432.9c-1.3 0.4 2 20.4 2 20.4l-3.6 2.6v5.4h-2.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m210.5 431.6c0 0 4 14 2.4 17"/>
											<path id="&lt;Path&gt;" class="s4" d="m220.5 434.9l3 0.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m209.2 493.9c0 0-17.7-1.6-24.3-6.3-6.7-4.7-20.7-12-22-11"/>
											<path id="&lt;Path&gt;" class="s4" d="m181.2 524.3c0 0 15-3.7 14.7-2.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m200.9 519.9l3.3-2.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m216.9 490.9c0 0 6.3 3.7 16.3 2.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m196.9 534.6l-5.7 5.3-4.3 1c0 0-3.7 5-7.4 6.7-3.6 1.7-12.6-0.3-12.6-0.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m266.2 542.3l-3.7 6.6c0 0-4 2.4-7.6 2.4-3.7 0-25.4-4-25.4-4l-3.3-2h-8"/>
											<path id="&lt;Path&gt;" class="s4" d="m264.9 528.6l-0.7-4.3 1.3-1-1.3-6c0 0-1.7-3-1-5.4 0.7-2.3-2.7-20.3-2.7-21.3 0-1 1.4-1.3 1.4-1.3l-0.7-1.7-0.7-4 6-4"/>
											<path id="&lt;Path&gt;" class="s4" d="m262.9 484.9c0 0 4.3-0.6 5-3.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m268.2 516.9c0 0-0.7 1.7-2 2"/>
											<path id="&lt;Path&gt;" class="s4" d="m261.2 454.9c0 0 1.3 3-1 3.7"/>
											<path id="&lt;Path&gt;" class="s9" d="m159.2 462.6c1.9 0.4 3.6-0.2 3.4-2.3 2.5-0.1 5-0.1 7.5 0 3.5 0 3 0 4.4 2.6 1.2 2.4 1.6 4.1 4.4 4.3 1.6 0.1 3.6-1.1 5.6-0.9 0.4 2.6 2.6 2.3 4.3 3.7-1.2 1.3-3.4 1.1-3.2 3.2 1.4 0.6 3.7 1.6 5.3 1.1 0.9-0.3 2.2-2.3 3.6-3 2.1-1 6.4-2.7 8.6-2.4 0.2 1.6 0.9 3 0.8 4.7-2.4 1.2-5.1 0-7.6 0.6-2.1 0.6-2.1 2.1-3.5 2.7-2.4 0.9-6.8 0.4-9.4 1-3.4 0.8-7.5 0.2-10.6 1.6 1.7-0.5 8.5-2.6 9.6-4.3 1.7-2.6-2.2-2.6-0.3-4.9-2.6-0.1-10.1 1.7-9.3-2.9-2.9-1.1-3.3 1.6-5.5 2.2-5.1 1.2-2.8-3.7-5.1-5"/>
											<path id="&lt;Path&gt;" class="s9" d="m169.2 448.9c4.6 0-2.6-7.2 0-10.2 3.8-4.2 3.3 4.6 3.3 6.1 1.1 0.3 2.5 0.2 3.4-0.2-0.9-1.8-2-5.2-1.7-7.3 1.5 0.7 2.8 2.1 5 1.6-0.3-1.3-0.6-2.8-0.2-4.2 4.9-0.7 6.3 4.9 10.5 3.6-0.3 2.9-0.9 3.8 1.5 5.5 1.4 0.9 3.4 1.3 4.5 2.1 0.3 0.2 1.1 1.5 1.7 1.9 1.2 1 8.8 1.4 6.4 4.3-0.9 1.1-6.2 0.5-7 0.4 0.2-0.4 0.3-1.4 0.6-1.9-3.5-0.2-10.5 0.7-13.9 2.1-3.6 1.4-3.6 5-8.1 4.5 0-1.6 0-3.2 0-4.8-2.3-0.4-5.4-0.6-7.4 0.7-2.1 1.3-2.2 4-5.3 3.8"/>
											<path id="&lt;Path&gt;" class="s9" d="m200.5 429.6c8.2 2.5 12.8 9.2 10 17.6-1.3-1.4-1.8-3.4-2.9-5.1-0.1 1.1-0.1 2.3-0.1 3.5-2.6 0.3-4.9-1.3-6.6-3-2.8-2.8-1.3-4.1-1.4-8.3-2.1-0.1-6.8 0.8-6.3-2.7"/>
											<path id="&lt;Path&gt;" class="s9" d="m175.9 488.6c-0.1-0.5-0.1-1.1 0-1.6 2.5-0.7 3.8 0.8 4.7 3 0.5 1.5 1.1 7.8 3.2 2.6 1.2 2.2 3.4 2.5 5.7 3 1.2 0.3 2.6-0.3 3.6 0.7 0.5 0.6-0.3 1.9 0.1 2.6 4.4 7.8 7.3 0.4 14.2 1.8-1.3 2.4-2.6 1.9-4 3.3-0.8 0.9-0.9 2.4-1.6 3-2.2 2.1-2 0.9-3.6 0.2-0.1 0-0.2-1.3-1-1.6-0.6-0.3-1.4 0.2-2 0.3-2.2 0.5-3.3 2-6 1.6-0.1-1.4 0.3-2.8 0.3-4.2-2.4-0.4-3.3 1.4-5.1 1.9-1.5 0.4-3.8 0.1-5.3 0 0.5-6.2 1.6-12-5.2-15.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m162.2 486.6c1.1 3.4 2.2 5.9 1.9 9.6-4.3 0.9-2.2-1.5-3.8-3.4-1.1-1.2-2.6 0.1-3.5-1.9-0.4-0.9 0.2-3 0.4-4"/>
											<path id="&lt;Path&gt;" class="s9" d="m182.2 481.9c3.4 0 6.7 0.2 10-0.9-0.5 2.8 2.1 1.7 3.5 1.2 2.7-1 3.3-3.9 4.5 0.4 0.7 2.6-0.3 3.1 1.3 4.9 0.9 1 3.1-0.7 2.3 2-1 0.1-2.8 0.5-3.6 0.1-1.4-0.5-1.4-1.9-2.6-2.6-2.6-1.6-6.6-1.2-9.7-2.1-0.1-1.1-0.2-2.2 0-3.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m160.2 420.9c2 1.2 3 2.4 5.2 2.7 1.2 0.1 4-0.9 4.8-0.3 2.3 1.8-1.2 1.6-1.4 2-1.1 1.6-1 1.1-1.3 3.4-0.6 5.8-3.3 13.1-7.6 17.3-0.4-4.1 1.2-5.4 2.8-8.7 1.2-2.3 0.6-2 0.8-4 0.2-1.8 3.8-9-0.3-8.7"/>
											<path id="&lt;Path&gt;" class="s9" d="m247.9 432.6c0.6 1.2 3.4 11.4 5.3 8"/>
											<path id="&lt;Path&gt;" class="s9" d="m220.5 435.3c2.8 0.8 0.6 4.9 1.4 7.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m167.9 527.9c1.6 1 3.5 1.1 5.5 1.1 0.2 0.6 0.2 1.3 0 1.9-1.8 0-3.4 0.4-5.2 0.4"/>
											<path id="&lt;Path&gt;" class="s9" d="m170.5 517.9c1.5 1.8 4.2 1.9 6.3 2.1-0.1 0.7 0.2 1.6 0.1 2.3 4 1.5 4.5-4 7.2-3.6 1.4 5.9-9.2 9.3-11.6 4.2"/>
											<path id="&lt;Path&gt;" class="s9" d="m193.5 511.6c1.7-0.5 3.5-0.4 5.3-0.3-0.1 2.4 2.2 3.5 1.7 6.2-0.5 3-1.4 2.6-4.7 2.9 1.8 3 0.4 4.3 0 7.2-0.6 4.3 0.7 7.8-5.6 7 0.1-1.6 1.3-4.1 0.3-5.3-0.7-0.9-2.9 0.3-3.6-1.4-0.5-1.1 0.6-1.7 0.6-2.6 0.2-1.6 0.4-2.8 1.1-4 0.8-1.5 2.7-1.8 2.2-3.9-0.4-0.1-0.8-0.1-1.2-0.1-0.5 3-3.8 2.4-3.3-0.2 0.3-1.4 3.8-1.2 1.2-3.5-0.9-0.7-4.6 0-5.8-0.1-1.3-3.7 4.4-2.6 6.5-2.6"/>
											<path id="&lt;Path&gt;" class="s9" d="m168.9 501.6c2.2 1.3 2 4.7 1.9 6.9-1.4-0.5-2.6-1.3-2.6-2.9"/>
											<path id="&lt;Path&gt;" class="s9" d="m160.2 469.9c-0.3 0.7-0.4 1.3-0.3 2 1.5 0.1 10.1-1 11 0.1 1.9 2.3-8.7 1.5-10 1.9"/>
											<path id="&lt;Path&gt;" class="s9" d="m206.2 454.6c3.6-0.9 4.1 3.8 3.9 6.3-6.1 1.9 0.5 8.6-0.3 12.3-3.1 0.9-1.8-0.9-2.6-2.3-0.3-0.5-1.6-2.7-1.7-3.3-0.2-2.1 1.9-3.8-0.4-5.3-2-1.4-8.5 0.1-10.9-0.1 1.4-2.5 5.5-5.7 8.7-5.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m162.2 453.6c-0.3 1.8-3 2.6-4.3 1.2-0.7-0.8 0.4-4.7 0.6-5.2"/>
											<path id="&lt;Path&gt;" class="s9" d="m213.2 447.6c1.6-0.1 4.3 2 5.6 0.7 0.7-0.7-0.4-2.7 0.1-3.4 1-1.3 5.7-0.9 6.9-0.1 1.1 0.8 1.3 2.6 2.3 3.5 2.3 2.1 5.2 1.4 8.1 2 3.1 0.5 2.2-0.3 3.8 2.6 1.1 1.9 1.2 5.2 3.5 5.8-2.5 0.5-5.1-0.7-7.6-0.7 1.2 2 6.2 1.9 2.7 4.3-1.1 0.7-4.1 0.6-5.2-0.2-2.1-1.4-0.6-3.4-1.5-5-0.9-1.7-1.7-2-4.2-1.5-2.1 0.4-1.2 0.3-2.6 1.3-1.3 0.8-3.9 3-4.6 4.2-1.6-2-1.4-4.9-1.3-7.4-1-0.3-2.1-0.2-3 0.2"/>
											<path id="&lt;Path&gt;" class="s9" d="m216.5 468.9c1.7 0 7.2-1.1 7.7 0.4 0.9 2.7-4.9 2.8-6.3 2.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m236.2 467.6c-0.6 4.5 5.8 1.7 8 2.6 1.8 0.8 1.1 1.6 2 2.7 1.1 1.5 1.1 2.3 3.4 3.4-3.4 2.7-8.3-0.3-11.5-1.7-0.9-0.5-2 0.3-2.9-0.7-1.7-1.9 0.5-5.2 1.7-6.6"/>
											<path id="&lt;Path&gt;" class="s9" d="m249.2 459.6c10.6-0.7-2.7 7.8-2 2.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m243.5 431.6c1.6 0 3.1 0 4.6 0 0.2 1.7 0.7 4-1.2 4.6-0.5-0.6-1.1-0.5-1.7-0.9-0.6 1.3-1.5 2.6-3 2.6-0.1-1.3 0.2-2.6 0.3-3.9-2.5 0.3-4.7 1-7.3 0.9-4.8-0.1-3-0.8-4.3 2.7-0.8 1.9-2.6 4.8-4.7 1.7-1.3-1.9 1.5-5.1-1.7-6"/>
											<path id="&lt;Path&gt;" class="s9" d="m253.9 435.6c2.7-0.7 3.9 3.3 3 5.3-1.3 3-3.9 1-3.7-2"/>
											<path id="&lt;Path&gt;" class="s9" d="m259.5 451.6c3.7 0.4 5.2 4.8 2.2 7-1.7 1.3-5.6 0.9-7.5 0.3-0.1-1.6 0.1-3.3-0.3-4.9-1.8 0.2-4 0.7-6 0.9 0.3-2 0-2.9 1.9-3.9 2.2-1.2 6.8 1.5 7.7-2.1"/>
											<path id="&lt;Path&gt;" class="s9" d="m252.2 473.6c2.4-0.1 11 4.9 11.9 0 0.8 1.8 0.5 3.9-0.1 5.8-1 3.1-2 2.4-3.7 3.5-2.2 1.4-6.9 3.1-9.9 1.1 1-1.6 8.1-2.5 8.2-4.7 0-1.5-5.3-2.2-6.4-2.4-0.2-1.1 0.2-1.7 1-2.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m213.5 474.6c1.4-1.2 8.9-3.2 10.7-1.6 1.3 1 0.1 3 1.3 4.3 1.2 1.2 4.7 0.8 6.3 1.3 2.6 1 4.2 1.5 7.6 1.7 1.4 0 4.2-0.6 3.8 1.8-0.5 3.2-7.3-0.2-9 2.1-1.2 1.7 3.3 3.7 2.5 6.9-4.6 1.2-3.4-2.7-5.8-4.2-1.4-0.9-7.3 1.1-8.3 2.4-0.8 1.1 0.7 2.8-0.7 3.7-2.6 1.7-4.6-3.6-5.6-4.9-1.9-2.4-4.4-3.5-2.8-6.8"/>
											<path id="&lt;Path&gt;" class="s9" d="m239.2 491.6c1.8-0.4 4 0.1 3.5 2.3-0.5 0-1.3 0.1-1.8 0"/>
											<path id="&lt;Path&gt;" class="s9" d="m215.2 500.3c2.3 3.3 5.3 0.7 8 0.6 1.2 0 2-0.2 2.8 0.7 2.4 2.6-2.3 2.3-3.4 3.9-3.2 4.3 4.1 3.5 4.6 6.1 0.9 4-6.8 1.6-7.1-1.6-0.4 0.1-1 0.2-1.5 0.3-2.1-2.9-1.6-5.8-4.1-8.4"/>
											<path id="&lt;Path&gt;" class="s9" d="m258.9 495.3q0.4-0.1 0.8 0c0.8 4.1-3.3 4.8-3.5 7.6 0 0.8 4 1.9 2 4-0.5 0.5-3.7 0-4.4 0-0.6-1.9 0.2-4.3-0.9-6-1 2.5-6.7 3.3-5 0.1 0.6-1.2 4.9-1.8 3.9-3.7-0.7-1.3-4.9-0.8-6-1.7 2.7-2.5 6.7-2.6 10.1-3.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m247.2 490.9c1.5 0 3.1 0 4.6 0.1 0.2 0.8 0.1 1.5-0.3 2.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m222.9 520.3c3.1-2.1 4.5 3.8 7.6 3.2-0.1-3.8 10.1-1 11.6 0.8-2.4 0.6-5.1 0.4-7.5 0.7-0.2 0.5-0.2 1.6-0.1 2.1 1.8 0.6 5.8 1.2 6.7 2.8 0.7 1.2-0.1 4 0.2 5.4-1.2 0.4-2.7 0.3-4.1 0.3 0.7-3.2-1.5-2.3-3-4-2.3-2.4-1.3-4.8-5-1.8-2.3 1.8-3.7 4.8-5.9 0.6-0.9-1.8-1.3-6.7-1.2-8.8"/>
											<path id="&lt;Path&gt;" class="s9" d="m256.2 515.3c1.3-1.9 3.1-1.9 3.7 0 0.5 1.6-1.8 3.8-2.1 5.3-1.8 0-3.6-0.2-5.3 0.2-0.8-2.4-1.8-3-4.3-3.6-1.7-0.5-9.1-0.9-5-2.3 3-1.1 10.7-0.9 13.3 0"/>
											<path id="&lt;Path&gt;" class="s9" d="m240.2 509.9c2.3-0.1 5.1-0.5 3.7 2.7"/>
											<path id="&lt;Path&gt;" class="s9" d="m262.2 533.9c3 1.9 2 10.2-1.3 10.4 0.4-2-1.2-2.7-2.9-2.5-0.2-2.2-1.4-2.9-3.5-2.9-4.4 0-7.8 5-13 4.3 0.5-2.7 4.6-1.3 6.5-2.9 2-1.5 0.4-1.6 1.6-3.1 0.4-0.6 0.2-1.3 0.7-1.9 0.6-0.6 2.5 0.2 3.1-0.5 1-1.2 0-3.1 0.3-4.6 3.9 1 9.4 3.6 11.2-2.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m231.2 540.9c3.2 0 6.4 0 9.5 0.4q-1.9 0-3.8 0"/>
											<path id="&lt;Path&gt;" class="s9" d="m170.2 537.9c1.5 0 4.2 0.5 5.6 0.1 1.2-0.4 1.7-1.7 2.8-2.1 1-0.3 2.9 0 3.9 0.1 0.1 3.5-10.8 6.8-13.3 4.9"/>
											<path id="&lt;Path&gt;" class="s9" d="m181.5 527.3c1.7 1.2 1.6 3.4 1.3 5.3-1.6 0.3-5.1-0.5-3.9-2.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m177.5 506.6c1.3 1.4 1.4 3.4 0.7 5-0.8 0.2-1.7 0-2.3-0.3-0.2-1-0.1-2.1 0.3-2.7"/>
											<path id="&lt;Path&gt;" class="s9" d="m260.5 466.9c0.6 0.5 1.2 0.3 1 1.3-1 0.2-2.2-0.1-3-0.7 0.5-1.7 3-2.1 4-3.9"/>
											<path id="&lt;Path&gt;" class="s9" d="m225.5 550.9c-0.5-1.4-0.4-3.1-0.2-4.6 2.9-0.9 2.7 1.5 2.6 3.6 2 0.1 4.4-0.5 6 0.7-1.7 1.2-5.6 2.3-7.7 1.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m238.9 549.6c1.7-0.2 3.6 0.1 4.3 1.7-1.4 0.5-3.1 0.6-4-0.4"/>
											<path id="&lt;Path&gt;" class="s9" d="m221.9 536.3c-1.9 3.5 9.9 0.8 12.2 4.5-1.8 0.7-3.9 0.4-5.3 1.5 0.3 0.3 0.6 1 0.9 1.3-3.5 1-6.7 0.3-6.5-4"/>
											<path id="&lt;Path&gt;" class="s9" d="m184.9 541.6c1.3 0 2.6 0 3.9 0 0.6 2-4.1 6.3-5.9 7.6-3.3 2.4-4.4 0.5-4.7-3.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m190.2 538.9c0.7-0.4 1.9-0.5 2.9-0.3-0.7 1.1-1.9 1.9-3.2 2.3"/>
											<path id="&lt;Path&gt;" class="s9" d="m253.2 553.3c2.6 1.1 4.3-1.3 6.9-1-0.7 1.9-1.5 4.4-3.9 2.2-0.4 0.9-1.1 0.7-1.1 2.1-3.3 0.1-4.6-1.8-4.2-5"/>
											<path id="&lt;Path&gt;" class="s9" d="m248.5 546.3c0.9 0.1 1.3-0.3 1.7 0.5q-1 0.3-2 0.1"/>
											<path id="&lt;Path&gt;" class="s9" d="m237.5 498.6c2.6 0 7.3-1 9.1 0.7-1.4 1.8-8.6 2.8-8.4-0.7-3-0.2-7.1 0.9-9.7-0.7 0.3-0.6 0.6-0.1 1-0.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m170.9 507.6c3 0 0.2 2.9 1.4 5 2 3.5 5.9-0.8 6.9 3.3 1.1 4.4-2.4 4-4.6 2.6-0.8-0.5-0.6-1.7-1.7-2.3-0.9-0.4-3 0.1-4-0.1-0.1-1.8-0.2-3.7 0.6-5.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m167.5 481.9c1.6 1.8 6.3 1.7 8.8 3.1-1.7 1.7-8.1 0-7.1 3.7 0.4 1.3 3.9 3.1 4.7 4.5-2.4 1.9-5.6 0.6-6.9-1.6-0.7-1.3-0.9-2.3-0.8-3.8 0.1-0.6 2.2-3.8 1.3-2.9"/>
											<path id="&lt;Path&gt;" class="s4" d="m192.5 494.6q0.2 0.7 0 1.3c-0.7-3.8-3.9-2.8-7-3.6-1.9-0.5-5.4-1.8-3.3-4.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m207.5 485.9c4.5 1.4-2.1 10.3-4.6 4.4 1 0 1.9-0.7 2.9-0.8-1-2.4-4-2-5.2-3.5-1-1.5-0.5-3.8 1.6-3.1"/>
											<path id="&lt;Path&gt;" class="s4" d="m197.2 495.9q-0.2 0.6 0.3 0.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m172.2 501.6c0.3-1.3 1.9-1.4 3.3-0.9 0.1 2.4-0.5 4.8 1.8 6.2 3.1 1.9 5.8-1.9 8.8-1.3-0.2 0.8 0.2 1.7-0.2 2.5 0.7 0.1 2 0.5 2.5 0.4-1.1 0.1-5.2-0.6-6.2 0.1-1.4 0.8-0.6 3-2.3 3.6-0.9-2.4-4.9-7.6-6.8-2.8-1.1-3.3 0.3-5.4 0.4-8.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m181.5 454.3c2.1-0.9 4.5 0.2 6.8 0.3 2.3 0.1 4.4-0.9 6.5-0.6-0.2 0.8 0.2 1.8 0.1 2.6 2.2 1 4.9-0.5 6.6-2 1.4 5.4-4.7 3.5-6.9 5-1.6 1-1.2 5.1-3.7 4.9 0.2-8.5-7-4.5-12.3-2.9 1.2-1.5 3.1-2.5 4.6-3.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m192.9 465.6c0.9-0.5 2.1-0.8 3.3-0.6 0 2.6-3.1 1.3-5 1.9"/>
											<path id="&lt;Path&gt;" class="s4" d="m166.2 456.3c1.4-0.2 3.3-0.5 3.7 1"/>
											<path id="&lt;Path&gt;" class="s4" d="m197.9 474.6c-3.2 0.2-5.1 4.9-8.3 5.8-2.2 0.5-4.1-0.8-6.4-0.4 0.4 1.4 1 2.8 1 4.3-1.8-0.4-5.7-3.3-7-4.4 1.3-1.1 3.5-1.1 5.3-1"/>
											<path id="&lt;Path&gt;" class="s4" d="m216.2 463.9c2.1 5.5 10.9 2.5 15.5 2.7 0 1.9 1.6 3.4 1.4 5.3-0.5-0.1-1.8-0.4-2.2-0.3-0.9 0.2-3.9 1.6-4.4 1.6-3.1 0.1-3.8-2.9-0.3-3.9"/>
											<path id="&lt;Path&gt;" class="s4" d="m228.9 461.3q0 0.4-0.1 0.8c-2 0.7-2.8-0.9-2.3-2.8"/>
											<path id="&lt;Path&gt;" class="s4" d="m235.9 438.3c1.1-5.1 3.2 4.3 3.6 4.6 3 2.1 10.4-6.2 9.3 1.6-4.9 0.5-6.6-2.3-7 5-1.1-0.7-3.6-1.2-4.3-2.3-0.4-0.7 0.1-1.7-0.3-2.3-1.4-2.1-2.6-2.4-5.9-3 0.6-1.1 0.7-2.8 0.6-4.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m238.5 464.3c1.5-0.1 2 0.9 3.3 1.2 2.5 0.4 5.5 0.2 8 0-0.1 0.4 0.3 1.4 0.2 1.7 1.7 0.1 3.2-0.3 4.8-0.2 0.1 0.4 0.1 0.8 0.1 1.3-4.9 1.3-9.9 0.5-8.1 6.8 0.7-6.5-2.9-6.4-6.9-8.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m256.9 466.3c-1 0.8-1.1 1.7 0 2.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m246.2 481.3c1.1 1.6 3.7 2.2 3.4 4.7 1.5 0.5 3.3 0.3 4.9 0.3-0.4 2.6-4.2 0.7-6 1.4-3.3 1.2-4.7 6-6.9 8.2-0.5-2.6 2.6-3.8 0.9-5.9-0.8-1.1-4.5 0-4.7-2.4-0.2-3.2 11.3-1.6 4.7-6.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m260.2 469.6c-0.2 0.4 0.6 1-1 0.6-0.4-1.3 0.1-1.7 1.3-1.9"/>
											<path id="&lt;Path&gt;" class="s4" d="m180.5 426.9q-0.1-0.4-0.2-0.8c2.2-0.7 6.4 0.5 8 2.1-2.4 3.1 3 7 5.9 6.4-1.8 4.9-7.8 0.4-10.1-1.6-4.1-3.8-3.9-4.1-5.9 1.3-1.7-0.1-3.8 0.1-4.3-1.6 6.8-2-6.8-3.2-2.7-6.1"/>
											<path id="&lt;Path&gt;" class="s4" d="m199.5 442.9c-0.4 1.9 0.9 3.8 2.4 3.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m167.2 446.9c-0.3 2.7-4.3 2.3-6.1 1.7 0.6-1.4 1.8-3.2 3.1-2.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m169.2 456.6c1.9-0.4 4.3-0.6 5.9-0.1-0.6 0.7-1.3 0.9-2.2 1.1"/>
											<path id="&lt;Path&gt;" class="s4" d="m172.5 527.3c1.2-0.5 3.2-1.3 4.7-0.8-0.8 3-2.9 2.4-1.9 5.2 0.9 2.9 3.1 1 4.2 3.2-2 0-7.6 2.2-8.3 0.7-0.9-1.7 7.2-6.6 3-8.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m184.9 535.9c3.8 0.5 3.1 2.8 1.3 4.4-0.9 0.7-4 2.1-5.2 2.3-0.9 0.2-2.2-0.4-3.1 0-0.8 0.3-0.9 1.2-1.8 1.7-2 1-3 1.5-5.5 1.2 1.1-2.6 4.7-3.5 7.4-4.3 1.3-0.4 3.6-0.6 4.5-1.9 0.8-1.1 0.2-2.9 0.7-4"/>
											<path id="&lt;Path&gt;" class="s4" d="m198.5 524.3c0.4 0.5 1.2 0.9 1.7 0.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m201.5 495.3c1.5 0 3 0.7 3.4 2.2-2.1 0.5-9.8 0.7-9.4-2.2"/>
											<path id="&lt;Path&gt;" class="s4" d="m226.2 500.6c-0.3-0.3-0.8-1.4-1-1.9 3 0.6 6.2 1.4 8.9 2.8 0.7 0.4 0.5 1.3 1.8 1.8 2.3 0.7 6.7-1.3 8.3 0.6 4.8 5.8-13.1 2.8-3.9 9-2.9 0.7-3.7-1.6-5.8-2.3-1.6-0.6-3.7 0.6-5.3-0.2-1.1-0.5-3.3-3.5-3.3-4.5-0.2-2.5 2.2-2.9 4-3.7-1.4-2.5-10.5-5.1-9.4-6.9"/>
											<path id="&lt;Path&gt;" class="s4" d="m248.9 507.9c-0.7 0 0.4 0 0.3 0"/>
											<path id="&lt;Path&gt;" class="s4" d="m235.5 517.3c-2.1 0-4.1-1.3-6.2-1.7-0.5-1 0-0.9 0.6-1.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m259.2 522.3c0.8 3.2-3.6 1.7-5.5 2.8 1.1 0.8 2.6 1.2 3.9 1.8-1.8 0.3-2.8-0.3-4.6 0.7-0.6 0.3-0.4 1.6-1.2 2-0.4 0.2-1.6-0.1-1.9 0-1.3 0.2-3.1 0.2-4-0.6 1.3-1 4.7-1.7 4.5-3.4-0.2-2-5.3-0.9-4.5-4.3 2.4-0.5 3.8 2 6 2.4 4 0.7 4.4-3.7 8-3.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m253.9 508.6q0 0.4-0.1 0.9c-1.6 0.5-3.2-0.5-2.8-2.2q0.4-0.1 0.9 0"/>
											<path id="&lt;Path&gt;" class="s4" d="m257.5 459.3c-1.5-0.1-3 1.1-1.6 2"/>
											<path id="&lt;Path&gt;" class="s4" d="m208.9 448.9c0.4 0.7 0.9 1.1 0.6 2-3 0.3-6.1-0.6-5.3-4.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m218.9 526.6c1 3.7 0.1 9.2 5.9 8 2.1-0.4 3.1-2.9 4.9-2.9 1.3 0.1 3.3 2.2 3.9 3.3-4.2 1.5-11.4-0.4-13.9 4 0.1-0.9 0.2-1.9 0.5-2.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m244.2 538.9c-2 0-4 0.2-6-0.1 0.5-2.4 3.6-0.9 5.3-1.9 1.6-0.9 1.5-3.1 3.7-3"/>
											<path id="&lt;Path&gt;" class="s4" d="m250.2 540.9c2 0 5.5 1.2 5 3.7-1.6 0-3.1-0.1-4.6 0.3 1.2 0.9 3 1.6 3.2 3.3-1.8 0.3-3.2-0.9-4.9-1.3-3-0.6-6.6 0.1-9.6 0-0.2-0.8-0.2-1.3 0.2-2 5 1.7 6.7-3.3 11-2.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m238.9 550.6c0.4 0.2 0.7 0.6 1.2 0.7q-2.6-0.1-5.2 0"/>
											<path id="&lt;Path&gt;" class="s4" d="m170.5 543.6c2.5 1.6 6.7 3.5 6.3 6.9-1.5 0.1-3.9 0.8-4.3-0.9"/>
											<path id="&lt;Path&gt;" class="s4" d="m167.5 510.3c0.2 0.6 0.1 1.7-0.1 2.3-1.9 0.1-5.2 0.6-5.5-2q0.7-0.1 1.3 0"/>
											<path id="&lt;Path&gt;" class="s4" d="m257.2 506.9c-0.2 0.6-0.1 1.1 0.3 1.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m265.9 488.3c1.6 1.4 1.8 7.4-1.1 8-3 0.7-3.1-4.9-2.9-6.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m266.5 505.6q0.2 0.9-0.3 1.7c-0.9-0.9-1.5-2.1-1.7-3.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m260.9 475.6c-0.2-0.1-0.1 0.9-0.5 0 0.3-1.5 1.3-2.3 2.8-2"/>
											<path id="&lt;Path&gt;" class="s4" d="m162.9 454.9c0.1 2.1 0.5 4.4-2 4.7-1.8 0.2-2.9-0.6-2-2.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m154.5 437.6c-1.9-3.6 3.3-4.7 4.3-7.1 0.7-1.7-1.1-2.3-0.9-3.8 0.3-3.6 4.6-4.9 6-8.1"/>
											<path id="&lt;Path&gt;" class="s4" d="m171.9 423.3c-0.3 0.9-0.6 2.4-1 3.6-0.5 1.1-2.2 2.7-2.4 3.8-0.5 2.3 1.7 4.4 0.4 7.1-1 1.9-3.6 4-4.9 6.1-1.4 2.4-3.5 6.6-6.8 6.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m258.2 451.3c-0.7-0.3-1-0.9-2-0.8-1.4-2.9-3.5-4.3-5-6.8-1.5-2.6-2.8-7.9-3-10.8"/>
											<path id="&lt;Path&gt;" class="s4" d="m264.9 447.3c0.8 3.6-3.1 2.5-4.4 0.6-1.1-1.6-1.1-5-1.6-6.9-1.2-4.1-2.6-7.9-4.4-11.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m155.2 503.3c0.9-0.7 5.4-2 6.6-1.1 1.3 1 0.7 3.7 1.1 5.3 0.6 2.1 1.5 2.5 1.6 5.1 0.3 3.3-0.7 7.2 0.7 10.2-1.1 0.4-2.1 0.1-3-0.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m157.5 483.6c2.5 0 6.5-1.1 7.4 2"/>
											<path id="&lt;Path&gt;" class="s4" d="m266.2 484.6c-1.9 1.4-3.8 2.9-5 5"/>
											<path id="&lt;Path&gt;" class="s4" d="m262.2 500.6c-0.2 5.3 2.5 11.3 4 16 0.6 2 0.6 5.2 1 7"/>
											<path id="&lt;Path&gt;" class="s4" d="m248.9 505.6c2-0.3 4.5 0.7 4.6 3"/>
											<path id="&lt;Path&gt;" class="s4" d="m218.9 496.9q3.5 0 7 0"/>
											<path id="&lt;Path&gt;" class="s4" d="m226.5 461.9c2 0 5.9-1.1 5.7 1.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m208.9 466.9c0.4-0.5 1.2-0.9 2-1"/>
											<path id="&lt;Path&gt;" class="s4" d="m162.9 646.9c-0.4-2 19.6-23.6 19.6-23.6l15.7-5c0 0 5.3 1.3 6 4 0.7 2.6-2 7.6-5 9.3-3 1.7-5 9.7-5.7 13-0.6 3.3-8.6 12.3-12.3 15.3-3.7 3-16-4.3-18-5.6-2-1.4-1-7.4-1-7.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m199.9 444.9c-0.7-3-4.4-4.2-5.4-7.3-0.6-2.1-1.9-5.6-1.6-7.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m223.2 440.9c2.8-1.2 4.9 3.2 5 5.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m180.9 551.3c0 0 12-13.7 16.3-14 4.3-0.4-1 44-1.7 49.6-0.6 5.7 1.7 28 1.7 28 0 0 2 4 3.3 6 1.4 2-2.3 7-4 8.4-1.6 1.3-5.3 13-6.6 15.6-1.4 2.7-6.7 4.7-6.7 4.7l-4.7-2.3c0 0-8-1.4-9.6-1.7-1.7-0.3-3-4.7-3-4.7l3-4 8.3-10.3c0 0 2.7-9 2.3-10.3-0.3-1.4 0.4-5 0.4-6.4 0-1.3-1.7-12-4.4-23-2.6-11-6.3-34.3-6.3-34.3z"/>
											<path id="&lt;Path&gt;" class="s4" d="m168.9 645.6c-5.4 1-5.4-3-5.4-3l5.4-5.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m172.9 647.3c0 0-4 1.6-6 0.6-2-1-2-5.3-0.7-6 1.3-0.6 6-4.6 6-4.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m174.5 650.3c0 0-4 1.6-6 0.6-2-1-2-5.3-0.6-6 1.3-0.6 6-4.6 6-4.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m176.9 652.6c0 0-2.4 1.7-3.4 1.7-1 0-3.6-1-4-2.4-0.3-1.3 0.7-4.3 0.7-4.3 0 0 6-2.7 6.7-5.7l1.6-1"/>
											<path id="&lt;Path&gt;" class="s4" d="m184.9 647.9c0 0-2.4 8.4-4.7 8.7-2.3 0.3-6.7-0.3-7-1.3-0.3-1 0-5 0-5 0 0 5.7-4 5.7-6.4"/>
											<path id="&lt;Path&gt;" class="s4" d="m175.2 645.3l0.7-3.4-3.7-5.6-0.7-3.4 4.4-4.6c0 0 0.6 3.6 2 5.3 1.3 1.7 18-3.7 18-3.7l2 4.4-2.7 2.3c0 0-2 8.3-2.7 10.3-0.6 2-2-3.6-2-3.6 0 0-5-4.4-8-4.4-3 0-5.6 7.7-5.6 7.7z"/>
											<path id="&lt;Path&gt;" class="s4" d=""/>
											<path id="&lt;Path&gt;" class="s4" d="m163.2 648.6c0.3 1.3 4.7 6 8 7.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m175.5 657.3c0 0 5.4 1.3 9.4-2"/>
											<path id="&lt;Path&gt;" class="s4" d="m203.5 621.3c0 0-1.3 7.3-6.6 9.6"/>
											<path id="&lt;Path&gt;" class="s4" d="m175.9 641.9c0 0 1.6-4-0.4-5.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m193.9 641.9c-1-2-9.4-4.3-9.4-4.3 0 0-3.3 0.7-5.6 0.7-2.4 0-5.4-5.7-5.4-5.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m195.2 617.6c0 0 2.3 5 0 5.7"/>
											<path id="&lt;Path&gt;" class="s4" d=""/>
											<path id="&lt;Path&gt;" class="s4" d="m175.2 650.9c0 0 2.7 0.4 2.7 1.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m277.4 643.9l4.8 1.5c0 0 3.2 4 4.7 4 1.5 0 1.6 2 1 2.9-0.6 0.8-2.3 1.1-2.3 1.1"/>
											<path id="&lt;Path&gt;" class="s4" d="m277.4 646.4l4.8 1.5c0 0 3.2 4 4.7 4 1.5 0 1.6 2 1 2.9-0.6 0.8-2.3 1.1-2.3 1.1"/>
											<path id="&lt;Path&gt;" class="s4" d="m277.4 648.8l4.5 2.2c0 0 2.5 4.5 4 4.8 1.5 0.2 1.3 2.2 0.5 3-0.7 0.7-2.5 0.7-2.5 0.7"/>
											<path id="&lt;Path&gt;" class="s4" d="m250.2 647l3-4c0 0 15.7-0.7 16.7-0.7 1 0 3.5 1 2.5-1.5-1-2.5-1.5-5.5-1.5-5.5 0 0 7.5 5.5 7.5 7.2 0 1.8-1.5 4.8-1.5 4.8l1.3 4.5-1.3 0.5-4.7-4.3c0 0-10 1.5-10.8 3-0.7 1.5 0.5 4.8 0.5 4.8"/>
											<path id="&lt;Path&gt;" class="s4" d="m259.9 655.3c-4.7-4.5-22.2-11.3-24.5-12.5-2.2-1.3-0.2-4.8-0.2-4.8"/>
											<path id="&lt;Path&gt;" class="s4" d="m266.7 659.8c0 0 10.5 5.5 13 3.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m253.2 647.5l6.7 3"/>
											<path id="&lt;Path&gt;" class="s4" d="m259.9 653c0 0 0.3-5 2.8-5.2 2.5-0.3 12-1.8 12-1.8l3-4"/>
											<path id="&lt;Path&gt;" class="s4" d="m233.9 644c0.8-0.2 10 4.8 10 4.8v2.2h-1.2"/>
											<path id="&lt;Path&gt;" class="s4" d="m276.9 652.5l4.3 3.3 2 3.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m278.2 659l1.2-1.5"/>
											<path id="&lt;Path&gt;" class="s4" d="m248.9 631c0 0-0.7-0.2-2-1.2-1.2-1 0-3.3 0-3.3"/>
											<path id="&lt;Path&gt;" class="s4" d="m189.2 551.8c0 0 2 7.7 1.2 9"/>
										</g>
										<path id="&lt;Path&gt;" class="s4" d="m365.1 307.7l-0.2-0.8h7.2l3 15.8-1.7 0.2-6.3 1.3z"/>
										<path id="&lt;Path&gt;" class="s4" d="m367.4 320.4l7-1.2"/>
										<path id="&lt;Path&gt;" class="s4" d="m366.9 316.4l6-0.7"/>
										<path id="&lt;Path&gt;" class="s4" d="m366.4 313.9l6-1"/>
										<path id="&lt;Path&gt;" class="s4" d="m371.9 308.3l-6 0.7-0.1-1 6-0.7z"/>
										<path id="&lt;Path&gt;" class="s4" d="m372.9 311.1l-6 0.7-0.1-1 6-0.7z"/>
										<path id="&lt;Path&gt;" class="s17" d="m373.1 317.8l-5.9 0.7-0.1-1 5.9-0.7z"/>
										<path id="&lt;Path&gt;" class="s10" d="m309.9 306.9l2.5 23.1-9.7-6.2 3.5-20"/>
										<path id="&lt;Path&gt;" class="s10" d="m385.4 303.9c0 0 15-10 17-7 2 3 3.5 13.5 3.5 13.5l-24.5 10c0 0 9.5-13.5 4-16.5z"/>
										<path id="&lt;Path&gt;" class="s10" d="m158.9 332.9l-14.5 6.5-2-24.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m66.9 288.9l3.5-9.5 8-2.5 7 6.5 3.5 0.5c0 0 1 19.5 2 21 1 1.5-17-4.5-18.5-9.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m92.4 308.9c0 0 19.5 21.5 27 24.5 7.5 3 7.5 8 7.5 8l-2 4c0 0-35.1-22.8-35.5-40.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m262.4 556.4c0.5 2-10 11-11.5 12.5-1.5 1.5-6 5-6 6.5 0 1.5-1 28-1 28 0 0-5-20.5-6-22.5-1-2-5.5-27.5-5.5-27.5l14.5 4"/>
										<path id="&lt;Path&gt;" class="s10" d="m185.4 545.9l13.5-11c0 0-0.5 12.5 0.5 17.5 1 5-3 31.5-3 31.5l-12-22c0 0-6.5-4-8.5-4-2 0-7-4-7-4"/>
										<path id="&lt;Path&gt;" class="s10" d=""/>
										<path id="&lt;Path&gt;" class="s10" d="m247.4 615.9l-0.5 6c0 0-3.5 9.5 4 11 7.5 1.5 5 9 5 9l-5.5 1.5-7.5-3-1.5-6.5 2-2 3-25.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m272.9 655.9l11.3-7.3 4.2 1.8c0 0-6 13-10.5 11.5-4.5-1.5-9.5-6.5-9.5-6.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m167.9 638.4c4.5 3.7 4 6.5 9.4 8.5 3.6 1.4 10.4 4.8 4.6 9.2-5.5 4.1-18.5-6.5-18.5-12.2"/>
										<path id="&lt;Path&gt;" class="s10" d="m191.9 612.9c0.5 3.5 3.8 4.5 5 7.4 0.9 2 0.5 5 0.3 7.1-5.7 1.5-5.1-12.2-4.3-15"/>
										<path id="&lt;Path&gt;" class="s10" d="m187.9 548.4c4.8 5.5 1.3 11.4 1 17"/>
										<path id="&lt;Path&gt;" class="s10" d="m242.9 561.9c-4.1 2.8-3.7 19.3 1 22.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m242.4 587.9c2.3 0 4.4 1.6 6 3"/>
										<path id="&lt;Path&gt;" class="s10" d="m184.4 564.9c2.8 0 5.8 1.9 6.5 4.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m188.9 578.4c1.5-0.3 2.8 0.1 3.5 1.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m188.4 547.4q2 0.1 4 0.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m179.4 557.4q1 0 2 0"/>
										<path id="&lt;Path&gt;" class="s10" d="m246.9 634.9q3.2 0 6.5 0"/>
										<path id="&lt;Path&gt;" class="s10" d="m190.4 624.4c1.5-0.8 3.1-1.4 4.5-2.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m177.4 572.4q1.2 0 2.5 0"/>
										<path id="&lt;Path&gt;" class="s10" d="m377.9 307.4c-2.8 0.6-2.2 8.7 0 10.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m310.9 316.4c-0.2 18.4 54.4-2 55.5 3.5 0.6 2.8-31.8 8-36.5 8-4 0-10.5 1.1-14.4 0-4-1.2-6-5.4-9.1-7.5"/>
										<path id="&lt;Path&gt;" class="s10" d="m343.9 317.4c4.1 0 8.6 0.8 12.5-1"/>
										<path id="&lt;Path&gt;" class="s10" d="m334.4 311.9c2.9-1.3 6.3-1 9.5-1"/>
										<path id="&lt;Path&gt;" class="s10" d="m132.9 315.9c1.6-0.7 3.9-0.5 5.9-0.4-0.2 2.1-2.3 2.8-2.5 4.4-0.3 2.9 2.1 4 1.5 7-6.2 1.8-7.4-11.7-14.9-10.5"/>
									</g>
									<g id="&lt;Group&gt;">
										<g id="&lt;Group&gt;">
											<path id="&lt;Path&gt;" class="s19" d="m239.9 632.5l35 8.8c0 0 15 12.7 15.8 13 0.7 0.2-4.3 9-9.8 11-5.5 2-18.2-3.8-20-4.5-1.7-0.8-5.5-5-5.5-5 0 0-7.5-2.3-9.5-2.3-2 0-10.7-4.5-12-5.7-1.2-1.3-1.5-7-1.2-8.8 0.2-1.7 6.2-5.7 6.2-5.7"/>
											<path id="&lt;Path&gt;" class="s20" d="m265.2 551.3c2 1.3-0.3 30-1.7 33.6-1.3 3.7-2.6 32.4-2.3 36.4 0.3 4 10 15.3 10 15.3l13 12c0 0-0.7 4.3-0.7 5.3 0 1-1.3 3.4-0.3 5.4 1 2-3 4-4 4-1 0-6-2.7-6.3-4-0.4-1.4-4.7-0.7-7-1-2.4-0.4-5-3.7-5.4-5.7-0.3-2-13.3-8.7-17-9.3-3.6-0.7-4-10-4-10 0 0 1.7-4.4 3-7 1.4-2.7 0.7-30.4-3.3-39.7-4-9.3-5.3-29.7-5.3-29.7l-0.4-4.6c0 0 29.7-2.4 31.7-1z"/>
											<path id="&lt;Path&gt;" class="s21" d="m256.2 425.3c0 0 3 1.3 4.7 3 1.6 1.6 2.6 9.6 3.3 11.6 0.7 2 2 7.4 3 9 1 1.7-0.3 2.4-2.3 4-2 1.7-0.4 3.7 0 5 0.3 1.4 1 18.7 1 19.7 0 1 1.6 2.3 1.6 2.3 0 0 0.7 1.7-0.3 3.4-1 1.6 1.7 37.3 1.7 40.6 0 3.4-2.7 4.7-2.7 4.7l-0.7 11.3 1.4 2-0.4 11.4-1 0.6c0 0-4.3 3-8.3 4.4-4 1.3-28-6-28-6 0 0-7.7 0.6-10 0.6-2.3 0-1-8.3-1-8.3l1-1.3-0.7-5.7c0 0-1.6-21.7-2-22.7-0.3-1-3.6-23-3.6-25l-1 3c0 0-1.4 5.4-1.4 6.4 0 1-2 9-4 17.3-2 8.3-8 17-8 17 0 0 0 3 0.4 5.3 0.3 2.4-0.7 0.7-2 0.7-1.4 0-13 12.7-17 14.3-4 1.7-13.7-1-13.7-1l0.3-4.6-2.3-12.7-0.3-6c0 0-0.7-1.3-3.7-2.3-3-1-5-17.4-5-17.4l-1.7-8.6 3.4-3.4c0 0-1.4-12-1.4-13.6 0-1.7 2.7-4 2.7-4l-3.7-46.4 1-10.6 0.7-7.4"/>
											<path id="&lt;Path&gt;" class="s20" d="m162.9 329.3c-1.4 6-37.7 18-37.7 18l-2-0.7c0 0-2.7-3.7-11-8-8.3-4.3-23.7-26.7-24.3-28.7-0.7-2 8.3-14 9-11.3 0.6 2.7 17.6 13.7 24.3 16.3 6.7 2.7 8 2.9 8 2.9l22-15.5c0 0 13 21 11.7 27z"/>
											<path id="&lt;Path&gt;" class="s22" d="m128.9 317.9c0 0 4.6 3 5.3 6.7"/>
											<path id="&lt;Path&gt;" class="s20" d="m88.5 309.6c-2 3-16.3-9.7-17.6-12-1.4-2.3 2.6-14.3 2.6-14.3 0 0 6-6.4 6.7-5.4 0.7 1 6.3 4.4 6.3 4.4-7-16.4 2-17.4 2-14.4 0 3 7.7 20 9 23.4 1.4 3.3-0.6 9.3-0.6 9.3"/>
											<path id="&lt;Path&gt;" class="s20" d="m76.2 281l-4-6.7c0 0-2.3-5.8-3.3-8.5-1-2.8 1-3.5 2.3-3.5 1.2 0 6.2 9.5 6.2 9.5l4.3 7.7"/>
											<path id="&lt;Path&gt;" class="s20" d="m70.9 292.3c0 0-8.9-10.8-9.7-12.5-1.8-4 0.2-4.5 0.2-4.5-1.5-2-1.7-6 0.5-6.5 2.3-0.5 6.5 5.5 6.5 5.5l6.8 7.7"/>
											<path id="&lt;Path&gt;" class="s20" d="m72.4 298.8c-1-0.5-6.7-5.8-6.7-5.8l-3.8-8.2c0 0 1.5-4 3.8-1.8 2.2 2.3 5.7 9.3 5.7 9.3"/>
											<path id="&lt;Path&gt;" class="s22" d="m61.9 275c0 0 9.3 8.8 11 12.5"/>
											<path id="&lt;Path&gt;" class="s22" d="m74.2 285.3l1.7-2.5"/>
											<path id="&lt;Path&gt;" class="s22" d="m87.4 283l1.5 4.3c0 0-3.2 6.2 0.3 13"/>
											<path id="&lt;Path&gt;" class="s20" d="m304.9 302.8l9.8 5.2c0 0 30.7 0 34 0.3 3.2 0.2 27.2-0.5 27.2-0.5 0 0 1 13.2-1.2 14.2-2.3 1-50 9-55.8 8.5-5.7-0.5-6.5-0.5-6.5-0.5 0 0-11-7-13.2-7.5-2.3-0.5 2.5-19.5 5.7-19.7z"/>
											<path id="&lt;Path&gt;" class="s22" d="m313.9 310.3c0 0-1.2 3.5-1 5.2"/>
											<path id="&lt;Path&gt;" class="s20" d="m375.2 308.3l7.5-13.5c0 0 5.2-6.8 4.2-8-1-1.3 7.8 1 0.8 12.5l1 0.7 8.2-3c0 0 1.8 13.5-0.2 16.8-2 3.2-14.3 7.2-14.3 7.2l-7.5 1"/>
											<path id="&lt;Path&gt;" class="s20" d="m392.2 298.8l5.7-3.8 12.5-4.5c0 0 2.8 2.8 0.3 4.8-2.5 2-8.3 4.5-8.3 4.5l-5.5 4.2"/>
											<path id="&lt;Path&gt;" class="s20" d="m395.9 303l6.8-3.7 8.5-4.3 4.5-0.5c0 0 3.5 2.8-1.5 5.5 0 0 2.7 2.5-2.5 5l-14 5.5"/>
											<path id="&lt;Path&gt;" class="s20" d="m396.4 310.5l4.8-0.7c0 0 2.7-1.8 6.7-3.3 4-1.5 3.3 1 3.3 1l-6 5.5-10.3 2.5"/>
											<path id="&lt;Path&gt;" class="s22" d="m397.2 307.3l10.7-5.8 6.3-1.5"/>
											<path id="&lt;Path&gt;" class="s22" d="m386.2 313c2.5-3.7 0.2-9.7 0.2-9.7l1.3-4.3"/>
											<path id="&lt;Path&gt;" class="s22" d="m394.7 300.3c0 0 1.2 1.2 1.2 3"/>
											<path id="&lt;Path&gt;" class="s22" d="m376.7 317.5l2.7 2"/>
											<path id="&lt;Path&gt;" class="s23" d="m251.7 267.3v1.5l22.5 3.5c0 0 17 16.5 20 20.5 3 4 12.5 8.5 12.5 8.5l-0.5 2.5-3.5 20-6.5 6-13.5-8-6.5 2-14.5 85-3.5 5v7.5l-6 8c0 0-17 6-49 1-32-5-49.5-16.5-49.5-16.5 0 0 4.5-9.5 4.5-11 0-1.5 2.5-9.5 2.5-9.5l4-24 2.5-3c0 0 1-4.5 0.5-9.5-0.5-5 1.5-28 1.5-28 0 0-5.5 4.5-8.5 5-3 0.5-23-23-23-23 0 0 36.5-38 39.5-37.5 3 0.5 32.5-6 32.5-6l2-1.5 5.5-1.5z"/>
											<g id="&lt;Group&gt;">
												<path id="&lt;Path&gt;" class="s24" d="m251.9 198c0 0 16.2 10.3 10.2 23-5.9 12.7-0.8 0.3-0.8 0.3l-13.8-20.7"/>
												<path id="&lt;Path&gt;" class="s20" d="m249.2 254.3c-6.5 10.9-3.4 17.3-1.8 21.9 1.7 4.7-6.2 9.9-16.1 7.5-10-2.4-16.5-4.4-13.9-12.4 2.6-7.9-4.4-24.5-4.4-24.5"/>
												<g id="&lt;Group&gt;">
													<g id="&lt;Group&gt;">
														<path id="&lt;Path&gt;" class="s20" d="m252.9 202.5c0 0 10.8 7.2 9.2 18.5-1.5 11.3-2 13.3-2 13.3 0 0 2.5-0.7 3.1 1.4 0.6 2.1-3.7 6-3.2 7.8 0.5 1.7-1.4 5.4-1.9 4.9-0.6-0.5-2.3 6.7-3.2 11.3-1 4.7-10 10.4-13.6 11.8-3.5 1.5-6.7-0.3-6.7-0.3 0 0-11.8-6.9-16-10.5-4.1-3.6-5.2-8.1-6-11.8-0.9-3.7-1.7 1.3-6.2-7.8-4.5-9.2 1.1-15.1 3.1-13.2 2 1.9 1.2 0.5 1.2 0.5 0 0 0.7-11.3 1.2-17.7 0.4-6.4 7-12.6 18.8-14.9 11.9-2.4 21.5 6.5 21.5 6.5"/>
														<path id="&lt;Path&gt;" class="s25" d="m245.1 269c0 0-2.6 4.8-8.6 3.2-5.9-1.6-6.7-4.5-6.7-4.5"/>
													</g>
													<path id="&lt;Path&gt;" class="s26" d="m257.7 227.4c-0.2-0.4-5.5-2-7.5-2.2-2-0.3-3.1 1.1-3.1 1.1 0 0-0.3-0.5-0.2-1.4 0-0.8 0.5-2.6 3.6-1.9 3.2 0.8 5.5 1.3 7.1 2.1 1.6 0.8 1.2 4.8 1.2 4.8 0 0-0.9-2.1-1.1-2.5z"/>
													<path id="&lt;Path&gt;" class="s27" d="m235.6 222.7c0 0 1.1 2.1-0.6 2.3-1.6 0.3-9-0.4-11 0.2-2 0.7-3.3 2.2-3.3 2.2l-0.3-0.3c0 0 2.2-3.9 4.7-4.6 2.4-0.7 10.6-0.1 10.6-0.1"/>
													<path id="&lt;Path&gt;" class="s24" d="m255.3 204.3c0 0 5.9 1.1 7.8 8.3 1.9 7.1-2 14.4-2 14.4 0 0 0.8-10.5-0.9-15.3-1.7-4.9-4.9-7.4-4.9-7.4z"/>
													<path id="&lt;Path&gt;" class="s24" d="m251.1 201.3c0 0-4.8-2.6-8.7-2.5-3.9 0-6.6-0.7-12.7-1.5-6.2-0.9-13.9 6.3-14.6 8.8-0.6 2.5-1.4 10.3-0.4 11.5 1 1.3-2.9 7.6-2.7 9.7 0.1 2.2-0.1 3.5-0.1 3.5l-1.7-2c0 0-1.3-12.8-0.5-16.9 0.9-4.2 5.9-10.6 9.1-12.4 3.2-1.9 6.2-8.7 17.5-8.4 11.4 0.4 19.4 3.7 15.1 9.6"/>
													<path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="s28" d="m224.1 251.5c0-2.5 5.2-3.1 7.4-5 2.1-1.8 4.2-1.9 5.7-1.9 1.5 0 2.1 0.6 2.1 0.6 0 0 1.1 1.2 1.8 0.5 0.7-0.6 2.6-0.5 4.1 0.7q0 0 0.2 0.2c0.4 0.6 1.4 2 3.3 2.5 2.3 0.5 2.7 2.4 2.8 3.3 0.1 0.9-0.3 1.9-0.3 1.9 0 0 1.2 2.1 0.6 6.9-0.5 4.9-5.6 6.9-5.6 6.9 0 0-3.6 4.2-8 4-4.4-0.3-4.9-1.2-6.8-3-1.9-1.8-6.3-3.5-7-5.9-0.7-2.4-0.3-9.2-0.3-11.7zm5.7 8.6c1.7-1.2 4.3-2.7 8.8-2.7 4.4 0 6.1 0.6 6.9 3.2 0.9 2.7 3 2.6 3.6 0.6 0.7-2.1 2.1-8.5-0.2-8 0 0-1.7 0.1-3.1-1-1.3-1.1-2.3-2.1-4.4-1.8-2.1 0.2-2.4-0.2-4-0.8-1.5-0.6-3.1-0.3-6.1 1.1-2.9 1.4-5.2-1.8-5.1 1.8 0.1 3.6 2 8.8 3.6 7.6z"/>
													<path id="&lt;Path&gt;" class="s29" d="m256.1 232c0 0-0.1-1-0.8-1.5-0.7-0.4-4.6-1-5.9-1-1.3 0-2.7 1.3-2.7 1.3l-0.3-0.1c0 0 0.3-1.2 1.9-1.5 1.6-0.3 6 0.4 7.1 1 1.1 0.6 0.9 1.6 0.9 1.6"/>
													<path id="&lt;Path&gt;" class="s29" d="m253.8 230.1c0 0-0.2 2-2.3 1.9-2.2-0.1-2.2-2.5-2-2.8 0.2-0.2 3.9 0.5 3.9 0.5"/>
													<path id="&lt;Path&gt;" class="s29" d="m245.6 229.2c0 0 0.1-1.1 2.9-1.2 2.8-0.1 5.1 1.3 5.1 1.3-6.3-2.3-8-0.1-8-0.1z"/>
													<path id="&lt;Path&gt;" class="s29" d="m234.8 229.3c0 0-1.4 0.4-2.1-0.2-0.6-0.7-2.1-0.9-4.2-1-2.2 0-2.3 0.5-3.6 1.3-1.2 0.8-3.3 0.2-3.3 0.2 0 0 0.7-0.1 1.5 0 0.9 0 2.1-1.4 4.6-1.7 2.6-0.3 4 0.1 4.9 0.7 0.9 0.5 2 0.6 2 0.6"/>
													<path id="&lt;Path&gt;" class="s29" d="m234.1 228c0 0-0.4-1.2-1.8-1.3-1.4 0-4.6 0.8-6.3 0.9-1.7 0.1-3.2 1.4-3.2 1.4 0 0 1-1.4 3.1-1.6 2.1-0.2 4.1-0.5 5.6-0.9 1.5-0.3 2.8 1.2 2.7 1.7"/>
													<path id="&lt;Path&gt;" class="s29" d="m230.8 228.1c0 0 0.6 2-1.8 2.4-2.3 0.4-2.9-1.5-2.8-2.1 0.1-0.6 2.8-0.7 4.5-0.4"/>
													<path id="&lt;Path&gt;" class="s30" d="m255.3 231.7c-0.4 0.3-2.8 0.2-2.2 0 0.6-0.2 1-1.4 1-1.4 1.7 0.8 1.5 1.1 1.2 1.4z"/>
													<path id="&lt;Path&gt;" class="s30" d="m249.2 229.7c0 0 0 1.1 0.4 1.6 0.4 0.5 0.4 0.5 0.4 0.5 0 0-1-0.3-1.9-0.7-0.9-0.4-1.1-0.3-1.1-0.3 0 0 0.8-1.1 2.1-1.1"/>
													<path id="&lt;Path&gt;" class="s30" d="m231 228.6c0.7 0.1 2 0.5 1.6 1.1-0.5 0.6-3.2 0.9-2.3 0.5 0.8-0.4 0.7-1.6 0.8-1.5"/>
													<path id="&lt;Path&gt;" class="s30" d="m226 229c0 0 0.4 0.8 0.6 1.1 0.3 0.3-2-0.2-2.1-0.4"/>
													<path id="&lt;Path&gt;" class="s29" d="m248.6 253.8c0 0 0.2 0.1-0.1 0.4-0.3 0.3-4.4-0.4-5.3-0.7-0.9-0.3-3-0.1-4 0.2-0.9 0.2-2.7-0.7-3.5-1-0.8-0.3-6.7-0.1-7.4-0.4-0.7-0.3 0-0.7 0-0.7 0 0 1.1 0.6 2.7 0.7 1.6 0.1 4.6-0.4 5.9 0.5 1.4 0.9 2.8 0.2 4 0.2 1.2 0 3 0.2 4.2 0.7 1.2 0.6 3.4 0.1 3.4 0.1"/>
													<path id="&lt;Path&gt;" class="s29" d="m243.4 256.3l-0.6 0.3c0 0 0.8 0.2 0.9 0.5 0 0.2-0.8 0.1-0.8 0.1l0.3 0.6-0.7-0.3 0.2 0.6-1.1-0.2-0.4 0.3-0.6-0.4-0.4 0.2-0.9-0.3-0.2 0.4-0.7-0.3c0 0-0.4 0.2-1 0-0.6-0.2-0.1-0.3-0.1-0.3 0 0-0.7 0.2-0.9 0.1-0.2-0.1 0.1-0.8 0.2-1 0.1-0.1-0.1 0.2-0.7 0.3-0.5 0.1 0-0.5 0-0.5l-0.8-0.5c0 0 0.3 0.1 2.7 0.4 2.5 0.3 4.4 0.1 4.4 0.1"/>
													<path id="&lt;Path&gt;" class="s29" d="m260.6 233.7c0 0-0.8 1.9-0.7 5.3 0 3.4-2.8 7.2-2.8 7.2 0 0 2.2-2.9 2.3-6.6 0.1-3.8 0.9-6.7 0.9-6.7"/>
													<path id="&lt;Path&gt;" class="s29" d="m241.6 243.7c0 0 2.8-2.1 3.3-1.4 0.4 0.8-0.9 1-2.1 1.1"/>
													<path id="&lt;Path&gt;" class="s29" d="m237.7 241.9c0 0-0.4 0.7-0.9 0.8-0.4 0.1-1.3-1.3-0.2-1.6 1.1-0.3 2 0.9 2 0.9"/>
													<path id="&lt;Path&gt;" class="s29" d="m243.4 229.5c0 0 1.5 6.5 1 7.9-0.4 1.3 1.3 1.1 2.2 2.4q0.3 0.3 0.4 0.8c0.7 2.2-0.8 2.5-0.8 2.5 0 0 1.5-2.8-0.4-3.5-1.9-0.8-2-1.2-1.8-2.2 0.2-1 0-3.3-0.7-8.1"/>
													<path id="&lt;Path&gt;" class="s31" d="m229.2 244.5c-0.3 0.9-3.1 3.3-4.3 4.7-1.3 1.5-2 4.7-2 4.7 0 0 0 0 0.4-2.4q0.1-0.9 0.7-1.7 0.3-0.5 0.7-0.9c1.3-1.5 3-2.9 4-4.2 1.5-2 3.5-3 3.5-3"/>
													<path id="&lt;Path&gt;" class="s31" d="m249.5 246.5c0 0 3.2 6 2 7.1"/>
													<path id="&lt;Path&gt;" class="s32" d="m246.6 239.8c1.3 1.5 0.3 3.3-0.1 3.5-0.4 0.1-4.2 0.7-4.7 1.2-0.5 0.5-1.4 0.7-1.9-0.1-0.5-0.8-3.1-1-3.8-1.7-0.7-0.6-0.8-1.8 0.5-2.2 1.4-0.4 3.3 1.7 4.4 1.7 3.2-0.1 2.4-1.5 4-2 1.6-0.5 1.8 1.1 1.8 1.1"/>
													<path id="&lt;Path&gt;" class="s33" d="m247.8 254.2c0 0-2 0-3.1 0.3-1.2 0.3-1.4 1.5-3.8 1.3-2.4-0.2-5.5-0.3-7.1-1.5-1.6-1.2-5.4-2.5-5.4-2.5 0 0 0 0 1 0.2 1.1 0.3 3.8-0.7 5.5-1.4 1.7-0.6 2.7 0.1 3.6 0.4 0.8 0.3 2.3 0.2 2.7 0 0.4-0.1 1.6 0 3.4 1.6 1.8 1.5 3.4 1.3 3.4 1.3"/>
													<path id="&lt;Path&gt;" class="s34" d="m254.3 224.5c0 0 3.8 0.8 4.7 3.2 0.9 2.5-2.3 6.1-2.4 4.7-0.2-1.4-2.6-2.8-6.4-3.2-3.8-0.4-5.2 0.8-5.2 0.8 0 0-1.6-0.5 0.2-1.4 1.8-0.9 4.3-0.7 6.7-0.3 2.4 0.5 2-2.2 2-2.2"/>
													<path id="&lt;Path&gt;" class="s35" d="m257.8 230.8c1.1 3.4-2.6 9.3-5.6 8.8-2.9-0.6-7.5-4.9-7.8-7.6-0.2-2.6-3.7-4.8-1.9-5.4 1.8-0.7 4.7 0.5 3.5 1.9-1.1 1.5-0.4 2 1.5 2.7 1.9 0.6 8 1 8 1"/>
													<path id="&lt;Path&gt;" class="s36" d="m235.4 223.4c0 0 1.8 2.8 1.3 4.2-0.5 1.4-1.7 1.9-1.7 1.9 0 0-1.5 0.1-3.1-1-1.5-1.1-4.7-0.5-6.3 0-1.6 0.6-2.5 1.8-4.4 1.1-2-0.7-2.3-0.9-2.3-0.9 0 0 3.2 0 5.8-1.2 2.6-1.3 7.2-1.2 7.8-1 0.5 0.1-1.6-2.2-2.1-2.5"/>
													<path id="&lt;Path&gt;" class="s37" d="m235.5 228.7c0 0 0.4 2.3-1.5 4.2-2 1.9-5.5 2.5-7.7 0.6-2.2-1.9-6.1-2.7-4-3.1 2.1-0.4 3.1 0.6 7 0.6 3.9 0 4.7-1.7 4.7-1.7"/>
													<path id="&lt;Path&gt;" class="s38" d="m254.7 232.7c0 0-1.8 1.7-5.4 1-3.6-0.7-4.7-3.8-3.6-3 1.1 0.8 7.5 1.7 7.5 1.7"/>
													<path id="&lt;Path&gt;" class="s39" d="m247.9 198.9c8.7 5.8 12.3 8.2 12.4 18.2 0.2 10-1.3 16-1.3 16 0 0 0.7-4.7-0.8-7.7-1.5-3-4.8-2.9-6.7-4.4-2-1.4 0.5-7.5 0.5-11.2 0-3.8-6.4-11-6.4-11"/>
													<path id="&lt;Path&gt;" class="s40" d="m260.3 236.4c0 0-0.1 1.9-1.1 5.7-1 3.9-4 12.6-4.3 16.7-0.3 4-5.5 7.2-5.5 7.2 0 0 2.6-4 1.7-7.7-0.8-3.7 2-5.7 3-7 1-1.3 1.7-4.7-0.3-6.4-2.1-1.7-6.1-8.3-4.5-7.4 1.7 1 4.7 3.7 6.5 3.1 1.9-0.6 4-3.4 4-3.4"/>
													<path id="&lt;Path&gt;" class="s41" d="m233.8 240.1c0 0-1.5 1.7-5.8 6.9-4.4 5.2-4.4 7.9-4.4 7.9 0 0-2.6-1.3 0.3-6.1 2.9-4.8 9.5-8.4 9.5-8.4"/>
													<path id="&lt;Path&gt;" class="s42" d="m232.2 235.2c-2.1 4.1-7.4 4.8-10.2 2.3-2.7-2.4-6.3-0.5-6.3-0.5 0 0-0.6-2.8 1.7-4.5 2.2-1.7 4.8 1.7 7.6 3 2.8 1.3 6.6-0.5 6.6-0.5"/>
													<path id="&lt;Path&gt;" class="s43" d="m245.5 250.7c0 0 4.8 1.1 4.9 1.4 0.1 0.4 0.7 5.8 0.3 8.2-0.3 2.3-3.7 4.4-4.6 2.5-0.9-1.8-2.3-3.3-2.7-4.7-0.4-1.3 1.5-2.7 2.7-3.4 1.1-0.7-0.9-3.1-0.9-3.1"/>
													<path id="&lt;Path&gt;" class="s44" d="m245.5 251.7c0 0 4.8 1.1 4.9 1.5 0.1 0.4 0.6 5.8 0.3 8.1-0.3 2.4-3.7 4.4-4.6 2.6-0.9-1.9-2.3-3.3-2.7-4.7-0.4-1.4 1.5-2.7 2.7-3.4 1.1-0.7-0.9-3.1-0.9-3.1"/>
													<path id="&lt;Path&gt;" class="s45" d="m245.7 243.4q0 0 0.2 3.2c0.1 2.2-0.4 4.1-0.6 4.2-0.3 0.2-1.9-0.2-2.2-1.9-0.4-1.7-1.5-3.3-1.2-4.3 0.4-1.1 4.6-1.9 4.6-1.9"/>
													<path id="&lt;Path&gt;" class="s46" d="m214.1 219.4c0 0-0.1 13.8-1.4 13.2-1.3-0.6-2.2-3.4-2.2-3.4 0 0-1.8-8.9-0.3-14.5"/>
													<path id="&lt;Path&gt;" class="s47" d="m209.8 232.7c0 0 2.3 1.8 0.5 3.5-1.8 1.7-1 3.1 0.4 3.7 1.4 0.5 0.9 2.5 0.9 2.5 0 0-0.9-1.4-2.2-1.6-1.3-0.2-2.8-1.5-2.1-3.4 0.6-1.9 3.2-3.4 2.2-4.9"/>
													<path id="&lt;Path&gt;" class="s48" d="m206.4 238.3c0 0-0.4-1.2-0.7-4-0.4-2.8 1.1-4.9 2.3-5.1 1.2-0.2 1.1 1.3 1.1 1.3-4-0.3-2.7 7.8-2.7 7.8z"/>
													<path id="&lt;Path&gt;" class="s49" d="m243.2 261c0.5-0.5 1.4 1 1.4 1.6"/>
													<path id="&lt;Path&gt;" class="s49" d="m243.5 261.9c0.8 0.4 0.3 1.2 0.1 1.8"/>
													<path id="&lt;Path&gt;" class="s49" d="m242.4 263c0.4 0.6 0.6 1.6-0.4 1.6"/>
													<path id="&lt;Path&gt;" class="s49" d="m241.6 260.9c0.3 0.6 0.6 1.3 0.1 1.9"/>
													<path id="&lt;Path&gt;" class="s50" d="m243.2 267.4c0.3 0.9 0.6 3.1-0.8 3.2"/>
													<path id="&lt;Path&gt;" class="s50" d="m242.6 268.8c-0.2 0.6-1 3.2-2 2.3"/>
													<path id="&lt;Path&gt;" class="s49" d="m241 269.4c-0.3 0.6-0.8 1.3-1.6 1.5"/>
													<path id="&lt;Path&gt;" class="s49" d="m238.6 269.7c-0.5 0.2-0.5 0.9-1.1 1 0-0.1-0.1-0.2-0.1-0.4"/>
													<path id="&lt;Path&gt;" class="s49" d="m250.5 260.4c0.3 0.6 1 1.7 1.8 1.3"/>
													<path id="&lt;Path&gt;" class="s49" d="m250.5 261.8c0 0.4 1.7 1.6 0.6 1.7"/>
													<path id="&lt;Path&gt;" class="s49" d="m250 263.1c0.5 0.3 1.3 2 0.2 2.1"/>
													<path id="&lt;Path&gt;" class="s49" d="m249.3 265c0.2 0.4-0.1 1.6-0.5 1.8"/>
													<path id="&lt;Path&gt;" class="s49" d="m251.5 259.3c-0.3-0.1-0.5-0.4-0.7-0.7"/>
													<path id="&lt;Path&gt;" class="s49" d="m251.3 257.5c-0.4-0.1-0.6-0.5-0.8-0.7"/>
													<path id="&lt;Path&gt;" class="s49" d="m249.3 250q0.7 0.5 0.9 1.3"/>
													<path id="&lt;Path&gt;" class="s49" d="m248.9 250.2c0.3 0.3 0.9 0.9 0.5 1.4"/>
													<path id="&lt;Path&gt;" class="s49" d="m246.8 249.4c0.4 0.3 1.5 1.4 0.7 1.9"/>
													<path id="&lt;Path&gt;" class="s49" d="m245.8 248.5c0.4 0.3 1.2 1.7 0.5 2.2"/>
													<path id="&lt;Path&gt;" class="s49" d="m244.7 247.4c0.7 0.9 0.6 1.8-0.1 2.6"/>
													<path id="&lt;Path&gt;" class="s49" d="m244 247.6c0.1 0.4 0.4 0.9 0.1 1.3"/>
													<path id="&lt;Path&gt;" class="s49" d="m243 247.4c0.3 0.6 0.1 1.1-0.3 1.6"/>
													<path id="&lt;Path&gt;" class="s49" d="m241.6 247.6c-0.1 0.4-0.4 0.7-0.7 0.9"/>
													<path id="&lt;Path&gt;" class="s49" d="m237.9 246.3c-0.6 0.4-1.7 0.9-1.5 1.8"/>
													<path id="&lt;Path&gt;" class="s49" d="m236.3 246.4c-0.5 0.2-1.2 0.6-1.1 1.2"/>
													<path id="&lt;Path&gt;" class="s49" d="m234.6 246.5c-0.6-0.1-1.6 1.1-1.6 1.7"/>
													<path id="&lt;Path&gt;" class="s49" d="m232.6 246.6c0.1 0.9-2.3 1.5-1.7 2.6"/>
													<path id="&lt;Path&gt;" class="s49" d="m230.5 247.7c-0.5 0.3-1 1.3-0.9 2"/>
													<path id="&lt;Path&gt;" class="s49" d="m229 248.5c-0.4 0.3-0.6 0.8-0.4 1.3"/>
													<path id="&lt;Path&gt;" class="s49" d="m227.1 249.7c0 0.3-0.6 1-0.8 1.4"/>
													<path id="&lt;Path&gt;" class="s49" d="m240.7 266.6c-0.2 0.4-1 1.9-1.4 1.3"/>
													<path id="&lt;Path&gt;" class="s50" d="m247.1 266.1c-0.1 0.6-0.4 1.3-1.1 1.4"/>
													<path id="&lt;Path&gt;" class="s50" d="m244.9 267c0.2 0.7 0.2 1.2-0.3 1.8"/>
													<path id="&lt;Path&gt;" class="s50" d="m237.5 268c-0.8 0.7-2.1 1-3.1 1.3"/>
													<path id="&lt;Path&gt;" class="s50" d="m235.3 268c-0.3 0.7-2.1 1.2-2.9 1.1"/>
													<path id="&lt;Path&gt;" class="s50" d="m234.1 267.6c-0.2 0.6-2.1 1.3-2.4 0.4"/>
													<path id="&lt;Path&gt;" class="s51" d="m232.5 266.7c0 0.6-1.8 1.2-2.3 0.4"/>
													<path id="&lt;Path&gt;" class="s51" d="m231.1 266c-0.6 0.2-2.1 1.1-2.6 0.3"/>
													<path id="&lt;Path&gt;" class="s51" d="m229.8 265.2c-0.7 0.5-1.6 0.4-2.2-0.1"/>
													<path id="&lt;Path&gt;" class="s51" d="m228.7 264.1c-0.6 0.1-1.6 0.7-2.1 0.2"/>
													<path id="&lt;Path&gt;" class="s49" d="m236.6 269.6c-0.2 0.3-1.9 1.5-2.4 0.8"/>
													<path id="&lt;Path&gt;" class="s51" d="m227.7 263.1c0 0.3-1 0.5-1.5 0.5"/>
													<path id="&lt;Path&gt;" class="s49" d="m248.7 265.7c0.2 0.4-0.1 0.7-0.3 1.1"/>
													<path id="&lt;Path&gt;" class="s49" d="m248.8 263.8q0.1 0 0.1 0"/>
													<path id="&lt;Path&gt;" class="s49" d="m250.5 254.3c0.2 0.4 0.6 0.7 1.1 0.7"/>
													<path id="&lt;Path&gt;" class="s49" d="m250.6 253q0.3 0.3 0.7 0.2"/>
													<path id="&lt;Path&gt;" class="s49" d="m225.8 252c-0.4 0.3-0.6 0.8-0.9 1.1"/>
													<path id="&lt;Path&gt;" class="s51" d="m225.7 253.6c-0.8 0-1.1 1-1.3 1.7"/>
													<path id="&lt;Path&gt;" class="s51" d="m225.7 256.1c-0.4 0.2-0.4 1.2-1 1.5"/>
													<path id="&lt;Path&gt;" class="s51" d="m225.9 257.3c0.1 0.4-0.3 1.2-0.8 1.3"/>
													<path id="&lt;Path&gt;" class="s51" d="m225.9 259.2c-0.2 0.4-0.7 0.8-1.1 1.1"/>
													<path id="&lt;Path&gt;" class="s51" d="m226.2 260.9c-0.5 0.1-0.8 0.5-1.1 0.9"/>
													<path id="&lt;Path&gt;" class="s51" d="m226.3 262.1c-0.6 0-0.8 0.7-1 1.1"/>
													<path id="&lt;Path&gt;" class="s49" d="m238.7 263.7c0.4 0.5-0.2 1.5-0.5 1.9"/>
													<path id="&lt;Path&gt;" class="s49" d="m237.7 263.8c-0.3 0.1-0.3 0.3-0.5 0.5-0.4 0.3-0.9 0.5-1.3 0.6"/>
													<path id="&lt;Path&gt;" class="s49" d="m235.6 263.2c0.3 0.8-1.2 1-1.7 1.1"/>
													<path id="&lt;Path&gt;" class="s49" d="m233.8 263c0.2 0.3-0.3 0.6-0.7 0.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m245.3 262.8c0.8-0.3 1.4 0.8 1.5 1.5"/>
													<path id="&lt;Path&gt;" class="s52" d="m245.2 263.3q0.2-0.1 0.3 0c0.3 0.5 0.7 1.7 0.1 2.2"/>
													<path id="&lt;Path&gt;" class="s52" d="m244.8 264.1c1 0.7 0.5 2.2-0.1 3"/>
													<path id="&lt;Path&gt;" class="s52" d="m244 264.5c0.8 1.1 1.3 2.7-0.5 3.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m243.6 265.1c0.3 1 0.2 2.2-1 2.6"/>
													<path id="&lt;Path&gt;" class="s52" d="m242.4 265.8c0.3 1-0.5 2.6-1.6 2.9"/>
													<path id="&lt;Path&gt;" class="s52" d="m247.8 263c0.5 0.3 0.6 1.2 0.3 1.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.9 268.2c0.8-0.4 0.8-1.2 0.6-1.9"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.3 265.4c0.6 1.6-2.2 3.1-3.4 2.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m239 266.2c0.2 0.8-1.7 2-2.2 1.3"/>
													<path id="&lt;Path&gt;" class="s52" d="m237.6 266.1c-0.3 0.8-1.6 1.2-2.3 1.2"/>
													<path id="&lt;Path&gt;" class="s52" d="m236.6 265.8c0.1 0.7-1.7 1.5-2.1 0.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m235.7 265.4c-0.6 0.2-1.9 1.2-2.3 0.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m233.7 265.1c0.3 0.5-1.9 1-2.5 0.6"/>
													<path id="&lt;Path&gt;" class="s52" d="m239.8 268.7c0.3 1.1-1.1 1.9-1.8 2.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m237.6 268.8c1 0.9-1.7 1.8-2.2 1.9q-0.1-0.2-0.1-0.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.5 266.2c1-0.5 0.3-1.9-0.1-2.5"/>
													<path id="&lt;Path&gt;" class="s52" d="m241.8 263.6c0.2 0.5 0.3 1.4-0.1 1.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m239.7 264.4c0.3 1 0.1 1.9-1 2.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m240 262c0.2 0.5 0.4 1.3-0.3 1.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m239.2 262.2c-0.4 0.2-0.5 0.7-1.1 0.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m237.6 261.5c0.4 0.9-0.9 1.1-1.5 1.3"/>
													<path id="&lt;Path&gt;" class="s52" d="m241.5 268.4c0.3 0.4-0.3 1.8-0.9 1.9"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.4 268.3c0.8 0.8-0.5 1.8-1.2 2.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m239.2 268.6c0.2 0.5-0.1 1.7-0.8 1.7q0 0 0-0.2"/>
													<path id="&lt;Path&gt;" class="s52" d="m246.7 263.7c0.5 0.1 0.8 2.1 0.1 2.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m246 264.1c0.8 0.5 1.2 2.5-0.1 2.6"/>
													<path id="&lt;Path&gt;" class="s52" d="m245.1 264.4c1.3 0.8 0.5 2.6-0.5 3.2"/>
													<path id="&lt;Path&gt;" class="s52" d="m244.4 265.1c1 0.4-0.3 1.8-0.9 1.9"/>
													<path id="&lt;Path&gt;" class="s52" d="m243.3 265.8c0.8 0.9 0 1.8-1 2"/>
													<path id="&lt;Path&gt;" class="s52" d="m242 266.8c0.5 1.1-0.5 1.8-1.5 2.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.5 268.6c0.5 0.7-0.3 2.5-1.2 2"/>
													<path id="&lt;Path&gt;" class="s52" d="m245.2 260.8c0.2 0.5 0.4 1 0.4 1.5"/>
													<path id="&lt;Path&gt;" class="s52" d="m239.6 247.5c0.2 0.6-0.2 1.3 0 1.9"/>
													<path id="&lt;Path&gt;" class="s52" d="m239 247.4c-0.3 0.6-0.5 1.1-0.6 1.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m238.4 247.3c-0.3 0.6-0.6 1.2-0.9 1.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.1 249q0.3 0.2 0.6 0.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m234.5 247.8c-0.5 0.2-0.7 0.9-0.6 1.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m232.8 248.7c-0.1 0.1-0.2 0.2-0.2 0.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m232.2 248.3c-0.2 0.4-0.2 1-0.1 1.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m231.3 249.5q-0.3 0.4-0.4 0.9"/>
													<path id="&lt;Path&gt;" class="s52" d="m230.4 249.8q0 0.4-0.1 0.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m228.8 250c0.2 0.4 0.1 0.9-0.2 1.2"/>
													<path id="&lt;Path&gt;" class="s52" d="m249 252c0.2 0.2 0.3 0.5 0.4 0.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m247.4 252.9c0.4-0.2 0.4-0.8 0.1-1.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m246.5 251c0.6 0.4 0.2 1.1-0.1 1.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m245.5 250.4c0.2 0.2 0.2 0.5 0 0.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m244.3 249.7c-0.2 0.1-0.2 0.3-0.2 0.6"/>
													<path id="&lt;Path&gt;" class="s52" d="m243.5 249c-0.3 0.4-0.4 0.9-0.5 1.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m242.5 248.7c0 0.6-0.3 1-0.2 1.6"/>
													<path id="&lt;Path&gt;" class="s52" d="m242 249.1c-0.3 0.3-0.1 0.7-0.2 1.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m243.4 259.3c0.5 0 1 0.7 1.1 1.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m241.9 259.8c0.4 0 1 0.9 0.6 1.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.4 260.6c0.3 0.1 0.6 0.9 0.1 1"/>
													<path id="&lt;Path&gt;" class="s52" d="m239.1 260.6c0.1 0.3 0.1 0.6-0.2 0.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m237.6 260.8c0.2 0.7-0.4 1.2-1.1 1.3"/>
													<path id="&lt;Path&gt;" class="s52" d="m236.1 261.1c0.2 0.8-1.3 2-1.7 1.3"/>
													<path id="&lt;Path&gt;" class="s52" d="m241.2 263.2c0.3 0.8-0.8 2.6-1.5 1.9"/>
													<path id="&lt;Path&gt;" class="s52" d="m239.9 263.1c0.7 1-0.8 1.9-1.4 2.5"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.6 264.2c1.5 1.4-0.3 2.9-1.8 3.1"/>
													<path id="&lt;Path&gt;" class="s52" d="m241.4 264.7c0.4 1.5 0.9 2.9-1 3.4"/>
													<path id="&lt;Path&gt;" class="s52" d="m240.6 264.4c0.4 1.2-0.8 2.5-2 2.3"/>
													<path id="&lt;Path&gt;" class="s52" d="m250.1 259.1c0.2 0.3 0.4 0.5 0.4 0.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m249.2 264.9c0.1-0.4-0.2-0.9 0-1.3"/>
													<path id="&lt;Path&gt;" class="s52" d="m248.1 265.2c0.2 0.5 0.6 1.5-0.2 1.7"/>
													<path id="&lt;Path&gt;" class="s52" d="m248.7 262c0.8 0 1.4 1.4 1.6 2.2"/>
													<path id="&lt;Path&gt;" class="s52" d="m249.5 261.6q0.1 0.5 0.3 0.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m228.6 261.5c-0.4 0-0.8 0.4-0.8 0.8"/>
													<path id="&lt;Path&gt;" class="s52" d="m227.1 260.7c-0.6 0.1-1.2 0.7-1.2 1.3"/>
													<path id="&lt;Path&gt;" class="s53" d="m216.2 216.9c-0.9-5.8-1.5-9.6 2.4-14.9 4-5.4 13.7-4.7 13.7-4.7 0 0-2.9 0.8 0.2 9 3.2 8.2-0.1 11.6-4.6 12.3-4.5 0.6-7.3 6.7-7.3 6.7-3.6 4.3-3.5-2.6-4.4-8.4z"/>
													<path id="&lt;Path&gt;" class="s54" d="m242.5 253.8c0.1 0.1 0.3 0.5 0.3 0.7 0 0.3-0.4 0.4-0.6 0.5"/>
													<path id="&lt;Path&gt;" class="s54" d="m241.9 254c0.2 0.2 0.1 0.5 0 0.8-0.1 0.2-0.6 0.7-0.9 0.5"/>
													<path id="&lt;Path&gt;" class="s54" d="m238.2 254.2c0.5 0.2-0.3 0.5-0.6 0.4-0.1 0-0.5-0.2-0.3-0.4"/>
													<path id="&lt;Path&gt;" class="s54" d="m236.5 253.9c0.2 0.2-0.8 0.4-1 0.3-0.1 0-0.5-0.4-0.2-0.5"/>
													<path id="&lt;Path&gt;" class="s54" d="m234.9 253.5c0.2 0.3-1.2 0.6-0.9-0.2"/>
													<path id="&lt;Path&gt;" class="s54" d="m243.8 254c0.2 0.1-0.1 0.4-0.2 0.4-0.3 0.1-0.4-0.1-0.5-0.3"/>
												</g>
												<path id="&lt;Path&gt;" class="s51" d="m250.9 200.3c0 0 1.2-3.8-4.1-6.2"/>
												<path id="&lt;Path&gt;" class="s51" d="m250 200.2c0 0-0.7-5.9-7.8-7.6"/>
												<path id="&lt;Path&gt;" class="s51" d="m240.9 198c0 0-1.9-5.7-5.8-6.1"/>
												<path id="&lt;Path&gt;" class="s51" d="m238.8 197.7c0 0-1.7-5.3-6.5-5.4"/>
												<path id="&lt;Path&gt;" class="s51" d="m236.5 196.9c0 0-1.1-4.3-6.7-4.2"/>
												<path id="&lt;Path&gt;" class="s51" d="m232.7 197.3c0 0-3.6-3.5-7.1-3.2"/>
												<path id="&lt;Path&gt;" class="s51" d="m229.8 196.7c0 0-1.2-1.9-4.7-1.9"/>
												<path id="&lt;Path&gt;" class="s51" d="m227.4 196.6l-4.7-0.7"/>
												<path id="&lt;Path&gt;" class="s51" d="m225.6 196.9l-3.1-0.1"/>
												<path id="&lt;Path&gt;" class="s51" d="m221.8 198.6c0 0-0.7-0.1-2.1 0.4"/>
												<path id="&lt;Path&gt;" class="s51" d="m216.3 204.1c0 0-5.9 5.4-6.3 7.5"/>
												<path id="&lt;Path&gt;" class="s51" d="m215.2 207.4c0 0-5.4 3.9-5.8 5.4"/>
												<path id="&lt;Path&gt;" class="s51" d="m215 209.5c0 0-4.1 2.6-5 5.2"/>
												<path id="&lt;Path&gt;" class="s51" d="m214 212.4c0 0-3.5 3.4-3.7 4.5"/>
												<path id="&lt;Path&gt;" class="s51" d="m257.7 206.4c0 0 3.4 1.6 4 2.8"/>
												<path id="&lt;Path&gt;" class="s51" d="m258.8 208.2c0 0 4 1.9 4.3 3.2"/>
												<path id="&lt;Path&gt;" class="s51" d="m260.1 210.5c0 0 3.1 1 3.5 2.8"/>
												<path id="&lt;Path&gt;" class="s51" d="m261.4 213.2c0 0 1.1 1.8 1.2 2.2"/>
												<path id="&lt;Path&gt;" class="s51" d="m214.9 216.8c0 0-3.3 2.9-4.6 7.9"/>
												<path id="&lt;Path&gt;" class="s51" d="m214.2 215.5c0 0-4.4 4.7-4.8 8.4"/>
												<path id="&lt;Path&gt;" class="s55" d="m234.2 271.6c0 0-4.1 1-4.8 4.3-0.8 3.3-0.9 4.4-0.9 4.4 0 0-7.1 1-8.5-5.5-1.5-6.5-0.2-8-1.5-11.5-1.3-3.6-1.3-3.6-1.3-3.6l11.4 8.1"/>
												<path id="&lt;Path&gt;" class="s56" d="m227.1 228.5c0.2 0 0.4 0.2 0.5 0.6 0.1 0.4 0 0.7-0.2 0.8-0.2 0-0.4-0.2-0.5-0.6-0.1-0.4 0-0.7 0.2-0.8z"/>
												<path id="&lt;Path&gt;" class="s56" d="m250.9 229.7c0.2 0 0.4 0.2 0.5 0.6 0.1 0.4 0 0.7-0.2 0.8-0.1 0-0.4-0.3-0.5-0.6-0.1-0.4 0-0.8 0.2-0.8z"/>
												<path id="&lt;Path&gt;" class="s57" d="m241.5 239.9c0.7-0.2 1.4 0 1.5 0.3 0 0.4-0.5 0.8-1.2 1-0.8 0.2-1.5 0-1.6-0.3 0-0.4 0.5-0.8 1.3-1z"/>
												<path id="&lt;Path&gt;" class="s58" d="m231.3 240.5c0 0-8.3 4.6-7.2 6.2"/>
												<path id="&lt;Path&gt;" class="s58" d="m250.1 246c0 0 4.2 5.2 2.6 5.7"/>
												<path id="&lt;Path&gt;" class="s59" d="m237.6 278c-1.2-2.1-13.9-13.8-13.9-13.8 0 0 6.3 4.8 9.6 6.5 3.3 1.8 5.7 1.7 5.7 1.7l8.1-4.5c0 0-8.3 12.1-9.5 10.1z"/>
												<path id="&lt;Path&gt;" class="s60" d="m225.1 265.1c0 0-3.9-0.5-10-9.3-6.1-8.8-2.3-21.7-2.3-21.7 0 0 0.2 4.6 3.5 8.7 3.3 4 4 4.8 3.1 10.6-0.9 5.8 4.7 10.4 4.7 10.4"/>
											</g>
											<path id="&lt;Path&gt;" class="s61" d="m168.2 330.3c0 0 11.5-10 12-8"/>
											<path id="&lt;Path&gt;" class="s61" d="m275.2 326.3c0 0 2-35 0-37"/>
											<path id="&lt;Path&gt;" class="s61" d="m252.5 270.9c0 0 2 5.7 1.7 8-0.3 2.4-6.7 10.7-17 11-10.3 0.4-20-4-23.7-8.6-3.6-4.7-0.6-14.4-0.6-14.4"/>
											<path id="&lt;Path&gt;" class="s61" d="m168.5 319.3c0 0 16.7 0.6 20.7 11.6"/>
											<path id="&lt;Path&gt;" class="s61" d="m276.2 323.6c0 0 15-7 17.3-5"/>
											<path id="&lt;Path&gt;" class="s61" d="m177.9 273.6c0 0 4 19.3 0.3 35.7"/>
											<path id="&lt;Path&gt;" class="s61" d="m273.5 276.9v4.4"/>
											<path id="&lt;Path&gt;" class="s61" d="m179.9 400.6l-3-9.7c0 0-2.7-1-3.4 0-0.6 1-6.6-24.6-6.6-24.6"/>
											<path id="&lt;Path&gt;" class="s61" d="m167.9 341.9c0 0 5.3 8.4 5.3 9.4"/>
											<path id="&lt;Path&gt;" class="s61" d="m259.9 410.3c0 0-13.7 8.6-14 11.6"/>
											<path id="&lt;Path&gt;" class="s61" d="m258.5 419.9c0 0-3.3 3-6.6 5.7-3.4 2.7-58.7-1.3-70-4-11.4-2.7-26-11-26-11"/>
											<path id="&lt;Path&gt;" class="s56" d="m262.2 297.9l0.7 2.7c0 0-16-0.7-17.7-0.7-1.7 0-47.3-2.6-47.3-2.6l0.3-1.7z"/>
											<path id="&lt;Path&gt;" class="s56" d="m263.9 304.9l-0.4 4.7h-1.6l-63.7-2.7-0.7-5.3"/>
											<path id="&lt;Path&gt;" class="s56" d="m262.5 313.9l-0.3 1.7-62.7-1-0.6-2.3"/>
											<path id="&lt;Path&gt;" class="s56" d="m263.9 320.9l0.3 3.7c0 0-20.3 0.3-21.3-0.3-1-0.7-18-1-18-1h-26.7l1.3-4z"/>
											<path id="&lt;Path&gt;" class="s56" d="m264.2 329.9v2.7l-35.7-1.3-30.6-2v-2"/>
											<path id="&lt;Path&gt;" class="s56" d="m263.2 336.9l-1 3-64.7-1v-4.3"/>
											<path id="&lt;Path&gt;" class="s56" d="m261.9 344.6v2.7l-63-1.7-1.7-2"/>
											<path id="&lt;Path&gt;" class="s56" d="m259.5 352.3v4.3l-15 1-47-4-0.3-4.7z"/>
											<path id="&lt;Path&gt;" class="s56" d="m258.9 362.3l-0.4 2.6-61.3-4v-2.3"/>
											<path id="&lt;Path&gt;" class="s56" d="m258.9 369.3c0 0 0 1.6-0.7 3.6-0.7 2-61-4-61-4l-0.7-4"/>
											<path id="&lt;Path&gt;" class="s56" d="m257.5 377.3v2.3c0 0-59-2.7-60-3-1-0.3 0-2.7 0-2.7"/>
											<path id="&lt;Path&gt;" class="s62" d="m156.5 328.9c0 0 23.4-5.6 16.4-5.6-7 0-13-3-13-3 0 0 26.6-6.4 35.3 13l-10.7-6.7c0 0 4.4 7.3-2.6 6-7-1.3 0 12 6.3 20.7 6.3 8.6 6.3 11.6 6.3 11.6 0 0-5.6-13-10.3-10-4.7 3-3 5.7-5.7 6-2.6 0.4-5.3-2.3-5.3-2.3 0 0 13.7 32 12 28.3-1.7-3.6-17-28.6-17-32.6 0-4 3-24 3-24l-2.7-2-8 5"/>
											<path id="&lt;Path&gt;" class="s62" d="m158.9 298.9c0 0 20 11.4 25 10.7"/>
											<path id="&lt;Path&gt;" class="s62" d="m172.9 293.3l12 4.3"/>
											<path id="&lt;Path&gt;" class="s62" d="m194.5 272.9c0 0 26 18.7 48 19"/>
											<path id="&lt;Path&gt;" class="s62" d="m205.9 269.9c0 0 2 7.7 6.3 7.7"/>
											<path id="&lt;Path&gt;" class="s62" d="m259.5 274.3c0 0 1.4 6-0.3 7.6"/>
											<path id="&lt;Path&gt;" class="s62" d="m275.2 306.6l20-10-15.7 11 20.7 0.3c0 0-15 3-14.3 6 0.6 3 12.6 13 10.6 12-2-1-14.3-6.6-16-6-1.6 0.7-7.3 13.4-7.3 13.4l1-40"/>
											<path id="&lt;Path&gt;" class="s62" d="m268.2 278.6c0 0 10.3 13.7 9.7 20.3"/>
											<path id="&lt;Path&gt;" class="s62" d="m159.5 399.3c0 0 38.7 10 49.7 18"/>
											<path id="&lt;Path&gt;" class="s62" d="m263.2 384.6c-1 0.7-24 12.7-30.3 17.7"/>
											<path id="&lt;Path&gt;" class="s62" d="m157.5 406.9c0 0 7.4 12.7 29.4 13 22 0.4 13.6-2 13.6-2 0 0 35 4.7 37.4 4.7 2.3 0 18.3-0.7 18.3-0.7 0 0-10 9-24.7 9-14.6 0-71.3-12.6-73.3-17.6"/>
											<path id="&lt;Path&gt;" class="s62" d="m192.9 392.9c0 0 12.3 11.7 13.3 10.4"/>
											<path id="&lt;Path&gt;" class="s62" d="m141.2 310.3c0 0 14.7 7 15.3 14.3"/>
											<path id="&lt;Path&gt;" class="s62" d="m181.9 275.6c0 0 10.3 23.7 14 25.3"/>
											<path id="&lt;Path&gt;" class="s62" d="m264.2 272.9c0 0 0.3 12-1.7 13.7"/>
											<path id="&lt;Path&gt;" class="s63" d="m164.5 478.6h-1.6v1.7l-3.7-1"/>
											<path id="&lt;Path&gt;" class="s63" d="m166.5 480.6l-2.6 4.7 3 11-1 3.3 2 17.7-0.7 3.6 1.3 5.4-3.3 2"/>
											<path id="&lt;Path&gt;" class="s63" d="m156.2 499.3c0 0 3.7-1.7 4.7 0.3"/>
											<path id="&lt;Path&gt;" class="s63" d="m163.2 527.6l-4.7-20.3 3.4-5"/>
											<path id="&lt;Path&gt;" class="s63" d=""/>
											<path id="&lt;Path&gt;" class="s63" d="m213.5 488.9l-1-34c0 0 0.7-2.6 1.7-4.6 1-2-1-18-1-18"/>
											<path id="&lt;Path&gt;" class="s63" d="m156.5 451.3c0 0 0 0 0-6.7 0-6.7 5-11.7 5-11.7 0 0 0.7-2 0.7-4.3 0-2.3 0.7-5 0.7-5l3-3.7"/>
											<path id="&lt;Path&gt;" class="s63" d="m264.2 453.6l-4.3-2.3-2-10.4h-1.4l-5-11"/>
											<path id="&lt;Path&gt;" class="s63" d="m257.5 430.3l2 5.6"/>
											<path id="&lt;Path&gt;" class="s61" d="m218.5 432.9c-1.3 0.4 2 20.4 2 20.4l-3.6 2.6v5.4h-2.7"/>
											<path id="&lt;Path&gt;" class="s61" d="m210.5 431.6c0 0 4 14 2.4 17"/>
											<path id="&lt;Path&gt;" class="s61" d="m220.5 434.9l3 0.4"/>
											<path id="&lt;Path&gt;" class="s61" d="m209.2 493.9c0 0-17.7-1.6-24.3-6.3-6.7-4.7-20.7-12-22-11"/>
											<path id="&lt;Path&gt;" class="s61" d="m181.2 524.3c0 0 15-3.7 14.7-2.4"/>
											<path id="&lt;Path&gt;" class="s61" d="m200.9 519.9l3.3-2.6"/>
											<path id="&lt;Path&gt;" class="s61" d="m216.9 490.9c0 0 6.3 3.7 16.3 2.7"/>
											<path id="&lt;Path&gt;" class="s61" d="m196.9 534.6l-5.7 5.3-4.3 1c0 0-3.7 5-7.4 6.7-3.6 1.7-12.6-0.3-12.6-0.3"/>
											<path id="&lt;Path&gt;" class="s61" d="m266.2 542.3l-3.7 6.6c0 0-4 2.4-7.6 2.4-3.7 0-25.4-4-25.4-4l-3.3-2h-8"/>
											<path id="&lt;Path&gt;" class="s63" d="m264.9 528.6l-0.7-4.3 1.3-1-1.3-6c0 0-1.7-3-1-5.4 0.7-2.3-2.7-20.3-2.7-21.3 0-1 1.4-1.3 1.4-1.3l-0.7-1.7-0.7-4 6-4"/>
											<path id="&lt;Path&gt;" class="s64" d="m262.9 484.9c0 0 4.3-0.6 5-3.3"/>
											<path id="&lt;Path&gt;" class="s63" d="m268.2 516.9c0 0-0.7 1.7-2 2"/>
											<path id="&lt;Path&gt;" class="s63" d="m261.2 454.9c0 0 1.3 3-1 3.7"/>
											<path id="&lt;Path&gt;" class="s65" d="m159.2 462.6c1.9 0.4 3.6-0.2 3.4-2.3 2.5-0.1 5-0.1 7.5 0 3.5 0 3 0 4.4 2.6 1.2 2.4 1.6 4.1 4.4 4.3 1.6 0.1 3.6-1.1 5.6-0.9 0.4 2.6 2.6 2.3 4.3 3.7-1.2 1.3-3.4 1.1-3.2 3.2 1.4 0.6 3.7 1.6 5.3 1.1 0.9-0.3 2.2-2.3 3.6-3 2.1-1 6.4-2.7 8.6-2.4 0.2 1.6 0.9 3 0.8 4.7-2.4 1.2-5.1 0-7.6 0.6-2.1 0.6-2.1 2.1-3.5 2.7-2.4 0.9-6.8 0.4-9.4 1-3.4 0.8-7.5 0.2-10.6 1.6 1.7-0.5 8.5-2.6 9.6-4.3 1.7-2.6-2.2-2.6-0.3-4.9-2.6-0.1-10.1 1.7-9.3-2.9-2.9-1.1-3.3 1.6-5.5 2.2-5.1 1.2-2.8-3.7-5.1-5"/>
											<path id="&lt;Path&gt;" class="s65" d="m169.2 448.9c4.6 0-2.6-7.2 0-10.2 3.8-4.2 3.3 4.6 3.3 6.1 1.1 0.3 2.5 0.2 3.4-0.2-0.9-1.8-2-5.2-1.7-7.3 1.5 0.7 2.8 2.1 5 1.6-0.3-1.3-0.6-2.8-0.2-4.2 4.9-0.7 6.3 4.9 10.5 3.6-0.3 2.9-0.9 3.8 1.5 5.5 1.4 0.9 3.4 1.3 4.5 2.1 0.3 0.2 1.1 1.5 1.7 1.9 1.2 1 8.8 1.4 6.4 4.3-0.9 1.1-6.2 0.5-7 0.4 0.2-0.4 0.3-1.4 0.6-1.9-3.5-0.2-10.5 0.7-13.9 2.1-3.6 1.4-3.6 5-8.1 4.5 0-1.6 0-3.2 0-4.8-2.3-0.4-5.4-0.6-7.4 0.7-2.1 1.3-2.2 4-5.3 3.8"/>
											<path id="&lt;Path&gt;" class="s65" d="m200.5 429.6c8.2 2.5 12.8 9.2 10 17.6-1.3-1.4-1.8-3.4-2.9-5.1-0.1 1.1-0.1 2.3-0.1 3.5-2.6 0.3-4.9-1.3-6.6-3-2.8-2.8-1.3-4.1-1.4-8.3-2.1-0.1-6.8 0.8-6.3-2.7"/>
											<path id="&lt;Path&gt;" class="s65" d="m175.9 488.6c-0.1-0.5-0.1-1.1 0-1.6 2.5-0.7 3.8 0.8 4.7 3 0.5 1.5 1.1 7.8 3.2 2.6 1.2 2.2 3.4 2.5 5.7 3 1.2 0.3 2.6-0.3 3.6 0.7 0.5 0.6-0.3 1.9 0.1 2.6 4.4 7.8 7.3 0.4 14.2 1.8-1.3 2.4-2.6 1.9-4 3.3-0.8 0.9-0.9 2.4-1.6 3-2.2 2.1-2 0.9-3.6 0.2-0.1 0-0.2-1.3-1-1.6-0.6-0.3-1.4 0.2-2 0.3-2.2 0.5-3.3 2-6 1.6-0.1-1.4 0.3-2.8 0.3-4.2-2.4-0.4-3.3 1.4-5.1 1.9-1.5 0.4-3.8 0.1-5.3 0 0.5-6.2 1.6-12-5.2-15.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m162.2 486.6c1.1 3.4 2.2 5.9 1.9 9.6-4.3 0.9-2.2-1.5-3.8-3.4-1.1-1.2-2.6 0.1-3.5-1.9-0.4-0.9 0.2-3 0.4-4"/>
											<path id="&lt;Path&gt;" class="s65" d="m182.2 481.9c3.4 0 6.7 0.2 10-0.9-0.5 2.8 2.1 1.7 3.5 1.2 2.7-1 3.3-3.9 4.5 0.4 0.7 2.6-0.3 3.1 1.3 4.9 0.9 1 3.1-0.7 2.3 2-1 0.1-2.8 0.5-3.6 0.1-1.4-0.5-1.4-1.9-2.6-2.6-2.6-1.6-6.6-1.2-9.7-2.1-0.1-1.1-0.2-2.2 0-3.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m160.2 420.9c2 1.2 3 2.4 5.2 2.7 1.2 0.1 4-0.9 4.8-0.3 2.3 1.8-1.2 1.6-1.4 2-1.1 1.6-1 1.1-1.3 3.4-0.6 5.8-3.3 13.1-7.6 17.3-0.4-4.1 1.2-5.4 2.8-8.7 1.2-2.3 0.6-2 0.8-4 0.2-1.8 3.8-9-0.3-8.7"/>
											<path id="&lt;Path&gt;" class="s65" d="m247.9 432.6c0.6 1.2 3.4 11.4 5.3 8"/>
											<path id="&lt;Path&gt;" class="s65" d="m220.5 435.3c2.8 0.8 0.6 4.9 1.4 7.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m167.9 527.9c1.6 1 3.5 1.1 5.5 1.1 0.2 0.6 0.2 1.3 0 1.9-1.8 0-3.4 0.4-5.2 0.4"/>
											<path id="&lt;Path&gt;" class="s65" d="m170.5 517.9c1.5 1.8 4.2 1.9 6.3 2.1-0.1 0.7 0.2 1.6 0.1 2.3 4 1.5 4.5-4 7.2-3.6 1.4 5.9-9.2 9.3-11.6 4.2"/>
											<path id="&lt;Path&gt;" class="s65" d="m193.5 511.6c1.7-0.5 3.5-0.4 5.3-0.3-0.1 2.4 2.2 3.5 1.7 6.2-0.5 3-1.4 2.6-4.7 2.9 1.8 3 0.4 4.3 0 7.2-0.6 4.3 0.7 7.8-5.6 7 0.1-1.6 1.3-4.1 0.3-5.3-0.7-0.9-2.9 0.3-3.6-1.4-0.5-1.1 0.6-1.7 0.6-2.6 0.2-1.6 0.4-2.8 1.1-4 0.8-1.5 2.7-1.8 2.2-3.9-0.4-0.1-0.8-0.1-1.2-0.1-0.5 3-3.8 2.4-3.3-0.2 0.3-1.4 3.8-1.2 1.2-3.5-0.9-0.7-4.6 0-5.8-0.1-1.3-3.7 4.4-2.6 6.5-2.6"/>
											<path id="&lt;Path&gt;" class="s65" d="m168.9 501.6c2.2 1.3 2 4.7 1.9 6.9-1.4-0.5-2.6-1.3-2.6-2.9"/>
											<path id="&lt;Path&gt;" class="s65" d="m160.2 469.9c-0.3 0.7-0.4 1.3-0.3 2 1.5 0.1 10.1-1 11 0.1 1.9 2.3-8.7 1.5-10 1.9"/>
											<path id="&lt;Path&gt;" class="s65" d="m206.2 454.6c3.6-0.9 4.1 3.8 3.9 6.3-6.1 1.9 0.5 8.6-0.3 12.3-3.1 0.9-1.8-0.9-2.6-2.3-0.3-0.5-1.6-2.7-1.7-3.3-0.2-2.1 1.9-3.8-0.4-5.3-2-1.4-8.5 0.1-10.9-0.1 1.4-2.5 5.5-5.7 8.7-5.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m162.2 453.6c-0.3 1.8-3 2.6-4.3 1.2-0.7-0.8 0.4-4.7 0.6-5.2"/>
											<path id="&lt;Path&gt;" class="s65" d="m213.2 447.6c1.6-0.1 4.3 2 5.6 0.7 0.7-0.7-0.4-2.7 0.1-3.4 1-1.3 5.7-0.9 6.9-0.1 1.1 0.8 1.3 2.6 2.3 3.5 2.3 2.1 5.2 1.4 8.1 2 3.1 0.5 2.2-0.3 3.8 2.6 1.1 1.9 1.2 5.2 3.5 5.8-2.5 0.5-5.1-0.7-7.6-0.7 1.2 2 6.2 1.9 2.7 4.3-1.1 0.7-4.1 0.6-5.2-0.2-2.1-1.4-0.6-3.4-1.5-5-0.9-1.7-1.7-2-4.2-1.5-2.1 0.4-1.2 0.3-2.6 1.3-1.3 0.8-3.9 3-4.6 4.2-1.6-2-1.4-4.9-1.3-7.4-1-0.3-2.1-0.2-3 0.2"/>
											<path id="&lt;Path&gt;" class="s65" d="m216.5 468.9c1.7 0 7.2-1.1 7.7 0.4 0.9 2.7-4.9 2.8-6.3 2.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m236.2 467.6c-0.6 4.5 5.8 1.7 8 2.6 1.8 0.8 1.1 1.6 2 2.7 1.1 1.5 1.1 2.3 3.4 3.4-3.4 2.7-8.3-0.3-11.5-1.7-0.9-0.5-2 0.3-2.9-0.7-1.7-1.9 0.5-5.2 1.7-6.6"/>
											<path id="&lt;Path&gt;" class="s65" d="m249.2 459.6c10.6-0.7-2.7 7.8-2 2.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m243.5 431.6c1.6 0 3.1 0 4.6 0 0.2 1.7 0.7 4-1.2 4.6-0.5-0.6-1.1-0.5-1.7-0.9-0.6 1.3-1.5 2.6-3 2.6-0.1-1.3 0.2-2.6 0.3-3.9-2.5 0.3-4.7 1-7.3 0.9-4.8-0.1-3-0.8-4.3 2.7-0.8 1.9-2.6 4.8-4.7 1.7-1.3-1.9 1.5-5.1-1.7-6"/>
											<path id="&lt;Path&gt;" class="s65" d="m253.9 435.6c2.7-0.7 3.9 3.3 3 5.3-1.3 3-3.9 1-3.7-2"/>
											<path id="&lt;Path&gt;" class="s65" d="m259.5 451.6c3.7 0.4 5.2 4.8 2.2 7-1.7 1.3-5.6 0.9-7.5 0.3-0.1-1.6 0.1-3.3-0.3-4.9-1.8 0.2-4 0.7-6 0.9 0.3-2 0-2.9 1.9-3.9 2.2-1.2 6.8 1.5 7.7-2.1"/>
											<path id="&lt;Path&gt;" class="s65" d="m252.2 473.6c2.4-0.1 11 4.9 11.9 0 0.8 1.8 0.5 3.9-0.1 5.8-1 3.1-2 2.4-3.7 3.5-2.2 1.4-6.9 3.1-9.9 1.1 1-1.6 8.1-2.5 8.2-4.7 0-1.5-5.3-2.2-6.4-2.4-0.2-1.1 0.2-1.7 1-2.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m213.5 474.6c1.4-1.2 8.9-3.2 10.7-1.6 1.3 1 0.1 3 1.3 4.3 1.2 1.2 4.7 0.8 6.3 1.3 2.6 1 4.2 1.5 7.6 1.7 1.4 0 4.2-0.6 3.8 1.8-0.5 3.2-7.3-0.2-9 2.1-1.2 1.7 3.3 3.7 2.5 6.9-4.6 1.2-3.4-2.7-5.8-4.2-1.4-0.9-7.3 1.1-8.3 2.4-0.8 1.1 0.7 2.8-0.7 3.7-2.6 1.7-4.6-3.6-5.6-4.9-1.9-2.4-4.4-3.5-2.8-6.8"/>
											<path id="&lt;Path&gt;" class="s65" d="m239.2 491.6c1.8-0.4 4 0.1 3.5 2.3-0.5 0-1.3 0.1-1.8 0"/>
											<path id="&lt;Path&gt;" class="s65" d="m215.2 500.3c2.3 3.3 5.3 0.7 8 0.6 1.2 0 2-0.2 2.8 0.7 2.4 2.6-2.3 2.3-3.4 3.9-3.2 4.3 4.1 3.5 4.6 6.1 0.9 4-6.8 1.6-7.1-1.6-0.4 0.1-1 0.2-1.5 0.3-2.1-2.9-1.6-5.8-4.1-8.4"/>
											<path id="&lt;Path&gt;" class="s65" d="m258.9 495.3q0.4-0.1 0.8 0c0.8 4.1-3.3 4.8-3.5 7.6 0 0.8 4 1.9 2 4-0.5 0.5-3.7 0-4.4 0-0.6-1.9 0.2-4.3-0.9-6-1 2.5-6.7 3.3-5 0.1 0.6-1.2 4.9-1.8 3.9-3.7-0.7-1.3-4.9-0.8-6-1.7 2.7-2.5 6.7-2.6 10.1-3.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m247.2 490.9c1.5 0 3.1 0 4.6 0.1 0.2 0.8 0.1 1.5-0.3 2.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m222.9 520.3c3.1-2.1 4.5 3.8 7.6 3.2-0.1-3.8 10.1-1 11.6 0.8-2.4 0.6-5.1 0.4-7.5 0.7-0.2 0.5-0.2 1.6-0.1 2.1 1.8 0.6 5.8 1.2 6.7 2.8 0.7 1.2-0.1 4 0.2 5.4-1.2 0.4-2.7 0.3-4.1 0.3 0.7-3.2-1.5-2.3-3-4-2.3-2.4-1.3-4.8-5-1.8-2.3 1.8-3.7 4.8-5.9 0.6-0.9-1.8-1.3-6.7-1.2-8.8"/>
											<path id="&lt;Path&gt;" class="s65" d="m256.2 515.3c1.3-1.9 3.1-1.9 3.7 0 0.5 1.6-1.8 3.8-2.1 5.3-1.8 0-3.6-0.2-5.3 0.2-0.8-2.4-1.8-3-4.3-3.6-1.7-0.5-9.1-0.9-5-2.3 3-1.1 10.7-0.9 13.3 0"/>
											<path id="&lt;Path&gt;" class="s65" d="m240.2 509.9c2.3-0.1 5.1-0.5 3.7 2.7"/>
											<path id="&lt;Path&gt;" class="s65" d="m262.2 533.9c3 1.9 2 10.2-1.3 10.4 0.4-2-1.2-2.7-2.9-2.5-0.2-2.2-1.4-2.9-3.5-2.9-4.4 0-7.8 5-13 4.3 0.5-2.7 4.6-1.3 6.5-2.9 2-1.5 0.4-1.6 1.6-3.1 0.4-0.6 0.2-1.3 0.7-1.9 0.6-0.6 2.5 0.2 3.1-0.5 1-1.2 0-3.1 0.3-4.6 3.9 1 9.4 3.6 11.2-2.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m231.2 540.9c3.2 0 6.4 0 9.5 0.4q-1.9 0-3.8 0"/>
											<path id="&lt;Path&gt;" class="s65" d="m170.2 537.9c1.5 0 4.2 0.5 5.6 0.1 1.2-0.4 1.7-1.7 2.8-2.1 1-0.3 2.9 0 3.9 0.1 0.1 3.5-10.8 6.8-13.3 4.9"/>
											<path id="&lt;Path&gt;" class="s65" d="m181.5 527.3c1.7 1.2 1.6 3.4 1.3 5.3-1.6 0.3-5.1-0.5-3.9-2.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m177.5 506.6c1.3 1.4 1.4 3.4 0.7 5-0.8 0.2-1.7 0-2.3-0.3-0.2-1-0.1-2.1 0.3-2.7"/>
											<path id="&lt;Path&gt;" class="s65" d="m260.5 466.9c0.6 0.5 1.2 0.3 1 1.3-1 0.2-2.2-0.1-3-0.7 0.5-1.7 3-2.1 4-3.9"/>
											<path id="&lt;Path&gt;" class="s65" d="m225.5 550.9c-0.5-1.4-0.4-3.1-0.2-4.6 2.9-0.9 2.7 1.5 2.6 3.6 2 0.1 4.4-0.5 6 0.7-1.7 1.2-5.6 2.3-7.7 1.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m238.9 549.6c1.7-0.2 3.6 0.1 4.3 1.7-1.4 0.5-3.1 0.6-4-0.4"/>
											<path id="&lt;Path&gt;" class="s65" d="m221.9 536.3c-1.9 3.5 9.9 0.8 12.2 4.5-1.8 0.7-3.9 0.4-5.3 1.5 0.3 0.3 0.6 1 0.9 1.3-3.5 1-6.7 0.3-6.5-4"/>
											<path id="&lt;Path&gt;" class="s65" d="m184.9 541.6c1.3 0 2.6 0 3.9 0 0.6 2-4.1 6.3-5.9 7.6-3.3 2.4-4.4 0.5-4.7-3.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m190.2 538.9c0.7-0.4 1.9-0.5 2.9-0.3-0.7 1.1-1.9 1.9-3.2 2.3"/>
											<path id="&lt;Path&gt;" class="s65" d="m253.2 553.3c2.6 1.1 4.3-1.3 6.9-1-0.7 1.9-1.5 4.4-3.9 2.2-0.4 0.9-1.1 0.7-1.1 2.1-3.3 0.1-4.6-1.8-4.2-5"/>
											<path id="&lt;Path&gt;" class="s65" d="m248.5 546.3c0.9 0.1 1.3-0.3 1.7 0.5q-1 0.3-2 0.1"/>
											<path id="&lt;Path&gt;" class="s65" d="m237.5 498.6c2.6 0 7.3-1 9.1 0.7-1.4 1.8-8.6 2.8-8.4-0.7-3-0.2-7.1 0.9-9.7-0.7 0.3-0.6 0.6-0.1 1-0.3"/>
											<path id="&lt;Path&gt;" class="s66" d="m170.9 507.6c3 0 0.2 2.9 1.4 5 2 3.5 5.9-0.8 6.9 3.3 1.1 4.4-2.4 4-4.6 2.6-0.8-0.5-0.6-1.7-1.7-2.3-0.9-0.4-3 0.1-4-0.1-0.1-1.8-0.2-3.7 0.6-5.5"/>
											<path id="&lt;Path&gt;" class="s66" d="m167.5 481.9c1.6 1.8 6.3 1.7 8.8 3.1-1.7 1.7-8.1 0-7.1 3.7 0.4 1.3 3.9 3.1 4.7 4.5-2.4 1.9-5.6 0.6-6.9-1.6-0.7-1.3-0.9-2.3-0.8-3.8 0.1-0.6 2.2-3.8 1.3-2.9"/>
											<path id="&lt;Path&gt;" class="s66" d="m192.5 494.6q0.2 0.7 0 1.3c-0.7-3.8-3.9-2.8-7-3.6-1.9-0.5-5.4-1.8-3.3-4.4"/>
											<path id="&lt;Path&gt;" class="s66" d="m207.5 485.9c4.5 1.4-2.1 10.3-4.6 4.4 1 0 1.9-0.7 2.9-0.8-1-2.4-4-2-5.2-3.5-1-1.5-0.5-3.8 1.6-3.1"/>
											<path id="&lt;Path&gt;" class="s66" d="m197.2 495.9q-0.2 0.6 0.3 0.7"/>
											<path id="&lt;Path&gt;" class="s67" d="m172.2 501.6c0.3-1.3 1.9-1.4 3.3-0.9 0.1 2.4-0.5 4.8 1.8 6.2 3.1 1.9 5.8-1.9 8.8-1.3-0.2 0.8 0.2 1.7-0.2 2.5 0.7 0.1 2 0.5 2.5 0.4-1.1 0.1-5.2-0.6-6.2 0.1-1.4 0.8-0.6 3-2.3 3.6-0.9-2.4-4.9-7.6-6.8-2.8-1.1-3.3 0.3-5.4 0.4-8.5"/>
											<path id="&lt;Path&gt;" class="s67" d="m181.5 454.3c2.1-0.9 4.5 0.2 6.8 0.3 2.3 0.1 4.4-0.9 6.5-0.6-0.2 0.8 0.2 1.8 0.1 2.6 2.2 1 4.9-0.5 6.6-2 1.4 5.4-4.7 3.5-6.9 5-1.6 1-1.2 5.1-3.7 4.9 0.2-8.5-7-4.5-12.3-2.9 1.2-1.5 3.1-2.5 4.6-3.7"/>
											<path id="&lt;Path&gt;" class="s67" d="m192.9 465.6c0.9-0.5 2.1-0.8 3.3-0.6 0 2.6-3.1 1.3-5 1.9"/>
											<path id="&lt;Path&gt;" class="s67" d="m166.2 456.3c1.4-0.2 3.3-0.5 3.7 1"/>
											<path id="&lt;Path&gt;" class="s67" d="m197.9 474.6c-3.2 0.2-5.1 4.9-8.3 5.8-2.2 0.5-4.1-0.8-6.4-0.4 0.4 1.4 1 2.8 1 4.3-1.8-0.4-5.7-3.3-7-4.4 1.3-1.1 3.5-1.1 5.3-1"/>
											<path id="&lt;Path&gt;" class="s67" d="m216.2 463.9c2.1 5.5 10.9 2.5 15.5 2.7 0 1.9 1.6 3.4 1.4 5.3-0.5-0.1-1.8-0.4-2.2-0.3-0.9 0.2-3.9 1.6-4.4 1.6-3.1 0.1-3.8-2.9-0.3-3.9"/>
											<path id="&lt;Path&gt;" class="s67" d="m228.9 461.3q0 0.4-0.1 0.8c-2 0.7-2.8-0.9-2.3-2.8"/>
											<path id="&lt;Path&gt;" class="s68" d="m235.9 438.3c1.1-5.1 3.2 4.3 3.6 4.6 3 2.1 10.4-6.2 9.3 1.6-4.9 0.5-6.6-2.3-7 5-1.1-0.7-3.6-1.2-4.3-2.3-0.4-0.7 0.1-1.7-0.3-2.3-1.4-2.1-2.6-2.4-5.9-3 0.6-1.1 0.7-2.8 0.6-4.3"/>
											<path id="&lt;Path&gt;" class="s68" d="m238.5 464.3c1.5-0.1 2 0.9 3.3 1.2 2.5 0.4 5.5 0.2 8 0-0.1 0.4 0.3 1.4 0.2 1.7 1.7 0.1 3.2-0.3 4.8-0.2 0.1 0.4 0.1 0.8 0.1 1.3-4.9 1.3-9.9 0.5-8.1 6.8 0.7-6.5-2.9-6.4-6.9-8.5"/>
											<path id="&lt;Path&gt;" class="s68" d="m256.9 466.3c-1 0.8-1.1 1.7 0 2.3"/>
											<path id="&lt;Path&gt;" class="s68" d="m246.2 481.3c1.1 1.6 3.7 2.2 3.4 4.7 1.5 0.5 3.3 0.3 4.9 0.3-0.4 2.6-4.2 0.7-6 1.4-3.3 1.2-4.7 6-6.9 8.2-0.5-2.6 2.6-3.8 0.9-5.9-0.8-1.1-4.5 0-4.7-2.4-0.2-3.2 11.3-1.6 4.7-6.7"/>
											<path id="&lt;Path&gt;" class="s68" d="m260.2 469.6c-0.2 0.4 0.6 1-1 0.6-0.4-1.3 0.1-1.7 1.3-1.9"/>
											<path id="&lt;Path&gt;" class="s68" d="m180.5 426.9q-0.1-0.4-0.2-0.8c2.2-0.7 6.4 0.5 8 2.1-2.4 3.1 3 7 5.9 6.4-1.8 4.9-7.8 0.4-10.1-1.6-4.1-3.8-3.9-4.1-5.9 1.3-1.7-0.1-3.8 0.1-4.3-1.6 6.8-2-6.8-3.2-2.7-6.1"/>
											<path id="&lt;Path&gt;" class="s68" d="m199.5 442.9c-0.4 1.9 0.9 3.8 2.4 3.4"/>
											<path id="&lt;Path&gt;" class="s68" d="m167.2 446.9c-0.3 2.7-4.3 2.3-6.1 1.7 0.6-1.4 1.8-3.2 3.1-2.7"/>
											<path id="&lt;Path&gt;" class="s68" d="m169.2 456.6c1.9-0.4 4.3-0.6 5.9-0.1-0.6 0.7-1.3 0.9-2.2 1.1"/>
											<path id="&lt;Path&gt;" class="s68" d="m172.5 527.3c1.2-0.5 3.2-1.3 4.7-0.8-0.8 3-2.9 2.4-1.9 5.2 0.9 2.9 3.1 1 4.2 3.2-2 0-7.6 2.2-8.3 0.7-0.9-1.7 7.2-6.6 3-8.3"/>
											<path id="&lt;Path&gt;" class="s68" d="m184.9 535.9c3.8 0.5 3.1 2.8 1.3 4.4-0.9 0.7-4 2.1-5.2 2.3-0.9 0.2-2.2-0.4-3.1 0-0.8 0.3-0.9 1.2-1.8 1.7-2 1-3 1.5-5.5 1.2 1.1-2.6 4.7-3.5 7.4-4.3 1.3-0.4 3.6-0.6 4.5-1.9 0.8-1.1 0.2-2.9 0.7-4"/>
											<path id="&lt;Path&gt;" class="s68" d="m198.5 524.3c0.4 0.5 1.2 0.9 1.7 0.3"/>
											<path id="&lt;Path&gt;" class="s68" d="m201.5 495.3c1.5 0 3 0.7 3.4 2.2-2.1 0.5-9.8 0.7-9.4-2.2"/>
											<path id="&lt;Path&gt;" class="s68" d="m226.2 500.6c-0.3-0.3-0.8-1.4-1-1.9 3 0.6 6.2 1.4 8.9 2.8 0.7 0.4 0.5 1.3 1.8 1.8 2.3 0.7 6.7-1.3 8.3 0.6 4.8 5.8-13.1 2.8-3.9 9-2.9 0.7-3.7-1.6-5.8-2.3-1.6-0.6-3.7 0.6-5.3-0.2-1.1-0.5-3.3-3.5-3.3-4.5-0.2-2.5 2.2-2.9 4-3.7-1.4-2.5-10.5-5.1-9.4-6.9"/>
											<path id="&lt;Path&gt;" class="s68" d="m248.9 507.9c-0.7 0 0.4 0 0.3 0"/>
											<path id="&lt;Path&gt;" class="s68" d="m235.5 517.3c-2.1 0-4.1-1.3-6.2-1.7-0.5-1 0-0.9 0.6-1.3"/>
											<path id="&lt;Path&gt;" class="s68" d="m259.2 522.3c0.8 3.2-3.6 1.7-5.5 2.8 1.1 0.8 2.6 1.2 3.9 1.8-1.8 0.3-2.8-0.3-4.6 0.7-0.6 0.3-0.4 1.6-1.2 2-0.4 0.2-1.6-0.1-1.9 0-1.3 0.2-3.1 0.2-4-0.6 1.3-1 4.7-1.7 4.5-3.4-0.2-2-5.3-0.9-4.5-4.3 2.4-0.5 3.8 2 6 2.4 4 0.7 4.4-3.7 8-3.4"/>
											<path id="&lt;Path&gt;" class="s68" d="m253.9 508.6q0 0.4-0.1 0.9c-1.6 0.5-3.2-0.5-2.8-2.2q0.4-0.1 0.9 0"/>
											<path id="&lt;Path&gt;" class="s68" d="m257.5 459.3c-1.5-0.1-3 1.1-1.6 2"/>
											<path id="&lt;Path&gt;" class="s68" d="m208.9 448.9c0.4 0.7 0.9 1.1 0.6 2-3 0.3-6.1-0.6-5.3-4.3"/>
											<path id="&lt;Path&gt;" class="s68" d="m218.9 526.6c1 3.7 0.1 9.2 5.9 8 2.1-0.4 3.1-2.9 4.9-2.9 1.3 0.1 3.3 2.2 3.9 3.3-4.2 1.5-11.4-0.4-13.9 4 0.1-0.9 0.2-1.9 0.5-2.7"/>
											<path id="&lt;Path&gt;" class="s68" d="m244.2 538.9c-2 0-4 0.2-6-0.1 0.5-2.4 3.6-0.9 5.3-1.9 1.6-0.9 1.5-3.1 3.7-3"/>
											<path id="&lt;Path&gt;" class="s68" d="m250.2 540.9c2 0 5.5 1.2 5 3.7-1.6 0-3.1-0.1-4.6 0.3 1.2 0.9 3 1.6 3.2 3.3-1.8 0.3-3.2-0.9-4.9-1.3-3-0.6-6.6 0.1-9.6 0-0.2-0.8-0.2-1.3 0.2-2 5 1.7 6.7-3.3 11-2.6"/>
											<path id="&lt;Path&gt;" class="s68" d="m238.9 550.6c0.4 0.2 0.7 0.6 1.2 0.7q-2.6-0.1-5.2 0"/>
											<path id="&lt;Path&gt;" class="s68" d="m170.5 543.6c2.5 1.6 6.7 3.5 6.3 6.9-1.5 0.1-3.9 0.8-4.3-0.9"/>
											<path id="&lt;Path&gt;" class="s68" d="m167.5 510.3c0.2 0.6 0.1 1.7-0.1 2.3-1.9 0.1-5.2 0.6-5.5-2q0.7-0.1 1.3 0"/>
											<path id="&lt;Path&gt;" class="s68" d="m257.2 506.9c-0.2 0.6-0.1 1.1 0.3 1.4"/>
											<path id="&lt;Path&gt;" class="s68" d="m265.9 488.3c1.6 1.4 1.8 7.4-1.1 8-3 0.7-3.1-4.9-2.9-6.7"/>
											<path id="&lt;Path&gt;" class="s68" d="m266.5 505.6q0.2 0.9-0.3 1.7c-0.9-0.9-1.5-2.1-1.7-3.4"/>
											<path id="&lt;Path&gt;" class="s68" d="m260.9 475.6c-0.2-0.1-0.1 0.9-0.5 0 0.3-1.5 1.3-2.3 2.8-2"/>
											<path id="&lt;Path&gt;" class="s68" d="m162.9 454.9c0.1 2.1 0.5 4.4-2 4.7-1.8 0.2-2.9-0.6-2-2.3"/>
											<path id="&lt;Path&gt;" class="s61" d="m154.5 437.6c-1.9-3.6 3.3-4.7 4.3-7.1 0.7-1.7-1.1-2.3-0.9-3.8 0.3-3.6 4.6-4.9 6-8.1"/>
											<path id="&lt;Path&gt;" class="s61" d="m171.9 423.3c-0.3 0.9-0.6 2.4-1 3.6-0.5 1.1-2.2 2.7-2.4 3.8-0.5 2.3 1.7 4.4 0.4 7.1-1 1.9-3.6 4-4.9 6.1-1.4 2.4-3.5 6.6-6.8 6.4"/>
											<path id="&lt;Path&gt;" class="s61" d="m258.2 451.3c-0.7-0.3-1-0.9-2-0.8-1.4-2.9-3.5-4.3-5-6.8-1.5-2.6-2.8-7.9-3-10.8"/>
											<path id="&lt;Path&gt;" class="s61" d="m264.9 447.3c0.8 3.6-3.1 2.5-4.4 0.6-1.1-1.6-1.1-5-1.6-6.9-1.2-4.1-2.6-7.9-4.4-11.7"/>
											<path id="&lt;Path&gt;" class="s61" d="m155.2 503.3c0.9-0.7 5.4-2 6.6-1.1 1.3 1 0.7 3.7 1.1 5.3 0.6 2.1 1.5 2.5 1.6 5.1 0.3 3.3-0.7 7.2 0.7 10.2-1.1 0.4-2.1 0.1-3-0.5"/>
											<path id="&lt;Path&gt;" class="s61" d="m157.5 483.6c2.5 0 6.5-1.1 7.4 2"/>
											<path id="&lt;Path&gt;" class="s61" d="m266.2 484.6c-1.9 1.4-3.8 2.9-5 5"/>
											<path id="&lt;Path&gt;" class="s61" d="m262.2 500.6c-0.2 5.3 2.5 11.3 4 16 0.6 2 0.6 5.2 1 7"/>
											<path id="&lt;Path&gt;" class="s61" d="m248.9 505.6c2-0.3 4.5 0.7 4.6 3"/>
											<path id="&lt;Path&gt;" class="s61" d="m218.9 496.9q3.5 0 7 0"/>
											<path id="&lt;Path&gt;" class="s61" d="m226.5 461.9c2 0 5.9-1.1 5.7 1.7"/>
											<path id="&lt;Path&gt;" class="s61" d="m208.9 466.9c0.4-0.5 1.2-0.9 2-1"/>
											<path id="&lt;Path&gt;" class="s19" d="m162.9 646.9c-0.4-2 19.6-23.6 19.6-23.6l15.7-5c0 0 5.3 1.3 6 4 0.7 2.6-2 7.6-5 9.3-3 1.7-5 9.7-5.7 13-0.6 3.3-8.6 12.3-12.3 15.3-3.7 3-16-4.3-18-5.6-2-1.4-1-7.4-1-7.4"/>
											<path id="&lt;Path&gt;" class="s61" d="m199.9 444.9c-0.7-3-4.4-4.2-5.4-7.3-0.6-2.1-1.9-5.6-1.6-7.7"/>
											<path id="&lt;Path&gt;" class="s61" d="m223.2 440.9c2.8-1.2 4.9 3.2 5 5.7"/>
											<path id="&lt;Path&gt;" class="s20" d="m180.9 551.3c0 0 12-13.7 16.3-14 4.3-0.4-1 44-1.7 49.6-0.6 5.7 1.7 28 1.7 28 0 0 2 4 3.3 6 1.4 2-2.3 7-4 8.4-1.6 1.3-5.3 13-6.6 15.6-1.4 2.7-6.7 4.7-6.7 4.7l-4.7-2.3c0 0-8-1.4-9.6-1.7-1.7-0.3-3-4.7-3-4.7l3-4 8.3-10.3c0 0 2.7-9 2.3-10.3-0.3-1.4 0.4-5 0.4-6.4 0-1.3-1.7-12-4.4-23-2.6-11-6.3-34.3-6.3-34.3z"/>
											<path id="&lt;Path&gt;" class="s20" d="m168.9 645.6c-5.4 1-5.4-3-5.4-3l5.4-5.7"/>
											<path id="&lt;Path&gt;" class="s20" d="m172.9 647.3c0 0-4 1.6-6 0.6-2-1-2-5.3-0.7-6 1.3-0.6 6-4.6 6-4.6"/>
											<path id="&lt;Path&gt;" class="s20" d="m174.5 650.3c0 0-4 1.6-6 0.6-2-1-2-5.3-0.6-6 1.3-0.6 6-4.6 6-4.6"/>
											<path id="&lt;Path&gt;" class="s20" d="m176.9 652.6c0 0-2.4 1.7-3.4 1.7-1 0-3.6-1-4-2.4-0.3-1.3 0.7-4.3 0.7-4.3 0 0 6-2.7 6.7-5.7l1.6-1"/>
											<path id="&lt;Path&gt;" class="s20" d="m184.9 647.9c0 0-2.4 8.4-4.7 8.7-2.3 0.3-6.7-0.3-7-1.3-0.3-1 0-5 0-5 0 0 5.7-4 5.7-6.4"/>
											<path id="&lt;Path&gt;" class="s19" d="m175.2 645.3l0.7-3.4-3.7-5.6-0.7-3.4 4.4-4.6c0 0 0.6 3.6 2 5.3 1.3 1.7 18-3.7 18-3.7l2 4.4-2.7 2.3c0 0-2 8.3-2.7 10.3-0.6 2-2-3.6-2-3.6 0 0-5-4.4-8-4.4-3 0-5.6 7.7-5.6 7.7z"/>
											<path id="&lt;Path&gt;" class="s19" d=""/>
											<path id="&lt;Path&gt;" class="s69" d="m163.2 648.6c0.3 1.3 4.7 6 8 7.3"/>
											<path id="&lt;Path&gt;" class="s69" d="m175.5 657.3c0 0 5.4 1.3 9.4-2"/>
											<path id="&lt;Path&gt;" class="s69" d="m203.5 621.3c0 0-1.3 7.3-6.6 9.6"/>
											<path id="&lt;Path&gt;" class="s69" d="m175.9 641.9c0 0 1.6-4-0.4-5.3"/>
											<path id="&lt;Path&gt;" class="s69" d="m193.9 641.9c-1-2-9.4-4.3-9.4-4.3 0 0-3.3 0.7-5.6 0.7-2.4 0-5.4-5.7-5.4-5.7"/>
											<path id="&lt;Path&gt;" class="s69" d="m195.2 617.6c0 0 2.3 5 0 5.7"/>
											<path id="&lt;Path&gt;" class="s69" d=""/>
											<path id="&lt;Path&gt;" class="s69" d="m175.2 650.9c0 0 2.7 0.4 2.7 1.7"/>
											<path id="&lt;Path&gt;" class="s20" d="m277.4 643.9l4.8 1.5c0 0 3.2 4 4.7 4 1.5 0 1.6 2 1 2.9-0.6 0.8-2.3 1.1-2.3 1.1"/>
											<path id="&lt;Path&gt;" class="s20" d="m277.4 646.4l4.8 1.5c0 0 3.2 4 4.7 4 1.5 0 1.6 2 1 2.9-0.6 0.8-2.3 1.1-2.3 1.1"/>
											<path id="&lt;Path&gt;" class="s20" d="m277.4 648.8l4.5 2.2c0 0 2.5 4.5 4 4.8 1.5 0.2 1.3 2.2 0.5 3-0.7 0.7-2.5 0.7-2.5 0.7"/>
											<path id="&lt;Path&gt;" class="s19" d="m250.2 647l3-4c0 0 15.7-0.7 16.7-0.7 1 0 3.5 1 2.5-1.5-1-2.5-1.5-5.5-1.5-5.5 0 0 7.5 5.5 7.5 7.2 0 1.8-1.5 4.8-1.5 4.8l1.3 4.5-1.3 0.5-4.7-4.3c0 0-10 1.5-10.8 3-0.7 1.5 0.5 4.8 0.5 4.8"/>
											<path id="&lt;Path&gt;" class="s69" d="m259.9 655.3c-4.7-4.5-22.2-11.3-24.5-12.5-2.2-1.3-0.2-4.8-0.2-4.8"/>
											<path id="&lt;Path&gt;" class="s69" d="m266.7 659.8c0 0 10.5 5.5 13 3.5"/>
											<path id="&lt;Path&gt;" class="s69" d="m253.2 647.5l6.7 3"/>
											<path id="&lt;Path&gt;" class="s69" d="m259.9 653c0 0 0.3-5 2.8-5.2 2.5-0.3 12-1.8 12-1.8l3-4"/>
											<path id="&lt;Path&gt;" class="s69" d="m233.9 644c0.8-0.2 10 4.8 10 4.8v2.2h-1.2"/>
											<path id="&lt;Path&gt;" class="s69" d="m276.9 652.5l4.3 3.3 2 3.5"/>
											<path id="&lt;Path&gt;" class="s69" d="m278.2 659l1.2-1.5"/>
											<path id="&lt;Path&gt;" class="s69" d="m248.9 631c0 0-0.7-0.2-2-1.2-1.2-1 0-3.3 0-3.3"/>
											<path id="&lt;Path&gt;" class="s69" d="m189.2 551.8c0 0 2 7.7 1.2 9"/>
										</g>
										<path id="&lt;Path&gt;" class="s70" d="m365.1 307.7l-0.2-0.8h7.2l3 15.8-1.7 0.2-6.3 1.3z"/>
										<path id="&lt;Path&gt;" class="s61" d="m367.4 320.4l7-1.2"/>
										<path id="&lt;Path&gt;" class="s61" d="m366.9 316.4l6-0.7"/>
										<path id="&lt;Path&gt;" class="s61" d="m366.4 313.9l6-1"/>
										<path id="&lt;Path&gt;" class="s56" d="m371.9 308.3l-6 0.7-0.1-1 6-0.7z"/>
										<path id="&lt;Path&gt;" class="s56" d="m372.9 311.1l-6 0.7-0.1-1 6-0.7z"/>
										<path id="&lt;Path&gt;" class="s57" d="m373.1 317.8l-5.9 0.7-0.1-1 5.9-0.7z"/>
										<path id="&lt;Path&gt;" class="s71" d="m309.9 306.9l2.5 23.1-9.7-6.2 3.5-20"/>
										<path id="&lt;Path&gt;" class="s72" d="m385.4 303.9c0 0 15-10 17-7 2 3 3.5 13.5 3.5 13.5l-24.5 10c0 0 9.5-13.5 4-16.5z"/>
										<path id="&lt;Path&gt;" class="s73" d="m158.9 332.9l-14.5 6.5-2-24.5"/>
										<path id="&lt;Path&gt;" class="s74" d="m66.9 288.9l3.5-9.5 8-2.5 7 6.5 3.5 0.5c0 0 1 19.5 2 21 1 1.5-17-4.5-18.5-9.5"/>
										<path id="&lt;Path&gt;" class="s75" d="m92.4 308.9c0 0 19.5 21.5 27 24.5 7.5 3 7.5 8 7.5 8l-2 4c0 0-35.1-22.8-35.5-40.5"/>
										<path id="&lt;Path&gt;" class="s76" d="m262.4 556.4c0.5 2-10 11-11.5 12.5-1.5 1.5-6 5-6 6.5 0 1.5-1 28-1 28 0 0-5-20.5-6-22.5-1-2-5.5-27.5-5.5-27.5l14.5 4"/>
										<path id="&lt;Path&gt;" class="s77" d="m185.4 545.9l13.5-11c0 0-0.5 12.5 0.5 17.5 1 5-3 31.5-3 31.5l-12-22c0 0-6.5-4-8.5-4-2 0-7-4-7-4"/>
										<path id="&lt;Path&gt;" class="s78" d=""/>
										<path id="&lt;Path&gt;" class="s79" d="m247.4 615.9l-0.5 6c0 0-3.5 9.5 4 11 7.5 1.5 5 9 5 9l-5.5 1.5-7.5-3-1.5-6.5 2-2 3-25.5"/>
										<path id="&lt;Path&gt;" class="s80" d="m272.9 655.9l11.3-7.3 4.2 1.8c0 0-6 13-10.5 11.5-4.5-1.5-9.5-6.5-9.5-6.5"/>
										<path id="&lt;Path&gt;" class="s81" d="m167.9 638.4c4.5 3.7 4 6.5 9.4 8.5 3.6 1.4 10.4 4.8 4.6 9.2-5.5 4.1-18.5-6.5-18.5-12.2"/>
										<path id="&lt;Path&gt;" class="s82" d="m191.9 612.9c0.5 3.5 3.8 4.5 5 7.4 0.9 2 0.5 5 0.3 7.1-5.7 1.5-5.1-12.2-4.3-15"/>
										<path id="&lt;Path&gt;" class="s83" d="m187.9 548.4c4.8 5.5 1.3 11.4 1 17"/>
										<path id="&lt;Path&gt;" class="s84" d="m242.9 561.9c-4.1 2.8-3.7 19.3 1 22.5"/>
										<path id="&lt;Path&gt;" class="s85" d="m242.4 587.9c2.3 0 4.4 1.6 6 3"/>
										<path id="&lt;Path&gt;" class="s86" d="m184.4 564.9c2.8 0 5.8 1.9 6.5 4.5"/>
										<path id="&lt;Path&gt;" class="s87" d="m188.9 578.4c1.5-0.3 2.8 0.1 3.5 1.5"/>
										<path id="&lt;Path&gt;" class="s88" d="m188.4 547.4q2 0.1 4 0.5"/>
										<path id="&lt;Path&gt;" class="s89" d="m179.4 557.4q1 0 2 0"/>
										<path id="&lt;Path&gt;" class="s90" d="m246.9 634.9q3.2 0 6.5 0"/>
										<path id="&lt;Path&gt;" class="s91" d="m190.4 624.4c1.5-0.8 3.1-1.4 4.5-2.5"/>
										<path id="&lt;Path&gt;" class="s92" d="m177.4 572.4q1.2 0 2.5 0"/>
										<path id="&lt;Path&gt;" class="s93" d="m377.9 307.4c-2.8 0.6-2.2 8.7 0 10.5"/>
										<path id="&lt;Path&gt;" class="s94" d="m310.9 316.4c-0.2 18.4 54.4-2 55.5 3.5 0.6 2.8-31.8 8-36.5 8-4 0-10.5 1.1-14.4 0-4-1.2-6-5.4-9.1-7.5"/>
										<path id="&lt;Path&gt;" class="s95" d="m343.9 317.4c4.1 0 8.6 0.8 12.5-1"/>
										<path id="&lt;Path&gt;" class="s96" d="m334.4 311.9c2.9-1.3 6.3-1 9.5-1"/>
										<path id="&lt;Path&gt;" class="s97" d="m132.9 315.9c1.6-0.7 3.9-0.5 5.9-0.4-0.2 2.1-2.3 2.8-2.5 4.4-0.3 2.9 2.1 4 1.5 7-6.2 1.8-7.4-11.7-14.9-10.5"/>
									</g>
									<path id="&lt;Path&gt;" class="s2" d="m737.8 281.9c0.4-0.3 6.1-8.7 6.5-10.7 0.5-1.9 6.1-18 11.8-20.8 5.7-2.8 26.5-1.9 30.1 0.8 3.5 2.7 6.4 18 6.4 18 0 0 9.7 7.7 11.9 13.2 2.1 5.4 4.3 46.2 4.3 46.2l-23.6 95.7c0 0-59.5 18.1-66.9 18.1-7.4 0-16.4-2.4-19.8-2.6-3.4-0.1-7.4 2.3-10.8-5-3.4-7.4-13.9-15.4-12.9-26.4 0.9-10.9 13.4-38 13.4-38 0 0 9.3-11.5 9.6-12 0.2-0.5 7.6 9.3 7.6 9.3 0 0 7.7-48.4 14.2-59.4 6.6-11 9.3-19.4 9.6-20.6"/>
									<path id="&lt;Path&gt;" class="s98" d="m815.1 263.7l67.4 101.3"/>
									<path id="&lt;Path&gt;" class="s98" d="m736.3 224.3c1 0 64.8-1.1 64.8-1.1 0 0 18.9-0.8 17.4 25-1.4 25.8-34.4 181.8-34.4 181.8"/>
									<path id="&lt;Path&gt;" class="s99" d="m416.9 434.6c0 0-10.1 16.1-12.8 21.8-2.8 5.6-13.3 4.2-13.3 4.2l-97.4-22.2c-2.9-21.5 12.1-22.9 12.1-22.9l-8.6-7-21.5-2.7 0.2-3.3c7.9-33.9 26.2-37.5 26.2-37.5h11.9c0.2-31.3 21-31.1 21-31.1h14.1c6.6-6 15-7 15-7l118.7-2.3 2.9-4.3c0 0-1.3-3.3-2.6-4.1-1.3-0.8 2.4-4.5 2.4-4.5 0 0 25.6-65.3 27.8-70.8 2.3-5.5 11-9.4 11-9.4 0 0 167.8-16.1 181.7-13.5 13.9 2.5 13.9 11.6 13.9 11.6l-31.4 119c0 0-3.5 39.7-3.5 59.8 0 20 9.7 22.3 9.7 22.3 0 0 66.9-4.6 76-4.6 9 0 11.9-11.3 11.9-11.3l14.2-63.8 118-1.3 5.4 4.8v35.4c-4.4-10.5-17.5-12.6-17.5-12.6 0 0-65.3 0.8-67.2 1.2-2 0.3-10 3.8-11.5 6.1-1.5 2.3-36 75.2-36 75.2l-151 17.1c0 0-13.3-38.1-28.5-54.8-15.2-16.6-32-17.3-33.1-17.8-1.1-0.5-100.4-0.8-105.1 1.6-4.6 2.5-21.5 31.4-22.6 33.2-1.1 1.8-50.7-6-50.3-8.3 0.5-2.2 32.4-51.2 32.4-51.2l247.9 3.1"/>
									<path id="&lt;Path&gt;" class="s100" d="m312.9 364.9c5.4-29.8 25.1-25.7 25.1-25.7l72.8 5.1c20.3 3.7 17.7 35.4 17.7 35.4"/>
									<path id="&lt;Path&gt;" class="s100" d="m483.9 324.6l152.1 6.7c0 0 43.4 3.9 40.2 47.8"/>
									<path id="&lt;Path&gt;" class="s100" d="m483.8 312.5l211.2 9.2"/>
									<path id="&lt;Path&gt;" class="s2" d="m528.4 237.8c0 0 154-12.4 161.6-11.2 7.7 1.2 5.1 12.4 5.1 12.4 0 0-12.2 45.4-15.1 52.3-2.9 7-15.1 6-15.1 6 0 0-149.8-0.3-158.4-1.6-8.6-1.3-3.2-13.1-3.2-13.1l16.9-38.8c2.9-6 8.2-6 8.2-6z"/>
									<path id="&lt;Path&gt;" class="s100" d="m439.7 431.2l19.7-40.6 176.3-1.1"/>
									<path id="&lt;Path&gt;" class="s99" d="m295.5 408.2l18.2-43.2"/>
									<path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="s2" d="m396.9 359.6l-1.2 92.4-65-13.2v-89.6c0.4-3.1 5.5-3.8 5.5-3.8l54.8 5.5c5.3 2.1 5.9 8.7 5.9 8.7zm-51.9-9.8c0-0.9-0.7-1.8-1.7-1.9-1-0.1-1.7 0.5-1.7 1.5l-0.5 86c0 1 0.7 1.8 1.7 2 0.9 0.1 1.7-0.6 1.7-1.5zm10.9 1.9c0-0.9-0.8-1.8-1.8-1.9-0.9-0.1-1.7 0.5-1.7 1.5l-0.5 86c0 1 0.8 1.8 1.7 2 1 0.1 1.8-0.6 1.8-1.5zm10.8 1.9c0-0.9-0.7-1.8-1.7-1.9-1-0.1-1.7 0.5-1.7 1.5l-0.5 86.1c0 0.9 0.7 1.7 1.7 1.9 0.9 0.1 1.7-0.6 1.7-1.5zm10.9 1.9c0-0.9-0.8-1.7-1.8-1.9-0.9-0.1-1.7 0.5-1.7 1.5l-0.5 86.1c0 0.9 0.8 1.7 1.7 1.9 1 0.1 1.8-0.5 1.8-1.5zm10.8 2c0-1-0.8-1.8-1.7-2-1-0.1-1.7 0.6-1.7 1.5l-0.5 86.1c0 0.9 0.7 1.8 1.7 1.9 0.9 0.1 1.7-0.5 1.7-1.5z"/>
									<path id="&lt;Path&gt;" class="s99" d="m335.9 424.5l16.9-5.1v5.1l-16.3 4.5"/>
									<path id="&lt;Path&gt;" class="s2" d="m335.7 428.9c-3.8 10.3 0.2 19.6 0.2 19.6l-29-7.1c-1.7-16.3 3.6-18.6 3.6-18.6"/>
									<path id="&lt;Path&gt;" class="s99" d="m352.8 419.7l-17.1 4.7v4.5l-27.4-6.5v-6.6l13.3-1z"/>
									<path id="&lt;Path&gt;" class="s99" d="m308.9 417.2l27.8 6.8"/>
									<path id="&lt;Path&gt;" class="s2" d="m332.6 431.2c0 0 2.2-2.3 3.1-2.3 0.8 0.1 16.6-4.2 16.8-4.2 0.3 0 13.9 2.3 13.9 2.3 0 0-10.8 2.2-14.2 10-3.4 7.7 0.2 14 0.9 14.3 0.6 0.3-21.7-4.7-21.7-4.7 0 0-4-8.1-3.9-8.4 0.1-0.3 1.3-3 1.3-3"/>
									<path id="&lt;Path&gt;" class="s56" d="m275.6 404.8c0 0 21-26 28.7-29.2 7.7-3.3 6.6-2.8 6.6-2.8l-6.2 12.6c0 0-2.7 0.6-4.2 1.2-1.6 0.7-17.9 18.6-18.2 19.1-0.3 0.5-5.3-1-5.7-0.7"/>
									<path id="&lt;Path&gt;" class="s56" d="m282.5 384.5c0.3-0.2 15.6-13.1 25.5-15.4l-12.9 3.2c0 0 3.6-4.3 4.9-4.6 1.3-0.2 9-1.1 9.8-1.1 0.7 0 1.6-0.3 1.6-0.3l-3.4 6.3c0 0-24.1 16.6-28.6 24.9-4.5 8.2 0.7-7.8 3.5-13.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m397.1 327.2l23.6 1 4.4 2.7 3.1 0.9c33.1 5.3 34.7 47.6 34.7 47.6l-17.4-1.1c0 0-5.2-32.5-11.5-38.8-6.3-6.3-23.9-3.9-25.2-4-1.3-0.2 2.7-1.3 2.7-1.3 0 0-1.9-2.8-2.7-3.9-0.8-1.1-12-2.6-12-2.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m442.2 330.5c0 0 5.4-0.7 5.9-0.5 0.4 0.1 12.9 0.1 18.4 4 5.5 3.9 17.4 45.4 17.4 45.4l-13.7-2.6c0 0-9.7-41.3-13.9-42.9-4.2-1.7-17-1-17.6-1.3-0.5-0.3-1.2-2.7-1.5-3.7-0.1-0.2-0.1-0.4-0.1-0.4"/>
									<path id="&lt;Path&gt;" class="s56" d="m483.8 327.9l-22.2-1.2 14.6 1.5c0 0 21 1.9 29.2 5.2 8.3 3.2 25.9 47.5 25.9 47.5l-16.2-1.9-7.4-21.1 5.7 22.2-17-1c0 0-9.6-42.2-11.2-44.3-1.6-2.1-21.1-3.7-21.1-3.7l-3.4-4.4"/>
									<path id="&lt;Path&gt;" class="s56" d="m475.5 328.8c0 0 24.4-3.5 45 3.3 20.5 6.8 17.4 8.1 26 20.3 8.6 12.3 8.1 26.7 8.1 26.7l-12.8 1.3c0 0-5.2-21.5-6.1-25.2-1-3.7-11.5-18.3-24.4-22.5-13-4.2-30.3-4-30.3-4"/>
									<path id="&lt;Path&gt;" class="s56" d="m515 328.5c0 0 23.7 3.3 32.6 5 8.9 1.8 20.1 11 22.3 17.8 2.3 6.8 8.1 29.3 8.1 29.3 0 0-12.9-0.4-12.9-0.8 0-0.5 0.6-12-0.3-14.4-1-2.5-6.8-12.2-12-22-5.2-9.9-36.7-14.2-36.7-14.2"/>
									<path id="&lt;Path&gt;" class="s56" d="m584.8 338.1c1.5 0.6 9.2 6.1 12.3 11.6 3.1 5.5 4.2 31.8 4.2 31.8 0 0-9.9 0-9.9-0.4 0-0.5-2.2-21.7-4.3-29.5-2.1-7.7-50-22.9-50-22.9 0 0 46.2 8.7 47.7 9.4z"/>
									<path id="&lt;Path&gt;" class="s56" d="m571.9 330.8c22.4-0.2 48.9 14.7 52 22.3 3.1 7.6 2.3 28 2.3 28l-14.6 0.6c0 0-1.3-0.6-0.6-6 0.6-5.3-4.1-25.8-7.8-31.7-3.7-5.8-31.5-12.6-31.5-12.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m598.5 330.6c18.6 2.3 33.8 10.7 39.2 16.3 5.3 5.7 16.8 34 16.8 34 0 0-13.8-1.3-14.3-1.5-0.4-0.1-2.2-8-3.4-10.6-1.1-2.6 0.5-14.4-3-20.6-3.6-6.1-35.6-16-35.6-16.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m621.2 331.7c8.2-0.1 32.3 11.5 35.2 15.7 2.9 4.2 10 33.8 10 33.8l-5.3 0.2c0 0 0 0 0.3-1 0.3-1-10-24.2-13.6-32.3-3.5-8.1-25.5-15.7-25.5-15.7"/>
									<path id="&lt;Path&gt;" class="s56" d="m511.6 310.1c0 0 11.6-8.6 12.7-9.4 1.2-0.8 107.1 0.3 109 0.8 1.9 0.5 24.7 9.7 35.4 7 10.7-2.8 2.6 0.8 2.6 0.8l-6.7 9.2-63.3-2.8c0 0 1-2.5-0.8-3.5-1.8-1-59.5-3.7-59.5-3.7l-6 4.5-25-1.1"/>
									<path id="&lt;Path&gt;" class="s100" d="m698.1 218.9c13.3 0.2 9.2 15.7 9.2 15.7l-25.4 86.6-2.7 25.4-10-1.8-7.6-13.5 1.3-12.3 8.4-10.2c0 0 8.7-10.7 9.2-10.7 0.5 0 8.2-0.5 8.2-0.5 0 0 5.2 2.8 5.9 2.8"/>
									<path id="&lt;Path&gt;" class="s56" d="m651.8 384.4l8.2 23.1-20.4 0.5 0.7-24.4z"/>
									<path id="&lt;Path&gt;" class="s56" d="m668.6 384.1c0 0 0.7 21.4 0.9 22.9 0.3 1.4-9.1 0.2-9.1 0.2l0.2-22.5v-0.7"/>
									<path id="&lt;Path&gt;" class="s99" d="m676.9 401.6c3.3-2.6 6.8-64.7 6.8-64.7l22.1-79-2.9-0.7c0 0 2.4-9.4 2.8-10.1 0.4-0.6 9.8-3.1 9.8-3.1 0 0 3.6-11.4 4-14.9 0.4-3.5-5.6-7.3-5.6-7.3 0 0 3.1-14.1 3.5-13.9 0.4 0.3 18.1 8.4 18.9 13.2 0.7 4.9-5.8 21-7 24.4-1.2 3.4-5.3 3.6-5.6 5.1-0.2 1.5-23.2 69.6-23.2 69.6l-4.1 36.7c0 0-2.7 29.5-5.8 43.6-3.1 14.2-17.4 19.6-17.4 19.6l-56 3.4c0 0-5.6-5.8-4.2-11.1 1.4-5.3 7-4 7-4 50.8-1.3 53.7-4.2 56.9-6.8z"/>
									<path id="&lt;Path&gt;" class="s2" d="m717.2 207.6l-0.1 0.4c0 0-0.2 0.6-0.3 0.8-0.1 0.3-3.6 13.6-3.6 13.6 0 0-22.3-1.7-22.6-2.4-0.3-0.7 0.6-13.8 1.2-13.6 0.7 0.1 25.3 0.4 25.3 0.4"/>
									<path id="&lt;Path&gt;" class="s2" d="m707.7 218.4c0 0 0.9 0.9 6.3 2.7 5.4 1.8 5.9 7.8 5.9 7.8l-17.1-0.8c0 0-2.5-3.8-3.4-4.6-0.9-0.9-8.6-3.3-8.6-3.3l0.3-0.6 4.2-2.3"/>
									<path id="&lt;Path&gt;" class="s56" d="m689.4 273.2l5.4 0.8-4.7 15.5c0 0-6.1 3.2-5.9 2.1 0.3-1.1 4.7-17.6 4.7-17.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m697.8 237l6.3 1.5-5.6 20.5-4.6 0.3 3.6-21.7"/>
									<path id="&lt;Path&gt;" class="s100" d="m490.5 296.8c0.4-0.6 2.8-1.5 3.9-1.3 1.1 0.1 5.2 10.3 5.3 12.6 0.1 2.3-2.7 5.1-2.7 5.1 0 0-2 8.6-2 9.8 0 1.2-0.3 1.6-0.3 1.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m500.9 276.8l4.7-2.6c0 0-5.2 11.4-5.4 13.7-0.3 2.3 0.5 5.1 0.5 5.1l-4.2 0.9-2.3-0.6 7-15.7"/>
									<path id="&lt;Path&gt;" class="s56" d="m515.3 242.5c0.8-0.3 6.1-2.1 6.1-2.1 0 0-6.8 14.2-7.5 15.1-0.7 0.8-4.9 0.7-4.9 0.7"/>
									<path id="&lt;Path&gt;" class="s56" d="m610.6 391.1l15.2-0.6 0.2 15.9c0 0-8.8-1.1-10-1.2-1.3-0.1-2.5 1.7-2.5 1.7 0 0-1.4-15.7-1.8-15.8"/>
									<path id="&lt;Path&gt;" class="s56" d="m593.4 391.2l8.6-0.1 4.7 23.8c0 0-12.6-6.3-12.7-6.9-0.1-0.6-0.5-16.3-0.5-16.3"/>
									<path id="&lt;Path&gt;" class="s56" d="m572.3 391.6l10.7-0.1 1.9 13.1-12.2-3.1-1.2-9.4"/>
									<path id="&lt;Path&gt;" class="s56" d="m539.7 390.1l22.3-0.2c0 0-0.4 4-0.4 4.5 0 0.5 1.9 4.3 1.9 4.3l-17.6-0.4c0 0-5-6.3-6.8-7.3"/>
									<path id="&lt;Path&gt;" class="s56" d="m430 381.2c0 0 1.7 2.6 1.9 3.6 0.2 0.9 15 26.6 15 26.6l-8.1 13c0 0-19.2-23-19.4-24.4-0.1-1.5 11.7-18.9 11.7-18.9"/>
									<path id="&lt;Path&gt;" class="s56" d="m430.3 381.9c0 0 20.5-1.8 24.5-0.4 4.1 1.5 11 6.3 11 6.3l-7.9 0.7-5.3 10.5c0 0-2.1-2.1-3.6-4.4-1.4-2.2-18.7-10-18.7-10"/>
									<path id="&lt;Path&gt;" class="s56" d="m418.2 403.4l1.9 18.2 2.1 11.3-13.6-2.1c0 0-1.8-7.2-1.9-7.9-0.2-0.6 10.3-20.5 10.3-20.5"/>
									<path id="&lt;Path&gt;" class="s56" d="m458.2 419.5l-10.5 14.2c0 0-3.7-3-3.5-4.8 0.1-1.6 4.5-13.2 5.5-15.7q0.1-0.5 0.1-0.5"/>
									<path id="&lt;Path&gt;" class="s56" d="m460.3 390.9l12.5-0.3c0 0 1.3 5.6 1.8 8.1 0.5 2.4 9.3 4.3 9.3 4.3l-13.4 0.8c0 0-1.8 0.7-2.7 2-1 1.3-5.7 6.4-5.7 6.4l-7.3-9.2"/>
									<path id="&lt;Path&gt;" class="s56" d="m471.5 382.3c0 0 8.9 1 10.3 2 1.5 1 5.2 4.3 5.2 4.3 0 0-11.1 0.9-11-0.4 0.2-1.3-4.3-4.4-4.3-4.4"/>
									<path id="&lt;Path&gt;" class="s56" d="m489.6 383l18.3 2.1 6.3 3.9-15.7-1-2.4-1.9-7.6-2.9"/>
									<path id="&lt;Path&gt;" class="s99" d="m346.5 370.2c0 12.1-6.2 21.9-13.7 21.9-7.6 0-13.7-9.8-13.7-21.9 0-12.1 6.1-21.9 13.7-21.9 7.5 0 13.7 9.8 13.7 21.9z"/>
									<path id="&lt;Path&gt;" class="s101" d="m341.6 370.2c0 10-5 18-11.3 18-6.2 0-11.2-8-11.2-18 0-9.9 5-18 11.2-18 6.3 0 11.3 8.1 11.3 18z"/>
									<path id="&lt;Path&gt;" class="s99" d="m423.3 378.6c0 13.7-7.2 24.8-16.2 24.8-9 0-16.3-11.1-16.3-24.8 0-13.7 7.3-24.8 16.3-24.8 9 0 16.2 11.1 16.2 24.8z"/>
									<path id="&lt;Path&gt;" class="s101" d="m418.7 379.3c0 12.3-6.5 22.2-14.5 22.2-8.1 0-14.6-9.9-14.6-22.2 0-12.2 6.5-22.1 14.6-22.1 8 0 14.5 9.9 14.5 22.1z"/>
									<path id="&lt;Path&gt;" class="s56" d="m360.1 330.4c0.4-0.6 3-2.2 3.7-2.2 0.8 0 26.1-0.7 26.1-0.7 0 0 6.4 1.6 6.8 1.7 0.5 0 2.8 4.7 2.8 4.7 0 0-1.3 2-3.1 2.9-1.8 1-1 3-1.7 2.9-0.6-0.1-36.6-1.6-36.6-1.6 0 0 0 0 1.1-1.3 1-1.2 5.2-2.5 7.9-2.5 2.6 0 21.2-1.3 21.2-1.3 0 0-7.8-1.3-14.4-2.5-6.7-1.3-10.9 0-12.6 0"/>
									<path id="&lt;Path&gt;" class="s56" d="m400 345.2c1.2 0.2 1.7 0.7 2.5 1.3 0.7 0.7 9.1 4.2 9.1 4.2 0 0-2.1 0.1-4.6 0.6-2.5 0.5-8 1.2-8.6 0.3-0.7-0.9-9-4.9-10.8-4.9-1.8 0-6.5 2.3-6.5 2.3 0 0-7.4-1.8-8.1-1.8-0.8 0-23.9-1.8-23.9-1.8 0 0 5.1-3.5 5.5-3.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m319.6 384.4c1.9 1.8-4.8-2.3-7 0.5-2.1 2.8-9.2 18.5-9.9 20.2-0.7 1.6-2.8 1.2-2.8 1.2l15.7-39.1c0.6-0.1 0.9-0.2 0.9-0.2 0 0-0.5 14.4 3.1 17.4z"/>
									<path id="&lt;Path&gt;" class="s56" d="m626.3 426.5l-1.6 14.5-7.2-10 1.2-4.2h8.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m631.5 424.2c0 0 11.5 23.8 11.7 24.3 0.1 0.4 1.2 25.3 1.2 25.3 0 0-4 0.2-4.6 0-0.7-0.1-7.8-15.2-7.2-17.9 0.7-2.8-0.4-31.5-0.4-31.5"/>
									<path id="&lt;Path&gt;" class="s56" d="m643.5 423.6c0.8 0.3 26.5-1.2 26.5-1.2l6 40.3-1 8.2-13.7 2.6c0 0-1.8-7.3-1.8-8.7 0-1.5-16-38.8-16-38.8"/>
									<path id="&lt;Path&gt;" class="s56" d="m682.3 415.8c0 0 5.7 14.7 5.7 15.1 0 0.3-2.1 38-2.1 38 0 0-6.5 1.9-6.9 1.7-0.4-0.1 2.5-52.9 2.5-52.9"/>
									<path id="&lt;Path&gt;" class="s56" d="m693.3 431.7c0 0 8.4 2.1 8.7 2.6 0.4 0.5 3.5 4.7 3.5 4.7l-3.2 28-8 1.5c0 0 1.7-28.8 1.7-29.6 0-0.9-2.7-6.3-3.3-6.8"/>
									<path id="&lt;Path&gt;" class="s56" d="m710 431.4l17.2-0.8c0 0 5.4 7.1 5.7 8.4 0.4 1.3-5.2 25.1-5.2 25.1l-7.7 1.3-0.3-24.5-4.6 23.1c0 0-8.7 3-8.7 2.4 0-0.6 5-26.4 5-26.4 0 0-2.8-6-3.1-6.5"/>
									<path id="&lt;Path&gt;" class="s56" d="m737.1 430.5l9.8 0.4 3.1 4.9c0 0-6.5 24.9-6.9 25.6-0.3 0.8-11.5 2.4-11.5 2.4 0 0 8.1-26 9.5-27.1 1.3-1.1-3.2-5.8-3.6-5.8"/>
									<path id="&lt;Path&gt;" class="s56" d="m753.4 428c0 0 6.1 4.1 6.6 6 0.5 2 0.3 25.5 0.3 25.5l-11 1.8c0 0 4.3-25.3 4.9-27.8 0.6-2.4-1.4-4.2-1.4-4.2"/>
									<path id="&lt;Path&gt;" class="s56" d="m760.1 427.5c0 0 6.9 7.6 7.1 8.3 0.3 0.8 1.4 23.1 0.8 23.3-0.6 0.3-3.8 0.1-3.8 0.1l-1.3-24.1-1.8-5.9"/>
									<path id="&lt;Path&gt;" class="s56" d="m766.8 428l6-0.8 5.7 4 0.5 4 6.3 23-13.9 0.8 0.8-27.3-4.5-3.9"/>
									<path id="&lt;Path&gt;" class="s56" d="m787.7 408.6c0 0 5.5 9.4 5.6 9.9 0.1 0.5-1.2 26.3-1.2 26.3l-5.5 9.1c0 0-2.3-24.2-2.4-25.2-0.1-1-3.4-5-3.4-5"/>
									<path id="&lt;Path&gt;" class="s56" d="m795.4 372l2.8-19.1 2.8-0.8 6.5 6.4c0 0 1.5 53.1 1.1 53.5-0.4 0.3-8 12.7-8 12.7 0 0 2.3-40.4 2.2-40.9-0.2-0.4-7.1-11.5-7.1-11.5"/>
									<path id="&lt;Path&gt;" class="s56" d="m825 353c0.9 0 1.9 4.4 1.9 4.4l-1.3 22.2-6.6 6.9 0.1-29.2-3-4.7c0 0 7.9 0.4 8.9 0.4z"/>
									<path id="&lt;Path&gt;" class="s56" d="m832.7 352.2l4.1 1.5 4 4-2.1 18.4-6.1 0.7 1.7-19.4-3-4.6"/>
									<path id="&lt;Path&gt;" class="s56" d="m833.7 352.3l10.2-0.1 5.3 3.6-0.6 20.2-5.7 0.4c0 0-2.2-17.7-2.5-17.8-0.4-0.1-1.5-1.3-1.5-1.3"/>
									<path id="&lt;Path&gt;" class="s56" d="m862.5 352.4l4.5 4.1 2.3-0.3-4.1-4.7c0 0 6.3 3.5 8.1 4.3 1.8 0.8 0.8 17.7 0.8 17.7l-4.2 1.9-10.2-18.9 2.6 18.6-7.6 0.8-0.4-19.1-2.8-3.9z"/>
									<path id="&lt;Path&gt;" class="s56" d="m886.3 351.6l6.3 2.9-1.3 20.9-9.9 1.3c0 0 0.8-20.7 0.5-21.8-0.3-1.2-1.8-2.9-1.8-2.9"/>
									<path id="&lt;Path&gt;" class="s56" d="m900.2 350l2.4 5.4-1 19.5-6.6-0.2-0.5-20-2.1-3.1"/>
									<path id="&lt;Path&gt;" class="s56" d="m909 351.8c0.7 0.2 5.1 3.4 5.1 3.4l-1.2 24.2-6.3-4.7 1-20-3.6-2.6"/>
									<path id="&lt;Path&gt;" class="s99" d="m786.2 458.5l34.8-68.5c2.6-3.6 9.4-10.6 9.4-10.6 0 0 70.3-3.7 74.9-3.7 4.6 0 16 13.1 16.8 15.3 0.7 2.2 20.3 56.2 20.3 56.2 0 0-8.9-4.6-12.3-8-3.4-3.4-20.9-45.5-20.9-45.5 0 0-40.2 2.4-45.6 4.6-5.3 2.1-26.2 59.4-29.6 62.8-3.3 3.4-12.8 3.1-12.8 3.1l-35.4-4.8"/>
									<path id="&lt;Path&gt;" class="s99" d="m466.8 408.7l3.2-3.2c0 0 107.2-1.2 108-1 0.8 0.1 5.3 1.8 5.3 1.8 27.7 7.6 40.9 40.9 40.9 40.9-13.6-30.3-39.8-29.9-39.8-29.9 0 0-68.5 6.9-76.2 7.6-7.8 0.8-16.1 16-16.1 16-3.3 3.7-12.8 1.5-12.8 1.5l-31.2-5.6z"/>
									<path id="&lt;Path&gt;" class="s99" d="m710.4 274.6c0.6-0.2 21.9-4.6 24.7-4 2.8 0.6 6.3 33.3 5.1 35.3-1.2 1.9-27.7 5.6-28.5 5.7-0.7 0.1-5.1-0.1-6.2-4-1-3.9-2.5-21.7-2.7-23.2-0.3-1.4 4.3-10.4 4.3-10.4z"/>
									<path id="&lt;Path&gt;" class="s102" d="m787.4 277.6c0 0 3.9 11.9 3.1 16.5-0.7 4.6-8.9 75.4-15.4 81.6-6.4 6.2-16.1 0.3-15.2-2.5 0.8-2.8 24.6-85.6 24.6-88.9 0-3.3 0.8-7.1 1.3-7.4 0.5-0.2 1.9-0.2 1.9-0.2"/>
									<path id="&lt;Path&gt;" class="s102" d="m765.7 391.4c1.3 0.2 6.9 17.4 6.9 17.4 0 0-45.6 4.4-55.2 0.5-9.6-3.9-6.5-25.9 3.4-23.9 10 2.1 43.9 6.8 44.9 6.8"/>
									<path id="&lt;Path&gt;" class="s102" d="m769.3 250.4c0 0 6.6 0 12.4 0.7 5.8 0.7 8.5 13.3 7.3 17.1-1.3 3.7-9 1.3-9.4-6.7-0.3-8-7.1-8.2-10.7-10.2"/>
									<path id="&lt;Path&gt;" class="s2" d="m278 465.3l-27.5-9.8c0 0-0.9-17.7 1.3-17.8 2.2-0.2 11.1-3.4 12.4-3.6 1.2-0.1 27 4.9 27 4.9l3.9-2.4"/>
									<path id="&lt;Path&gt;" class="s2" d="m932 495.5c0 39.4-13.5 71.3-30.1 71.3-16.6 0-30-31.9-30-71.3 0-39.4 13.4-71.3 30-71.3 16.6 0 30.1 31.9 30.1 71.3z"/>
									<path id="&lt;Path&gt;" class="s102" d="m610.4 543.6c0 42.2-24.4 76.4-54.5 76.4-30 0-54.4-34.2-54.4-76.4 0-42.2 24.4-76.4 54.4-76.4 30.1 0 54.5 34.2 54.5 76.4z"/>
									<path id="&lt;Path&gt;" class="s103" d="m601.8 543.3c0 35.9-20.6 64.9-46.2 65.1 19.7-7.6 34.1-32.8 34.1-62.7 0-36-20.8-65.1-46.4-65.1q-0.1 0-0.3 0c4-1.5 8.1-2.4 12.4-2.4 25.7 0 46.4 29.2 46.4 65.1z"/>
									<path id="&lt;Path&gt;" class="s2" d="m576.5 544.1c0 26.4-15.3 47.8-34.1 47.8-18.9 0-34.2-21.4-34.2-47.8 0-26.5 15.3-47.9 34.2-47.9 18.8 0 34.1 21.4 34.1 47.9z"/>
									<path id="&lt;Path&gt;" class="s102" d="m921 494.6c-2.4 35-24.6 62-49.5 60.2-25-1.7-43.3-31.4-40.9-66.4 2.5-34.9 24.6-61.9 49.6-60.2 24.9 1.7 43.2 31.5 40.8 66.4z"/>
									<path id="&lt;Path&gt;" class="s2" d="m892.8 493.1c-1.5 21.9-15.4 38.8-31 37.7-15.6-1.1-27.1-19.7-25.6-41.6 1.6-21.9 15.4-38.8 31.1-37.7 15.6 1.1 27 19.7 25.5 41.6z"/>
									<path id="&lt;Path&gt;" class="s102" d="m391.2 506.9c-0.8 26.7-20.4 48.1-44.5 48.1-24.6 0-44.6-22.4-44.6-50 0-8.4 1.9-16.4 5.2-23.3l3.1 0.9c-1 3.9-1.6 8.1-1.6 12.4 0 23.5 16.9 42.5 37.9 42.5 18 0 33-14 36.9-32.9z"/>
									<path id="&lt;Path&gt;" class="s102" d="m258 441c3.5-0.6 189.1 54 189.1 54l0.6 25.5-193.3-65.9v-16.5"/>
									<path id="&lt;Path&gt;" class="s2" d="m371 441.3c0 9.3-5 16.9-11.1 16.9-6.1 0-11.1-7.6-11.1-16.9 0-9.4 5-16.9 11.1-16.9 6.1 0 11.1 7.5 11.1 16.9z"/>
									<path id="&lt;Path&gt;" class="s104" d="m472.5 409.2c0.6 0 35 5.3 32.8 8.1-2.3 2.7-8.9 4.5-9.6 6.3-0.6 1.7-6.3 14.5-8.2 15.3-1.9 0.8-28.3-3.4-28.9-5.5-0.7-2.1 13.5-21.5 13.5-21.5"/>
									<path id="&lt;Path&gt;" class="s104" d="m490 422.5c0 0 0.5-0.3 1.8-0.9 1.4-0.6 1.6-1.4 7.7-2.5 6-1.1 88.8-6.7 88.3-6.6-0.5 0.2-89.7 9.6-91.1 10.6-1.5 0.9-9.2 12.5-11.2 12.6-1.9 0.1-1.2-2.9 0.4-4"/>
									<path id="&lt;Path&gt;" class="s104" d="m818.5 454.6c3.3-2.6 26.9-64 32-67.2 5.2-3.3 62.7-0.7 62.7-0.7 0 0-51.7 5.2-56.2 7.1-4.5 2-21.3 53-24.9 58.5-3.5 5.5-14.9 5.5-14.9 5.5"/>
									<path id="&lt;Path&gt;" class="s105" d="m522 289.7c0 0 22.3-1.4 27.2-5.1 4.8-3.6 36.3-43.4 36.3-43.4 0 0-13.5-2.4-12.1-2.9 1.5-0.5 81.2-6.3 80.5-6-0.7 0.2-33 6-37.6 10.6-4.6 4.6-24.7 36.6-28.1 39.8-3.4 3.1-4.9 6.8-4.9 6.8l27.4 2.9-89.7-0.3"/>
									<path id="&lt;Path&gt;" class="s105" d="m684.2 231.5c0 0-1 3.4-2.2 5.9-1.2 2.4-37.1 44.3-40.5 45.8-3.4 1.4 18.2 5.6 18.2 5.6 0 0-45.3 1.9-44.1 1.4 1.2-0.5 49-59.1 49-59.1"/>
									<path id="&lt;Path&gt;" class="s56" d="m267.5 445.6c0 0 174 48.3 175 49.7 1 1.3-131.3-25.4-175-49.7z"/>
									<path id="&lt;Path&gt;" class="s99" d="m643.5 481.6l144.7-17.3 16.3 5-161.3 21.6z"/>
									<path id="&lt;Path&gt;" class="s99" d="m706.2 284.3c0 0 22.3-3.1 22.9-2.9 0.6 0.3 2.9 23.8 2.9 23.8"/>
									<path id="&lt;Path&gt;" class="s99" d="m730.9 279.1l3.6-7.4"/>
									<path id="&lt;Path&gt;" class="s2" d="m802.9 342.2c3.7-0.8 110.2 7.2 110.2 7.2l-115.5 5.3-1.1-3.7 3.4-2.6"/>
									<path id="&lt;Path&gt;" class="s103" d="m917.8 489.8c0 33.4-19.2 60.5-43 60.7 18.3-7.1 31.7-30.6 31.7-58.5 0-33.5-19.4-60.6-43.3-60.6q-0.1 0-0.2 0c3.7-1.5 7.6-2.2 11.6-2.2 23.9 0 43.2 27.1 43.2 60.6z"/>
								</g>
							</svg>
						</div>
					<?php endif; ?>
					
					<div class="gregs-farm-main-inner-cnt-wrap">
						<?php if($gregsfarm_logo_image): ?>
							<div class="gregs-farm-botanical-black-img-wrap">
								<img src="<?php echo $gregsfarm_logo_image['url'];?>" alt="<?php echo $gregsfarm_logo_image['alt'];?>" />
							</div>
						<?php endif; ?>
						
						<?php if($gregsfarm_content): ?>
						<div class="gregs-farm-desc-wrap">
							<?php echo $gregsfarm_content;?>
						</div>
						<?php endif; ?>
						
						<div class="gregs-farm-content-coupon-data-wrap">
							<?php if($gregsfarm_discount_text || $gregsfarm_use_code_text || $gregsfarm_coupon_code || $gregsfarm_coupon_description): ?>
								<?php if($gregsfarm_discount_text): ?>
								<div class="gregs-farm-discount-perc-text">
									<?php echo $gregsfarm_discount_text;?>
								</div>
								<?php endif; ?>
								
								<?php if($gregsfarm_use_code_text || $gregsfarm_coupon_code || $gregsfarm_coupon_description): ?>
									<div class="gregs-farm-content-coupon-data-cnt-code-wrap">
										<?php if($gregsfarm_use_code_text): ?>
										<div class="gregs-farm-use-code-text">
											<?php echo $gregsfarm_use_code_text;?>
										</div>
										<?php endif; ?>
										
										<?php if($gregsfarm_coupon_code): ?>
										<div class="gregs-farm-coupon-code-text-copy-wrap">
											<span class="coupon-inner-text-data">
												<?php echo $gregsfarm_coupon_code;?>
											</span>
											<span class="copy-coupon-wrap-data">
												<svg xmlns="http://www.w3.org/2000/svg" width="19.024" height="22.028" viewBox="0 0 19.024 22.028">
												  <path data-name="Ic-Copy" d="M17.018,1.5H5a2.008,2.008,0,0,0-2,2V17.52H5V3.5H17.018Zm3,4.005H9.008a2.008,2.008,0,0,0-2,2V21.526a2.008,2.008,0,0,0,2,2H20.022a2.008,2.008,0,0,0,2-2V7.508A2.008,2.008,0,0,0,20.022,5.505Zm0,16.02H9.008V7.508H20.022Z" transform="translate(-3 -1.5)"/>
												</svg>
											</span>
										</div>
										<?php endif; ?>
										
										<?php if($gregsfarm_coupon_description): ?>
										<div class="gregs-farm-coupon-desc-inner-wrap">
											<?php echo $gregsfarm_coupon_description;?>
										</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		<?php
		if($gregsfarm_ripped_paper_gray_bg){?>
		<style type="text/css">
		.home-gregs-farm-wrap::before{
			content:'';
			position:absolute;
			top:-75px;
			height: 99px;
			width:100%;
			background-image:url(<?php echo $gregsfarm_ripped_paper_gray_bg['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		}?>
		
		<?php
		/*if($gregsfarm_ripped_paper_green_bg){?>
		<style type="text/css">
		.home-gregs-farm-wrap::after{
			content:'';
			position:absolute;
			bottom:-33px;
			height: 65px;
			width:100%;
			background-image:url(<?php echo $gregsfarm_ripped_paper_green_bg['url'];?>);
			background-size:cover;
			z-index:3;
		}
		</style>
		<?php
		}*/?>
	</div>
	
	<div class="home-best-selling-wrap-bottom-leaf-container">
		<div class="home-best-selling-wrap">
			<div class="home-best-selling-wrap-leaf-container">
				<?php
					$best_selling_bg_image = get_field("best_selling_bg_image",get_the_ID());
					$best_selling_title = get_field("best_selling_title",get_the_ID());
					$best_selling_subtitle = get_field("best_selling_subtitle",get_the_ID());
					$best_selling_content_description = get_field("best_selling_content_description",get_the_ID());
					$best_selling_products = get_field("best_selling_products",get_the_ID());
					$best_selling_top_ripped_bg_green = get_field("best_selling_top_ripped_bg_green",get_the_ID());
					$best_selling_bottom_ripped_bg_green = get_field("best_selling_bottom_ripped_bg_green",get_the_ID());
					
					$best_selling_top_left_leaf = get_field("best_selling_top_left_leaf",get_the_ID());
					$best_selling_bottom_right_leaf = get_field("best_selling_bottom_right_leaf",get_the_ID());
					
					if($best_selling_title || $best_selling_subtitle || $best_selling_content_description || $best_selling_products){
				?>	
					<div class="container best-selling-container common-z-index-increase">
						<?php if($best_selling_title || $best_selling_subtitle || $best_selling_content_description){?>
						<div class="best-selling-title-wrap">
						
							<?php if($best_selling_title){?>
							<div class="best-selling-inner-title-wrap">
								<?php echo $best_selling_title;?>
							</div>
							<?php }?>
							
							<?php if($best_selling_subtitle){?>
							<div class="best-selling-inner-subtitle-wrap">
								<?php echo $best_selling_subtitle;?>
							</div>
							<?php }?>
							
							<?php if($best_selling_content_description){?>
							<div class="best-selling-inner-desc-wrap">
								<?php echo $best_selling_content_description;?>
							</div>
							<?php }?>
						</div>
						<?php }?>
						
						<?php if($best_selling_products):
						//$products = wc_get_products(['category_id' => $best_selling_products]);
						//print_r($products);
						$products = new WP_Query( array(
							'post_type'      => 'product',
							'post_status'    => 'publish',
							'posts_per_page' => -1,
							'tax_query'      => array( array(
								'taxonomy'   => 'product_cat',
								'field'      => 'term_id',
								'terms'      => array( $best_selling_products ),
							) )
						) );
						?>
							<div class="best-selling-prds-wrapper">
								<?php while ($products->have_posts()) :
									//setup_postdata($post);
									$products->the_post();
									//$post = json_decode($post, true);?>
									<?php $product = wc_get_product(get_the_ID()); /* get the WC_Product Object */ ?>
									<div class="sin-prd-main-outer-wrap">
										<div class="sin-prd-wrap">
											<?php 
												$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail' );//print_r($image);
												$permalink = $product->get_permalink();
											?>
											
											<div class="sin-prd-img-wrap">
												<a href="<?php echo $permalink?>">
													<div class="product-grid-image">
														<img src="<?php  echo $image[0]; ?>">
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
								<?php endwhile; ?>
							</div>
						<?php wp_reset_postdata();
						endif;?>
					</div>
				<?php }?>
				<?php
				if($best_selling_bg_image){?>
				<style type="text/css">
				.home-best-selling-wrap{
					background-image:url(<?php echo $best_selling_bg_image['url'];?>);
					background-size:cover;
				}
				</style>
				<?php
				}?>
				
				<?php
				if($best_selling_top_ripped_bg_green){/*?>
				<style type="text/css">
				.home-best-selling-wrap::before{
					content:'';
					position:absolute;
					top:-380px;
					height: 100%;
					width:100%;
					background-image:url(<?php echo $best_selling_top_ripped_bg_green['url'];?>);
					background-size:cover;
				}
				</style>
				<?php
				*/}?>
				
				<?php
				if($best_selling_bottom_ripped_bg_green){?>
				<style type="text/css">
				.home-best-selling-wrap::after{
					content:'';
					position:absolute;
					bottom:-380px;
					height: 100%;
					width:100%;
					background-image:url(<?php echo $best_selling_bottom_ripped_bg_green['url'];?>);
					background-size:cover;
					z-index:3;
				}
				</style>
				<?php
				}?>
			</div>
			<?php
				if($best_selling_top_left_leaf){?>
				<style type="text/css">
				.home-best-selling-wrap-leaf-container::before{
					content:'';
					position:absolute;
					top:94px;
					height: 252px;
					width:298px;
					background-image:url(<?php echo $best_selling_top_left_leaf['url'];?>);
					background-size:cover;
					z-index: 4;
					left: -96px;
				}
				</style>
				<?php
				}
			?>
			<?php
				if($best_selling_bottom_right_leaf){?>
				<style type="text/css">
				.home-best-selling-wrap-bottom-leaf-container::after{
					content:'';
					position:absolute;
					bottom:0;
					height: 396px;
					width:402px;
					background-image:url(<?php echo $best_selling_bottom_right_leaf['url'];?>);
					background-size:cover;
					z-index: 4;
					right: -110px;
				}
				</style>
				<?php
				}
			?>
		</div>
	</div>
	
	<div class="home-new-arrivals-wrap-leaf-container">
		<div class="home-new-arrivals-wrap">
			<?php
				$new_arrivals_bg_image = get_field("new_arrivals_bg_image",get_the_ID());
				$new_arrivals_title = get_field("new_arrivals_title",get_the_ID());
				$new_arrivals_subtitle = get_field("new_arrivals_subtitle",get_the_ID());
				$new_arrivals_content_description = get_field("new_arrivals_content_description",get_the_ID());
				$new_arrivals_products = get_field("new_arrivals_products",get_the_ID());
				$new_arrivals_top_ripped_bg_green = get_field("new_arrivals_top_ripped_bg_green",get_the_ID());
				$new_arrivals_bottom_ripped_bg_green = get_field("new_arrivals_bottom_ripped_bg_green",get_the_ID());
				
				$new_arrivals_top_left_leaf = get_field("new_arrivals_top_left_leaf",get_the_ID());
				$new_arrivals_bottom_right_leaf = get_field("new_arrivals_bottom_right_leaf",get_the_ID());
				
				if($new_arrivals_title || $new_arrivals_subtitle || $new_arrivals_content_description || $new_arrivals_products){
			?>	
				<div class="container new-arrivals-container common-z-index-increase">
					<?php if($new_arrivals_title || $new_arrivals_subtitle || $new_arrivals_content_description){?>
					<div class="best-selling-title-wrap">
					
						<?php if($new_arrivals_title){?>
						<div class="best-selling-inner-title-wrap light-green">
							<?php echo $new_arrivals_title;?>
						</div>
						<?php }?>
						
						<?php if($new_arrivals_subtitle){?>
						<div class="best-selling-inner-subtitle-wrap white-font">
							<?php echo $new_arrivals_subtitle;?>
						</div>
						<?php }?>
						
						<?php if($new_arrivals_content_description){?>
						<div class="best-selling-inner-desc-wrap white-font">
							<?php echo $new_arrivals_content_description;?>
						</div>
						<?php }?>
					</div>
					<?php }?>
					
					<?php if($new_arrivals_products):
					//$new_products = wc_get_products(['category_id' => $new_arrivals_products]);
					//print_r($new_products);
					$new_products = new WP_Query( array(
						'post_type'      => 'product',
						'post_status'    => 'publish',
						'posts_per_page' => -1,
						'tax_query'      => array( array(
							'taxonomy'   => 'product_cat',
							'field'      => 'term_id',
							'terms'      => array( $new_arrivals_products ),
						) )
					) );
					?>
						<div class="best-selling-prds-wrapper">
							<?php while ($new_products->have_posts()) :
								//setup_postdata($post);
								$new_products->the_post();
								//$post = json_decode($post, true);?>
								<?php $product = wc_get_product(get_the_ID()); /* get the WC_Product Object */ ?>
								<div class="sin-prd-main-outer-wrap">
									<div class="sin-prd-wrap">
										
										<?php 
											$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail' );//print_r($image);
											$permalink = $product->get_permalink();
										?>
										
										<div class="sin-prd-img-wrap">
											<a href="<?php echo $permalink?>">
												<div class="product-grid-image">
													<img src="<?php  echo $image[0]; ?>">
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
							<?php endwhile; ?>
						</div>
					<?php wp_reset_postdata();
					endif;?>
				</div>
			<?php }?>
			<?php
			if($new_arrivals_bg_image){?>
			<style type="text/css">
			.home-new-arrivals-wrap{
				background-image:url(<?php echo $new_arrivals_bg_image['url'];?>);
				background-size:cover;
			}
			</style>
			<?php
			}?>
			
			<?php
			if($new_arrivals_top_ripped_bg_green){/*?>
			<style type="text/css">
			.home-new-arrivals-wrap::before{
				content:'';
				position:absolute;
				top:-380px;
				height: 100%;
				width:100%;
				background-image:url(<?php echo $new_arrivals_top_ripped_bg_green['url'];?>);
				background-size:cover;
			}
			</style>
			<?php
			*/}?>
			
			<?php
			if($new_arrivals_bottom_ripped_bg_green){?>
			<style type="text/css">
			.home-new-arrivals-wrap::after{
				content:'';
				position:absolute;
				bottom:-48px;
				height: 95px;
				width:100%;
				background-image:url(<?php echo $new_arrivals_bottom_ripped_bg_green['url'];?>);
				background-size:cover;
				z-index:3;
			}
			</style>
			<?php
			}?>
		</div>
		
		<?php
			if($new_arrivals_top_left_leaf){?>
			<style type="text/css">
			.home-new-arrivals-wrap-leaf-container::before{
				content:'';
				position:absolute;
				top:40px;
				height: 391px;
				width:363px;
				background-image:url(<?php echo $new_arrivals_top_left_leaf['url'];?>);
				background-size:cover;
				z-index: 4;
				left: -110px;
			}
			</style>
			<?php
			}
		?>
		<?php
			if($new_arrivals_bottom_right_leaf){?>
			<style type="text/css">
			.home-new-arrivals-wrap-leaf-container::after{
				content:'';
				position:absolute;
				bottom:-135px;
				height: 335px;
				width:330px;
				background-image:url(<?php echo $new_arrivals_bottom_right_leaf['url'];?>);
				background-size:cover;
				z-index: 4;
				right: -110px;
			}
			</style>
			<?php
			}
		?>
		
	</div>
	
	<div class="about-greg-banner-section">
		<?php
		$greg_botanical_background_banner_home = get_field("greg_botanical_background_banner_home",get_the_ID());
		$greg_botanical_white_title_image_home = get_field("greg_botanical_white_title_image_home",get_the_ID());
		$greg_botanical_title_home = get_field("greg_botanical_title_home",get_the_ID());
		$greg_botanical_title_line_two_home = get_field("greg_botanical_title_line_two_home",get_the_ID());
		$greg_botanical_content_one_home = get_field("greg_botanical_content_one_home",get_the_ID());
		$greg_botanical_content_two_home = get_field("greg_botanical_content_two_home",get_the_ID());
		$greg_botanical_button_home = get_field("greg_botanical_button_home",get_the_ID());
		$greg_botanical_ripped_white_bg = get_field("greg_botanical_ripped_white_bg", get_the_ID());
		
		if($greg_botanical_background_banner_home){
			?>
			<div class="greg-about-banner-main-section-wrap">
				<style type="text/css">
				<?php
				if($greg_botanical_background_banner_home){
				?>
				.greg-about-banner-main-section-wrap{
					background-image:url(<?php echo $greg_botanical_background_banner_home['url'];?>);
					background-size:cover;
					background-repeat:no-repeat;
				}
				<?php }
				?>
				</style>
				<div class="container greg-banner-content-container">
					<div class="greg-about-banner-content-wrap">
						<?php if($greg_botanical_white_title_image_home): ?>
							<div class="greg-botanical-img-wrap text-center">
								<img src="<?php echo $greg_botanical_white_title_image_home['url'];?>" alt="<?php echo $greg_botanical_white_title_image_home['alt'];?>" />
							</div>
						<?php endif; ?>
						
						<?php if($greg_botanical_title_home): ?>
							<div class="greg-botanical-banner-title-one-wrap text-center"><?php echo $greg_botanical_title_home; ?></div>
						<?php endif; ?>
						
						<?php if($greg_botanical_title_line_two_home): ?>
							<div class="greg-botanical-banner-title-two-wrap text-center"><?php echo $greg_botanical_title_line_two_home; ?></div>
						<?php endif; ?>
						
						<?php if($greg_botanical_content_one_home || $greg_botanical_content_two_home){
							?>
							<div class="greg-botanical-inner-md-flex-wrap <?php if(!$greg_botanical_content_one_home || !$greg_botanical_content_two_home){?> full-width-flex-md<?php }?>">
								<?php if($greg_botanical_content_one_home): ?>
									<div class="greg-botanical-banner-content-wrap left-md-column"><?php echo $greg_botanical_content_one_home; ?></div>
								<?php endif; ?>
								<?php if($greg_botanical_content_two_home): ?>
									<div class="greg-botanical-banner-content-wrap right-md-column"><?php echo $greg_botanical_content_two_home; ?></div>
								<?php endif; ?>
							</div>
						<?php }?>
						
						<?php if($greg_botanical_button_home): ?>
							<div class="greg-botanical-link-wrap"><a class="button" href="<?php echo $greg_botanical_button_home['url']; ?>"><?php echo $greg_botanical_button_home['title']; ?></a></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php
		}
		?>
		
		<?php
		if($greg_botanical_ripped_white_bg){?>
		<style type="text/css">
		.about-greg-banner-section{
			position:relative;
		}
		.about-greg-banner-section::after{
			content:'';
			position:absolute;
			bottom: -2px;
			height: 137px;
			width:100%;
			background-image:url(<?php echo $greg_botanical_ripped_white_bg['url'];?>);
			background-size:cover;
			z-index:2;
		}
		</style>
		<?php
		}?>
	</div>
	
	<div class="home-gregs-favs-leaf-bottom-right-wrap">
		<div class="home-gregs-favs-wrap">
			<?php
				$gregs_favorites_title = get_field("gregs_favorites_title",get_the_ID());
				$gregs_favorites_subtitle = get_field("gregs_favorites_subtitle",get_the_ID());
				
				$gregs_favorites_right_top_leaf = get_field("gregs_favorites_right_top_leaf",get_the_ID());
				$gregs_favorites_left_bottom_leaf = get_field("gregs_favorites_left_bottom_leaf",get_the_ID());
				$gregs_favorites_right_bottom_leaf = get_field("gregs_favorites_right_bottom_leaf",get_the_ID());
				
				if($gregs_favorites_title || $gregs_favorites_subtitle || have_rows('gregs_favorites_cats',get_the_ID())){
			?>	
				<div class="container gregs-favs-container common-z-index-increase">
					<?php if($gregs_favorites_title || $gregs_favorites_subtitle){?>
					<div class="best-selling-title-wrap">
						<div class="best-selling-inner-title-wrap green-font">
							<?php echo $gregs_favorites_title;?>
						</div>
						<div class="best-selling-inner-subtitle-wrap">
							<?php echo $gregs_favorites_subtitle;?>
						</div>
					</div>
					<?php }?>
					
					<div class="gregs-favs-cats-wrap">
					<?php 
						while(have_rows('gregs_favorites_cats',get_the_ID())) : the_row();
						// Load sub field value.
						$home_favorite_category_title = get_sub_field('home_favorite_category_title');
						$home_favorite_category_description = get_sub_field('home_favorite_category_description');
						$home_favorite_category_link = get_sub_field('home_favorite_category_link');
						$home_favorite_category_image = get_sub_field('home_favorite_category_image');
						$home_favorite_bg_color = get_sub_field('home_favorite_bg_color');
					?>
						<div class="sin-favs-cats-wrap<?php if(!$home_favorite_bg_color){?> not-view-all-favs<?php }else{?> view-all-favs<?php }?>"<?php if($home_favorite_bg_color){?> style="background-color:<?php echo $home_favorite_bg_color;?>;"<?php }?>>
							
							<?php if($home_favorite_category_link){?>
								<a href="<?php echo $home_favorite_category_link['url'];?>">
							<?php }?>
							
								<?php if($home_favorite_category_image): ?>
									<div class="gregs-favs-cat-img-wrap">
										<img src="<?php echo $home_favorite_category_image['url'];?>" alt="<?php echo $home_favorite_category_image['alt'];?>" />
									</div>
								<?php endif; ?>
								
								<?php if($home_favorite_category_title || $home_favorite_category_description){?>
								<div class="gregs-favs-content-md-backdrop-hover">
									<div class="gregs-favs-cat-content-wrap">
										<div class="gregs-favs-sin-cat-title-wrap">
											<?php echo $home_favorite_category_title;?>
										</div>
										<div class="gregs-favs-sin-cat-desc-wrap">
											<?php echo $home_favorite_category_description;?>
										</div>
									</div>
								</div>
								<?php }?>
							
							<?php if($home_favorite_category_link){?>
								</a>
							<?php }?>
						</div>
					<?php endwhile;?>
					</div>
				</div>
			<?php }?>
			
			<?php
			if($gregs_favorites_right_top_leaf){?>
			<style type="text/css">
			.home-gregs-favs-wrap::before{
				content:'';
				position:absolute;
				top: 40px;
				right:-110px;
				height: 404px;
				width:352px;
				background-image:url(<?php echo $gregs_favorites_right_top_leaf['url'];?>);
				background-size:cover;
				z-index:3;
			}
			</style>
			<?php
			}?>
			<?php
			if($gregs_favorites_left_bottom_leaf){?>
			<style type="text/css">
			.home-gregs-favs-wrap::after{
				content:'';
				position:absolute;
				bottom: -110px;
				left:-110px;
				height: 335px;
				width:329px;
				background-image:url(<?php echo $gregs_favorites_left_bottom_leaf['url'];?>);
				background-size:cover;
				z-index:3;
			}
			</style>
			<?php
			}?>
		</div>
		<?php
			if($gregs_favorites_right_bottom_leaf){?>
			<style type="text/css">
			.home-gregs-favs-leaf-bottom-right-wrap::after{
				content:'';
				position:absolute;
				bottom: -110px;
				right:-110px;
				height: 239px;
				width:206px;
				background-image:url(<?php echo $gregs_favorites_right_bottom_leaf['url'];?>);
				background-size:cover;
				z-index:3;
			}
			</style>
			<?php
		}?>
	</div>
	
	<div class="home-gregs-satisf-gua-wrap">
		<?php
			$gregs_satisfaction_guarantee_bg_image = get_field("gregs_satisfaction_guarantee_bg_image",get_the_ID());
			$gregs_satisfaction_before_ripped_bg_image = get_field("gregs_satisfaction_before_ripped_bg_image",get_the_ID());
			$gregs_satisfaction_after_ripped_bg_image = get_field("gregs_satisfaction_after_ripped_bg_image",get_the_ID());
			$gregs_satisfaction_image = get_field("gregs_satisfaction_image",get_the_ID());
			$gregs_satisfaction_guarantee_title = get_field("gregs_satisfaction_guarantee_title",get_the_ID());
			$gregs_satisfaction_guarantee_content = get_field("gregs_satisfaction_guarantee_content",get_the_ID());
			$gregs_satisfaction_guarantee_link = get_field("gregs_satisfaction_guarantee_link",get_the_ID());
			
			if($gregs_satisfaction_image || $gregs_satisfaction_guarantee_title || $gregs_satisfaction_guarantee_content || $gregs_satisfaction_guarantee_link){
		?>
			<div class="container">
				<div class="home-gregs-satisf-inner-wrap md-flex-wrap">
					<?php if($gregs_satisfaction_image): ?>
						<div class="gregs-satisf-img-wrap">
							<img src="<?php echo $gregs_satisfaction_image['url'];?>" alt="<?php echo $gregs_satisfaction_image['alt'];?>" />
						</div>
					<?php endif; ?>
					
					<div class="gregs-satisf-main-inner-cnt-wrap">
						<?php if($gregs_satisfaction_guarantee_title): ?>
							<div class="gregs-satisf-title-wrap">
								<?php echo $gregs_satisfaction_guarantee_title;?>
							</div>
						<?php endif; ?>
						
						<?php if($gregs_satisfaction_guarantee_content): ?>
						<div class="gregs-satisf-desc-wrap">
							<?php echo $gregs_satisfaction_guarantee_content;?>
						</div>
						<?php endif; ?>
						
						<?php if($gregs_satisfaction_guarantee_link): ?>
							<div class="greg-satisf-link-wrap"><a class="button" href="<?php echo $gregs_satisfaction_guarantee_link['url']; ?>"><?php echo $gregs_satisfaction_guarantee_link['title']; ?></a></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php
			}
			$gregs_botanical_benefits_title = get_field("gregs_botanical_benefits_title",get_the_ID());
			
			if($gregs_botanical_benefits_title || have_rows('gregs_botanical_benefits_repeater',get_the_ID())){
		?>
			<div class="container">
				<?php if($gregs_botanical_benefits_title){?>
					<div class="gregs-botanical-benefits-title-wrap text-center">
						<?php echo $gregs_botanical_benefits_title;?>
					</div>
				<?php }?>
				
				<div class="gregs-botanical-benefits-multi-wrap">
				<?php 
					while(have_rows('gregs_botanical_benefits_repeater',get_the_ID())) : the_row();
					// Load sub field value.
					$gregs_botanical_benefit_image = get_sub_field('gregs_botanical_benefit_image');
					$gregs_botanical_single_benefit_title = get_sub_field('gregs_botanical_single_benefit_title');
				?>
					<div class="sin-gregs-botanical-benefit-wrap">
						<div class="sin-gregs-botanical-benefit-inner-wrap">
							<?php if($gregs_botanical_benefit_image): ?>
								<div class="gregs-botanical-benefit-img-wrap">
									<img src="<?php echo $gregs_botanical_benefit_image['url'];?>" alt="<?php echo $gregs_botanical_benefit_image['alt'];?>" />
								</div>
							<?php endif; ?>
							
							<?php if($gregs_botanical_single_benefit_title): ?>
								<div class="gregs-botanical-benefit-title-wrap">
									<?php echo $gregs_botanical_single_benefit_title;?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile;?>
				</div>
			</div>
		<?php
			}
		?>
		
		<?php
		if($gregs_satisfaction_guarantee_bg_image){?>
		<style type="text/css">
		.home-gregs-satisf-gua-wrap{
			background-image:url(<?php echo $gregs_satisfaction_guarantee_bg_image['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		}?>
		
		<?php
		if($gregs_satisfaction_before_ripped_bg_image){?>
		<style type="text/css">
		.home-gregs-satisf-gua-wrap::before{
			content:'';
			position:absolute;
			top:0;
			height: 159px;
			width:100%;
			background-image:url(<?php echo $gregs_satisfaction_before_ripped_bg_image['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		}?>
		
		<?php
		if($gregs_satisfaction_after_ripped_bg_image){/*?>
		<style type="text/css">
		.home-gregs-satisf-gua-wrap::after{
			content:'';
			position:absolute;
			bottom:0;
			height: 159px;
			width:100%;
			background-image:url(<?php echo $gregs_satisfaction_after_ripped_bg_image['url'];?>);
			background-size:cover;
			z-index:3;
		}
		</style>
		<?php
		*/}?>
	</div>
	
	<div class="home-wow-main-wrap">
		<?php
			$wholesale_orders_welcome_bg_image = get_field("wholesale_orders_welcome_bg_image",get_the_ID());
			$wholesale_orders_welcome_title = get_field("wholesale_orders_welcome_title",get_the_ID());
			$wholesale_orders_welcome_call_title = get_field("wholesale_orders_welcome_call_title",get_the_ID());
			$wholesale_orders_welcome_call_bg = get_field("wholesale_orders_welcome_call_bg",get_the_ID());
			$wholesale_orders_welcome_call_number = get_field("wholesale_orders_welcome_call_number",get_the_ID());
			$wholesale_orders_welcome_before_ripped_bg_image = get_field("wholesale_orders_welcome_before_ripped_bg_image",get_the_ID());
			$wholesale_orders_welcome_after_ripped_bg_image = get_field("wholesale_orders_welcome_after_ripped_bg_image",get_the_ID());
			
			if($wholesale_orders_welcome_title || $wholesale_orders_welcome_call_number){
		?>
			<div class="container wow-container common-z-index-increase">
				<?php if($wholesale_orders_welcome_title){?>
				<div class="wow-inner-title-wrap">
					<?php echo $wholesale_orders_welcome_title;?>
				</div>
				<?php }?>
				
				<?php if($wholesale_orders_welcome_call_title || $wholesale_orders_welcome_call_number){?>
				<div class="wow-outer-call-column-wrap-md">
					<?php if($wholesale_orders_welcome_call_title){?>
					<div class="wow-inner-call-title-wrap">
						<?php echo $wholesale_orders_welcome_call_title;?>
					</div>
					<?php }?>
					
					<?php if($wholesale_orders_welcome_call_number){?>
					<div class="wow-inner-call-no-wrap">
						<a href="tel:<?php echo $wholesale_orders_welcome_call_number;?>"><?php echo $wholesale_orders_welcome_call_number;?></a>
					</div>
					<?php }?>
				</div>
				<?php }?>
			</div>
		<?php
			}?>
			
		<?php
		if($wholesale_orders_welcome_call_bg){?>
		<style type="text/css">
		.wow-inner-call-no-wrap{
			background-image:url(<?php echo $wholesale_orders_welcome_call_bg['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		}?>
		
		<?php
		if($wholesale_orders_welcome_bg_image){?>
		<style type="text/css">
		.home-wow-main-wrap{
			background-image:url(<?php echo $wholesale_orders_welcome_bg_image['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		}?>
		
		<?php
		if($wholesale_orders_welcome_before_ripped_bg_image){?>
		<style type="text/css">
		.home-wow-main-wrap::before{
			content:'';
			position:absolute;
			top:0;
			height: 147px;
			width:100%;
			background-image:url(<?php echo $wholesale_orders_welcome_before_ripped_bg_image['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		}?>
		
		<?php
		if($wholesale_orders_welcome_after_ripped_bg_image){?>
		<style type="text/css">
		.home-wow-main-wrap::after{
			content:'';
			position:absolute;
			bottom:0;
			height: 99px;
			width:100%;
			background-image:url(<?php echo $wholesale_orders_welcome_after_ripped_bg_image['url'];?>);
			background-size:cover;
			z-index:3;
		}
		</style>
		<?php
		}?>
	</div>
	
	<div class="home-reviews-main-wrap">
		<?php
			$what_they_say_title = get_field("what_they_say_title",get_the_ID());
			$what_they_say_subtitle = get_field("what_they_say_subtitle",get_the_ID());
			$what_they_say_yotpo_shortcode = get_field("what_they_say_yotpo_shortcode",get_the_ID());
			$what_they_say_link = get_field("what_they_say_link",get_the_ID());
			if($what_they_say_title || $what_they_say_subtitle || $what_they_say_yotpo_shortcode || $what_they_say_link || have_rows('what_they_say_partner_images',get_the_ID())){
		?>
			<div class="container reviews-container common-z-index-increase">
				<?php if($what_they_say_title || $what_they_say_subtitle){?>
				<div class="best-selling-title-wrap">
				
					<?php if($what_they_say_title){?>
					<div class="best-selling-inner-title-wrap light-green">
						<?php echo $what_they_say_title;?>
					</div>
					<?php }?>
					
					<?php if($what_they_say_subtitle){?>
					<div class="best-selling-inner-subtitle-wrap">
						<?php echo $what_they_say_subtitle;?>
					</div>
					<?php }?>
					
				</div>
				<?php }?>
				
				<?php if($what_they_say_yotpo_shortcode){?>
				<div class="yotpo-reviews-container">
					<?php echo $what_they_say_yotpo_shortcode;?>
				</div>
				<?php }?>
				
				<?php if($what_they_say_link): ?>
					<div class="reviews-link-wrap"><a class="button" href="<?php echo $what_they_say_link['url']; ?>"><?php echo $what_they_say_link['title']; ?></a></div>
				<?php endif; ?>
				
				<div class="reviews-imgs-wrap home-reviews-main-imgs-wrap">
				<?php 
					while(have_rows('what_they_say_partner_images',get_the_ID())) : the_row();
					// Load sub field value.
					$what_they_say_partner_image = get_sub_field('what_they_say_partner_image');
					$what_they_say_partner_link = get_sub_field('what_they_say_partner_link');
				?>
					<div class="sin-reviews-img-wrap">
						
						<?php if($what_they_say_partner_link){?>
							<a href="<?php echo $what_they_say_partner_link['url'];?>">
						<?php }?>
						
							<?php if($what_they_say_partner_image): ?>
								<div class="sin-review-inner-img-wrap">
									<img src="<?php echo $what_they_say_partner_image['url'];?>" alt="<?php echo $what_they_say_partner_image['alt'];?>" />
								</div>
							<?php endif; ?>
						
						<?php if($what_they_say_partner_link){?>
							</a>
						<?php }?>
					</div>
				<?php endwhile;?>
				</div>
				
			</div>
		<?php }
		?>
	</div>
	
	<div class="home-payment-options-wrap">
		<?php
			$payment_options_bg_image = get_field("payment_options_bg_image",get_the_ID());
			$payment_options_before_ripped_bg_image = get_field("payment_options_before_ripped_bg_image",get_the_ID());
			$payment_options_after_ripped_bg_image = get_field("payment_options_after_ripped_bg_image",get_the_ID());
			$payment_options_image = get_field("payment_options_image",get_the_ID());
			$payment_options_title = get_field("payment_options_title",get_the_ID());
			$payment_options_subtitle = get_field("payment_options_subtitle",get_the_ID());
			$payment_options_link = get_field("payment_options_link",get_the_ID());
			
			if($payment_options_image || $payment_options_title || $payment_options_subtitle || $payment_options_link){
		?>
			<div class="container">
				<div class="home-payment-optns-inner-wrap md-flex-wrap">
					
					<div class="home-payment-optns-main-inner-cnt-wrap">
						<?php if($payment_options_title): ?>
							<div class="home-payment-optns-title-wrap">
								<?php echo $payment_options_title;?>
							</div>
						<?php endif; ?>
						
						<?php if($payment_options_subtitle): ?>
						<div class="home-payment-optns-desc-wrap">
							<?php echo $payment_options_subtitle;?>
						</div>
						<?php endif; ?>
						
						<?php if($payment_options_link): ?>
							<div class="home-payment-optns-link-wrap"><a class="button" href="<?php echo $payment_options_link['url']; ?>"><?php echo $payment_options_link['title']; ?></a></div>
						<?php endif; ?>
					</div>
					
					<?php if($payment_options_image): ?>
						<div class="home-payment-optns-img-wrap">
							<img src="<?php echo $payment_options_image['url'];?>" alt="<?php echo $payment_options_image['alt'];?>" />
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php
			}
		?>
		
		<?php
		if($payment_options_bg_image){/*?>
		<style type="text/css">
		.home-payment-options-wrap{
			background-image:url(<?php echo $payment_options_bg_image['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		*/}?>
		
		<?php
		if($payment_options_before_ripped_bg_image){?>
		<style type="text/css">
		.home-payment-options-wrap::before{
			content:'';
			position:absolute;
			top:-63px;
			height: 65px;
			width:100%;
			background-image:url(<?php echo $payment_options_before_ripped_bg_image['url'];?>);
			background-size:cover;
		}
		</style>
		<?php
		}?>
		
		<?php
		if($payment_options_after_ripped_bg_image){?>
		<style type="text/css">
		.home-payment-options-wrap::after{
			content:'';
			position:absolute;
			bottom:-48px;
			height: 95px;
			width:100%;
			background-image:url(<?php echo $payment_options_after_ripped_bg_image['url'];?>);
			background-size:cover;
			z-index:3;
		}
		</style>
		<?php
		}?>
	</div>
	
	<div class="home-news-announce-wrap">
		<?php
			$news_and_announcements_title = get_field("news_and_announcements_title",get_the_ID());
			$news_and_announcements_subtitle = get_field("news_and_announcements_subtitle",get_the_ID());
			$news_and_announcements_posts = get_field("news_and_announcements_posts",get_the_ID());
			$best_selling_top_ripped_bg_green = get_field("best_selling_top_ripped_bg_green",get_the_ID());
			$news_and_announcements_link = get_field("news_and_announcements_link",get_the_ID());
			
			$news_top_left_leaf = get_field("news_top_left_leaf",get_the_ID());
			$news_bottom_right_leaf = get_field("news_bottom_right_leaf",get_the_ID());
			$news_bottom_first_slide_bottom_right_leaf = get_field("news_bottom_first_slide_bottom_right_leaf",get_the_ID());
			
			if($news_and_announcements_title || $news_and_announcements_subtitle || $news_and_announcements_posts || $news_and_announcements_link){
		?>
			<div class="container news-announce-container best-selling-container common-z-index-increase">
				<?php if($news_and_announcements_title || $news_and_announcements_subtitle){?>
				<div class="best-selling-title-wrap">
				
					<?php if($news_and_announcements_title){?>
					<div class="best-selling-inner-title-wrap green-font">
						<?php echo $news_and_announcements_title;?>
					</div>
					<?php }?>
					
					<?php if($news_and_announcements_subtitle){?>
					<div class="best-selling-inner-subtitle-wrap">
						<?php echo $news_and_announcements_subtitle;?>
					</div>
					<?php }?>
					
				</div>
				<?php }?>
				
				<?php if($news_and_announcements_posts):
				?>
				    <div class="posts-main-wrap home-posts-main-outer-wrap">
						<?php foreach($news_and_announcements_posts as $post):
							setup_postdata($post);//$post = json_decode($post, true);?>
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
						<?php endforeach; ?>
					</div>
				<?php wp_reset_postdata();
				endif;?>
				
				<?php if($news_and_announcements_link): ?>
					<div class="news-announce-link-wrap"><a class="button" href="<?php echo $news_and_announcements_link['url']; ?>"><?php echo $news_and_announcements_link['title']; ?></a></div>
				<?php endif; ?>
			</div>
		<?php }?>
		
		<?php
			if($news_top_left_leaf){?>
			<style type="text/css">
			.home-news-announce-wrap::before{
				content:'';
				position:absolute;
				top: 0;
				left:-110px;
				height: 363px;
				width:391px;
				background-image:url(<?php echo $news_top_left_leaf['url'];?>);
				background-size:cover;
				z-index:3;
			}
			</style>
			<?php
			}
		?>
		<?php
			if($news_bottom_right_leaf){?>
			<style type="text/css">
			.home-news-announce-wrap::after{
				content:'';
				position:absolute;
				bottom: -110px;
				right:-110px;
				height: 282px;
				width:280px;
				background-image:url(<?php echo $news_bottom_right_leaf['url'];?>);
				background-size:cover;
				z-index:3;
			}
			</style>
			<?php
			}
		?>
		<?php
			if($news_bottom_first_slide_bottom_right_leaf){?>
			<style type="text/css">
			.news-announce-link-wrap a.button::after{
				content:'';
				position:absolute;
				left: -215px;
				bottom: -40px;
				height: 197px;
				width:229px;
				background-image:url(<?php echo $news_bottom_first_slide_bottom_right_leaf['url'];?>);
				background-size:cover;
				z-index:1;
				pointer-events:none;
			}
			</style>
			<?php
			}
		?>
	</div>

<?php
get_footer();

jQuery(function($){
	jQuery( document ).ready( function() {
		//console.log('123'); 
		$('.best-selling-prds-wrapper').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
			prevArrow:"<a class='slick-arrow slick-prev '><i class='fas fa-angle-left fa-2x'></i></a>",
			nextArrow:"<a class='slick-arrow slick-next '><i class='fas fa-angle-right fa-2x'></i></a>",
			responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
				{
                    breakpoint: 551,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						/*centerMode: true,
						centerPadding: '25px',*/
                    }
                }
            ]
		});
		
		$('.gregs-botanical-benefits-multi-wrap').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
			prevArrow:"<a class='slick-arrow slick-prev '><i class='fas fa-angle-left fa-2x'></i></a>",
			nextArrow:"<a class='slick-arrow slick-next '><i class='fas fa-angle-right fa-2x'></i></a>",
			responsive: [
				{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
				{
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
		});
		
		$('.home-posts-main-outer-wrap').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
			prevArrow:"<a class='slick-arrow slick-prev '><i class='fas fa-angle-left fa-2x'></i></a>",
			nextArrow:"<a class='slick-arrow slick-next '><i class='fas fa-angle-right fa-2x'></i></a>",
			responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
				{
                    breakpoint: 551,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						/*centerMode: true,
						centerPadding: '25px',*/
                    }
                }
            ]
		});
		
		$('.home-reviews-main-imgs-wrap').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
			prevArrow:"<a class='slick-arrow slick-prev '><i class='fas fa-angle-left fa-2x'></i></a>",
			nextArrow:"<a class='slick-arrow slick-next '><i class='fas fa-angle-right fa-2x'></i></a>",
			responsive: [
				{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
				{
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
		});
		
		$('body').on('click','.filter-sidebar-title-wrap',function(){
			$(this).closest('.filters-sidebar-container').toggleClass('show-hide-filters');
			$(this).closest('.filters-sidebar-container').find('.filters-data-main-wrapper').slideToggle(800);
			$(this).find('.filter-accordion').toggleClass('fa-minus fa-plus');
		});
		
		$('body').on('click','.bapf_head',function(){
			$(this).closest('.bapf_sfilter').toggleClass('show-hide-filters');
			$(this).closest('.bapf_sfilter').find('.bapf_body').slideToggle(800);
			$(this).find('h3').toggleClass('plus');
		});
		
		/*******************/
		$('.related-slider-nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
			prevArrow:"<a class='slick-arrow slick-prev '><i class='fas fa-angle-left fa-2x'></i></a>",
			nextArrow:"<a class='slick-arrow slick-next '><i class='fas fa-angle-right fa-2x'></i></a>",
			responsive: [
				{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
				{
                    breakpoint: 551,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						/*centerMode: true,
						centerPadding: '25px',*/
                    }
                }
            ]
		});
		/*******************/
		
		
		/*******************/
		$('body').on('click', '.prd-tab-wrap', function() {
		  var get_tab_no = $(this).data('tab');
		  if(!$(this).hasClass('active')) {
			$(this).addClass('active');
			$(this).closest('.product-tabs-outer-wrap').find('.tab-data-content').each(function() {
			  if($(this).data('tab') == get_tab_no) {
				$(this).addClass('active');
				$(this).slideDown(800);
			  }
			});
		  }
		  $(this).closest('.tabs-container-wrap').find('.prd-tab-wrap').each(function() {
			if($(this).data('tab') != get_tab_no) {
			  $(this).removeClass('active');
			}
		  });
		  $(this).closest('.product-tabs-outer-wrap').find('.tab-data-content').each(function() {
			if($(this).data('tab') != get_tab_no) {
			  $(this).removeClass('active');
			  $(this).slideUp(800);
			}
		  });
		});
		/*******************/
		
		function goToByScroll(id){
            // Scroll
			$('html,body').animate({
            scrollTop: $("#"+id).offset().top},
            'slow');
		}

		$("body").on('click', '.scroll-to-next-section', function(e) { 
			  // Prevent a page reload when a link is pressed
			e.preventDefault(); 
			  // Call the scroll function
			goToByScroll($(this).data("href"));           
		});
		
		$("body").on('click', '.qty-dropdown-ul-menu a', function(e) { 
			  // Prevent a page reload when a link is pressed
			e.preventDefault(); 
			  // Call the scroll function
			$('.quantity select').val($(this).data('value'));
			$('.quantity input').val($(this).data('value'));
			$(this).closest('.dropdown').find('.selected-dd-value').text($(this).data('value'));
		});
		
		$("body").on('click', '.custom_option', function(e) {
			  // Prevent a page reload when a link is pressed
			e.preventDefault(); 
			  // Call the scroll function
			//$('.quantity select').val($(this).data('value'));
			//$('.quantity input').val($(this).data('value'));
			$(this).closest('.dropdown').find('.selected-dd-value').text($(this).data('value'));
		});
		
		$('body').on('click', '.copy-coupon-wrap-data', function(e) {
		  if($("#holdtext").length < 1){
			$("body").append('<textarea id="holdtext" style="height:0;width:0;border:0;outline:0;resize:none;"></textarea>');
		  }
		  //console.log($(this).closest('.gregs-farm-coupon-code-text-copy-wrap').find('.coupon-inner-text-data').html().trim());
		  $("#holdtext").val($(this).closest('.gregs-farm-coupon-code-text-copy-wrap').find('.coupon-inner-text-data').html().trim()).select();
		  document.execCommand("Copy");
		});
	});
});
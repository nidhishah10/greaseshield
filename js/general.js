/* Custom General jQuery
/*--------------------------------------------------------------------------------------------------------------------------------------*/
;(function($, window, document, undefined) {
	//Genaral Global variables
	//"use strict";
	var $win = $(window);
	var $doc = $(document);
	var $winW = function(){ return $(window).width(); };
	var $winH = function(){ return $(window).height(); };
	var $screensize = function(element){  
			$(element).width($winW()).height($winH());
		};
		
		var screencheck = function(mediasize){
			if (typeof window.matchMedia !== "undefined"){
				var screensize = window.matchMedia("(max-width:"+ mediasize+"px)");
				if( screensize.matches ) {
					return true;
				}else {
					return false;
				}
			} else { // for IE9 and lower browser
				if( $winW() <=  mediasize ) {
					return true;
				}else {
					return false;
				}
			}
		};

	$doc.ready(function() {
/*--------------------------------------------------------------------------------------------------------------------------------------*/		
		// Remove No-js Class
		$("html").removeClass('no-js').addClass('js');
		
		
		
		/* Get Screen size
		---------------------------------------------------------------------*/
		$win.on('load', function(){
			$win.on('resize', function(){
				$screensize('your selector');	
			}).resize();	
		});
		
		
		/* Menu ICon Append prepend for responsive
		---------------------------------------------------------------------*/
		$(window).on('resize', function(){
			if (screencheck(1023)) {
				if(!$('#menu').length){
					$('#mainmenu').prepend('<a href="#" id="menu" class="menulines-button"><span class="menulines"></span> <em>Menu</em></a>');
				}
			} else {
				$("#menu").remove();
			}
		}).resize();

		
		/* Tab Content box 
		---------------------------------------------------------------------*/
		var tabBlockElement = $('.tab-data');
			$(tabBlockElement).each(function() {
				var $this = $(this),
					tabTrigger = $this.find(".tabnav li"),
					tabContent = $this.find(".tabcontent");
					var textval = [];
					tabTrigger.each(function() {
						textval.push( $(this).text() );
					});	
				$this.find(tabTrigger).first().addClass("active");
				$this.find(tabContent).first().show();

				$(tabTrigger).on('click',function () {
					$(tabTrigger).removeClass("active");
					$(this).addClass("active");
					$(tabContent).hide().removeClass('visible');
					var activeTab = $(this).find("a").attr("data-rel");
					$this.find('#' + activeTab).fadeIn('normal').addClass('visible');
								
					return false;
				});
			
				var responsivetabActive =  function(){
				if (screencheck(767)){
					if( !$this.find('.tabMobiletrigger').length ){
						$(tabContent).each(function(index) {
							$(this).before("<h2 class='tabMobiletrigger'>"+textval[index]+"</h2>");	
							$this.find('.tabMobiletrigger:first').addClass("rotate");
						});
						$('.tabMobiletrigger').click('click', function(){
							var tabAcoordianData = $(this).next('.tabcontent');
							if($(tabAcoordianData).is(':visible') ){
								$(this).removeClass('rotate');
								$(tabAcoordianData).slideUp('normal');
								//return false;
							} else {
								$this.find('.tabMobiletrigger').removeClass('rotate');
								$(tabContent).slideUp('normal');
								$(this).addClass('rotate');
								$(tabAcoordianData).not(':animated').slideToggle('normal');
							}
							return false;
						});
					}
						
				} else {
					if( $('.tabMobiletrigger').length ){
						$('.tabMobiletrigger').remove();
						tabTrigger.removeClass("active");
						$this.find(tabTrigger).removeClass("active").first().addClass('active');
						$this.find(tabContent).hide().first().show();				
					}		
				}
			};
			$(window).on('resize', function(){
				if(!$this.hasClass('only-tab')){
					responsivetabActive();
				}
			}).resize();
		});
		
		/* Accordion box JS
		---------------------------------------------------------------------*/
		$('.accordion-databox').each(function() {
			var $accordion = $(this),
				$accordionTrigger = $accordion.find('.accordion-trigger'),
				$accordionDatabox = $accordion.find('.accordion-data');
				
				$accordionTrigger.first().addClass('open');
				$accordionDatabox.first().show();
				
				$accordionTrigger.on('click',function (e) {
					var $this = $(this);
					var $accordionData = $this.next('.accordion-data');
					if( $accordionData.is($accordionDatabox) &&  $accordionData.is(':visible') ){
						$this.removeClass('open');
						$accordionData.slideUp(400);
						e.preventDefault();
					} else {
						$accordionTrigger.removeClass('open');
						$this.addClass('open');
						$accordionDatabox.slideUp(400);
						$accordionData.slideDown(400);
					}
				});
		});
		
		
		/* Mobile menu click
		---------------------------------------------------------------------*/
		$(document).on('click',"#menu", function(){
			$(this).toggleClass('menuopen');
			$(this).next('ul').slideToggle('normal');
			return false;
		});


		/* Header Sticky
		---------------------------------------------------------------------*/
		if($("#header").length) {
			$(window).scroll(function() {
				var headerHeight = $('#header').outerHeight() - 50;
				if( $(this).scrollTop() > headerHeight ) {
					$("#header").addClass("sticky");
				} else {
					$("#header").removeClass("sticky");
				}
			});
			var header = document.querySelectorAll('#header');
			Stickyfill.add(header);
		}


		/* Review slider for responsive view
		---------------------------------------------------------------------*/
		if($('.review-slider').length) {
			if ( $(window).width() < 768 ) {
				startCarousel();
			} else {
				$('.review-slider').addClass('off');
			}

			$(window).resize(function() {
				if ( $(window).width() < 768 ) {
					startCarousel();
				} else {
					stopCarousel();
				}
			});
			
			function startCarousel(){
				$(".review-slider").owlCarousel({
					navigation : false, // Show next and prev buttons
					autoplay: false,
					margin: 15,
					items : 1,
					loop: true,
					nav: false,
					dots: true,
					autoplaySpeed: 800,
					smartSpeed: 800,
				});
			}
			function stopCarousel() {
				var owl = $('.review-slider');
				owl.trigger('destroy.owl.carousel');
				owl.addClass('off');
			}
		}

		sal({
			once: true,
			threshold: 0.2,
		});
		
		/* Image with dots
		---------------------------------------------------------------------*/
		// $('.img-with-dots').find('.dots').each(function() {
		// 	$(this).find('.inner').appendTo('.img-with-dots');
		// });
		

		$(window).on('resize', function(){
			if($('.img-with-dots').length) {
				if (screencheck(1023)) {
					// if(!$('.img-with-dots .dots').length){
						// $('.img-with-dots').find('.dots').each(function() {
						// 	// alert('test');
						// 	$(this).find('.inner').appendTo('.img-with-dots');
						// });
						$('.img-with-dots').find('.inner').insertAfter('.img-with-dots');
						
					// }
				} else {
					$('.inner').each(function () {
						var $thisDot = $(this).attr('data-dot');
						$(this).appendTo('.dots.'+$thisDot);
					})
				}
			}
		}).resize();

				/* Lightcase Popup
		================================================== */
		if($('a[data-rel^=lightcase]').length) {
			$('a[data-rel^=lightcase]').lightcase();
		}

		/*Product Popup
		=================================================*/
		var $dialogTrigger = $('.poptrigger'),
		$pagebody =  $('body');
		$(document).on('click','.poptrigger',function(){
			
			var popID = $(this).attr('data-rel');
			$('body').addClass('overflowhidden');
			var winHeight = $(window).height();
			$('#' + popID).fadeIn();
			var popheight = $('#' + popID).find('.popup-block').outerHeight(true);
			
			if( $('.popup-block').length){
				var popMargTop = popheight / 2;
				//var popMargLeft = ($('#' + popID).find('.popup-block').width()/2);
				
				if ( winHeight > popheight ) {
					$('#' + popID).find('.popup-block').css({
						'margin-top' : -popMargTop,
						//'margin-left' : -popMargLeft
					});	
				} else {
					$('#' + popID).find('.popup-block').css({
						'top' : 0,
						//'margin-left' : -popMargLeft
					});
				}
				
			}
			
			$('#' + popID).append("<div class='modal-backdrop'></div>");
			$('.popouterbox .modal-backdrop').fadeTo("slow", 0.70);
			if( popheight > winHeight ){
				$('.popouterbox .modal-backdrop').height(popheight);
			} 
			$('#' + popID).focus();
			return false;
		});
		
		$(window).on("resize", function () {
			if( $('.popouterbox').length && $('.popouterbox').is(':visible')){
				var popheighton = $('.popouterbox .popup-block').height()+60;
				var winHeight = $(window).height();
				if( popheighton > winHeight ){
					$('.popouterbox .modal-backdrop').height(popheighton);
					$('.popouterbox .popup-block').removeAttr('style').addClass('taller');
					
				} else {
					$('.popouterbox .modal-backdrop').height('100%');
					$('.popouterbox .popup-block').removeClass('taller');
					$('.popouterbox .popup-block').css({
						'margin-top' : -(popheighton/2)
					});
				}	
			}
		});
		
		//Close popup		
		$(document).on('click', '.close-dialogbox, .modal-backdrop', function(){
			$(this).parents('.popouterbox').fadeOut(300, function(){
				$(this).find('.modal-backdrop').fadeOut(250, function(){
					$('body').removeClass('overflowhidden');
					$('.popouterbox .popup-block').removeAttr('style');
					$(this).remove();
				});
			});
			return false;
		});

		
/*--------------------------------------------------------------------------------------------------------------------------------------*/		
	});	

/*All function need to define here for use strict mode
----------------------------------------------------------------------------------------------------------------------------------------*/


	
/*--------------------------------------------------------------------------------------------------------------------------------------*/
})(jQuery, window, document);
 $(document).ready(function() {
	AOS.init();


	$(window).scroll(function () {
		if ($(window).scrollTop() > 0) {
		  $(".scroll-up").css("display", "block");
		} else {
		  $(".scroll-up").css("display", "none");
		}
	  });
	
	  $(".scroll-up").click(function () {
		$("html, body").animate({
		  scrollTop: 0
		}, "slow");
		return false;
	  });
	

	$slidesCategorii =4;
	if(screen.width<=1366)
		$slidesCategorii = 3;
	if(screen.width<=1024)
		$slidesCategorii = 2;
	if(screen.width<=768)
		$slidesCategorii = 2;


	var swiperCategorii = new Swiper('.servicii-categorii .swiper-container', {
		slidesPerView: $slidesCategorii,
		spaceBetween: 30,
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
		  },
	  });

		$(".closenav").click(function() {
			if($('.sidenav').hasClass('afisat')) {
				$('.sidenav').removeClass('afisat');
		
				$(".sidenav").css( {
						left:'100%'
					}
		
				);
			}
		}
	);

	$(".menu-header").click(function() {
		if($('.sidenav').hasClass('afisat')) {
			$('.sidenav').removeClass('afisat');

			$(".sidenav").css( {
					right: 0+'px'
				}
			);
		}

		else {
			$('.sidenav').addClass('afisat');

			$(".sidenav").css( {
					left:'0%'
				}

			);
		}
	}

);

});
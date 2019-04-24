


$(document).ready(function(){
 


  $('.owl-hit').owlCarousel({
    center: false,
    loop:true,
    autoplay:true,
    items:1,
    margin:10,
    lazyLoad: true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    nav:false,
    navText : ["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"],
    dots: true,
    pagination: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeInRight',

    responsive:{
        0:{
            items:1.1
        },
        768:{
            items:2
        },
        992:{
            items:3
        },

        1200:{
            items:4
        }
    }
});






  


});



// $(document).ready(function($){

// 	$(window).scroll(function(){
// 		$scrol = $(document).scrollTop();
// 		console.log($scrol);
// 		if ($scrol > 60)
// 		{
// 			$('.navbar').addClass('shrink');
// 			$('.navbar').addClass('fixed-top');
// 		}
// 		else
// 		{
// 			$('.navbar').removeClass('shrink');
// 		}
// 	});



// 	 $('.nav li a').on('click',function() {
//    	 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
//     	&& location.hostname == this.hostname) {
//      		 var $target = $(this.hash);
//      		 $target = $target.length && $target
//      	 || $('[name=' + this.hash.slice(1) +']');
//       if ($target.length) {
//        		 var targetOffset = $target.offset().top;
//         $('html,body').animate({scrollTop: targetOffset}, 800);
//        return false;
//       }
//     }
//   });
// });

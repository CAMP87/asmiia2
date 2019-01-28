$(document).ready(function(e){
 $('.slider').slick({
 	  dots: true,
      slidesToShow:1,
      slidesToScroll: 1,
  	  autoplay: true,
  	  autoplaySpeed: 3000,
      infinite:true,
      pauseOnHover:false,
      arrows:true,
 	  prevArrow:"<button type='button' class='slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    
     
    });
});
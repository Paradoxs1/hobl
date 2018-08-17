jQuery(document).ready(function(){

    jQuery(".toggle-block").click(function(){
        jQuery('.toggle-mnu').toggleClass("on");
        jQuery('.menu').slideToggle();
        return false;
    });
    
    if(jQuery(window).width()>768){
       jQuery('.home .submenu').hover(
          function(){
            jQuery(this).children('a').addClass('active').next().stop(true).slideDown();
          },
          function(){
            jQuery(this).children('a').removeClass('active').next().stop(true).slideUp();
        });
     }else{
        jQuery('.home .submenu>a').click(function(e){
            e.preventDefault();
            jQuery(this).toggleClass('active').next().slideToggle();
        });       
    }
  
    jQuery('.inner .submenu>a').click(function(e){
        e.preventDefault();
        jQuery(this).toggleClass('active').next().slideToggle();
    }); 
    
  
  jQuery(".inner .search button").on("click", function () {
    jQuery(".search").toggleClass("active");

    if (jQuery(".search").hasClass("active")) {
        jQuery('.search').focus();
        return false;
    }
  });
  jQuery(".inner .search .search-close").on("click", function (e) {
      e.preventDefault();
      jQuery(".search").removeClass("active");
      jQuery(".search input").val("");
  });
  
  
  jQuery('.info-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1
  });
    
   if(jQuery(window).width()>480){
      jQuery('.news-slider').slick({
          dots: false,
          arrows: true,
          autoplay: true,
          autoplaySpeed: 3000,
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 860,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 2
              }
            }
          ]
        });
    }
});

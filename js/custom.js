
//PRELOADER APPEARS
$(document).ready(function() {
	var site = $('body');
	site.addClass('preloader-site');

});

//PRELOADER HIDES
$(window).on('load', function(
	){
	event.preventDefault();
	$('.preloader-wrapper').fadeOut('slow');
	$('.preloader-bg').fadeOut('slow');
	$('body').removeClass('preloader-site');
});

//INDEX HEADER SLIDER INITIALIZATION
	// Carousel information
 $(document).ready(function(){
     $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators:true
  });
     /*setInterval(function(){
     	$('.carousel').carousel('next');
     }, 3000);*/

     //SIDENAV
    $('.sidenav').sidenav();

    //MODALS
    $('.modal').modal();

    //CAROUSEL DEPARTAMENTOS
    $('.carousel').carousel();
 });
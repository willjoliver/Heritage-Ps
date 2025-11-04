$(".wufoo").validate();

$(function() {
	$(window).scroll(function(){
		var position = $(window).scrollTop();
		if(position > 100){
			$('body').addClass('scroll');
		} else {
			$('body').removeClass('scroll');
		}
		
	});
});

$(window).resize(function(){

});

$(document).ready(function(){

});

$('li.dropdown').click(function(){
	var target = $(this).children('a').attr('href');
	window.location.href = target;
})


function animateBanner() { $(this).scrollTop() > 100 ? $('#banner-top').addClass('slideDown') : $('#banner-top').removeClass('slideDown'); }
function toTop() {
	if ($(this).scrollTop() > 100) {
		$(window).width() < 769 ? $('.back-to-top').css('bottom', '50px') : $('.back-to-top').css('bottom', '10px');
	} else { $('.back-to-top').css('bottom', '-50px'); }
}
function EOD() {
	if ($(this).scrollTop() + $(this).height() > $(document).height() - 60) {
		var loc = $('#footer').outerHeight();
		$(window).width() < 769 ? $('.back-to-top').css('bottom', loc / 2) : $('.back-to-top').css('bottom', 40);
	}
} //END OF DOCUMENT
$(window).load(function() {animateBanner(); toTop(); EOD(); $('#mobile-footer li').each (function () { $(this).find('span').length <= 2 ? $(this).find('i').removeClass('hidden-xs') : $(this).find('span').addClass('line-height'); }); });
$(window).scroll(function() { animateBanner(); toTop(); EOD(); });
$(window).resize(function() { animateBanner(); toTop(); EOD();});
$(function() {
	$('a[href="#body"]').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 350);
				return false;
			}
		}
	});
});

$(document).ready(function(){
  $('.testimonials-slider').slick({
    autoplay: true,
    autoplaySpeed: 8000,
    dots: true,
    arrows: false
  });
});

$('a[href="#eBook"]').on('click touchend', function(e){
	e.preventDefault();
	$('#eBook').modal('show');
});
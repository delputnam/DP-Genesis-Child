!function ($) {

function removePageClasses() {
	$('body').removeClass(function(index,css){
		return (css.match(/chapters-page-\S+/g) || []).join(' ');
	});
}

$(document).ready(function(){


	$('.home-nav-block .inner-wrap').click(function(){
		var pageName = 'chapters-sub-page-' + $(this).data('chapters-page-name');

		$('#' + pageName).addClass('chapters-expanded');
		$('#wrap').addClass('chapters-hidden');
	});
	
	
	$('.chapters-sub-page-close').click(function(){
		$(this).parent().removeClass('chapters-expanded');
		$('#wrap').removeClass('chapters-hidden');
	});

});

$(window).load(function() {
	$('body').removeClass('preload');
	$('.chapters-sub-page').each(function(){
		//var offset = $(this).offset();
		//$(this).data('chapters-position-top',offset.top);
		//$(this).data('chapters-position-left',offset.left);
		//
		//$(this).appendTo('body');
		//
		//$(this).css({'top':offset.top, 'left':offset.left});
	});
});

}(window.jQuery);
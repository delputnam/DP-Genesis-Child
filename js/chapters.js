!function ($) {

function removePageClasses() {
	$('body').removeClass(function(index,css){
		return (css.match(/chapters-page-\S+/g) || []).join(' ');
	});
}

function pageLoaded() {

}

$(document).ready(function(){

	$('body').removeClass( 'no-js' );

	$('.chapters-subpage-link').click(function( event ){

		var pageName = 'chapters-sub-page-' + $(this).data('chapters-page-name');
		var pageurl = $(this).attr('href');
		var pageLoaded = false;

		event.preventDefault();

		$('.chapters-expanded').removeClass('chapters-expanded');
		$('#chapters-navbar .active').removeClass('active');

		if ( $('#' + pageName).length ) {

			$('#' + pageName).addClass('chapters-expanded');
			$(this).parent('li').addClass('active');
			if (pageurl != window.location) {
				window.history.pushState({path:pageurl}, '', pageurl);
			}

		} else {
			$.ajax({url:pageurl+'?content-only', success: function(data){
				$('.entry-content').append(data);
				setTimeout(function(){
					$('#' + pageName).addClass('chapters-expanded');
				},10);
				$(this).parent('li').addClass('active');
				if (pageurl != window.location) {
					window.history.pushState({path:pageurl}, '', pageurl);
				}
			}});
		}

	});


/*
	$('.home-nav-block .inner-wrap').click(function(){
		var pageName = 'chapters-sub-page-' + $(this).data('chapters-page-name');

		$('#' + pageName).addClass('chapters-expanded');
		$('#wrap').addClass('chapters-hidden');
	});


	$('.chapters-sub-page-close').click(function(){
		$(this).parent().removeClass('chapters-expanded');
		$('#wrap').removeClass('chapters-hidden');
	});
*/

});

$(window).load(function() {
});

}(window.jQuery);
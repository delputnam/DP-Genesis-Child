!function ($) {

function removePageClasses() {
	$('body').removeClass(function(index,css){
		return (css.match(/chapters-page-\S+/g) || []).join(' ');
	});
}

function pageLoaded() {

}

function windowHistorySupported() {
    // If pushState is supported, return true, else return false.
    return !!(window.history && window.history.pushState);
}

$(document).ready(function(){

	$('body').removeClass( 'no-js' );

	$('.chapters-subpage-link').click(function( event ){

		if ( !windowHistorySupported() ) {
			return;
		}

		var pageID = $(this).data('chapters-page-name');
		var pageName = 'chapters-sub-page-' + $(this).data('chapters-page-name');
		var pageurl = $(this).attr('href');
		var pageLoaded = false;

		event.preventDefault();

		$('.chapters-expanded').removeClass('chapters-expanded');
		$('#chapters-navbar .active').removeClass('active');

		$('#chapters-navbar .chapters-subpage-link[data-chapters-page-name='+pageID+']').parent('li').addClass('active');
		if (pageurl != window.location) {
			window.history.pushState({path:pageurl}, '', pageurl);
		}

		if ( $('#' + pageName).length ) {

			$('#' + pageName).addClass('chapters-expanded');

		} else {
			$.ajax({url:pageurl+'?content-only', success: function(data){
				$('.chapters-sub-page').first().parent().append(data);
				setTimeout(function(){
					$('#' + pageName).addClass('chapters-expanded');
				},10);
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
(function($){

	$("#site_up_arrow").click(function () {
      console.log('test')
   $("html, body").animate({scrollTop: 0}, 300);
});
	
})(jQuery);
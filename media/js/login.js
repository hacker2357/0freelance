function footer()
{
	var offsettop = $('.footer').offset().top;
		offsetheight = $('.footer').height();
		windowheight = $(window).height();
		margintop = windowheight-offsetheight-offsettop+20;
	if (margintop>0)
		$('.footer').css('margin-top', margintop+'px');
}
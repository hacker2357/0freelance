// JavaScript Document
function ie()
{
    /*var menu_buttons = document.getElementById('header-menu').getElementsByTagName('li');
	for (var i = 0; i < menu_buttons.length; i++)
	{
		$(menu_buttons.item(i)).css('width', $(menu_buttons.item(i).getElementsByTagName('a').item(i)).width());
		alert($(menu_buttons.item(i).getElementsByTagName('a').item(i)).width());
		break;
	}*/
	
	$('.menu2 li:last-child').css('background', 'none');
	
	$('.search_filter_menu li:last-child').css('background', 'none');
}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Настройки - Уведомления</title>
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<link rel="stylesheet" href="style.css" charset="urf-8" media="all" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.0.custom.min.js"></script>
<script type="text/javascript" src="js/niftycube.js"></script>
<script type="text/javascript" src="js/jquery.formstyler.min.js"></script>
<script type="text/javascript" src="js/ie.js"></script>
<script type="text/javascript" src="js/moz.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	if ($.browser.msie)
	ie();
	else if ($.browser.mozilla)
	moz();
	$('select').styler();
	$('input[type="checkbox"]').styler();
	$('input[type="radio"]').styler();
	$('input[type="file"]').styler();
	$('.dop-sp').sortable({
			axis: 'y'
		});
});
</script>
</head>

<body>
<div class="fixed-header">
	<div class="header center">
    	<ul class="header-menu left" id="header-menu">
        	<li><a href="#" alt="">hacker2357</a></li>
            <li><a href="#" alt="">Настройки</a></li>
            <li><a href="#" alt="">Сообщения</a></li>
            <li><a href="#" alt="">Проекты</a></li>
            <li><a href="#" alt="">Купить PRO</a></li>
        </ul>
        
        <ul class="header-menu-right right" id="header-menu">
        	<li><a href="#" alt="">Выход</a></li>
        </ul>
    </div>
</div>
<div class="header-bg">
	<div class="header center">
    	<div class="logo"></div>
        <ul class="menu2">
        	<li><a href="#">Работа</a></li>
            <li><a href="#">Католог фрилансеров</a></li>
        </ul>
    </div>
</div>
<div class="search">
	<div class="header center search_con">
    	<label for="search_input">Поиск:</label>
    	<input type="text" class="search_input" id="search_input" value="" />
        <a href="#" class="search_a" id="search_a">Поиск</a>
    </div>
</div>
<div class="container">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container">
                	<div class="user-container">
                    	<div class="avatar-reviews">
                        	<div class="avatar"><a href="#"></a></div>
                            <div class="reviews">
                                <div class="reviews-con">
                                  	<a href="#">
                                        <div class="review_plus">10</div>
                                        <div class="review_minus">1</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-right">
                        	<span class="user-name"><a href="#">Святослав Вишневский</a></span>
                            <ul class="settings-menu">
                            	<li><a href="#">Основные настройки</a></li>
                                <li><a href="#">Портфолио</a></li>
                                <li><a href="#" class="current">Уведомления / Рассылка</a></li>
                                <li><a href="#">Безопасность</a></li>
                            </ul>
                        </div>
                    </div>
					
                    <div class="settings">
                    	<h3 class="ui-accordion-header-active">Уведомления / Рассылка</h3>
                        <div style="padding:20px 10px 10px;">
                            <div class="margin"><input type="checkbox" name="new_messages" id="new_messages" /><label for="new_messages" class="label">Уведомлять о новых сообщениях</label></div>
                            
                            <div class="margin"><input type="checkbox" name="uvedomlenya" id="uvedomlenya" /><label for="uvedomlenya" class="label">Уведомлять о новых сообщениях в проектах</label></div>
                            
                             <div class="margin"><input type="checkbox" name="udedomlat_about_new_messages_in_the_workspace" id="udedomlat_about_new_messages_in_the_workspace" /><label for="udedomlat_about_new_messages_in_the_workspace" class="label">Уведомлять о новых сообщениях в рабочей области</label></div>
                             
                            <div class="margin"><input type="checkbox" name="udedomlat_about_new_projects" id="udedomlat_about_new_projects" /><label for="udedomlat_about_new_projects" class="label">Уведомлять о новых проектах</label></div>
                            
                             <div class="margin"><input type="checkbox" name="udedomlat_about_new_messages" id="udedomlat_about_new_messages" /><label for="udedomlat_about_new_messages" class="label">Уведомлять о новых сообщениях</label></div>
                             
                            <div class="margin"><input type="checkbox" name="uvedomlat_about_new_messages_in_projects" id="uvedomlat_about_new_messages_in_projects" /><label for="uvedomlat_about_new_messages_in_projects" class="label">Уведомлять о новых сообщениях в проектах</label></div>
                            
                            <div class="margin" style="height:20px; margin:20px 0;">
                            	<select class="status uvedomlenya_select uvedomlenya_select_first">
                                	<option value="1">--- Выберите раздел ---</option>
                                    <option value="2">Разработка сайтов</option>
                                     <option value="3">Программирование</option>
                                     <option value="4">Дизайн сайтов</option>
                                </select>
                                
                                <select class="status uvedomlenya_select uvedomlenya_select_second">
                                	<option value="1">--- Все ---</option>
                                    <option value="2">Разработка сайтов</option>
                                     <option value="3">Программирование</option>
                                     <option value="4">Дизайн сайтов</option>
                                </select>
                            </div>
                             
                            <div class="margin"><input type="checkbox" name="uvedomlat_about_new_reviews" id="uvedomlat_about_new_reviews" /><label for="uvedomlat_about_new_reviews" class="label">Уведомлять о добавление / удаление отзыва</label></div>
                             
                            <div class="margin"><input type="checkbox" name="uvedomlat_if_you_selected_ispolnitelem" id="uvedomlat_if_you_selected_ispolnitelem" /><label for="uvedomlat_if_you_selected_ispolnitelem" class="label">Уведомлять если выбрали исполнителем</label></div>
                             
                            <div class="margin"><input type="checkbox" name="get_rassilka_0free_lance" id="get_rassilka_0free_lance" /><label for="get_rassilka_0free_lance" class="label">Получать рассылку 0Free-Lance.com</label></div>
                            
                            <a href="#" class="avatar-file save" style="margin-top:30px;">Сохранить</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="right sidebar">
        	<div class="search_freelancers">
            	<div class="search_header">Быстрый поиск фрилансеров</div>
                
                <div class="fast_search_selects">
                	<select class="sidebar_razdel status right-select">
                    	 <option value="1">Все</option>
                    	 <option value="2">Разработка сайтов</option>
                         <option value="3">Программирование</option>
                         <option value="4">Дизайн сайтов</option>
                    </select>
                    
                    <select class="sidebar_razdel2 status right-select">
                    	 <option value="1">Все</option>
                    	 <option value="2">Разработка сайтов</option>
                         <option value="3">Программирование</option>
                         <option value="4">Дизайн сайтов</option>
                    </select>
                    
                    <a href="#" class="search_freelancer">Найти</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
	<div class="center header">
    	<div class="footer-logo"></div>
        <ul class="footer-menu">
        	<li><a href="#">Работа</a></li>
            <li><a href="#">Каталог фрилансеров</a></li>
        </ul>
    </div>
</div>
</body>
</html>
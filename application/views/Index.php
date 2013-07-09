<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Главная</title>
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<?=HTML::style('application/views/style.css');?>

<?=HTML::script('application/views/js/jquery-1.7.2.min.js');?>

<?=HTML::script('application/views/js/niftycube.js');?>

<?=HTML::script('application/views/js/jquery.formstyler.min.js');?>

<?=HTML::script('application/views/js/ie.js');?>

<?=HTML::script('application/views/js/moz.js');?>

<script type="text/javascript">
$(document).ready(function(e) {
	if ($.browser.msie)
	ie();
	else if ($.browser.mozilla)
	moz();
	$('select').styler();
	$('input[type="checkbox"]').styler();
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
        	<div class="search_filter">
            	<ul class="search_filter_menu">
                	<li><a href="#">Все проекты</a></li>
                    <li><a href="#">Только для PRO</a></li>
                    <li><a href="#">Фриланс</a></li>
                    <li><a href="#">В офис</a></li>
                </ul>
                <div class="field price">
                	<label for="price_from">Бюджет от</label>
                	<input type="text" class="price_from price_input" id="price_from" value="" />
                    
                    <label for="price_to">до</label>
                    <input type="text" class="price_to price_input" id="price_to" value="" />
                    <div class="valuta-con">
                        <select class="valuta" id="valuta">
                            <option value="1">Руб</option>
                            <option value="2">USD</option>
                            <option value="3">Евро</option>
                        </select>
                        <input type="checkbox" name="price_checkbox" id="price_checkbox" class="price_checkbox" />
                        <label for="price_checkbox">В том числе с бюджетом по договоренности</label>
                    </div>
                </div>
                
                
                <div class="field category">
                        <label for="razdel">Разделы</label>
                        
                        <div class="con">
                        <select class="razdel" id="razdel">
                        	<option value="1">Все&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="1">Разработка сайтов</option>
                            <option value="2">Программирование</option>
                            <option value="3">Дизайн сайтов</option>
                        </select>
                        
                        <a href="#" class="add">Добавить</a>
                        
                    </div>
                </div>
                
                <div class="field projects_gcon">
                		<div class="projects_con">
                        	<input type="checkbox" name="projects_checkbox" id="projects_checkbox" class="projects_checkbox" />
                            <label for="projects_checkbox">Проекты только по моей специализации</label>
                        </div>
                </div>
                
                <div class="field categoryes">
                	<ul class="categoryes_list">
                    	<li><a href="#" class="gcat">Разработка сайтов</a></li>
                        <li><a href="#" class="cat">Программирование: Базы данных</a></li>
                    </ul>
                </div>
                
                
                <div class="field place">
                        <label for="place_select">Место</label>
                        
                        <div class="con">
                        <select class="place_select" id="place_select">
                            <option value="1">Все&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="2">Россия</option>
                            <option value="3">США</option>
                            <option value="4">Великобритания</option>
                        </select> 
                        
                        <select class="city_select" id="city_select">
                            <option value="1">Все&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="2">Москва</option>
                            <option value="3">Санкт-питербург</option>
                            <option value="4">Новосибирск</option>
                        </select>                       
                    </div>
                </div>
                
                
                <div class="field keywords">
                        <label for="keywords_input">Ключевые слова</label>
                        
                        <div class="con">
                        	<input type="text" class="keywords_input" name="keywords_input" id="keywords_input" value="" />
                    	</div>
                </div>
                
                <div class="field apply">
                	<a href="#" class="apply_filter" id="apply_filter">Применить фильтр</a>
                    <a href="#" class="clear_form" id="clear_form">Очистить форму</a>
                </div>
                
            </div>
            
            <div class="projects_list">
				
				<?php
					foreach($all_projects as $project):
				?>
				
           		<div class="project">
                	<div class="project_price"><?=$project['price'].' '.$project['currency'];?><div class="bg2"></div></div>
                	<div class="title"><a href="#"><?=$project['title'];?></a></div>
                    
                    <div class="content"><?=$project['content'];?></div>

					<div class="info">
						<?php if ($project['type']=='opened'): ?>
							<div class="access_opened">Открыт для всех</div>
						<?php elseif ($project['type']=='pro'): ?>
							<div class="access_closed">Только для PRO</div>
						<?php endif;?>
                        <div class="info_div">
                        	<ul>
                            	<li>Просмотров: <span><?=$project['views'];?></span></li>
                                <li>Ответов: <span><?=$project['answers'];?></span></li>
                                <li>Создан: <span><?=$project['date'];?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
				
				<?php
					endforeach;
				?>
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
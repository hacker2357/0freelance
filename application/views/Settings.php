<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Настройки</title>
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<?=HTML::style('application/views/style.css');?>

<?=HTML::script('application/views/js/jquery-1.7.2.min.js');?>

<?=HTML::script('application/views/js/jquery-ui-1.10.0.custom.min.js');?>

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
	$('input[type="radio"]').styler();
	$('input[type="file"]').styler();
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
                            	<li><a href="#" class="current">Основные настройки</a></li>
                                <li><a href="#">Портфолио</a></li>
                                <li><a href="#">Уведомления / Рассылка</a></li>
                                <li><a href="#">Безопасность</a></li>
                            </ul>
                        </div>
                    </div>
					
                    <div class="settings">
                      <h3>Основные настройки</h3>
                          <div class="jq-settings-con">
                            <ul class="settings-label">
                                <li><label for="first-name">Имя:</label></li>
                                <li><label for="last-name">Фамилия:</label></li>
                                <li><label for="birthday">Дата рождения:</label></li>
                                <li class="pol">Пол:</li>
                                <li style="margin-top:50px;"><label for="status">Статус:</label></li>
                                <li><label for="city">Город:</label></li>
                                <li><label for="website">Сайт:</label></li>
                                <li><label for="phone">Телефон:</label></li>
                                <li><label for="email">E-mail:</label></li>
                                <li><label for="hide-email">Скрыть e-mail:</label></li>
                                <li><label for="avatar">Аватар:</label></li>
                            </ul>
                            
                            
                            <ul class="settings-label">
                                <li><input type="text" class="settings-input" id="first-name" name="first-name" value="" /></li>
                                <li><input type="text" class="settings-input" id="last-name" name="last-name" value="" /></li>
                                <li><input type="text" class="settings-input" id="birthday" name="birthday" value="" /></li>
                                <li>
                               	  <div class="radio_con">
                                        <input type="radio" class="pol_radio" name="pol" id="pol1" value="1" />
                                        <label class="pol1" for="pol1">Мужской</label>
                                    </div>
                                    <div class="radio_con">
                                      <input type="radio" class="pol_radio" name="pol" id="pol2" value="2" />
                                      <label class="pol1" for="pol2">Женский</label>
                                    </div>
                              </li>
                                <li style="margin-top:50px;">
                               	  <select name="status" class="status" id="status">
                                    <option value="1">Не определен</option>
                                    <option value="2">Свободен</option>
                                    <option value="3">Частично занят</option>
                                    <option value="4">Занят</option>
                                    </select>
                              </li>
                                <li>
                                	<select name="city" class="status" id="city">
                                    <option value="1">Москва</option>
                                    <option value="2">Санкт-питербург</option>
                                    <option value="3">Екатиринбург</option>
                                    <option value="4">Новосибирск</option>
                                    <option value="1">Москва</option>
                                    <option value="2">Санкт-питербург</option>
                                    <option value="3">Екатиринбург</option>
                                    <option value="4">Новосибирск</option>
                                    <option value="1">Москва</option>
                                    <option value="2">Санкт-питербург</option>
                                    <option value="3">Екатиринбург</option>
                                    <option value="4">Новосибирск</option>
                                    <option value="1">Москва</option>
                                    <option value="2">Санкт-питербург</option>
                                    <option value="3">Екатиринбург</option>
                                    <option value="4">Новосибирск</option>
                                    <option value="1">Москва</option>
                                    <option value="2">Санкт-питербург</option>
                                    <option value="3">Екатиринбург</option>
                                    <option value="4">Новосибирск</option>
                                    <option value="1">Москва</option>
                                    <option value="2">Санкт-питербург</option>
                                    <option value="3">Екатиринбург</option>
                                    <option value="4">Новосибирск</option>
                                    <option value="1">Москва</option>
                                    <option value="2">Санкт-питербург</option>
                                    <option value="3">Екатиринбург</option>
                                    <option value="4">Новосибирск</option>
                                    
                                    </select>
                              </li>
                                <li><input type="text" class="settings-input" id="website" name="website" value="" /></li>
                                <li><input type="text" class="settings-input" id="phone" name="phone" value="" /></li>
                                <li><input type="text" class="settings-input" id="email" name="email" value="" /></li>
                                <li><input type="checkbox" id="hide-email" name="hide-email" /></li>
                                <li style="overflow:hidden; width:115px;"><input type="file" class="avatar-file" name="avatar" id="avatar" /></li>
                                <li style="margin-top:25px;"><a href="#" class="avatar-file save">Сохранить</a></li>
                            </ul>
                          </div>
                      <h3>Обо мне / Подпись</h3>
                      <div class="jq-settings-con">
                      	<label for="about-me">Обо мне</label>
                        
                        <div class="about-me-desc">Эта информация будет отображаться при просмотре вашего аккаунта.</div>
                        
                        <textarea id="about-me" name="about-me" class="about-me" style="margin-bottom:30px;"></textarea>
                        
                        <label for="podpis">Подпись</label>
                        
                        <div class="about-me-desc">Ваша подпись для заявок.</div>
                        
                        <textarea id="podpis" name="podpis" class="about-me" style="min-height:100px;"></textarea>
                        
                        <a href="#" class="avatar-file save" style="margin-top:30px;">Сохранить</a>
                        
                      </div>
                      
                    </div>
					
                    <script>
					 $( ".settings" ).accordion({
					  heightStyle: "content"
					});
					</script>
                    
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
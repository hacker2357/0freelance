<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Настройки - Портфолио</title>
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
                                <li><a href="#" class="current">Портфолио</a></li>
                                <li><a href="#">Уведомления / Рассылка</a></li>
                                <li><a href="#">Безопасность</a></li>
                            </ul>
                        </div>
                    </div>
					
                    <div class="settings">
                      <h3>Мои специализации</h3>
                          <div class="jq-settings-con">
                            <ul class="settings-label">
                                <li><label for="sp">Специализация:</label></li>
                                <li style="margin-top:37px;"><label for="dop">Дополнительные:</label></li>
                            </ul>
                            
                            
                            <ul class="settings-label">
                                
                                <li>
                               	  <select name="sp" class="status" id="sp">
                                    <option value="1">Не определен</option>
                                    <option value="2">Свободен</option>
                                    <option value="3">Частично занят</option>
                                    <option value="4">Занят</option>
                                    </select>
                              </li>
                                <li style="height:auto; margin-top:37px;">
                                
                                	<ul class="dop-sp">
                                    	<li>
                                                <select name="dop" class="status" id="dop">
                                               
                                                <option value="1">Москва</option>
                                                <option value="2">Санкт-питербург</option>
                                                <option value="3">Екатиринбург</option>
                                                <option value="4">Новосибирск</option>
                                                
                                                </select>
                                                <div class="close"></div>
                                         </li>
                                         
                                         <li>
                                                <select name="dop" class="status" id="dop">
                                               
                                                <option value="1">Москва</option>
                                                <option value="2">Санкт-питербург</option>
                                                <option value="3">Екатиринбург</option>
                                                <option value="4">Новосибирск</option>
                                                
                                                </select>
                                                <div class="close"></div>
                                         </li>
                                     </ul>
                                     <a href="#" class="avatar-file save" style="margin-top:20px;">Сохранить</a>
                              </li>
                            </ul>
                          </div>
                      <h3>Редактирование портфолио</h3>
                      <div style="padding:40px 20px 0;">
                      	<div class="edit-portfolio">
                        	<div class="edit-portfolio-header"><span class="edit-portfolio-title">Лучшие работы</span>
                            <div class="count-bg"><span>3 работы</span></div>
                            </div>
                        </div>
                        <div>
                        	<a href="#" class="add_work">Добавить работу</a>
                        </div>
                        <div class="portfolio-container">
                        	<div class="portfolio-mini">
                            	<div><img src="files/1.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            <div class="portfolio-mini">
                            	<div><img src="files/2.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-mini">
                            	<div><img src="files/3.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="edit-portfolio">
                        	<div class="edit-portfolio-header"><span class="edit-portfolio-title">Создание сайтов: Сайт под ключ</span>
                            <div class="count-bg"><span>5 работы</span></div>
                            </div>
                        </div>
                        
                        <div>
                        	<a href="#" class="add_work">Добавить работу</a>
                        </div>
                         <div class="portfolio-container">
                        	<div class="portfolio-mini">
                            	<div><img src="files/1.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            <div class="portfolio-mini">
                            	<div><img src="files/2.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-mini">
                            	<div><img src="files/3.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                             <div class="portfolio-mini">
                            	<div><img src="files/1.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                             <div class="portfolio-mini">
                            	<div><img src="files/2.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                        </div>
                        
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
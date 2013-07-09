<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Аккаунт фрилансера</title>
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
                            <div class="left_cont">
                            	<span class="user-name"><a href="#">Святослав Вишневский</a></span>
                            	<span class="city">Город: Москва</span>
                                <span class="online">Online</span>
                                
                                <span class="projects_count">Учавствовал в проектах: 235</span>
                                <span class="opened_projects">Открыл проектов: 344</span>
                                <span class="time_on_the_site_freelancer">На сайте: 20 лет 1 месяц</span>
                            </div>
                        </div>
                    </div>
					
                    <div class="settings" style="margin-top:10px;">
                    	<div class="freelancer_account">
                        	<div class="account_buttons">
                            	<div class="left_buttons">
                                	<div style="overflow:hidden;"><a href="#" class="predlojit_project">Предложить персональный проект</a></div>
                                    <div style="overflow:hidden; margin-top:10px;"><a href="#" class="predlojit_project">Отправить сообщение</a></div>
                                </div>
                                <div class="right_list">
                                	<h3 id="sp-1"><div class="right_arrow"></div>Создание сайтов</h3>
                                    <div class="sp_list" id="div-sp-1">
                                    	<ul class="cat_list">
                                        	<li>Веб-программирование</li>
                                            <li class="have_works">Сайт под ключ</li>
                                            <li>Верстка</li>
                                            <li class="have_works">Дизайн сайтов</li>
                                        </ul>
                                    </div>
                                    
                                    <h3 id="sp-2"><div class="right_arrow"></div>Программирование</h3>
                                    <div class="sp_list" id="div-sp-2">
                                    	<ul class="cat_list">
                                        	<li class="have_works">Прикладное программирование [2]</li>
                                            <li>Системное программирование</li>
                                            <li class="have_works">Веб-программирование [10]</li>
                                            <li>Программирование игр</li>
                                        </ul>
                                    </div>
                                    
                                    <h3 id="sp-3"><div class="right_arrow"></div>Дизайн</h3>
                                    <div class="sp_list" id="div-sp-3">
                                    	<ul class="cat_list">
                                        	<li>Веб-программирование</li>
                                            <li class="have_works">Сайт под ключ</li>
                                            <li>Верстка</li>
                                            <li class="have_works">Дизайн сайтов</li>
                                        </ul>
                                    </div>
                                    
                                    <script type="text/javascript">
										$('.right_list h3').click(function()
										{
											var div_class;
											this_element_id = $(this).attr('id');
											div_id = 'div-'+this_element_id;
											$('#'+div_id+'.sp_list').switchClass('sp_list', 'sp_list_opened');
											$('#'+div_id+'.sp_list_opened').switchClass('sp_list_opened', 'sp_list');
											
											div_class = $('#'+div_id).attr('class');
											
											if (div_class == 'sp_list')
											{
												$('#'+this_element_id+' div.right_arrow').attr('class', 'bottom_arrow');
											}
											else if (div_class == 'sp_list_opened')
											{
												$('#'+this_element_id+' div.bottom_arrow').attr('class', 'right_arrow');
											}
										});
									</script>
                                    
                                </div>                                
                            </div>
							
							<div class="freelancer_desc">
                            	<div class="freelancer_desc_title">Дополнительная информация</div>
                                <div class="freelancer_desc_content">
                                	Skarlat Group - Разработка эффективных web проектов! Уникальный дизайн сайта от 5т.р.<br />
                                    » Дизайн/Графика: [ Adobe Photoshop ] [ Adobe Illustrator ] [ Corel Draw ]<br />
                                    » Программирование: [ PHP5 ] [ Ajax ] [ JavaScript ] [ ActionScript2.0 ]<br />
                                    » Работа с базой данных: [ MySQL ]<br />
                                    » Верстка: [ HTML4.01 & CSS ] [ XHTML & CSS ]<br />
                                    <br />................................................................................................................................................<br />
                                    free-lance.ru/users/xwebson/<br />
                                    freelance.ru/users/alan.skarlat/<br />
                                    weblancer.net/users/skarlatov/
                                    vk.com/skarlatgroup<br />
                                    <br />................................................................................................................................................<br />
                                    Работа с CMS: <br />
                                    » Самописная /рекомендуем/ <br />
                                    » Joomla <br />
                                    » WordPress <br />
                                    » OpenCart <br />
                                    » Drupal <br />
                                    » MODx CMS / CMF <br />
                                    » CMS Bitrix<br />
                                    » PHPShop<br />
                                    » DataLife Engine<br />
                                    » CMS Made Simple<br />
                                    » PrestaShop<br />
                                    » VamShop<br />
                                    ...................................................................................................................<br />
                                    Контактные данные:<br />
                                    Email: alan.skarlat@gmail.com Skype: alan.skarlat
                                </div>
                            </div>                            
                        </div>						
                    </div>
                    
					
					
					
					
					
						<div class="edit-portfolio" style="padding-top:20px;">
                        	<div class="edit-portfolio-header" style="width:707px; left:-19px;"><span class="edit-portfolio-title">Лучшие работы</span>
                            <div class="count-bg"><span>3 работы</span></div>
                            </div>
                        </div>
                        <div class="portfolio-container">
                        <a href="#" class="block">
                        	<div class="portfolio-mini" style="width:202px">
                            	<div class="portfolio-mini-title">Работа 1</div>
                            	<div><img src="files/1.png" alt="" /></div>
                            </div>
                       </a>
                            
                       <a href="#" class="block">
                            <div class="portfolio-mini" style="width:202px">
                            	<div class="portfolio-mini-title">Работа 2</div>
                            	<div><img src="files/2.png" alt="" /></div>
                            </div>
                       </a>
                            
                       <a href="#" class="block">
                            <div class="portfolio-mini" style="width:202px">
                            	<div class="portfolio-mini-title">Работа 3</div>
                            	<div><img src="files/3.png" alt="" /></div>
                            </div>
                        </a>   
                        </div>
                       
                        
                        
                        <div class="edit-portfolio" style="padding-top:20px;">
                        	<div class="edit-portfolio-header" style="width:707px; left:-19px;"><span class="edit-portfolio-title">Создание сайтов: Сайт под ключ</span>
                            <div class="count-bg"><span>5 работы</span></div>
                            </div>
                        </div>
                        
                         <div class="portfolio-container">
                         <a href="#" class="block">
                        	<div class="portfolio-mini" style="margin-top:30px; width:202px;">
                            	<div class="portfolio-mini-title">Работа 1</div>
                            	<div><img src="files/1.png" alt="" /></div>
                            </div>
                         </a>
                            
                         <a href="#" class="block">
                            <div class="portfolio-mini" style="margin-top:30px; width:202px;">
                            	<div class="portfolio-mini-title">Работа 2</div>
                            	<div><img src="files/2.png" alt="" /></div>
                            </div>
                         </a>
                            
                         <a href="#" class="block">
                            <div class="portfolio-mini" style="margin-top:30px; width:202px;">
                            	<div class="portfolio-mini-title">Работа 3</div>
                            	<div><img src="files/3.png" alt="" /></div>
                            </div>
                         </a>                          
                           
                         <a href="#" class="block">
                             <div class="portfolio-mini" style="margin-top:30px; width:202px;">
                             	<div class="portfolio-mini-title">Работа 4</div>
                            	<div><img src="files/1.png" alt="" /></div>
                            </div>
                         </a>
                            
                        <a href="#" class="block">
                             <div class="portfolio-mini" style="margin-top:30px; width:202px;">
                             	<div class="portfolio-mini-title">Работа 5</div>
                            	<div><img src="files/2.png" alt="" /></div>
                            </div>
                        </a>
                            
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
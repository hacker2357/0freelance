<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Сообщения</title>
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

<div class="container" style="padding-top: 60px; position: fixed; top: 0; height: 100px; display: block; background: #fff; margin-bottom: 0; z-index:100;">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container" style="padding-top: 12px; padding-bottom: 0; border-bottom: 0; border-radius: 3px 3px 0 0;">
					<div class="messages_top_menu">
                    	<ul class="message_menu">
                        	<li class="message_btn_active"><a href="#">Диалоги</a></li>
                            <li><a href="#">Просмотр диалогов</a></li>
                        </ul>
                    </div>
                    
                    <div class="search_dialog">
                    	<input type="text" name="search_d" id="search_d" value="Введите имя" class="search_d" onfocus="if (this.value=='Введите имя') { this.value=''; this.style.color='#000'; }" onblur="if (this.value=='') { this.value='Введите имя'; this.style.color='#a9a9a9'; }" />
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
				<div class="container" style="position: absolute;
padding-top: 170px; z-index:50;">
			    	<div class="center" style="width:1000px;">
                        <div class="dialogs" style="left: 0; background:#F5F5F5; border-right: 1px solid #e9e9e9; border-left: 1px solid #e9e9e9; padding-bottom: 50px;">
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                            
                            <div class="dialog">
                                <div class="user">
                                    <div class="avatar-con">
                                        <div class="dialog-avatar"></div>
                                    </div>
                                    <div class="info-con">
                                        <div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                        <div class="dialog-time">21 янв 2013 в 16:23</div>
                                    </div>
                                </div>
                                <div class="last_message">Текст последнего сообщения</div>
                            </div>
                        </div>
                     </div>
				</div>
                
                <div class="container" style="position: absolute;
padding-top: 160px;">
			    	<div class="center" style="width:1000px;">
                    	<div style="background:#F5F5F5; border-right: 1px solid #e9e9e9; border-left: 1px solid #e9e9e9; border-bottom: 1px solid #e9e9e9; width:708px; height:2000px; position:fixed; bottom:20px; border-radius:0 0 3px 3px; z-index:0;">
                        </div>
                    </div>
                </div>
                
                <div class="container" style="position: absolute;
padding-top: 160px;">
			    	<div class="center" style="width:1000px;">
                    	<div style="background:#F5F5F5; border: 1px solid #e9e9e9; width:708px; height:30px; position:fixed; bottom:20px; border-radius:0 0 3px 3px; z-index:100; border-top: 1px solid #dbdbdb">
                        </div>
                    </div>
                </div>
                
                <div class="container" style="position: absolute;
padding-top: 160px;">
			    	<div class="center" style="width:1002px;">
                    	<div style="background:#F5F5F5; width:711px; height:50px; position:fixed; bottom:0; z-index:99;">
                        </div>
                    </div>
                </div>
</body>
</html>
<!--
					<div class="dialogs">
                    	<div class="dialog">
                        	<div class="user">
                            	<div class="avatar-con">
                                	<div class="dialog-avatar"></div>
                                </div>
                                <div class="info-con">
                                	<div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                    <div class="dialog-time">21 янв 2013 в 16:23</div>
                                </div>
                            </div>
                            <div class="last_message">Текст последнего сообщения</div>
                        </div>
                        
                        <div class="dialog">
                        	<div class="user">
                            	<div class="avatar-con">
                                	<div class="dialog-avatar"></div>
                                </div>
                                <div class="info-con">
                                	<div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                    <div class="dialog-time">21 янв 2013 в 16:23</div>
                                </div>
                            </div>
                            <div class="last_message">Текст последнего сообщения</div>
                        </div>
                        
                        <div class="dialog">
                        	<div class="user">
                            	<div class="avatar-con">
                                	<div class="dialog-avatar"></div>
                                </div>
                                <div class="info-con">
                                	<div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                    <div class="dialog-time">21 янв 2013 в 16:23</div>
                                </div>
                            </div>
                            <div class="last_message">Текст последнего сообщения</div>
                        </div>
                        
                        <div class="dialog">
                        	<div class="user">
                            	<div class="avatar-con">
                                	<div class="dialog-avatar"></div>
                                </div>
                                <div class="info-con">
                                	<div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                    <div class="dialog-time">21 янв 2013 в 16:23</div>
                                </div>
                            </div>
                            <div class="last_message">Текст последнего сообщения</div>
                        </div>
                        
                        <div class="dialog">
                        	<div class="user">
                            	<div class="avatar-con">
                                	<div class="dialog-avatar"></div>
                                </div>
                                <div class="info-con">
                                	<div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                    <div class="dialog-time">21 янв 2013 в 16:23</div>
                                </div>
                            </div>
                            <div class="last_message">Текст последнего сообщения</div>
                        </div>
                        
                        <div class="dialog">
                        	<div class="user">
                            	<div class="avatar-con">
                                	<div class="dialog-avatar"></div>
                                </div>
                                <div class="info-con">
                                	<div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                    <div class="dialog-time">21 янв 2013 в 16:23</div>
                                </div>
                            </div>
                            <div class="last_message">Текст последнего сообщения</div>
                        </div>
                        
                        <div class="dialog">
                        	<div class="user">
                            	<div class="avatar-con">
                                	<div class="dialog-avatar"></div>
                                </div>
                                <div class="info-con">
                                	<div class="dialog-user-name"><a href="#">Евгений Попов</a></div>
                                    <div class="dialog-time">21 янв 2013 в 16:23</div>
                                </div>
                            </div>
                            <div class="last_message">Текст последнего сообщения</div>
                        </div>
                    </div>
					-->
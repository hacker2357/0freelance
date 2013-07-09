<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Чат</title>
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

<div class="container" style="padding-top: 60px; position: fixed; top: 0; height: 100px; display: block; background: #fff; margin-bottom: 0; z-index:101;">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container" style="padding-top: 12px; padding-bottom: 0; border-bottom: 0; border-radius: 3px 3px 0 0;">
					<div class="messages_top_menu">
                    	<ul class="message_menu">
                        	<li><a href="#">Диалоги</a></li>
                            <li class="message_btn_active"><a href="#">Просмотр диалогов</a></li>
                        </ul>
                    </div>
                    
                    <div class="search_dialog">
                    	<ul class="list">
                        	<li class="chat_active">Евгений Попов<div class="chat_close"></div></li>
                            <li>Михаил Попов<div class="chat_close"></div></li>
                            <li>Евгений Попов<div class="chat_close"></div></li>
                            <li>Михаил Попов<div class="chat_close"></div></li>
                            <li>Евгений Попов<div class="chat_close"></div></li>
                            <li>Михаил Попов<div class="chat_close"></div></li>
                            <li>Евгений Попов<div class="chat_close"></div></li>
                            <li>Михаил Попов<div class="chat_close"></div></li>
                            <li>Евгений Попов<div class="chat_close"></div></li>
                            <li>Михаил Попов<div class="chat_close"></div></li>
                        </ul>
                        <div class="close_dialog"></div>
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
				<div class="container" id="messageid" style="position: absolute;
padding-top: 160px; z-index:50;">
			    	<div class="center" style="width:1000px;">
                        <div class="dialogs" style="left: 0; background:#F5F5F5; border-right: 1px solid #e9e9e9; border-left: 1px solid #e9e9e9; padding-bottom: 136px; margin-bottom: 80px;">
                        	<div class="messages_con">
                            	<div class="message">
                                	<div class="avatar_con">
                                    	<div class="chat_avatar_mini"></div>
                                    </div>
                                    <div class="message-text">
                                    	<a href="#" class="chat_user_name">Евгений Попов</a>
                                        <div class="message_text_t">Текст сообщение текст сообщения текст сообщения текст сообщения текст
сообщения текст сообщения текст сообщения текст сообщения текст
сообщения текст сообщения текст сообщения текст</div>
										<div class="message_text_t2">Текст сообщение текст сообщения текст сообщения текст сообщения текст
сообщения текст сообщения текст сообщения текст сообщения текст
сообщения текст сообщения текст сообщения текст</div>
                                    </div>
                                    <div class="message_time">26.01.13</div>
                                </div>
                                
                                <div class="message">
                                	<div class="avatar_con">
                                    	<div class="chat_avatar_mini"></div>
                                    </div>
                                    <div class="message-text">
                                    	<a href="#" class="chat_user_name">Евгений Попов</a>
                                        <div class="message_text_t">Текст сообщение текст сообщения текст сообщения текст</div>
                                    </div>
                                    <div class="message_time">26.01.13</div>
                                </div>
                                
                                <div class="message">
                                	<div class="avatar_con">
                                    	<div class="chat_avatar_mini"></div>
                                    </div>
                                    <div class="message-text">
                                    	<a href="#" class="chat_user_name">Евгений Попов</a>
                                        <div class="message_text_t">Текст сообщение текст сообщения текст сообщения текст сообщения текст
сообщения текст сообщения текст сообщения текст</div>
                                    </div>
                                    <div class="message_time">26.01.13</div>
                                </div>
                            </div>
                        </div>
						
                     </div>
				</div>
                
                <script type="text/javascript">
						setInterval('chat_padding()', 50);
						
						function chat_padding()
						{
							$('#messageid').css('padding-top', 97+$('.search_dialog').innerHeight()+'px');
						}
				</script>
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
                    	<div style="background:#efefef; border: 1px solid #e9e9e9; width:708px; height:116px; position:fixed; bottom:80px; border-radius:0 0 3px 3px; z-index:100; border-top: 1px solid #dbdbdb;">
                        	<div class="chat_con">
                            	<div class="chat_left">
                                	<div class="chat_avatar"></div>
                                </div>
                                <div class="textarea_con">
                                	<textarea class="message_text"></textarea>
                                    <a href="#" class="send_message">Отправить</a>
                                </div>
                                <div class="chat_right">
                                	<div class="chat_right_avatar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container" style="position: absolute;
padding-top: 160px;">
			    	<div class="center" style="width:1002px;">
                    	<div style="background:#F5F5F5; width:711px; height:116px; position:fixed; bottom:0; z-index:99;">
                        	
                        </div>
                    </div>
                </div>
</body>
</html>
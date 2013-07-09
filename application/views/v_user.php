<div class="container">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container">
                	<div class="user-container">
                    	<?php
                        /*
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
                        */
                        ?><?=Model::factory('Functions')->get_user_preview($user);?>
                        <div class="user-right">
                            <div class="left_cont">
                                <span class="user-name"><a href="<?=HTML::chars(URL::base().Route::get('user')->uri(array('user_id' => $user->id)));?>"><?=HTML::chars($user->first_name);?> <?=HTML::chars($user->last_name);?></a></span>
                            	<span class="city">Регион: <?=HTML::chars((!empty($user->region->region_name_ru))? $user->region->region_name_ru: 'Не выбран');?></span>
                                <span class="online">Online</span>
                                
                                <span class="projects_count">Учавствовал в проектах: </span>
                                <span class="opened_projects">Открыл проектов: <?=HTML::chars($user->projects->count_all());?></span>
                                <span class="time_on_the_site_freelancer">На сайте: <?=HTML::chars(Model::factory('Useful')->get_user_time($user->registration_date));?></span>
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
                                <?php if (!empty($user->about_me)):?>
                            	<div class="freelancer_desc_title">Дополнительная информация</div>
                                <div class="freelancer_desc_content"><?=nl2br(HTML::chars($user->about_me));?></div>
                                <?php endif;?>
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
        <?php
            if (isset($sidebar))
            {
                    foreach($sidebar as $item)
                    {
                            echo $item;
                    }
            }
        ?>
    </div>
    
</div>
<div class="container">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container">
                	<div class="user-container">
                    	<?=(isset($avatar))? $avatar: '';?>
                        
                        <?=(isset($menu))? $menu: '';?>
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
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
                    	<h3 class="ui-accordion-header-active">Безопасность</h3>
                        <div style="padding:20px 10px 10px;">
                            <div class="margin"><input type="checkbox" name="ip" id="ip" /><label for="ip" class="label">Привязка сессии к IP адресу</label></div>
                            
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
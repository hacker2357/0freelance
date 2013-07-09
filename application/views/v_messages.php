<div class="container" style="padding-top: 60px; position: fixed; top: 0; height: 100px; display: block; background: #fff; margin-bottom: 0; z-index:100;">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container" style="padding-top: 12px; padding-bottom: 0; border-bottom: 0; border-radius: 3px 3px 0 0;">
					<div class="messages_top_menu">
                    	<ul class="message_menu">
                        	<?=(isset($chatmenu))?$chatmenu:'';?>
                        </ul>
                    </div>
                    
                    <div class="search_dialog">
                    	<input type="text" name="search_d" id="search_d" value="Введите имя" class="search_d" onfocus="if (this.value=='Введите имя') { this.value=''; this.style.color='#000'; }" onblur="if (this.value=='') { this.value='Введите имя'; this.style.color='#a9a9a9'; }" />
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
<div class="container" style="position: absolute;
padding-top: 170px; z-index:50;">
			    	<div class="center" style="width:1000px;">
                        <div class="dialogs" style="left: 0; background:#F5F5F5; border-right: 1px solid #e9e9e9; border-left: 1px solid #e9e9e9; padding-bottom: 50px;">
						<?php foreach($all_dialogs as $dialog):?>
								<div class="dialog" onClick="window.location.href='<?=Controller_Base::get_dialog_link($dialog['user_id']);?>'">
									<div class="user">
										<div class="avatar-con">
											<div class="dialog-avatar"></div>
										</div>
										<div class="info-con">
											<div class="dialog-user-name"><a href="<?=Controller_Base::get_dialog_link($dialog['user_id']);?>"><?=$dialog['user_name'];?></a></div>
											<div class="dialog-time"><?=$dialog['date'];?></div>
										</div>
									</div>
									<div class="last_message"><?=$dialog['last_message'];?></div>
								</div>							
						<?php endforeach; ?>
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
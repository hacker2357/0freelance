<div class="container">
	<div class="center header">
    	<div class="left projects">
            <div class="projects_list">
           		<div class="project" style="width:280px; margin:0 auto; padding:20px 20px 30px;">
                	<div class="login_title">Восстановление</div>
                        <form action="<?=URL::base().Route::get('default')->uri(array('controller' => 'forgotpassword'));?>" method="POST">
                            
                                                        <?php
                                                                if (!empty($errors))
                                                                {
                                                                    foreach ($errors as $error) {
                                                                    ?><div class="login_field" style="padding:3px 0 3px 5px; background: #fee; margin:5px 0 0 63px; border:1px solid #fcc; border-radius:3px;">
                                                                    <?=$error;?>
                                                                      </div>
                                                                    <?php
                                                                    }
                                                                }
                                                                
                                                                if (!empty($message)):
                                                                    ?><div class="login_field" style="padding:3px 0 3px 5px; background: #e8ffe8; margin:5px 0 0 63px; border:1px solid #beb; border-radius:3px;">
                                                                      <?=$message;?>
                                                                    </div><?php
                                                                endif;
                                                            ?>
                                                        
                                                            
                            
							<div class="login_field">
								<label for="email_input">Email:</label>
								<input type="text" class="login_input" id="email_input" name="email_input" style="width:205px;" value="<?=$email;?>" />
							</div>
							
							<div class="login_field">
								<div class="button_con">
									<input type="submit" class="login_button" id="login_button" name="login_button" value="Восстановить" />
								</div>
							</div>
						</form>
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
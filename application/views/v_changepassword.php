<div class="container">
	<div class="center header">
    	<div class="left projects">
            <div class="projects_list">
           		<div class="project" style="width:320px; margin:0 auto; padding:20px 20px 30px;">
                	<div class="login_title" style="padding-left: 106px;">Изменить пароль</div>
						<form action="<?=$form_action;?>" method="POST">
							
                                                            <?php
                                                                if (!empty($errors))
                                                                {
                                                                    foreach ($errors as $error)
                                                                    {
                                                                        ?><div class="login_field" style="padding:3px 0 3px 5px; background: #fee; margin:5px 0 0 106px; border:1px solid #fcc; border-radius:3px;">
                                                                        <?=$error;?>
                                                                          </div>
                                                                        <?php
                                                                    }
                                                                }
                                                            ?>
							
							<div class="login_field" style="margin-top:15px;">
								<label for="password">Пароль:</label>
								<input type="password" style="width: 200px;" class="login_input" id="password" name="password" value="<?=(isset($login_input))? $login_input: '';?>" />
							</div>
							
							<div class="login_field">
								<label for="password_confirm">Подтверждение:</label>
								<input type="password" style="width: 200px;" class="password_input" id="password_confirm" name="password_confirm" value="" />
							</div>
							
							<div class="login_field">
								<div class="button_con">
									<input type="submit" class="login_button" id="login_button" name="login_button" value="Изменить" />
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
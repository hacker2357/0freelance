<div class="container">
	<div class="center header">
    	<div class="left projects">
            <div class="projects_list">
           		<div class="project" style="width:245px; margin:0 auto; padding:20px 20px 30px;">
                	<div class="login_title">Вход</div>
						<form action="<?=$form_action;?>" method="POST">
							
                                                            <?php
                                                                if (!empty($errors))
                                                                {
                                                                    ?><div class="login_field" style="padding:3px 0 3px 5px; background: #fee; margin:5px 0 0 63px; border:1px solid #fcc; border-radius:3px;">
                                                                    <?=$errors;?>
                                                                      </div>
                                                                    <?php
                                                                }
                                                            ?>
							
							<div class="login_field" style="margin-top:15px;">
								<label for="login_input">Логин:</label>
								<input type="text" class="login_input" id="login_input" name="login_input" value="<?=(isset($login_input))? $login_input: '';?>" />
							</div>
							
							<div class="login_field">
								<label for="password_input">Пароль:</label>
								<input type="password" class="password_input" id="password_input" name="password_input" value="" />
							</div>
							
							<div class="login_field">
								<a href="<?=$forgot;?>" class="forgot_password">Забыли пароль?</a>
								<div class="button_con">
									<input type="submit" class="login_button" id="login_button" name="login_button" value="Войти" />
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
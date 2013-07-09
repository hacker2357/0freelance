<div class="container">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container">
                	
		<form action="<?=(isset($url))? $url: '';?>" method="POST" enctype="multipart/form-data">
                    <div class="settings" style="margin-top:0; padding-bottom: 30px;">
                        <div class="registration_title">Регистрация</div>
                        
                            <?php
                                if (!empty($errors))
                                {?><div style="padding:5px 0 0 5px; background: #fee; margin:0 0 20px; border:1px solid #fcc; border-radius:3px;"><?php
                                    foreach ($errors as $error)
                                    {
                                            echo '<div style="margin-bottom:5px; color:#000;">'.$error.'</div>';;
                                    }
                                 ?></div><?php
                                }
                            ?>
                        
                            <ul class="settings-label">
                                <li><label for="first_name">Имя: <span style="color:#f00; font-weight: bold;">*</span></label></li>
                                <li><label for="last_name">Фамилия: <span style="color:#f00; font-weight: bold;">*</span></label></li>
                                <li><label for="birthday">Дата рождения:</label></li>
                                <li class="pol">Пол: <span style="color:#f00; font-weight: bold;">*</span></li>
                                <li style="margin-top:50px;"><label for="status">Статус:</label></li>
                                <li><label for="country">Страна: <span style="color:#f00; font-weight: bold;">*</span></label></li>
                                <li><label for="city">Регион: <span style="color:#f00; font-weight: bold;">*</span></label></li>
                                <li><label for="website">Сайт:</label></li>
                                <li><label for="phone">Телефон:</label></li>
                                <li><label for="email">E-mail:</label></li>
                                <li><label for="username">Логин: <span style="color:#f00; font-weight: bold;">*</span></label></li>
								<li><label for="password">Пароль: <span style="color:#f00; font-weight: bold;">*</span></label></li>
								<li><label for="confirm">Подтверждение: <span style="color:#f00; font-weight: bold;">*</span></label></li>
                                <li><label for="hide-email">Скрыть e-mail:</label></li>
                                <li><label for="avatar">Аватар:</label></li>
                            </ul>
                            
                            
                            <ul class="settings-label">
                                <li><input type="text" class="settings-input" id="first_name" name="first_name" value="<?=(isset($form['first_name']))? $form['first_name']:'';?>" /></li>
                                <li><input type="text" class="settings-input" id="last_name" name="last_name" value="<?=(isset($form['last_name']))? $form['last_name']:'';?>" /></li>
                                <li><input type="text" class="settings-input" id="birthday" name="birthday" value="<?=(isset($form['birthday']))? $form['birthday']:'';?>" /></li>
                                
                                <script type="text/javascript">
                                    $('#birthday').datepicker({
                                        changeMonth: true,
                                        changeYear: true,
                                        yearRange: "1900:2050",
                                        dateFormat: "yy-mm-dd",
                                    });
                                </script>
                                <li>
                                    <?php
                                        if (!empty($pols))
                                        {
                                            foreach ($pols as $pol)
                                            {
                                                ?>
                                                <div class="radio_con">
                                                    <input<?=(isset($form['pol_id']) && $form['pol_id']==$pol->pol_id)? ' checked': '';?> type="radio" class="pol_radio" name="pol_id" id="pol-<?=$pol->pol_id;?>" value="<?=$pol->pol_id;?>" />
                                                    <label class="pol1" for="pol-<?=$pol->pol_id;?>"><?=$pol->pol_title;?></label>
                                                </div><?php
                                            }
                                        }
                                    ?>
                              </li>
                                <li style="margin-top:50px;">
                               	  <select name="status_id" class="status" id="status">
                                    <?php
                                        if (!empty($statuses))
                                        {
                                            foreach ($statuses as $status)
                                            {
                                                ?><option<?=(isset($form['status_id']) && $form['status_id']==$status->status_id)? ' selected': '';?> value="<?=$status->status_id;?>"><?=$status->status_title;?></option><?php
                                            }
                                        }
                                    ?>
                                  </select>
                              </li>
                              
                              <li>
                                  <script type="text/javascript">
                                      function get_cities(t)
                                      {
                                          $.ajax({
                                              type: 'POST',
                                              url: '<?=URL::base();?>/ajaxcities',
                                              data: {country_id: $(t).val()},
                                              dataType: 'json',
                                              success: function(data)
                                              {
                                                  var content = '<option value="0">Не выбрано</option>';
                                                  content = content + Base64.decode(data.content);
                                                  $('#city').html(content).trigger('refresh');
                                                  $('#country-styler').css('z-index', '1000');
                                              }
                                          });
                                      }
                                  </script>
                                    <select name="country_id" class="status" id="country" onChange="get_cities(this);">
                                        <option value="0">Не выбрано</option>
                                        <?php
                                        if (!empty($countries))
                                        {
                                            foreach ($countries as $country)
                                            {
                                        ?>
                                            <option<?=(isset($form['country_id']) && $form['country_id']==$country->id_country)? ' selected': '';?> value="<?=$country->id_country;?>"><?=$country->country_name_ru;?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                              </li>
                                    
                              <li>
                                    <select name="city_id" class="status" id="city">
                                        <option value="0">Не выбрано</option>
                                        <?php
                                        if (!empty($regions))
                                        {
                                            foreach ($regions as $region)
                                            {
                                        ?>
                                            <option<?=(isset($form['city_id']) && $form['city_id']==$region->id_region)? ' selected': '';?> value="<?=$region->id_region;?>"><?=$region->region_name_ru;?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                              </li>
                                <li><input type="text" class="settings-input" id="website" name="website" value="<?=(isset($form['website']))? $form['website']:'';?>" /></li>
                                <li><input type="text" class="settings-input" id="phone" name="phone" value="<?=(isset($form['phone']))? $form['phone']:'';?>" /></li>
                                <li><input type="text" class="settings-input" id="email" name="email" disabled="disabled" value="<?=(isset($email))? $email: '';?>" /></li>
                                <li><input type="text" class="settings-input" id="username" name="username" value="<?=(isset($form['username']))? $form['username']:'';?>" /></li>
								<li><input type="password" class="settings-input" id="password" name="password" value="" style="width:240px" /></li>
								<li><input type="password" class="settings-input" id="confirm" name="password_confirm" value="" style="width:240px" /></li>
                                <li><input type="checkbox" id="hide-email" name="hide_email" value="1"<?=(isset($form['hide_email']) && $form['hide_email']=='1')? ' checked': '';?> /></li>
                                <li style="width:115px;"><input type="file" class="avatar-file" name="avatar" id="avatar" /></li>
                                <li style="margin-top:25px;"><input type="submit" class="avatar-file save" style="padding: 0 20px; width:auto; float:left; height: 27px;" value="Зарегистрироваться" /></li>
                            </ul>
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
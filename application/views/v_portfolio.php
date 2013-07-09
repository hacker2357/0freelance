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
                      <h3>Мои специализации</h3>
                          <div class="jq-settings-con">
                            <ul class="settings-label">
                                <li><label for="sp">Специализация:</label></li>
                                <li style="margin-top:37px;"><label for="dop-1">Дополнительные:</label></li>
                            </ul>
                            
                            
                            <ul class="settings-label portfolio_ul" style="width:500px;">
                                <script type="text/javascript">
                                    function get_podrazdels_portfolio(t, id)
                                    {
                                        var content = '<option value="0">Не выбрано</option>';

                                        if (t.value=='0')
                                            $('#' + id).html(content).trigger('refresh');

                                        $.ajax({
                                            type: 'POST',
                                            url: '<?=URL::base();?>/ajaxpodrazdels',
                                            data: {razdel_id: $(t).val()},
                                            dataType: 'json',
                                            success: function(data)
                                            {
                                                content = content + Base64.decode(data.content);
                                                $('#' + id).html(content).trigger('refresh');
                                              //  $('#razdels-styler').css('z-index', '100000');
                                            }
                                          });
                                    }
                                    
                                    function add_li(id)
                                    {
                                        var id2 = parseInt(id)+1;
                                        if (document.getElementById(id2)===null)
                                        $.ajax({
                                            type: 'POST',
                                            url: '<?=URL::base();?>/ajaxportfolio',
                                            data: {id: id2},
                                            dataType: 'json',
                                            success: function(data)
                                            {
                                                content = Base64.decode(data.content);
                                                //$('#dop-sp').html($('#dop-sp').html() + content);
                                                
                                                $('#dop-sp').append(content);
                                                
                                                $('select').styler();
                                                
                                              //  $('#razdels-styler').css('z-index', '100000');
                                            }
                                          });
                                    }
                                    
                                    function remove_li(li)
                                    {
                                        if ($('#dop-sp > li').length > 1)
                                        {
                                            $(li).remove();
                                        }
                                        else
                                        {
                                            $('#dop-sp select').val(0).trigger('refresh');
                                        }
                                    }
                                </script>
                                <li>
                                  
                               	  <select name="sp" class="status spec" id="sp" onchange="get_podrazdels_portfolio(this, 'ps');">
                                    <option value="0">Не выбрано</option>
                                    <?php
                                        foreach($razdels as $razdel)
                                        {
                                            echo "<option value=\"$razdel->id\">$razdel->name</option>";
                                        }
                                    ?>
                                  </select>
                                    
                                  <select name="sppod" class="status spec second_select" id="ps">
                                    <option value="0">Не выбрано</option>
                                  </select>
                                </li>
                                
                                <li style="height:auto; margin-top:37px;">
                                
                                	<ul class="dop-sp" id="dop-sp">
                                    	<li id="1">
                                                <select name="dop[]" class="status spec" id="dop-1" onchange="get_podrazdels_portfolio(this, 'podrazdel-'+this.id);">
                                                    <option value="0">Не выбрано</option>
                                                   <?php
                                                        foreach($razdels as $razdel)
                                                        {
                                                            echo "<option value=\"$razdel->id\">$razdel->name</option>";
                                                        }
                                                   ?>
                                                
                                                </select>
                                            
                                                <select name="doppodrazdel[]" class="status spec second_select" id="podrazdel-dop-1" onchange="add_li(this.parentNode.id);">
                                                    <option value="0">Не выбрано</option>
                                                </select>
                                                <div class="close" onclick="remove_li(this.parentNode);"></div>
                                         </li>
                                     </ul>
                                    <script type="text/javascript">
                                        $('.dop-sp').sortable({
                                            axis: 'y'
                                        });
                                    </script>
                                     <a href="#" class="avatar-file save" style="margin-top:20px;">Сохранить</a>
                              </li>
                            </ul>
                          </div>
                      <h3>Редактирование портфолио</h3>
                      <div style="padding:40px 20px 0;">
                      	<div class="edit-portfolio">
                        	<div class="edit-portfolio-header"><span class="edit-portfolio-title">Лучшие работы</span>
                            <div class="count-bg"><span>3 работы</span></div>
                            </div>
                        </div>
                        <div>
                        	<a href="#" class="add_work">Добавить работу</a>
                        </div>
                        <div class="portfolio-container">
                        	<div class="portfolio-mini">
                                    <div><img src="<?=URL::base();?>media/files/1.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            <div class="portfolio-mini">
                            	<div><img src="<?=URL::base();?>media/files/2.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-mini">
                            	<div><img src="<?=URL::base();?>media/files/3.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="edit-portfolio">
                        	<div class="edit-portfolio-header"><span class="edit-portfolio-title">Создание сайтов: Сайт под ключ</span>
                            <div class="count-bg"><span>5 работы</span></div>
                            </div>
                        </div>
                        
                        <div>
                        	<a href="#" class="add_work">Добавить работу</a>
                        </div>
                         <div class="portfolio-container">
                        	<div class="portfolio-mini">
                            	<div><img src="<?=URL::base();?>media/files/1.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            <div class="portfolio-mini">
                            	<div><img src="<?=URL::base();?>media/files/2.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio-mini">
                            	<div><img src="<?=URL::base();?>media/files/3.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                             <div class="portfolio-mini">
                            	<div><img src="<?=URL::base();?>media/files/1.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                             <div class="portfolio-mini">
                            	<div><img src="<?=URL::base();?>media/files/2.png" alt="" /></div>
                                <div class="portfolie-buttons">
                                	<a href="#" class="edit-work">Редактировать</a>
                                    <a href="#" class="edit-work">Удалить</a>
                                </div>
                            </div>
                            
                        </div>
                        
                      </div>
                      
                    </div>
					
                    <script>
					 $( ".settings" ).accordion({
					  heightStyle: "content"
					});
					</script>
                    
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
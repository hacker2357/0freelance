<div class="container">
	<div class="center header">
    	<div class="left projects">
        	<div class="search_filter">
            	<ul class="search_filter_menu">
                	<li><a href="#">Все проекты</a></li>
                    <li><a href="#">Только для PRO</a></li>
                    <li><a href="#">Фриланс</a></li>
                    <li><a href="#">В офис</a></li>
                </ul>
                <div class="field price">
                	<label for="price_from">Бюджет от</label>
                	<input type="text" class="price_from price_input" id="price_from" value="" />
                    
                    <label for="price_to">до</label>
                    <input type="text" class="price_to price_input" id="price_to" value="" />
                    <div class="valuta-con">
                        <select class="valuta" id="valuta">
                            <option value="1">Руб</option>
                            <option value="2">USD</option>
                            <option value="3">Евро</option>
                        </select>
                        <input type="checkbox" name="price_checkbox" id="price_checkbox" class="price_checkbox" />
                        <label for="price_checkbox">В том числе с бюджетом по договоренности</label>
                    </div>
                </div>
                
                
                <div class="field category">
                        <label for="razdel">Разделы</label>
                        
                        <div class="con">
                        <select class="razdel" id="razdel">
                        	<option value="1">Все&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="1">Разработка сайтов</option>
                            <option value="2">Программирование</option>
                            <option value="3">Дизайн сайтов</option>
                        </select>
                        
                        <a href="#" class="add">Добавить</a>
                        
                    </div>
                </div>
                
                <div class="field projects_gcon">
                		<div class="projects_con">
                        	<input type="checkbox" name="projects_checkbox" id="projects_checkbox" class="projects_checkbox" />
                            <label for="projects_checkbox">Проекты только по моей специализации</label>
                        </div>
                </div>
                
                <div class="field categoryes">
                	<ul class="categoryes_list">
                    	<li><a href="#" class="gcat">Разработка сайтов</a></li>
                        <li><a href="#" class="cat">Программирование: Базы данных</a></li>
                    </ul>
                </div>
                
                
                <div class="field place">
                        <label for="place_select">Место</label>
                        
                        <div class="con">
                        <select class="place_select" id="place_select">
                            <option value="1">Все&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="2">Россия</option>
                            <option value="3">США</option>
                            <option value="4">Великобритания</option>
                        </select> 
                        
                        <select class="city_select" id="city_select">
                            <option value="1">Все&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="2">Москва</option>
                            <option value="3">Санкт-питербург</option>
                            <option value="4">Новосибирск</option>
                        </select>                       
                    </div>
                </div>
                
                
                <div class="field keywords">
                        <label for="keywords_input">Ключевые слова</label>
                        
                        <div class="con">
                        	<input type="text" class="keywords_input" name="keywords_input" id="keywords_input" value="" />
                    	</div>
                </div>
                
                <div class="field apply">
                	<a href="#" class="apply_filter" id="apply_filter">Применить фильтр</a>
                    <a href="#" class="clear_form" id="clear_form">Очистить форму</a>
                </div>
                
            </div>
            
            <div class="projects_list">
				
				<?php
					foreach($all_projects as $project):
				?>
				
           		<div class="project">
                            <div class="project_price"><?=number_format($project->price, 0, ',', ' ').' '.$project->currency->name;?><div class="bg2"></div></div>
                            <div class="title"><a href="<?=URL::base().Route::get('project')->uri(array('id' => $project->id));?>" target="_blank"><?=$project->title;?></a></div>
                    
                    <div class="content"><?=$project->content;?></div>

					<div class="info">
							<div class="access_opened"><?=$project->type->message;?></div>
                        <div class="info_div">
                        	<ul>
                            	<li>Просмотров: <span><?=$project->views;?></span></li>
                                <li>Ответов: <span><?//=$project['answers'];?></span></li>
                                <li>Создан: <span><?=date('d.m.Y', $project->date);?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
				
				<?php
					endforeach;
				?>
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
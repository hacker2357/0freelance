<div class="container">
	<div class="center header">
    	<div class="left projects">            
            <div class="projects_list">
           		<div class="project settings-container">
                	<div class="user-container">
                    	<?=$avatar;?>
                        
                        <div class="user-right">
                            <div class="left_cont">
                            	<span class="user-name"><a href="<?=URL::base().Route::get('user')->uri(array('user_id' => $project->user->id));?>"><?=HTML::chars($project->user->first_name);?> <?=HTML::chars($project->user->last_name);?></a></span>
                            	<span class="city">Регион: <?=$project->user->region->region_name_ru;?></span>
                                <span class="online">Online</span>
                                
                                <span class="projects_count">Проектов: <?=HTML::chars($count_projects);?></span>
                                <span class="time_on_the_site">На сайте: <?=HTML::chars(Model::factory('Useful')->get_user_time($project->user->registration_date));?></span>
                            </div>
                        </div>
                    </div>
					
                    <div class="settings" style="margin-top:10px;">
						<div class="project_title"><?=$project->title;?></div>
                        
                        <table cellspacing="0" class="project_desc" style="margin-top:20px;">
                        	<tr style="height:30px;">
                                <td style="width:160px; font-weight:bold;">Специализация:</td>
                                <td><span style="font-weight:bold"><?=HTML::chars($project->razdel->name);?>:</span> <?=HTML::chars($project->podrazdel->name);?></td>
                            </tr>
                            
                            <tr style="height:30px;">
                                <td style="width:160px; font-weight:bold;"></td>
                                <td><?=HTML::chars($project->variant->name);?></td>
                            </tr>
                            
                            <tr style="height:30px;">
                                <td style="width:160px; font-weight:bold;">Дата публикации:</td>
                                <td><?=date('d.m.Y', $project->date);?></td>
                            </tr>
                            
                            <tr style="height:30px;">
                                <td style="width:160px; font-weight:bold;">Срок выполнения:</td>
                                <td><?=HTML::chars(Model::factory('Useful')->format_days($project->length));?></td>
                            </tr>
                            
                            <tr style="height:30px;">
                                <td style="width:160px; font-weight:bold;">Стоимость:</td>
                                <td><?=HTML::chars(number_format($project->price, 0, ',', ' ').' '.$project->currency->name);?></td>
                            </tr>
                            
                            <tr style="height:30px;">
                                <td style="width:160px; font-weight:bold;">Вариант оплаты:</td>
                                <td><?=HTML::chars($project->prepay->name);?></td>
                            </tr>
                            
                            <tr style="height:30px;">
                                <td style="width:160px; font-weight:bold;">Способ оплаты:</td>
                                <td>
                                    <?php
                                        foreach ($project->paymeth->find_all() as $paymeth):
                                    ?>
                                    <div><?=HTML::chars($paymeth->name);?></div>
                                    <?php
                                        endforeach;
                                    ?>
                                </td>
                            </tr>
                        </table>
                        
                        <div class="project_desc_title">Описание проекта:</div>
                        <div class="project_description"><?=nl2br(HTML::chars($project->content));?></div>
                    </div>
                    
                </div>
				<div class="project" style="height:40px; padding:0; text-align:center;"><a href="#" class="answer_project">Предложить свои услуги</a></div>
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

<?php
    $answers = $project->answers->find_all();
    if (count($answers)> 0):
?>
<div class="container">
    <div class="answers project">
        <?php foreach ($answers as $answer): ?>
        
    	<div class="comment">
        	<div class="comment_main">
                    <span class="freelancer_name"><a href="<?=URL::base().Route::get('user')->uri(array('user_id' => $answer->user->id));?>" target="_blank"><?=HTML::chars($answer->user->first_name);?> <?=HTML::chars($answer->user->last_name);?></a></span>
            	
                <div style="overflow:hidden;">
                
                <div class="comment_avtar">
                    <div class="freelancer_avatar avatar" style="<?=(isset($answer->user->avatar->url))? 'background-image:url('.URL::base().$answer->user->avatar->url.');': '';?>"><a href="<?=URL::base().Route::get('user')->uri(array('user_id' => $answer->user->id));?>" target="_blank"></a></div>
                    <div class="freelancer_online">Online</div>
                </div>
                <div class="answer_text"><?php
                /*<div class="comment_preview">
                    <div class="comment_work">
                        <a href="#"><img src="files/1.png" alt="" /></a>
                    </div>
                    <div class="comment_work">
                        <a href="#"><img src="files/2.png" alt="" /></a>
                    </div>
                    <div class="comment_work">
                        <a href="#"><img src="files/3.png" alt="" /></a>
                    </div>
            	</div>
                 */
                ?><?=nl2br(HTML::chars($answer->text));?>
                    <div class="answer_pospis"><?=nl2br(HTML::chars($answer->user->podpis));?></div>
                </div>
                </div>
            </div>
            
            
            <div class="answer_bottom">
            	<ul>
                    <li><span style="font-weight:bold">Стоимость:</span> <?=HTML::chars(number_format($answer->price, 0, ',', ' '));?> <?=HTML::chars($answer->currency->name);?></li>
                    <?php if ($answer->prepay==1):?><li><?=ORM::factory('Options',array('name' => 'answer_prepay_name'))->value;?></li><?php endif;?>
                    <li><span style="font-weight:bold">Выполню:</span> за <?=HTML::chars(Model::factory('Useful')->format_days(number_format($answer->length, 0, ',', ' ')));?></li>
                    <?php /*<li><span style="font-weight:bold">Регион:</span> <?=HTML::chars($answer->user->region->region_name_ru);?></li>*/ ?>
                    <li style="padding-right:0;"><span style="font-weight:bold">Отзывы:</span></li>
                    <li style="background:none;">
                        <?=Request::factory('widgets/freereviews/'.$answer->user->id)->execute();?>
                    </li>
                </ul>
                <a href="#" class="select_freelancer">Выбрать исполнителя</a>
            </div>
        </div>
	<?php endforeach; ?>
    </div>
</div>
<?php endif;?>
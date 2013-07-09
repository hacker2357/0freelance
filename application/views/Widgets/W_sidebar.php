<div class="right sidebar">
    <div class="search_freelancers">
        <div class="search_header">Быстрый поиск фрилансеров</div>
        
        <div class="fast_search_selects">
            <select class="sidebar_razdel status right-select" id="razdels" onchange="get_podrazdels(this);">
                <option value="0">Все</option>
                <?php
                    foreach($razdels as $razdel):
                ?>
                <option value="<?=$razdel->id;?>"><?=$razdel->name;?></option>
                <?php
                    endforeach;
                ?>
            </select>
            
            <script type="text/javascript">
            function get_podrazdels(t)
            {
                var content = '<option value="0">Все</option>';
                
                if (t.value=='0')
                    $('#podrazdels').html(content).trigger('refresh');
                
                $.ajax({
                    type: 'POST',
                    url: '<?=URL::base(true);?>ajaxpodrazdels',
                    data: {razdel_id: $(t).val()},
                    dataType: 'json',
                    success: function(data)
                    {
                        content = content + Base64.decode(data.content);
                        $('#podrazdels').html(content).trigger('refresh');
                        $('#razdels-styler').css('z-index', '100000');
                    }
                  });
            }
            </script>
            
            <select class="sidebar_razdel2 status right-select" id="podrazdels">
                <option value="1">Все</option>
            </select>
            
            <a href="#" class="search_freelancer">Найти</a>
        </div>
    </div>
</div>
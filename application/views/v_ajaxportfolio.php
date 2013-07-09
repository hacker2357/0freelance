<li id="<?=$id;?>">
    <select name="dop[]" class="status spec" id="dop-<?=$id;?>" onchange="get_podrazdels_portfolio(this, 'podrazdel-'+this.id);">
        <option value="0">Не выбрано</option>
       <?php
            foreach($razdels as $razdel)
            {
                echo "<option value=\"$razdel->id\">$razdel->name</option>";
            }
       ?>

    </select>

    <select name="doppodrazdel[]" class="status spec second_select" id="podrazdel-dop-<?=$id;?>" onchange="add_li(this.parentNode.id);">
        <option value="0">Не выбрано</option>
    </select>
    <div class="close" onclick="remove_li(this.parentNode);"></div>
</li>
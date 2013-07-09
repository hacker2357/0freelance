<?php
    if (!empty($cities))
    {
        foreach ($cities as $city)
        {
    ?><option value="<?=$city->id_region;?>"><?=$city->region_name_ru;?></option><?php
        }
    }
?>
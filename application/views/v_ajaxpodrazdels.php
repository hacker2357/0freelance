<?php
    if (!empty($podrazdels))
    {
        foreach ($podrazdels as $podrazdel)
        {
    ?><option value="<?=$podrazdel->id;?>"><?=$podrazdel->name;?></option><?php
        }
    }
?>
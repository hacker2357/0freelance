<div class="avatar-reviews">
    <div class="avatar"<?=(!empty($avatar) && $avatar!=URL::base()) ? ' style="background: url('.$avatar.') left top no-repeat;"': '';?>><a href="<?=$link;?>" target="_blank"></a></div>
    <?=$reviews;?>
</div>
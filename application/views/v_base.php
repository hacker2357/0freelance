<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$page_title;?></title>
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<?=HTML::style('media/style.css');?>

<?=HTML::script('media/js/jquery-1.7.2.min.js');?>

<?=HTML::script('media/js/jquery-ui-1.10.2.custom.min.js');?>

<?=HTML::script('media/js/niftycube.js');?>

<?=HTML::script('media/js/jquery.formstyler.min.js');?>

<?=HTML::script('media/js/ie.js');?>

<?=HTML::script('media/js/moz.js');?>

<?php
    foreach($scripts as $s)
    {
        echo HTML::script($s);
    }
    
    foreach($styles as $st)
    {
        echo HTML::style($st);
    }
?>

<script type="text/javascript">
$(document).ready(function(e) {
	if ($.browser.msie)
	ie();
	else if ($.browser.mozilla)
	moz();
	$('select').styler();
	$('input[type="checkbox"]').styler();;
	$('input[type="radio"]').styler();
	$('input[type="file"]').styler();
	if (typeof footer == 'function')
	{
		footer();
                $(window).resize(function(){
                   // footer();
                   footer();
                });
	}
});
</script>
</head>

<body>
<?=(isset($menu))?$menu:'';?>
<div class="header-bg">
	<div class="header center">
    	<div class="logo"></div>
        <ul class="menu2">
        	<li><a href="#">Работа</a></li>
            <li><a href="#">Католог фрилансеров</a></li>
        </ul>
    </div>
</div>
<div class="search">
	<div class="header center search_con">
    	<label for="search_input">Поиск:</label>
    	<input type="text" class="search_input" id="search_input" value="" />
        <a href="#" class="search_a" id="search_a">Поиск</a>
    </div>
</div>


<?=$content;?>

<div class="footer">
	<div class="center header">
    	<div class="footer-logo"></div>
        <ul class="footer-menu">
        	<li><a href="#">Работа</a></li>
            <li><a href="#">Каталог фрилансеров</a></li>
        </ul>
    </div>
</div>
</body>
</html>
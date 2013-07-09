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

<?=HTML::script('media/js/jquery-ui-1.10.0.custom.min.js');?>

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
	$('input[type="checkbox"]').styler();
	$('input[type="radio"]').styler();
	$('input[type="file"]').styler();
});
</script>
</head>

<body>
<?=(isset($menu))?$menu:'';?>
<?=(isset($content))?$content:'';?>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>哈哈</h1>
<ul>
	<?php if(is_array($newslist)): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><li><?php echo ($news[title]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</body>
</html>
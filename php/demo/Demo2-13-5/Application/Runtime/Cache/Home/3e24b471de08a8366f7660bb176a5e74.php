<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>新闻管理</h1>
	<div>
		<a href="add">添加新闻</a>	
	</div>
	<ul>
	<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><li><?php echo ($n["title"]); ?> <a href="edit/id/<?php echo ($n["id"]); ?>">编辑</a> <a href="del/id/<?php echo ($n["id"]); ?>">删除</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</body>
</html>
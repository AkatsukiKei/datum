<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>添加新闻</h1>
<div>
	<form action="" method="post">
		栏目：
		<select name="catid">
			<?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat[id]); ?>"><?php echo ($cat[categoryname]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<br />
		标题：<input type="text" name="title" />
		<br />
		重复标题：<input type="text" name="retitle" />
		<br />
		内容：<textarea rows="8" cols="20" name="content"></textarea>
		<br />
		作者：<input type="text" name="author" />
		<br />
		<input type="submit" name="submit" value="添加" /> 
	</form>
</div>
</body>
</html>
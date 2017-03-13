<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>编辑新闻</h1>
<div>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo ($news["id"]); ?>">
		栏目：
		<select name="catid">
			<?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat[id]); ?>"><?php echo ($cat[categoryname]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<br />
		标题：<input type="text" name="title" value="<?php echo ($news["title"]); ?>" />
		<br />
		内容：<textarea rows="8" cols="20" name="content"><?php echo ($news["content"]); ?></textarea>
		<br />
		作者：<input type="text" name="author" value="<?php echo ($news["author"]); ?>" />
		<br />
		<input type="submit" name="submit" value="保存" /> 
	</form>
</div>
</body>
</html>
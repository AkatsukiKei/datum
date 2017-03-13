<!DOCTYPE html>
<html>
<head>
	<title>2-6-1 Web核心技术</title>
</head>
<body>
<form action = "list.php" method="post">
	<table>
		<tr>
			<td>标题</td>
			<td>
				<input type="text" name="title" value="" id="title" />
				<span id="titleError" style="display: none;">标题不能为空</span>
			</td>
		</tr>
		<tr>
			<td>发表时间</td>
			<td><input type="text" name="date" value="<?php echo date('Y-m-d');?>" /></td>
		</tr>
		<tr>
			<td>文章内容</td>
			<td>
				<textarea name="content" id="content" cols="50px" rows="10px"></textarea>
				<span id="contentError" style="display: none;">内容不能为空</span>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="发表文章" /></td>
		</tr>
	</table>
</form>
</body>
<script type="text/javascript">
	window.onload = function(){
		var T = document.getElementById("title");
		var TE = document.getElementById("titleError");
		var C = document.getElementById("content");
		var CE = document.getElementById("contentError");
		T.onblur = function(){
			if(T.value.length == 0){
				TE.style.display = "inline";
			}
			else{
				TE.style.display = "none";
			}
		}
		C.onblur = function(){
			if(C.value.length == 0){
				CE.style.display = "block";
			}
			else{
				CE.style.display = "none";
			}
		}
	}
</script>
</html>
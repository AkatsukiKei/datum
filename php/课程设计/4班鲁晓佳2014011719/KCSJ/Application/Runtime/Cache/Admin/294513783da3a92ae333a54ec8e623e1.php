<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>北京国际数学研究中心数学数字化图书馆</title>
<link rel="stylesheet" href="/KCSJ/Public/end/css/bootstrap.css">
<link href="/KCSJ/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/KCSJ/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/KCSJ/Public/end/js/jquery.js"></script>    
<script src="/KCSJ/Public/end/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   
    <span class="navbar-logo" > 北京国际数学研究中心数学数字化图书馆</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="/KCSJ/index.php/Admin/Index/index" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：<?php echo I("session.username");?></a></li>
      <li><a href="/KCSJ/index.php/Admin/Admin/logout" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
   
  </div><!-- /.navbar-collapse -->
</nav> 

	<div class="row">
    	<div class=" col-md-2 sidebar">
    	  <div id="accordion">
    	    <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li  ><a href="/KCSJ/index.php/Admin/Admin/lists">用户管理</a></li>
            <li  ><a href="/KCSJ/index.php/Admin/Admin/add">添加管理员</a></li>
            <?php $id=$_SESSION['userid'];?>
    	      <li ><a href="/KCSJ/index.php/Admin/Admin/repwd/id/<?php echo ($id); ?>">修改个人密码</a></li>
    	      <li ><a href="/KCSJ/index.php/Admin/Admin/edit/id/<?php echo ($id); ?>">修改个人信息</a></li>
  	      </ul>
    	    <h3><a href="#"><span class="glyphicon glyphicon-file"></span>新闻管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li><a href="/KCSJ/index.php/Admin/News/add">添加新闻</a></li>
    	      <li><a href="/KCSJ/index.php/Admin/News/lists">管理新闻</a></li>
  	      </ul>
    	    <h3><a href="#"><span class="glyphicon glyphicon-book"></span>图书管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li ><a href="/KCSJ/index.php/Admin/Book/add">添加图书</a></li>
    	      <li><a href="/KCSJ/index.php/Admin/Book/lists">列表图书</a></li>
  	      </ul>
    	    <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>标签/关键字<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
    	    <ul>
    	      <li ><a href="tag_list.html" >标签管理</a></li>
    	      <li ><a href="key_list.html">关键字管理</a></li>
  	      </ul>
  	    </div>
    	</div>
        
         	<div class="col-md-10 col-md-offset-2 ">
<form action="/KCSJ/index.php/Admin/News/batchDel" method="post">
  <ol class="breadcrumb">
    <li><a href="/KCSJ/index.php/Admin/Index/index">首页</a></li>
    <li class="active">新闻管理</li>
  </ol>
  <div class="table-responsive ">
    <h3>新闻管理列表 <small>News List</small></h3>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
      <tr>
        <th width="5%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
        <th width="59%">新闻标题</th>
        <th width="7%">作者</th>
        <th width="10%">添加时间</th>
        <th width="7%">访问量</th>
        <th width="12%">操作</th>
      </tr>

      <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
          <td><input type="checkbox" name="id[]" id="checkbox11" value="<?php echo ($d["id"]); ?>"></td>
          <td><?php echo ($d["title"]); ?></td>
          <td><?php echo ($d["author"]); ?></td>
          <td><?php echo ($d["posttime"]); ?></td>
          <td><?php echo ($d["viewcount"]); ?></td>
          <td><a href="/KCSJ/index.php/Admin/News/edit/id/<?php echo ($d["id"]); ?>">修改</a> <a href="/KCSJ/index.php/Admin/News/del/id/<?php echo ($d["id"]); ?>">删除</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
  </div>
  <div class="input-group pull-left form">
    <button type="submit" class="btn btn-danger "> 删 除</button>
  </div>
 
  <ul class="pagination pull-right" >
    <li class="disabled"><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
</form>
</div>

        	
	
</div>
<script src="/KCSJ/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>
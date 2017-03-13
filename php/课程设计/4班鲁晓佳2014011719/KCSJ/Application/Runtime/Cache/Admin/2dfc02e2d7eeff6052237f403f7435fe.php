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
    	  <ol class="breadcrumb">
    	    <li><a href="/KCSJ/index.php/Admin/Index/index">首页</a></li>
    	    <li><a href="/KCSJ/index.php/Admin/News/lists">新闻管理</a></li>
    	    <li class="active">添加新闻</li>
  	    </ol>
    	  <h3 class="down">添加新闻 <small>News Add</small></h3>
    	  <div class="list-group form">
    	    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="post" action="/KCSJ/index.php/Admin/News/doAdd">
    	      <div class="list-group-item">
    	        <label for="inputEmail3" class="col-sm-2 control-label">新闻标题</label>
    	        <div class="col-sm-10">
    	          <input type="input" class="form-control" id="inputEmail3" name="title" placeholder="">
  	          </div>
  	        </div>
    	      <div class="list-group-item">
    	        <label for="inputEmail3" class="col-sm-2 control-label">发布时间</label>
    	        <div class="col-sm-10"><input type="input" class="form-control" name="posttime" id="inputEmail3" value="<?php echo date('Y-m-d');?>" readonly ></div>
  	        </div>
    	     
    	      <div class="list-group-item">
    	        <label for="inputEmail3" class="col-sm-2 control-label">发布人/作者</label>
    	        <div class="col-sm-10">
    	          <input type="input" class="form-control" id="inputEmail3" name="author" placeholder="张明亮">
  	          </div>
  	        </div>
    	     
    	    
    	      <div class="list-group-item">
               <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
    	        <div class="col-sm-10">
    	          
    	          <textarea id="editor_id" name="content" style="width:90%;height:300px;">
&lt;strong&gt;HTML内容&lt;/strong&gt;
</textarea>
    	        </div>
  	        </div>
    	      <div class="list-group-item">
              <div class="col-sm-offset-2 col-sm-5">
              <div class="row">
    	        <div class=" col-sm-5">
    	          <button type="submit" class="btn btn-primary">添 加 新 闻</button>
  	          </div>
              <div class=" col-sm-5">
   	            <button type="reset" class="btn btn-warning">重 置 内 容</button>
  	          </div>
              </div>
              </div>
  	        </div>
  	      </form>
  	    </div>
  	  </div>
<script charset="utf-8" src="/KCSJ/Public/end/js/editor/kindeditor.js"></script>
<script charset="utf-8" src="/KCSJ/Public/end/js/editor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
        	
	
</div>
<script src="/KCSJ/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>
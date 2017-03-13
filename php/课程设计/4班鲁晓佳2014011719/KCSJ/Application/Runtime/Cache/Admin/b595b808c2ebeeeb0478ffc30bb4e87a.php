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
  <li><a href="#">首页</a></li>
  
</ol>
        	<div class="row pad">
            	<div class="col-md-6">
                <div class="panel panel-default">
  <div class="panel-body">
    <img src="/KCSJ/Public/end/images/main1.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >添加新闻<span><?php echo date('Y-m-d');?></span></h5>
    	<p>用于新闻添加，包括作者、日期、新闻内容等，可编辑新闻文字样式和图片插入。</p>        
    </div>
    <a href="/KCSJ/index.php/Admin/News/add">
      <button type="button" class="btn btn-primary pull-right" >点击进入
      <span class="glyphicon glyphicon-circle-arrow-right"></span> 
      </button>
    </a>
 <span class="info">已经添加：<span class="red"> <?php echo newsCount();?> </span>条</span>
    </div>
</div>
                </div>
                <div class="col-md-6">
                <div class="panel panel-default">
   <div class="panel-body">
     <img src="/KCSJ/Public/end/images/main2.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >账户管理<span><?php echo date('Y-m-d');?></span></h5>
    	<p>统一管理用户账户，可以对用户进行修改、删除，并且可以修改自己的个人信息和</p>        
    </div>
    <a href="/KCSJ/index.php/Admin/Admin/lists">
      <button type="button" class="btn btn-primary pull-right">点击进入
      <span class="glyphicon glyphicon-circle-arrow-right"></span> 
      </button>
    </a>
    </div>   
    </div>
</div>
                </div>
                
                <div class="row pad">
            	<div class="col-md-6">
                <div class="panel panel-default">
  <div class="panel-body">
    <img src="/KCSJ/Public/end/images/main3.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >添加图书<span><?php echo date('Y-m-d');?></span></h5>
    	<p>输入图书ISBN号，从数据库中提取该书信息，确认无误后可选择添加为新进图书或推荐图书。</p>        
    </div>
    <a href="/KCSJ/index.php/Admin/Book/add">
      <button type="button" class="btn btn-primary pull-right">点击进入
        <span class="glyphicon glyphicon-circle-arrow-right"></span> 
      </button>
    </a>
    <span class="info">已经添加：<span class="red"> <?php echo booksCount();?> </span>本</span>
    </div>
</div>
                </div>
                <div class="col-md-6">
                <div class="panel panel-default">
   <div class="panel-body">
     <img src="/KCSJ/Public/end/images/main4.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >添加标签<span><?php echo date('Y-m-d');?></span></h5>
    	<p>添加图书常用标签，为用户提供可选标签，并且可以对标签进行修改和删除管理。</p>        
    </div>
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
 <span class="info">已经添加：<span class="red">8249</span>个</span>
    </div>   
    </div>
</div>
                </div>
                <div class="row pad">
            	<div class="col-md-6">
                <div class="panel panel-default">
  <div class="panel-body">
    <img src="/KCSJ/Public/end/images/main5.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >添加关键字<span><?php echo date('Y-m-d');?></span></h5>
    	<p>为图书添加关键字，使用户搜索时可以准确、快速地定位到图书。</p>        
    </div>
     <span class="info">已经添加：<span class="red">87249</span>个</span>
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
    </div>
</div>
                </div>
                <div class="col-md-6">
                <div class="panel panel-default">
   <div class="panel-body">
     <img src="/KCSJ/Public/end/images/main6.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >日志管理<span><?php echo date('Y-m-d');?></span></h5>
    	<p>系统日志自动生成，在此可以方便地查看和管理系统日志。</p>        
    </div>
    
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
 <span class="info">已经生成：<span class="red">8249</span>条</span>
    </div>   
    </div>
</div>
                </div>
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
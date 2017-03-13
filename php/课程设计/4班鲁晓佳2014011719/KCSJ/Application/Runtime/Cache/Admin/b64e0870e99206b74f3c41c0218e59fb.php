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
    	    <li><a href="/KCSJ/index.php/Admin/Admin/lists">帐户管理</a></li>
    	    <li class="active">个人信息修改</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>个人信息修改 <small>Personal Modify</small></h3>
    	    <div class="list-group ">
    	      <div class="list-group-item">
    	        <form role="form" method="post" action="/KCSJ/index.php/Admin/Admin/doEdit">
              <?php if(is_array($admin_users)): $i = 0; $__LIST__ = $admin_users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="input-group"> <span class="input-group-addon">用<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">户<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">名：</span>
    	            <input type="text" class="form-control" placeholder="administrator" readonly value="<?php echo ($d["username"]); ?>" name="username">
  	            </div>
    	          <div class="input-group "> <span class="input-group-addon" for="inputWarning1">真实姓名：</span>
    	            <input type="text" class="form-control" placeholder="张黎明" id="input" value="<?php echo ($d["realname"]); ?>" name="realname">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">手机号码：</span>
    	            <input type="text" class="form-control" placeholder="13025458799" value="<?php echo ($d["tel"]); ?>" name="tel">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">电子邮箱：</span>
    	            <input type="text" class="form-control" placeholder="86823499@qq.com" value="<?php echo ($d["mail"]); ?>" name="mail">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">注册时间：</span>
    	            <input type="text" class="form-control" value="<?php echo ($d["regtime"]); ?>" name="regtime" readonly>
  	            </div>
                <input type="hidden" value="<?php echo ($d["id"]); ?>" name="id" />
    	          <div class="input-group">
    	            <button type="submit" class="btn btn-primary "> &nbsp;&nbsp;保<img src="/KCSJ/Public/end/images/em.png" alt="" width="20" height="20">存&nbsp;&nbsp;</button>
  	            </div><?php endforeach; endif; else: echo "" ;endif; ?>
  	          </form>
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
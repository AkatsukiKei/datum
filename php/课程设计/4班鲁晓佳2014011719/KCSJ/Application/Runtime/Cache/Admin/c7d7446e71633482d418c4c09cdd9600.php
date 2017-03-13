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
    	    <li><a href="/KCSJ/index.php/Admin/Book/lists">图书管理</a></li>
    	    <li class="active">修改图书</li>
  	    </ol>
        <div class="table-responsive ">
    	   <h3 class="down">修改图书 <small>Books Edit</small></h3>
    	 
   	  <div class="list-group">
        <div class="list-group-item">
          <form role="form" method="post" action="/KCSJ/index.php/Admin/Book/doEdit">
          <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="input-group"> <span class="input-group-addon">图书名称：</span>
              <input type="text" class="form-control" placeholder="" name="title" value="<?php echo ($d["title"]); ?>">
            </div>
            <div class="input-group "> <span class="input-group-addon" for="inputWarning1">作<img src="/KCSJ/Public/end/images/em.png" alt="" width="24" height="20">者：</span>
              <input type="text" class="form-control" placeholder="" id="input" name="author" value="<?php echo ($d["author"]); ?>">
            </div>
            <div class="input-group"> <span class="input-group-addon">出<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">版<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">社：</span>
              <input type="text" class="form-control" placeholder="" name="publisher" value="<?php echo ($d["publisher"]); ?>">
            </div>
            <div class="input-group"> <span class="input-group-addon">出版日期：</span>
              <input type="text" class="form-control" placeholder="" name="publishdate" value="<?php echo ($d["publishdate"]); ?>">
            </div>
            <div class="input-group"> <span class="input-group-addon">I<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">S<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">B<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">N<img src="/KCSJ/Public/end/images/em.png" alt="" width="3" height="20">：</span>
              <input type="text" class="form-control" placeholder="" name="isbn" value="<?php echo ($d["isbn"]); ?>">
            </div>
            <div class="input-group"> <span class="input-group-addon">I<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">S<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">S<img src="/KCSJ/Public/end/images/em.png" alt="" width="6" height="20">N<img src="/KCSJ/Public/end/images/em.png" alt="" width="3" height="20">：</span>
              <input type="text" class="form-control" placeholder="" name="issn" value="<?php echo ($d["issn"]); ?>">
            </div>
            <div class="input-group"> <span class="input-group-addon">创建时间：</span>
              <input type="text" class="form-control" value="<?php echo date('Y-m-d');?>" readonly name="createtime">
            </div>
            <div class="input-group"> <span class="input-group-addon">是否推荐：</span>
              <span class="form-control">
                <input type="radio" name="recommend" value="1" />是<img src="/KCSJ/Public/end/images/em.png" alt="" width="20" height="20">
                <input type="radio" name="recommend" value="0" checked="checked" />否
              </span>
            </div>
            <div class="input-group "> <span class="input-group-addon">摘<img src="/KCSJ/Public/end/images/em.png" alt="" width="24" height="20">要：</span>
              <textarea id="editor_id" name="summary" style="width:90%;height:300px;"><?php echo ($d["summary"]); ?></textarea>
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
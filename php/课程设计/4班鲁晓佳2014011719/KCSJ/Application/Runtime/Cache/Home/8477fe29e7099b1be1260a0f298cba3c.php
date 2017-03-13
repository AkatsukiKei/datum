<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>首页 - 北京国际数学研究中心数学数字化图书馆</title>

    <!-- Bootstrap core CSS -->
    <link href="/KCSJ/Public/front/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/KCSJ/Public/front/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/KCSJ/Public/front/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/KCSJ/Public/front/css/book-3d.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/KCSJ/Public/front/js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond./KCSJ/Public/front/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <a id="top"></a>
    <div id="move-to-top"><a href="#top" class="move-to-top" title="回到页面顶部"><i class="fa fa-arrow-circle-up fa-2x"></i></a></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">北京国际数学研究中心数学数字化图书馆</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/KCSJ/index.php/Home/Index/index"><i class="fa fa-home fa-lg"></i> 首页</a></li>
                    <li><a href="/KCSJ/index.php/Home/Index/aboutus"><i class="fa fa-flag fa-lg"></i> 关于</a></li>
                    <li><a href="/KCSJ/index.php/Home/Index/contact"><i class="fa fa-envelope fa-lg"></i> 联系方式</a></li>

                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>

    ﻿    <div class="container">

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-9">

                <div class="page-header">
                  <h1>图书列表标题</h1>
                </div>
                <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="media booklist-item first">
                    <a class="media-left" href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>">
                        <img class="book-thumb" src="http://pku.summon.serialssolutions.com/2.0.0/image/custom?url=http%3A%2F%2F202.112.150.126%2Findex.php%3Fclient%3Dpku%26isbn%3D9781603842020%2Fcover&size=small" />
                    </a>
                    <div class="media-body">
                        <a href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>" target="_blank" class="book-title"><h4 class="media-heading"><?php echo ($d["title"]); ?></h4></a>

                        <p class="book-tags">
                            <span class="label label-primary"><i class="fa fa-tags"></i> 标签</span>                            
                            <a href="#" class="label label-info" role="button">标签1</a>
                            <a href="#" class="label label-info" role="button">标签22</a>
                            <a href="#" class="label label-info" role="button">标签333</a>
                        </p>

                        <p><?php echo (msubstr($d["summary"],0,150,'utf-8',true)); ?><a class="label label-success book-read-more" href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>"><i class="fa fa-plus"></i> 更多信息</a></p>
                    </div>               
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <nav class="text-center">
                  <ul class="pagination">
                    <li class="prev"><a href="#">前一页 &laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li class="next"><a href="#">&raquo; 后一页</a></li>
                  </ul>
                </nav>

            </div>

            <div class="col-md-3 sidebar">

                    <h2 class="section-title-md"><i class="fa fa-gears"></i> 查询选项</h2>

                    <div class="input-group input-grp-custom">
                        <span class="input-group-addon">书名</span>
                        <input type="text" class="form-control">
                    </div>

                    <div class="input-group input-grp-custom">
                        <span class="input-group-addon">作者</span>
                        <input type="text" class="form-control">
                    </div>

                    <div class="input-group input-grp-custom">
                        <span class="input-group-addon">出版社</span>
                        <input type="text" class="form-control">
                    </div>

                    <div class="input-group input-grp-custom">
                        <span class="input-group-addon">ISBN/ISSN</span>
                        <input type="text" class="form-control">
                    </div>

                    <div class="input-group input-grp-custom">
                        <span class="input-group-addon">标签</span>
                        <input type="text" class="form-control">
                    </div>
                
                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i> 查询</button>
                    <button type="button" class="btn btn-default"><i class="fa fa-remove"></i> 取消重填</button>

                <hr />

                <div class="panel panel-default" id="tags-mostused">
                  <div class="panel-heading"><i class="fa fa-tags"></i> 常用标签</div>
                  <div class="panel-body">
                        <a href="#" class="label label-default" role="button">标签1</a>
                        <a href="#" class="label label-default" role="button">标签22</a>
                        <a href="#" class="label label-default" role="button">标签333</a>
                        <a href="#" class="label label-default" role="button">标签1</a>
                        <a href="#" class="label label-default" role="button">标签22</a>
                        <a href="#" class="label label-default" role="button">标签333</a>
                  </div>
                </div>

                <ul class="list-group" id="keywords-mostused">
                  <li class="list-group-item active"><i class="fa fa-star"></i> 使用最多的关键字</li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Dapibus ac facilisis </a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Morbi leo risus</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Porta ac consectetur ac</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Vestibulum at eros</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Dapibus ac facilisis </a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Morbi leo risus</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Porta ac consectetur ac</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Vestibulum at eros</a></li>
                </ul>

            </div>

        </div>

    </div><!-- /container -->
    <footer role="contentinfo">
      <div class="container">
        <div class="col-md-8">
            <h3 class="footer-logo">北京国际数学研究中心<br />数学数字化图书馆</h3>

            <ul class="logo-wall">
                <li><a href="http://www.pku.edu.cn" target="_blank"><img src="/KCSJ/Public/front/images/logo/pku-logo.png" alt="北京大学" title="北京大学"/></a></li>
                <li><a href="http://lib.pku.edu.cn" target="_blank"><img src="/KCSJ/Public/front/images/logo/pkulib-logo.png" alt="北京大学图书馆" title="北京大学图书馆"/></a></li>
                <li><a href="http://bicmr.pku.edu.cn" target="_blank"><img src="/KCSJ/Public/front/images/logo/bicmr-logo.png" alt="北京国际数学研究中心" title="北京国际数学研究中心"/></a></li>
            </ul>
        </div>

        <div class="col-md-4 contact">
            <h3 class="footer-contact">联系方式</h3>
            <dl>
                <dt><i class="fa fa-phone fa-lg fa-fw"></i> 电话</dt><dd>(86 10) 6274 4148</dd>                                
                <dt><i class="fa fa-fax fa-lg fa-fw"></i> 传真</dt><dd>(86 10) 6274 4134</dd>
                <dt><i class="fa fa-envelope fa-lg fa-fw"></i> 邮件</dt><dd><a href="mailto:admin-bicmrlib@math.pku.edu.cn">admin-bicmrlib@math.pku.edu.cn</a></dd>
                <dt><i class="fa fa-building fa-lg fa-fw"></i> 地址</dt><dd>北京市海淀区颐和园路5号<br />北京大学镜春园82号甲乙丙楼一层 100871</dd>
            </dl>
        </div>

        <div class="col-md-12 text-center copyright">
            <p>&copy; 2014 版权所有 <a href="http://bicmr.pku.edu.cn" target="_blank">北京国际数学研究中心</a> Beijing International Center for Mathematical Research</p>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/KCSJ/Public/front/js/jquery.min.js"></script>
    <script type="text/javascript" src="/KCSJ/Public/front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/KCSJ/Public/front/js/common.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#books-carousel .books-ctrl-left").click(function () {
                $("#books-carousel").carousel('prev');
            });

            $("#books-carousel .books-ctrl-right").click(function () {
                $("#books-carousel").carousel('next');
            });

        });
    </script>

</body>
</html>
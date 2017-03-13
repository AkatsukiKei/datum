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
                  <h1>新闻</h1>
                </div>
                <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="media articlelist-item first">
                    <div class="media-left text-center article-pubdate-viewcount">
                        <div class="article-pubdate">
                        <?php
 $date = $d["posttime"]; $year = substr($date,0,4); $month = substr($date,5,2); $day = substr($date,8); echo "<span class='pubdate-day text-center'>".$day."</span><span class='pubdate-year-mon text-center'>".$year."年".$month."月</span>"; ?>
                        </div>

                        <div class="article-viewcount">
                            <span class="viewcount-text"><i class="fa fa-bar-chart"></i> 浏览次数</span>
                            <span class="viewcount-num badge"><?php echo ($d["welcome"]); ?></span>
                        </div>
                    </div>

                    <div class="media-body">
                        <a href="/KCSJ/index.php/Home/News/detail/id/<?php echo ($d["id"]); ?>" target="_blank" class="article-title">
                            <h4 class="media-heading">
                               <?php echo ($d["title"]); ?>
                            </h4>
                        </a>

                        <p class="article-content">
                            <?php echo (msubstr($d["content"],0,150,'utf-8',true)); ?>                          
                        </p>

                        <a class="article-read-more" href="/KCSJ/index.php/Home/News/detail/id/<?php echo ($d["id"]); ?>">阅读全文 <i class="fa fa-angle-double-right fa-lg"></i> </a>
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

                <h2 class="section-title-md"><i class="fa fa-search"></i> 图书查询</h2>

                <div class="input-group">
                  <input type="text" class="form-control" placeholder="书名/作者/标签">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                  </span>
                </div>

                <hr />

                <ul class="list-group" id="article-archives">
                  <li class="list-group-item active"><i class="fa fa-file-text-o"></i> 以前的新闻</li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年12月</a><span class="badge">14</span></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年11月</a><span class="badge">8</span></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年10月</a><span class="badge">3</span></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年9月</a><span class="badge">1</span></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年8月</a><span class="badge">11</span></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年7月</a><span class="badge">23</span></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年6月</a><span class="badge">4</span></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> 2014年5月</a><span class="badge">9</span></li>
                  <li class="list-group-item footer text-center"><a href="#" target="_blank">更早新闻 <i class="fa fa-arrow-circle-right"></i></a></li>
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
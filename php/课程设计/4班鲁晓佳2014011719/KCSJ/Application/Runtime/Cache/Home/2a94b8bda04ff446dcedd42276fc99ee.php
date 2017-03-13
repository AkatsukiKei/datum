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
        <div class="jumbotron welcome-wall">
            <h1>欢迎访问<br />
                北京国际数学研究中心<br />
                数字化图书馆</h1>
        </div>

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-8">
                
                <h2 class="section-title">图书查询</h2>

                <form class="form-inline" role="form">

                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" id="keywords" placeholder="书名/作者/标签">

                        <span class="input-group-btn" style="width: 1%; display: table-cell; vertical-align: middle;">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search fa-lg"></i> 查询</button>
                        </span>                        
                    </div>
                </form>
                <span class="help-block" style="padding-left: 10px;">注：这里仅搜索数学学科下的图书，也可在搜索选项中修改。</span>        
                
                <div class="clear"></div>
                
                <div class="panel-group" id="tags-cloud" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-custom" role="tab" id="toggle-tagscloud">

                          <h4 class="panel-title text-center">
                            <a data-toggle="collapse" data-parent="#tags-cloud" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              选择一个标签查询
                            </a>
                          </h4>

                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="toggle-tagscloud">
                            <div class="panel-body">
                                <button class="btn btn-danger btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Algebra</button>
                                <button class="btn btn-danger btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Algebraic Geometry</button>
                                <button class="btn btn-danger btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Geometric Analysis</button>
                                <button class="btn btn-danger btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Number Theory</button>
                                <div class="clear"></div>
                                <button class="btn btn-warning btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Symplectic Geometry</button>
                                <button class="btn btn-warning btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Topology</button>
                                <button class="btn btn-warning btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Quantum Math</button>
                                <button class="btn btn-warning btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Symplectic Geometry</button>
                                <button class="btn btn-warning btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Topology</button>
                                <div class="clear"></div>
                                <button class="btn btn-success btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Algebra</button>
                                <button class="btn btn-success btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Algebraic Geometry</button>
                                <button class="btn btn-success btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Geometric Analysis</button>
                                <button class="btn btn-success btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Number Theory</button>
                                <div class="clear"></div>
                                <button class="btn btn-info btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Symplectic Geometry</button>
                                <button class="btn btn-info btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Topology</button>
                                <button class="btn btn-info btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Quantum Math</button>
                                <button class="btn btn-info btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Symplectic Geometry</button>
                                <button class="btn btn-info btn-tag" type="button"><i class="fa fa-tag fa-lg"></i> Topology</button>

                                <div class="col-sm-5">
                                    <hr />
                                </div>
                                <div class="col-sm-2">
                                    <h4 class="text-center"><a href="#" target="_blank" class="anchorinline">更多标签...</a></h4>
                                </div>
                                <div class="col-sm-5">
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 book-with-3d-cover" id="book-recommend">                       
                    <div class="inset-top"></div>                 
                    <?php if(is_array($recommend)): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="book-cover books-3d">
                        <div class="book-3d">                            
                            <a href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>">
                                <img src="http://pku.summon.serialssolutions.com/2.0.0/image/custom?url=http%3A%2F%2F202.112.150.126%2Findex.php%3Fclient%3Dpku%26isbn%3D9781603842020%2Fcover&size=large" title="book title" alt="book title"/>
                            </a>
                        </div>
                    </div>
                    
                    <div class="book-desc">
                        <div class="ribbon"><a href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>">推荐阅读</a></div>
                        <h3><?php echo ($d["title"]); ?></h3>
                        <hr />
                        <dl class="dl-horizontal">
                            <dt>作者</dt>
                            <dd><?php echo ($d["author"]); ?></dd>
                            <dt>出版社</dt>
                            <dd><?php echo ($d["publisher"]); ?></dd>
                            <dt>出版日期</dt>
                            <dd><?php echo ($d["publishdate"]); ?></dd>
                            <dt>摘要</dt>
                            <dd><?php echo (msubstr($d["summary"],0,150,'utf-8',true)); ?></dd>
                        </dl>

                        <div class="col-md-12 text-center">
                            <a href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>"><button type="button" class="btn btn-primary"><i class="fa fa-mail-forward"></i> 阅读</button></a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-bookmark"></i> 收藏</button>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                    <div class="inset-bottom"></div>
                </div>

                <h2 class="section-title">新进书目</h2>                

                <div id="books-carousel" class="carousel slide books" data-ride="carousel" data-interval="7000">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="text-center">
                                <?php if(is_array($books)): $i = 0; $__LIST__ = array_slice($books,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><!-- ITEM-->
                                <div class="book-item col-md-6">
                                    <div class="book-item-cover">
                                        <a href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>">
                                            <img src="http://pku.summon.serialssolutions.com/2.0.0/image/custom?url=http%3A%2F%2F202.112.150.126%2Findex.php%3Fclient%3Dpku%26isbn%3D9781603842020%2Fcover&size=small"></a>
                                    </div>
                                    <div class="book-item-desc">
                                        <h3><?php echo ($d["title"]); ?></h3>
                                        <hr  class="hr-small-margin" />
                                        <p><?php echo (msubstr($d["summary"],0,60,'utf-8',true)); ?></p>
                                    </div>
                                </div>
                                <!-- ITEM--><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>

                        <div class="item">
                            <div class="text-center">
                                <?php if(is_array($books)): $i = 0; $__LIST__ = array_slice($books,2,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><!-- ITEM-->
                                <div class="book-item col-md-6">
                                    <div class="book-item-cover">
                                        <a href="/KCSJ/index.php/Home/Book/detail/id/<?php echo ($d["id"]); ?>">
                                            <img src="http://pku.summon.serialssolutions.com/2.0.0/image/custom?url=http%3A%2F%2F202.112.150.126%2Findex.php%3Fclient%3Dpku%26isbn%3D9781603842020%2Fcover&size=small"></a>
                                    </div>
                                    <div class="book-item-desc">
                                        <h3><?php echo ($d["title"]); ?></h3>
                                        <hr  class="hr-small-margin"/>
                                        <p><?php echo (msubstr($d["summary"],0,60,'utf-8',true)); ?></p>
                                    </div>
                                </div>
                                <!-- ITEM--><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 books-control text-center">
                        <button class="books-ctrl books-ctrl-left"><i class="fa fa-arrow-left fa-lg"></i></button>
                        <button class="books-ctrl books-ctrl-right"><i class="fa fa-arrow-right fa-lg"></i></button>
                    </div>

                </div>

                </div>

            <div class="col-md-4 sidebar">

                <div class="panel panel-default" id="opening-time-box">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-lg"></i> 开放时间</h3>
                    </div>
                    <div class="panel-body text-center time-open-close-content">
                        周一至周五 <span class="time-open-close">8:00 - 22:00</span>
                        <hr style="margin:2px 0;"/>
                        <span class="time-open-close-note">遵照学校节假日休息安排</span>
                    </div>
                </div>

                <div class="panel panel-default " id="article-box">
                    <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list fa-lg"></i> 最近新闻</h3>
                    </div>
                    <div class="panel-body article-body">
                    <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="article">
                            <h3 class="article-title"><a href="/KCSJ/index.php/Home/News/detail/id/<?php echo ($d["id"]); ?>" target="_blank"><?php echo ($d["title"]); ?></a></h3>
                            <p><?php echo (msubstr($d["content"],0,75,'utf-8',true)); ?></p>
                        </div>

                            <div class="col-md-8 article-pubdate">发布日期：<?php echo ($d["posttime"]); ?></div>
                            <div class="col-md-4 article-more"><a href="/KCSJ/index.php/Home/News/detail/id/<?php echo ($d["id"]); ?>" target="_blank">阅读 <i class="fa fa-angle-double-right"></i></a></div>
                        

                        <hr  class="hr-small-margin"/><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>

                    <div class="panel-footer text-center">
                        <a href="/KCSJ/index.php/Home/News/lists" target="_blank">全部新闻 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div>

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
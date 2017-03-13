<?php
include "lib/dbConnect.php";

$catid = isset($_GET['catid']) ? intval($_GET['catid']) : '';
if ($catid == '') {
  exit("Error Params");
}

$sql = "SELECT * FROM news_category WHERE id=:catid";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":catid", $catid);
$stmt->execute();
$category = $stmt->fetch();

$sql = "SELECT * FROM news_news WHERE catid=:catid";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":catid", $catid);
$stmt->execute();
$list = $stmt->fetchAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>河北师范大学教务处</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="mybody nb">
    	<div class="top">
          <div class="topright">
        	<div class="quick"><a href="#">设为首页</a>&nbsp;|&nbsp;<a href="#">管理入口</a></div>
           <div id="nav">
           	<li class="bc"><a href="">首页</a>
           </li>
            	<li><a href="">岗位设置</a>
            <ul>
 				<li><a href="#">专业建设</a></li>
 				<li><a href="#">培养方案</a></li>
 				<li><a href="#">课程建设</a></li>
 				<li><a href="#">实践教学</a></li>
				
 			</ul></li>
            	<li><a href="">教学建设</a>
            <ul>
 				<li><a href="#">专业建设</a></li>
 				<li><a href="#">培养方案</a></li>
 				<li><a href="#">课程建设</a></li>
 				<li><a href="#">实践教学</a></li>
                <li><a href="#">质量工程</a></li>
                <li><a href="#">教研活动</a></li>
 			</ul></li>
            	<li><a href="">教学运行</a>
            <ul>
 				<li><a href="#">排课选课</a></li>
 				<li><a href="#">考试管理</a></li>
 				<li><a href="#">成绩管理</a></li>
 				<li><a href="#">学历学位</a></li>
				<li><a href="#">学籍异动</a></li>
				<li><a href="#">推荐免试研究生</a></li>
 			</ul></li>
            <li><a href="">教学保障</a>
            <ul>
 				<li><a href="#">教务管理系统</a></li>
 				<li><a href="#">教室管理</a></li>
 				<li><a href="#">多媒体管理</a></li>
 				<li><a href="#">教材管理</a></li>
				
 			</ul></li>
            <li><a href="">规章制度</a>
            <ul>
 				<li><a href="#">省部级</a></li>
 				<li><a href="#">校级</a></li>
 				
 			</ul></li>
            </div>
          </div>          
      </div>
      <div class="banner"><img src="images/banner.gif" width="1000" height="200" /></div>
      <div class="bread"><a href="#">首页</a> - <?php echo $category['categoryName'] ?></div>
      <div class="listleft">
      	<div class="xsfw" >
        	<h1><img src="images/listtzgg.gif" width="218" height="40" /></h1>
       	  <ul >
           	<li><a href="#" >关于2014-2015学年第开始一学雅通识课程开课</a></li> 
<li><a href="#" >关于开展“河北师学第四届拉沙德师范生教学技能了卡萨丁  </a></li>     
<li><a href="#" >关于举办中小学教格考试地方是笔试考前辅导培训欧委会</a></li>
<li><a href="#" >关于转专业同学补修课程的说明</a></li>
<li><a href="#" >关于2013级转专业学生教材费结算的通知</a></li>
<li><a href="#" >关于2013—2014学年第二学期期末考试课程的补（缓）拉法基</a></li>   </ul>
        </div>
        <div class="rl rl1">
        	<div class="date1">2013年10月08日</div>
            <div class="tweek">第<span class="yellow">24</span>教学周</div>
            <div class="week">星期四</div>
        </div>
  </div>
  
    
  <div class="listright">
    	<h1><?php echo $category['categoryName'];?></h1>
        <ul>
          <?php
            foreach ($list as $news) {
              echo "<li>";
              echo "<a href=\"content.php?id={$news['id']}\">{$news['title']}<span class=\"date\">{$news['inserttime']}</span></a>";
              echo "</li>";
            }
          ?>
        </ul>

    </div>
    <div id="page" style="margin-right:22px">
	<span class="disabled">前一页</span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=4">4</a><a href="#?page=5">5</a><a href="#?page=6">6</a><a href="#?page=2" class="disabled">后一页 
	 </a>
</div>
    </div>
    <div class="bottom">
    	<div class="copy">
    	  <p>copyright @ 2008-2013 http://jwc.hebtu.edu.cn All Rights Reserved         网站备案：冀ICP备0600665       
   	      </p>
    	  <p>河北师范大学教务处         地址：河北省石家庄市南二环东路20号        邮编：050024       电话（传真）：80789710 </p>
      </div>
    </div>
</body>
</html>

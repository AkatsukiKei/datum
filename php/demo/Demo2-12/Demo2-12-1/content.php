<?php
include "lib/dbConnect.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : '';
if ($id == '') {
  exit("Error Params");
}

$sql = "SELECT * FROM news_news WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$news = $stmt->fetch();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>河北师范大学教务处</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script src="js/nav.js"></script>
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
       <div class="bread"><a href="#">首页</a> - <a href="#">教学动态</a> - </div>
      <div class="conleft">
      <h1><?php echo $news['title'];?></h1>
        <h2>作者：<?php echo $news['author'] ?>&nbsp;&nbsp;&nbsp;&nbsp;     更新时间：<?php echo $news['inserttime']; ?></h2>
            <ul>
            	<?php echo $news['content'];?>
      
    </ul>
           <div class="next"><span class="font_next">上一篇：</span><a href="#">关于转专业同学修补课程相关</a><span class="font_next">下一篇：</span><a href="#">关于开展"河北师范大学第四届师范生比赛"</a></div>
      </div>

 
  <div class="conright">
      	<div class="conxsfw" >
        	<h1><img src="images/listtzgg.gif" width="218" height="40" /></h1>
       	  <ul >
           	<li><a href="#" >关于2014-2015学年第开始一学雅通识课程开课</a></li> 
<li><a href="#" >关于开展“河北师学第四届拉沙德师范生教学技能了卡萨丁  </a></li>     
<li><a href="#" >关于举办中小学教格考试地方是笔试考前辅导培训欧委会</a></li>
<li><a href="#" >关于转专业同学补修课程的说明</a></li>
<li><a href="#" >关于2013级转专业学生教材费结算的通知</a></li>
<li><a href="#" >关于2013—2014学年第二学期期末考试课程的补（缓）拉法基</a></li>  </ul>
        </div>
  <img src="images/var.gif" width="220" height="173" usemap="#Map" border="0" />
  <map name="Map" id="Map">
    <area shape="rect" coords="11,39,61,101" href="#" />
    <area shape="rect" coords="83,40,129,99" href="#" />
    <area shape="rect" coords="151,40,209,99" href="#" />
    <area shape="rect" coords="14,108,71,166" href="#" />
    <area shape="rect" coords="80,109,139,165" href="#" />
    <area shape="rect" coords="152,108,210,165" href="#" />
  </map>
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

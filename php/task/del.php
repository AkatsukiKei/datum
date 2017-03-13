 <!--del.oho-->
 <meta charset="utf-8"/>
<?php 
    $path=$_GET['path'];
    $prepath=dirname($path);
    $cpath=iconv('utf-8', 'gbk', $path);
    if(!unlink($cpath)){
        echo ("删除失败")."<br/>";
    }
    else
      {
        echo ("删除成功！")."<br/>";
      }
    echo "2秒后返回上一页面！"."<br/>";
    header("Refresh:5;url=nextDir.php?path=$prepath");
?>
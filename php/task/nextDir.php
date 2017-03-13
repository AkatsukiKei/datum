 <!--nextDir.php-->
 <meta charset="utf-8"/>
<?php 
	$path=$_GET['path'].'/';
	$dir_handle=opendir($path);                //打开文件系统所要处理的目录
    $prepath=dirname($path);
    echo "<a href='nextDir.php?path=$prepath'>..</a>";
    while($file=readdir($dir_handle)) {        //遍历目录下的所有对象
    	//echo $file;
        if($file!="." && $file!="..") {        //去掉目录下当前目录和上一级目录
            $filename=$file; 
			$filename=iconv("GB2312","UTF-8",$filename);
            if(!is_dir($path.$filename)){
            	$nextPath=$path.$filename;            
               	echo '<li>'.$filename." <a href='del.php?path=$nextPath'>删除</a>".'</li>';
			}
			else{
				$nextPath=$path.$filename;
				 echo '<li>'."<a href='nextDir.php?path=$nextPath'>$filename</a>".'</li>';
			}
        }
    }
    closedir($dir_handle);   
?>
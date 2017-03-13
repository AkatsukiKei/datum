<!--2.6.2.php-->
 <meta charset="utf-8"/>
 <?php
 $path='./';                                  //初使化用户所操作目录
    //$prevpath=dirname($path);                 //初使化当前脚本所在目录
    $dir_handle=opendir($path);                //打开文件系统所要处理的目录
    //$dir_handle=basename($dir_handle);
    while($file=readdir($dir_handle)) {        //遍历目录下的所有对象
        if($file!="." && $file!="..") {        //去掉目录下当前目录和上一级目录
            $filename=$file; 
			$filename=iconv("GB2312","UTF-8",$filename);        
            if(!is_dir($filename)){
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
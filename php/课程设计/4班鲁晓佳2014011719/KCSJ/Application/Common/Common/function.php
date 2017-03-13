<?php
function isLogin(){
	if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
		return false;
	}
	return true;
}

// 截取中文字符串函数
// $str:要截取的字符串
// $start=0：开始位置，默认从0开始
// $length：截取长度
// $charset=”utf-8″：字符编码，默认UTF－8
// $suffix=true：是否在截取后的字符后面显示省略号，默认true显示，false为不显示
// 模版使用：{$vo.title|msubstr=0,5,'utf-8',false}
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)  
{  
if(function_exists("mb_substr")){  
          if($suffix)  
          return mb_substr($str, $start, $length, $charset)."...";  
          else
               return mb_substr($str, $start, $length, $charset);  
     }  
     elseif(function_exists('iconv_substr')) {  
         if($suffix)  
              return iconv_substr($str,$start,$length,$charset)."...";  
         else
              return iconv_substr($str,$start,$length,$charset);  
     }  
     $re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef]
              [x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";  
     $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";  
     $re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";  
     $re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";  
     preg_match_all($re[$charset], $str, $match);  
     $slice = join("",array_slice($match[0], $start, $length));  
     if($suffix) return $slice."…";  
     return $slice;
}

// 统计news数据库中数据的数目
function newsCount() {
  $newsModel = D("news");
  $result = $newsModel->count();
  return $result;
}

// 统计books数据库中数据的数目
function booksCount() {
  $booksModel = D("books");
  $result = $booksModel->count();
  return $result;
}

// 新闻浏览量
function welcome($id) {
  $newsModel = M("news");
  $output = $newsModel->where("id=$id")->setInc('welcome',1);
  $welcome = $newsModel->find($id);
}

// 文章内容页的上一页标题
function proTitle($id) {
  $newsModel = M("news");
  $pro=$newsModel->where("id>".$id)->order('id desc')->limit('1')->find();  
  echo $pro['title'];
}

// 文章内容页的上一页id
function proId($id) {
  $newsModel = M("news");
  $pro=$newsModel->where("id>".$id)->order('id desc')->limit('1')->find();  
  echo $pro['id'];
}

// 文章内容页的下一页标题
function nextTitle($id) {
  $newsModel = M("news");
  $next=$newsModel->where("id<".$id)->order('id desc')->limit('1')->find(); 
  echo $next['title'];
}

// 文章内容页的下一页id
function nextId($id) {
  $newsModel = M("news");
  $next=$newsModel->where("id<".$id)->order('id desc')->limit('1')->find(); 
  echo $next['id'];
}
?>
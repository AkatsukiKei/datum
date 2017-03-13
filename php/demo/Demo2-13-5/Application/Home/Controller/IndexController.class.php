<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	$this->show("主页 <a href='index.php/News/index'>新闻管理</a>");
    }
}
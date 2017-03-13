<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function lists(){
        $newsModel = D("news");
		$news = $newsModel->order('id desc')->select();
		$this->assign('news', $news);
		$this->display();
    }

    public function detail(){
    	$newsModel = D("news");
    	$id = I('id');
		$news = $newsModel->where("id=$id")->select();
		$this->assign('news', $news);
        $this->display();
    }

    // public function archivelist(){
    //     $this->display();
    // }
}
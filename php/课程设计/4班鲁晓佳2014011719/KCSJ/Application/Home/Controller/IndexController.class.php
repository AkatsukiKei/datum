<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$newsModel = D("news");
		$news = $newsModel->order('id desc')->limit(3)->select();
		$this->assign('news', $news);
		$bookModel = D("books");
		$books = $bookModel->order('id desc')->limit(4)->select();
		$recommend = $bookModel->where('recommend=1')->order('id desc')->limit(1)->select();
		$this->assign('books', $books);
		$this->assign('recommend', $recommend);
		$this->display();
    }
}
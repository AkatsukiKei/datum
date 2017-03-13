<?php
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
    public function lists(){
        $bookModel = D("books");
		$books = $bookModel->order('id desc')->select();
		$this->assign('books', $books);
		$this->display();
    }
    public function detail(){
        $bookModel = D("books");
    	$id = I('id');
		$books = $bookModel->where("id=$id")->select();
		$this->assign('books', $books);
        $this->display();
    }
}
<?php
namespace Admin\Controller;
use Think\Controller;

class BookController extends Controller {
	public function add() {
		$this->display();
	}
	public function doAdd() {
		if (!IS_POST) {
			exit("bad request!");
		}
		$bookModel = D("books");
		if (!$bookModel->create()) {
			$this->error($bookModel->getError());
		}
		if ($bookModel->add()) {
			$this->success("添加成功！", U("lists"));
		}
		else {
			$this->error("添加失败！");
		}
	}

	public function del() {
		$bookModel = M("books");
		$id = I("id");
		$books = $bookModel->delete($id);
		if ($books) {
			$this->success("删除成功！", U("lists"));
		}
		else {
			$this->error("删除失败！");
		}
	}

	// 显示修改项
	public function edit() {
		$bookModel = M("books");
		$id = I('id');
		$books = $bookModel->where("id=$id")->select();
		$this->assign('books', $books);
		$this->display();
	}

	// 将修改后的内容存入数据库
	public function doEdit() {
		$bookModel = M("books");
		$id = I('id'); // 获取id
		if ($bookModel->create()) {
			$books = $bookModel->where("id=$id")->save();
			if ($books) {
				$this->success("更新成功！", U("lists"));
			}
			else {
				$this->error("更新失败！");
			}
		}	
	}

	public function lists() {
		$bookModel = D("books");
		$books = $bookModel->select();
		$this->assign('books', $books);
		$this->display();
	}
}
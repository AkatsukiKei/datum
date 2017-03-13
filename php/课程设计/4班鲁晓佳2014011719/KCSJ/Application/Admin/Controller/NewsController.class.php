<?php
namespace Admin\Controller;
use Think\Controller;

class NewsController extends Controller {
	public function __construct() {
		parent::__construct();
		if (!isLogin()) {
			$this->error("请先登录",U("Admin/login"));
		}
	}
	
	public function add() {
		$this->display();
	}

	public function doAdd() {
		if (!IS_POST) {
			exit("bad request!");
		}
		$newsModel = D("news");
		if (!$newsModel->create()) {
			$this->error($newsModel->getError());
		}
		if ($newsModel->add()) {
			$this->success("添加成功！", U("lists"));
		}
		else {
			$this->error("添加失败！");
		}
	}

	public function lists() {
		$newsModel = D("news");
		$news = $newsModel->select();
		$this->assign('news', $news);
		$this->display();
	}

	// 显示修改项
	public function edit() {
		$newsModel = M("news");
		$id = I('id');
		$news = $newsModel->where("id=$id")->select();
		$this->assign('news', $news);
		$this->display();
	}

	// 将修改后的内容存入数据库
	public function doEdit() {
		$newsModel = M("news");
		$id = I('id');
		if ($newsModel->create()) {
			$news = $newsModel->where("id=$id")->save();
			if ($news) {
				$this->success("更新成功！", U("lists"));
			}
			else {
				$this->error("更新失败！");
			}
		}	
	}

	// 删除数据
	public function del() {
		$newsModel = M("news");
		$id = I("id");
		$news = $newsModel->delete($id);
		if ($news) {
			$this->success("删除成功！", U("lists"));
		}
		else {
			$this->error("删除失败！");
		}
	}

	// 批量删除数据
	public function batchDel() {
		$newsModel = M("news");
		$id = I("id");
		// var_dump($id);
		$getId = implode(',', $id);
		if ($newsModel->delete($getId)) {
			$this->success("批量删除成功！", U("lists"));
		}
		else {
			$this->error("批量删除失败！");
		}
	}
}
?>
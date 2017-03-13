<?php
namespace Home\Controller;
use Think\Controller;

class NewsController extends controller {
    public function index() {
        $model = M("NewsArticle");
        $condition = array(
                "catid" => 1,
                "author" => '秘书'
            );
    	$news = $model->where($condition)->order("updatetime")->limit(0,2)->select();
    	$this->assign("news", $news);
    	$this->display();
    }

    public function add() {
    	if (isset($_POST['submit'])) {
    		$model = D("NewsArticle");
    		if ($model->create() && $model->add()) {
    			$this->success("插入成功！", "index");
    		}
    		else {
    			$this->error($model->getError());
    		}
    	}
    	else {
    		$categorys = M("NewsCategory")->select();
    		$this->assign("categorys", $categorys);
    		$this->display();
    	}
    }

    public function edit($id) {
    	if (isset($_POST['submit'])) {
    		$model = M("NewsArticle");
    		$model->create();
    		if($model->save()){
    			$this->success("修改成功", U("News/index"));
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$categorys = M("NewsCategory")->select(); 
    		$news = M("NewsArticle")->find($id);
    		$this->assign("categorys", $categorys);
    		$this->assign("news", $news);
    		$this->display();
    	}
    }

    public function del() {
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("NewsArticle")->delete($id)){
			$this->success("删除成功！");
		}
    }
}





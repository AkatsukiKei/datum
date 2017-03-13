<?php
namespace Home\Controller;
use Think\Controller;

class NewsController extends controller {
    public function index() {
        $model = M("NewsArticle");
    	$news = $model->order("updatetime")->select();
    	$this->assign("news", $news);
    	$this->display();
    }

    public function add() {
    	if (IS_POST) {
    		$model = D("NewsArticle");
    		if ($model->create() && $model->add()) {
    			$this->success("插入成功！", U("Index/index"));
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
    	if (IS_POST) {
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

    public function badAdd() {
        // $title = htmlspecialchars($_POST['title']);
        $title = I("post.title");
        $sql = "insert into news_article(title) values('$title');";
        $model = new \Think\Model();
        $model->execute($sql);
    }

    public function test() {
        $this->redirect("Admin/index", '', 3, "页面跳转中...");
    }
}





<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {

	public function login(){
		if (IS_POST) {
			$adminUsersModel = M('adminUsers');
			$condition = array(
				"username" => I("post.username"),
				"password" => I("post.password")
			);
			$result = $adminUsersModel->where($condition)->count();
			$id = $adminUsersModel->field('id')->where($condition)->select();
			// var_dump($id[0]["id"]);
			if ($result > 0) {
				$_SESSION['username'] = I("post.username");
				$_SESSION['userid'] = $id[0]["id"];
				// ？？用数组设定session不生效
				// session(array(
				// 	"username" => I("post.username"),
				// 	"userid" => $id[0]["id"]
				// 	));
				// var_dump($_SESSION);
				$this->success("登录成功", U("Index/index"));
			}
			else{
				$this->error("用户名或密码不正确");
			}
		}
		else{
			$this->display();
		}
	}

	public function add() {
		$this->display();
	}

	public function doAdd() {
		if (!IS_POST) {
			exit("bad request!");
		}
		$password = I("post.password");
		$rpw = I("post.rpw");
		if ($password != $rpw) {
			$this->error("密码不一致");
		}
		$adminModel = D("admin_users");
		if (!$adminModel->create()) {
			$this->error($adminModel->getError());
		}
		if ($adminModel->add()) {
			$this->success("添加成功！", U("lists"));
		}
		else {
			$this->error("添加失败！");
		}
	}

	public function del() {
		$adminModel = M("admin_users");
		$id = I("id");
		$admin_users = $adminModel->delete($id);
		if ($admin_users) {
			$this->success("删除成功！", U("lists"));
		}
		else {
			$this->error("删除失败！");
		}
	}

	// 修改个人信息
	public function edit() {
		$adminModel = M("admin_users");
		$id = I('id');
		$admin_users = $adminModel->where("id=$id")->select();
		$this->assign('admin_users', $admin_users);
		$this->display();
	}

	// 存储修改后的个人信息
	public function doEdit() {
		$adminModel = M("admin_users");
		$id = I('id');
		if ($adminModel->create()) {
			$admin_users = $adminModel->where("id=$id")->save();
			if ($admin_users) {
				$this->success("更新成功！", U("lists"));
			}
			else {
				$this->error("更新失败！");
			}
		}	
	}
	public function lists() {
		$adminModel = D("admin_users");
		$admin = $adminModel->select();
		$this->assign('admin_users', $admin);
		$this->display();
	}

	// 修改个人密码
	public function repwd() {
		$adminModel = M("admin_users");
		$id = I('id');
		$admin_users = $adminModel->where("id=$id")->select();
		$this->assign('admin_users', $admin_users);
		$this->display();
	}

	// 将修改后的密码存入数据库
	public function doRepwd() {
		$adminModel = M("admin_users");
		$id = I('id');
		$admin_users = $adminModel->where("id=$id")->select();
		// var_dump($admin_users[0]['password']);
		$adminPassword = $admin_users[0]['password'];
		$oldpwd = I("post.oldpwd");
		$password = I("post.password");
		$repwd = I("post.repwd");
		if ($adminPassword != $oldpwd) {
			$this->error("旧密码不正确，请重新输入");
		}
		if ($password == $oldpwd) {
			$this->error("新旧密码不能相同！");
		}
		if ($password != $repwd) {
			$this->error("密码与确认密码不一致");
		}
		if ($adminModel->create()) {
			$adminUsers = $adminModel->where("id=$id")->save();
			if ($adminUsers) {
				$this->success("更新成功！", U("lists"));
			}
			else {
				$this->error("更新失败！");
			}
		}
	}

	// 退出登录
	public function logout() {
		session('[destroy]');
		if (!isset($_SESSION['username'])) {
			$this->success("退出成功！", U("login"));
		}
		else {
			$this->error("退出失败！");
		}
	}
}
?>
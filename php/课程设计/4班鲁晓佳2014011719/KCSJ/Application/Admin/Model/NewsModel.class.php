<?php
namespace Admin\Model;
use Think\Model;

class NewsModel extends Model {
	public $_validate = array (
		array("title", "require", "标题不能为空"),
		array("author", "require", "作者不能为空"),
		array("content", "require", "内容不能为空")
	);
}
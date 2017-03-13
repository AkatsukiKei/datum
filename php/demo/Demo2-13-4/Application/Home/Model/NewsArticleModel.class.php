<?php
namespace Home\Model;
use Think\Model;

class NewsArticleModel extends Model {
	
	protected $_validate = array(
			array("title", "require", "标题不能为空"),
			array("title", "", "标题不能重复", 0, "unique"),
			array("title", "retitle", "两次输入标题必须一致", 0, "function")

		);
	protected $_auto = array(
			array("inserttime", 'getTime', 1, 'function'),
			array("updatetime", 'getTime', 3, 'function')
		);
}
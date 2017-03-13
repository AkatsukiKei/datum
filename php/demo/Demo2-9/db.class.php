<?php
class db
{
	public $test = 0;
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpwd = "123456";
	private $dbname = "2014-HTML5-lession";
	private static $instance = null;


	private function __construct($dbhost='', $dbuser='', $dbpwd='', $dbname='') {
		$this->dbhost = $dbhost=='' ? $this->dbhost : $dbhost;
		$this->dbuser = $dbuser=='' ? $this->dbuser : $dbuser;
		$this->dbpwd = $dbpwd=='' ? $this->dbpwd : $dbpwd;
		$this->dbname = $dbname=='' ? $this->dbname : $dbname;

		mysql_connect($this->dbhost, $this->dbuser, $this->dbpwd);
		mysql_select_db($this->dbname);
	}

	public static function getInstance() {
		if (self::$instance == null) {
			self::$instance = new db();
		}
		return self::$instance;
	}

	public function query($sql) {

	}
}

// $db = new db();
$db = db::getInstance();
// var_dump($db);
$db->test = 2;
$db2 = db::getInstance();
var_dump($db2);






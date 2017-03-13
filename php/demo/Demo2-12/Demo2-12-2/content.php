<?php
include "lib/dbConnect.php";
include "lib/MyTpl.class.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (!$id) {
  exit("Error Params");
}

$sql = "select * from news_news where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$news = $stmt->fetch();

$tpl = new MyTpl();
$tpl->assign("title", $news['title']);
$tpl->display("content.html");
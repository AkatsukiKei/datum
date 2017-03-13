<?php
$newslist = array(
		array(
				'id' => 1,
				'title' => '第一条新闻',
				'postTime' => '2016-03-12'
			),
		array(
				'id' => 2,
				'title' => '第二条新闻',
				'postTime' => '2016-03-13'
			),
		array(
				'id' => 3,
				'title' => '第三条新闻',
				'postTime' => '2016-03-14'
			),
	);
?>
<h1>观察超链接地址</h1>
<p>通过传递新闻id，告诉show.php页面应显示哪条新闻。</p>
<ul>
<?php
foreach ($newslist as $news) {
	echo "<li><a href='show.php?id={$news['id']}'>{$news['title']}---------{$news['postTime']}</a></li>";
}
?>
</ul>






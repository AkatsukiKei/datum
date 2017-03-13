<select id="province">
<option>请选择省份</option>
<?php
mysql_connect("localhost", "root", "123456");
mysql_select_db("province&city");
mysql_query("set names utf8");
$sql = "select * from province";
$res = mysql_query($sql);
while ($row = mysql_fetch_assoc($res)) {
	echo "<option value=\"{$row['id']}\">{$row['name']}</option>";
}
?>
</select>
<select id="city">
	<option>选择城市</option>
</select>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(function(){
	$("#province").change(function(){
		var pid = $(this).val();
		var data = {
			"pid" : pid
		};
		$.get("getCity.php?pid="+pid, data, function(res){
			var html = "";
			for(var i = 0; i< res.length; i++){
				html += "<option value='"+ res[i].id +"'>"+ res[i].name +"</option>";
			}
			$("#city").html(html);
		});
	});
});
</script>
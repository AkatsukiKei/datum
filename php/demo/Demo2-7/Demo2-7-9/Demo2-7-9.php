<select id="province">
<option>请选择省份</option>
<?php
mysql_connect("localhost", "root", "123456");
mysql_select_db("2014-HTML5-lession");
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
<script type="text/javascript">
function getXhr() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest();
	}
	else {
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}
document.getElementById("province").onchange = function() {
	var xhr = getXhr();
	var pid = this.value;

	xhr.open("get", "getCity.php?pid="+pid, true);
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4) {
			// console.log(xhr.responseText);
			var citys = JSON.parse(xhr.responseText);
			// console.log(citys);
			var html = "";
			for (var i=0; i<citys.length; i++) {
				html += "<option value='"+ citys[i].id +"'>"+ citys[i].name +"</option>";
			}
			console.log(html);
			document.getElementById("city").innerHTML = html;
		}
	}
	xhr.send();
}

</script>
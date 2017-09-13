<?php
require("boot.php");
require("hud.php");
?>
<h1>Nytt ärende</h1>
<form action="createnewcase.php" method="POST">
<select name="typ" onchange="updStatuscodes(this);">
<?php
$cats = sql::get("SELECT * FROM categories");
foreach($cats as $v) {
	echo "<option value=\"".$v["id"]."\">".ucfirst($v["namnsing"])."</option>
";
}
?>
</select>
<script>
function updStatuscodes(sel) {
	var codes = [
<?php
$cats = sql::get("SELECT * FROM statuscodes");
$switch = false;
foreach($cats as $v) {
	if($switch == true) {
		echo ",
";
	}
	echo "		[".$v["cat"].", ".$v["id"]."]";
	if($switch == false) {
		$switch = true;
	}
}
?>

	];
	var cat = sel.value;
	for(var c = 0; c < document.getElementById("status").children.length; c++) {
		var found = true;
		for(var q in codes) {
			if(codes[q][1] == document.getElementById("status").children[c].value) {
				if(cat == codes[q][0]) {
					found = false;
				}
			}
		}
		console.log(c+": "+found);
		document.getElementById("status").children[c].hidden = found;
		document.getElementById("status").children[c].disabled = found;
	}
}
</script>
<select name="status" id="status">
<?php
foreach($cats as $v) {
	echo "<option value=\"".$v["id"]."\">".ucfirst($v["name"])."</option>
";
}
?>
</select>
</form>
<?php
require("end.php");
?>
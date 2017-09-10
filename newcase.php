<?php
require("boot.php");
require("hud.php");
?>
<h1>Nytt ärende</h1>
<form action="createnewcase.php" method="POST">
<select name="typ">
<?php
$cats = sql::get("SELECT * FROM categories");
foreach($cats as $v) {
	echo "<option value=\"".$v["id"]."\">".ucfirst($v["namnsing"])."</option>
";
}
?>
</select>
</form>
<?php
require("end.php");
?>
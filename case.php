<?php
require("boot.php");
require("hud.php");
if(isset($_GET["id"])) {
	$case = sql::get("SELECT cases.*,statuscodes.* FROM cases WHERE owner = ".$_SESSION["user"]["id"]." ORDER BY status ASC INNER JOIN statuscodes ON cases.status=statuscodes.id");
}
?>
<h1>IT Support - Ärende</h1>
<?php
if(isset($_SESSION["user"])) {
	//$list = sql::get("SELECT statuscodes.name FROM cases INNER JOIN statuscodes ON cases.status = statuscodes.id WHERE owner = ".$_SESSION["user"]["id"]);
	$myCase = sql::get("SELECT * FROM cases WHERE owner = ".$_SESSION["user"]["id"]." AND id = ".$_GET["id"]);
	$list = sql::get("SELECT * FROM statuscodes WHERE id = ".$myCase[0]["status"]." OR id = ".$myCase[0]["nextstatus"]." ORDER BY prio ASC");
	echo "<div class=\"statusSteps\">";
	foreach($list as $v) {
		echo "<span>".$v["name"]."</span>";
	}
	echo "</div>";
	
	$list = sql::get("SELECT * FROM cases WHERE owner = ".$_SESSION["user"]["id"]." AND id = ".$_GET["id"]);
	echo "<pre>";
	print_r($list);
	echo "</pre>";
}
?>
<?php
require("end.php");
?>
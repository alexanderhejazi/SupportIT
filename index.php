<?php
require("boot.php");
require("hud.php");
?>
<h1>IT Support</h1>
<?php
if(isset($_SESSION["user"])) {
	$list = sql::get("SELECT * FROM cases WHERE owner = ".$_SESSION["user"]["id"]);
	echo "<pre>";
	print_r($list);
	echo "</pre>";
}


require("end.php");
?>
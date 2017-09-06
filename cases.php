<?php
require("boot.php");
require("hud.php");
?>
<h1>IT Support - Ärenden</h1>
<div id="cases" class="tabs">
<div class="tabMenu"><a href="#" class="tabmenuItem tabmenuActive" onclick="tab('cases', 0);">Aktiva</a> <a href="#" class="tabmenuItem" onclick="tab('cases', 1);">Inaktiva</a></div>
<div class="tabActive">
<?php
if(isset($_SESSION["user"])) {
	$list = sql::get("SELECT * FROM cases WHERE active = 1 AND owner = ".$_SESSION["user"]["id"]." ORDER BY eta DESC");
	foreach($list as $v) {
		$status = sql::get("SELECT name FROM statuscodes WHERE id = ".$v["status"])[0]["name"];
		$eta = $v["eta"];
		$id = $v["id"];
		echo <<<OUT
<a href="case.php?id={$id}" class="menuCard">
<p><b>{$status}</b> <i>{$eta}</i></p>
</a>
OUT;
	}
}
?>
</div>
<div>
<?php
if(isset($_SESSION["user"])) {
	$list = sql::get("SELECT * FROM cases WHERE active = 0 AND owner = ".$_SESSION["user"]["id"]." ORDER BY eta DESC");
	foreach($list as $v) {
		$status = sql::get("SELECT name FROM statuscodes WHERE id = ".$v["status"])[0]["name"];
		$eta = $v["eta"];
		$id = $v["id"];
		echo <<<OUT
<a href="case.php?id={$id}" class="menuCard">
<p><b>{$status}</b> <i>{$eta}</i></p>
</a>
OUT;
	}
}
?>
</div>
</div>
<?php
require("end.php");
?>
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
	$myCase = $myCase[0];
	if($myCase["nextstatus"] == null) {
		$list = sql::get("SELECT * FROM statuscodes WHERE id = ".$myCase["status"]." ORDER BY prio ASC");
	} else {
		$list = sql::get("SELECT * FROM statuscodes WHERE id = ".$myCase["status"]." OR id = ".$myCase["nextstatus"]." ORDER BY prio ASC");
	}
	echo "<div class=\"statusSteps\">";
	$statuses = [];
	if(count($list) > 1) {
		foreach($list as $v) {
			if($myCase["status"] == $v["id"]) {
				$statuses[0] = $v;
			} elseif($myCase["nextstatus"] == $v["id"]) {
				$statuses[1] = $v;
			}
		}
	} else {
		$statuses[1] = $list[0];
	}
	foreach($statuses as $v) {
		echo "<span>".$v["name"]."</span>";
	}
	$weekd = date("D", strtotime($myCase["eta"]));
	$day = date("d", strtotime($myCase["eta"]));
	$month = date("M", strtotime($myCase["eta"]));
	$eta = weekd2str($weekd)." ".$day." ".month2str($month);
	if(strtotime($myCase["eta"]) < time()) {
		$eta = "<span class=\"red\">".$eta."</span>";
	}
	$comment = $myCase["comment"];
	echo <<<OUT
</div><div class="framed">
<p>Beräknad tid för nästa steg: <b>{$eta}</b></p>
<p><i>{$comment}</i></p>
</div>
OUT;
	echo "<pre>";
	print_r($myCase);
	echo "</pre>";
}
?>
<?php
require("end.php");
?>
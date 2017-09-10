<div id="hud">
<?php
if(isset($_SESSION["user"])) {
?>
<p id="menuUsername" class="menuItem">
<a href="login.php">Logga ut</a> <?php echo $_SESSION["user"]["username"]; ?>
</p>
<p id="menuStart" class="menuItem">
<a href="index.php">Start</a>
</p>
<p id="menuCases" class="menuItem">
<?php
$activeCases = sql::get("SELECT COUNT(*) AS c FROM cases WHERE owner = ".$_SESSION["user"]["id"]." AND active = 1");
echo "<a href=\"cases.php\">Ärenden (".$activeCases[0]["c"].")</a>";
?>
</p>
<p id="menuNewCase" class="menuItem">
<a href="newcase.php">Nytt ärende</a>
</p>
<?php
	
} else {
	$users = sql::get("SELECT * FROM users");
	foreach($users as $user) {
		echo "<input type=\"button\" onclick=\"window.location = 'login.php?id=".$user["id"]."';\" value=\"".$user["username"]."\">
";
	}
}
?>
</div>
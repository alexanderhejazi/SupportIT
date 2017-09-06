<?php
session_name("itsupport");
session_start();
require("sql.php");
if(isset($_GET["id"])) {
	$user = sql::get("SELECT * FROM users WHERE id = ".$_GET["id"]);
	$_SESSION["user"] = ["id" => $user[0]["id"], "username" => $user[0]["username"]];
	header("Location: index.php?msg=".urlencode("Du har loggat in"));
} else {
	unset($_SESSION["user"]);
	session_destroy();
	header("Location: index.php?msg=".urlencode("Du har blivit utloggad"));
}
?>
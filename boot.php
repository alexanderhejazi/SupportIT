<?php
session_name("itsupport");
session_start();
require("sql.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>
ITG-Support
</title>
<meta charset="UTF-8">
<script src="js.js"></script>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<?php
if(isset($_GET["msg"])) {
	echo "<p id=\"msg\">".(urldecode($_GET["msg"]))."</p>";
}
?>
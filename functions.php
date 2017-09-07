<?php
function month2str($val) {
	$strs = [
		"Jan" => "Jan",
		"Feb" => "Feb",
		"Mar" => "Mar",
		"Apr" => "Apr",
		"May" => "Maj",
		"Jun" => "Jun",
		"Jul" => "Jul",
		"Aug" => "Aug",
		"Sep" => "Sep",
		"Oct" => "Okt",
		"Nov" => "Nov",
		"Dec" => "Dec"
	];
	return $strs[$val];
}
function weekd2str($val) {
	$strs = [
		"Mon" => "Månd",
		"Tue" => "Tisd",
		"Wed" => "Onsd",
		"Thu" => "Tors",
		"Fri" => "Fred",
		"Sat" => "Lörd",
		"Sun" => "Sönd"
	];
	return $strs[$val];
}
?>
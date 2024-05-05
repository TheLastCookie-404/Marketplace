<?php
	error_reporting(0);
	$db = mysqli_connect('localhost', 'root', '', 'marketplace');
	if(!$db) die('DATABASE is not connected and it`s sad :(');
	$itemsTable = mysqli_query($db, "SELECT * FROM `items`");
	$basketTable = mysqli_query($db, "SELECT * FROM `basket`");
	$itemsTable = mysqli_fetch_all($itemsTable);
	$basketTable = mysqli_fetch_all($basketTable);
?>
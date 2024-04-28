<?php
    $db = mysqli_connect('localhost', 'root', '', 'marketplace');
    if(!$db) die('DATABASE is not connected and it`s sad :(');
    $table = mysqli_query($db, "SELECT * FROM `items`");
    $table = mysqli_fetch_all($table);
?>
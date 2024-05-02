<?
    require("./connect.php");
    $id = $_GET['id'];

    mysqli_query($db, "DELETE FROM `basket` WHERE `basket`.`id` = '$id';");
    if($crud == null) mysqli_query($db,"ALTER TABLE `basket` AUTO_INCREMENT = 0;");

    header("location: ../index.php");
?>
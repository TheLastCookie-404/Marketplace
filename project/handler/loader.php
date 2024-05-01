<?php
    require("./connect.php");
    $id = $_GET['id'];
    $item;
    function SearchById($items, $id){
        foreach($items as $item){
            if ($item[0] == $id){
                return $item;
            }
        }
        return 0;
    }

    $item = SearchById($itemsTable, $id);
    
    mysqli_query($db, "INSERT INTO `basket` (`picture`, `cornermsg`, `name`, `price`, `discount`, `category`) VALUES ('$item[1]', '$item[2]', '$item[3]', '$item[4]', '$item[5]', '$item[6]')");

    header("Location: ../index.php");
?>
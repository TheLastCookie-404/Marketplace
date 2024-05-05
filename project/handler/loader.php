<?php
  require ("./connect.php");
  $id = $_GET['id'];
  $dbFields = "`id`, `picture`, `cornermsg`, `name`, `price`, `discount`, `category`, `article`";
  $item;
  function SearchById($items, $id)
  {
    foreach ($items as $item) {
      if ($item[0] == $id)
        return $item;
    }
    return 0;
  }

  function IsItemRepeatByArticle($items, $article)
  {
    foreach ($items as $item) {
      if ($item[7] == $article)
        return true;
    }
    return false;
  }

  $item = SearchById($itemsTable, $id);

  if (!IsItemRepeatByArticle($basketTable, $item[7])) {
    mysqli_query($db, "INSERT INTO `basket` ($dbFields) VALUES ('$item[0]', '$item[1]', '$item[2]', '$item[3]', '$item[4]', '$item[5]', '$item[6]', '$item[7]')");
  }

  header("Location: ../index.php");
?>
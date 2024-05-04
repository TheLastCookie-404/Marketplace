<?php
    require("../handler/connect.php");
    foreach($itemsTable as $items){
        foreach($basketTable as $basketItems){
            if($items[7] === $basketItems[7]) {
                $counter++;
                $msgString = $msgString."<p>Товар номер $counter: $items[3], $items[4], $items[5], $items[6], $items[7], ". $_POST["size"][$items[7]] .", ". $_POST["quantity"][$items[7]]. "шт.</p>";
            }
        }
    }
    echo $msgString;
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    mail('se660745@gamil.com', 'Заказ:', $msgString);

?>
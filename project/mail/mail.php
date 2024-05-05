<?php
	require ("../handler/connect.php");
	
	$clientName = "Имя клиента: ". $_POST["name"] ."\n";
	$clientEmail = "Почта клиента: ". $_POST["email"] ."\n";
	$clientPhone = "Телефон клиента: ". $_POST["phone"] ."\n";
	$clientPayment = "Оплата клиента: ". $_POST["payment"] ."\n";

	$clientString = $clientName . $clientEmail . $clientPhone . $clientPayment . "\n";

	foreach ($itemsTable as $items) {
		foreach ($basketTable as $basketItems) {
			if ($items[7] === $basketItems[7]) {
				$counter++;
				$itemCount = "Товар номер: $counter\n";
				$itemName = "Наименование: $items[3]\n";
				$itemPrice = "Цена: ". ($items[4] - $items[4] / 100 * $items[5]) ." Тг.\n";
				$itemArticle = "Артикул: $items[7]\n";
				$itemSize = "Размер: ". $_POST['size'][$items[7]] ."\n";
				$itemQuantity = "Количество: ". $_POST["quantity"][$items[7]] ." Шт.\n";
				$orderString = $orderString . $itemCount . $itemName . $itemArticle . $itemSize . $itemQuantity . $itemPrice . "\n";
			}
		}
	}
	
	mail('shpinat0.228@gmail.com', 'Заказ', $clientString . $orderString);

	header("location: ../index.php");
?>
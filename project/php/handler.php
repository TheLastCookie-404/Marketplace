<?
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";


    // Сообщение
    $message = "Line 1\r\nLine 2\r\nLine 3";

    // На случай если какая-то строка письма длиннее 70 символов, вызовем функцию wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    mail('se660745@gmail.com', 'My Subject', $message);
?>
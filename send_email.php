<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = "ptreebusiness@gmail.com"; 
        $subject = "Новое сообщение с nyrsite.by";
        $message = $_POST["message"];
        $headers = "From: " . $_POST["email"] . "\r\n" .
                "Name: " . $_POST["name"] . "\r\n" .
                "Tel: " . $_POST["tel"] . "\r\n" .
                "Content-Type: text/plain; charset=UTF-8";

        if (mail($to, $subject, $message, $headers)) {
            echo "Сообщение успешно отправлено.";
        } else {
            echo "Ошибка при отправке сообщения.";
        }
    }
?>
<?php
$to = "ezhov.viktor.02@gmail.com";
$email = "E-mail: ".$_POST['email']; //полученное из формы name=email
$message = "Сообщение: ".$_POST['message']; //полученное из формы name=message
mail($to,$email, $message); //отправляет получателю на емайл значения переменных
?>
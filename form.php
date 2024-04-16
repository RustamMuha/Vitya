<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Bmx Tutor</title>
    <meta name="description" content="Описание страницы" >

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" href="../img/favicon.png">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/index.js"></script>
</head>
<?php
$to = "ezhov.viktor.02@gmail.com";
$email = "E-mail: ".$_POST['email']; //полученное из формы name=email
$message = "Сообщение: ".$_POST['message']; //полученное из формы name=message
mail($to,$email, $message); //отправляет получателю на емайл значения переменных
?>
<body>
	<div class="header">
		<img src="img/BMX.png" class="photo1">
		<a href="index.php" class="category">ГЛАВНАЯ</a>
		<a href="html/bmx.html" class="category">BMX</a>
		<a href="html/skate.html" class="category">СКЕЙТБОРД</a>
		<a href="html/scooter.html" class="category">САМОКАТ</a>
		<div class="line"></div>
		<img src="img/BMX.png" class="photo2">
	</div>
	

	<div class="container">
		<div class="form_area">
		<div class="feedback-card"></div>	
    <div class="feedback-header">ОБРАТНАЯ СВЯЗЬ</div> 
    <form action="form.php" class="feedback-body" method="post">
        <input class="feedback-email" placeholder="Ваш Email" type="email" required="required" name="email"></input>
        <textarea class="feedback-message" placeholder="Сообщение" type="text" required="required" name="message"></textarea> 
        <button class="feedback-button">Отправить</button> </form>
		</div>
	</div>



	<div class="footer">
		<div class="arr">ALL RIGHTS RESERVED</div>
		<div class="author_area">
			<div class="author">Designed by 
				<br>Ezhov Viktor</div>
			<a href=""><img src="../img/inst.png" width="30px"></a>
		</div>
	</div>
</body>
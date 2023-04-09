<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
        <link rel="shortcut icon" href="img/zhelezno.png" />
        <title>Музей ЖЕЛЕЗНО</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
		<style type="text/css">
         #title {
			 line-height: 0;
			 }
         #title img {
			 border: none;
			 }
  </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
			<center>
			<h1>Задание 1</h1>
			<div class="text-container">
  <p class="text">Среди обширной канзасской степи жила девочка Элли. Ее отец фермер Джон, целый день работал в поле, мать Анна хлопотала по хозяйству.
Жили они в небольшом фургоне, снятом с колес и поставленном на землю». Так начинаются  приключения девочки Элли из книги А. Волкова «Волшебник изумрудного города». У Элли были друзья, и один из ее друзей все время носил с собой масленку. Как звали этого друга?</p>
<blockquote>Подсказка: Отправляйтесь в музей музей звуков. Удачи!!! </p>
</div>
				<button onclick="window.close()" style="background-color: #ff3333; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Закрыть страницу</button>
            </div>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Номера для связи с музеем : +7 (4725) 45-12-30, +7 (951) 769-95-63</p>
                   <p>Этот сайт разработан Голосовым Даниилом</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>

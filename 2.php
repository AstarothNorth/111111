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
			<h1>Задание 2</h1>
			<div class="text-container">
  <p class="text">В нашем музее есть место, посвященное одному из самых выдающихся металлургов – отцу современной металлургии. Этот человек за свои выдающиеся научные труды по металлургии стали получил Почетную медаль Императорского Русского Технического Общества!
Ну а на досуге он занимался изготовлением музыкальных инструментов!</p>
<blockquote>Кто этот знаменитый русский металлург, который занимался разработкой теории и строения стального слитка и стал  основоположником металловедения железа?  </p>
<blockquote>В чем секрет итальянских скрипок, разгаданный этим гениальным ученым. Удачи!!!</p>
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

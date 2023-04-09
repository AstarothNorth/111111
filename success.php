<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/zhelezno.png" />
        <title>Музей ЖЕЛЕЗНО</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
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

<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }  
    $old_password= md5(md5(mysqli_real_escape_string($con,$_POST['oldPassword'])));
    $new_password= md5(md5(mysqli_real_escape_string($con,$_POST['newPassword'])));
    $email=$_SESSION['почта'];
    $password_from_database_query="выберите пароль у пользователей, у которых электронная почта='$email'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($password_from_database_result);
    if($row['пароль']==$old_password){
        $update_password_query="обновите установленный пользователями пароль='$new_password' где электронная почта='$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        echo "Ваш пароль изменён.";
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Неверный пароль!!");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
    }
?>
<?php
session_start();
 
if(isset($_COOKIE['islogin'])){
    header('location:/php/profile.php');
}
if(isset($_POST['login'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

if(isset($email, $password)){
    require 'DB.php';
    global $DBlink;
    $query = "select * from users where email = '{$email}';";
    $result = mysqli_query($DBlink, $query);
    $result = mysqli_fetch_assoc($result);
    if(password_verify($password, $result['password'])){
        $_SESSION['user_name'] = $result['full_name'];
        setcookie('islogin', '1', time()+120);
        header('location: ./profile.php'); 
        die();
    }
    echo 'Login / password incorrect';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/af6916ed40.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        require './header.php';
    ?>

    <div class="block_reg">
        <form method="post" action="/php/login.php" class="block_reg_form">
            <p class="input_desc">Введите почту
                <input type="email" name="email">
            </p>
            <p class="input_desc">Введите пароль
                <input type="password" name="password">
            </p>
            <div class="input_box">
                <input type="submit" name="login" value="Войти" class="input_but">
            </div>
        </form>
    </div>

    <?php
        require './footer.php';
    ?>
    
</body>
</html>
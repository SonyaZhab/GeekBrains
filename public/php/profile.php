<?php

session_start();
if(isset($_COOKIE['islogin'])){
    $message = $_SESSION['user_name']. ' - You are logged in to the system';
}else{
    session_destroy();
    header('location:/php/login.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/af6916ed40.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require './header.php';
    ?>

    <div class="block_reg">
        <?php echo $message;?>
    </div>

    <?php
        require './footer.php';
    ?>
    
</body>
</html>
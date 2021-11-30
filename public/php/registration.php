<?php

if(isset($_POST['reg'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
if($full_name != '' && $email != '' && $password != ''){
    require 'DB.php';
    global $DBlink;
    $password_h = password_hash($password, PASSWORD_DEFAULT);
    $query = "insert into users set full_name = '{$full_name}', email = '{$email}', password = '{$password_h}';";
    mysqli_query($DBlink, $query);
    $result =  'Registration success';
    mysqli_close($DBlink);
}else{
    $result = 'Error';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/af6916ed40.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        require './header.php';
    ?>

    <div class="block_reg">
        <form method="post" action="/php/registration.php" class="block_reg_form">
            <p class="input_desc">Введите полное имя
                <input type="text" name="full_name">
            </p>
            <p class="input_desc">Введите почту
                <input type="email" name="email">
            </p>
            <p class="input_desc">Введите пароль
                <input type="password" name="password">
            </p>
            <div class="input_box">
                <input type="submit" name="reg" value="Зарегистрироваться" class="input_but">
            </div>

            <?php echo '<p class="input_desc">' . $result . '</p>';?>
        </form>
    </div>

    <?php
        require './footer.php';
    ?>

</body>
</html>
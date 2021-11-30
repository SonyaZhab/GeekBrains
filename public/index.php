<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pictures</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/af6916ed40.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        require './php/header.php';
    ?>


    <section class="content">
    <h3 class="title">Главная страница</h3>
        <?php
            include ("php/content.php");
        ?>
    </section>

    <?php
        require './php/footer.php';
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/af6916ed40.js" crossorigin="anonymous"></script>
</head>
</head>
<body>

    <?php
        require './header.php';
    ?>

    <section class="content">
        <h3 class="title">Корзина</h3>
            <?php 
                require 'cart.php';
            ?>
    </section>

    <?php
        require './footer.php';
    ?>

</body>
</html>
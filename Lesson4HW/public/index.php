<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pictures</title>
    <link rel="stylesheet" type="text/css" href="css\style.css">

</head>
<body>

    <header class="header">
        <h4>Вязанные вещи</h4>
    </header>

    <!-- Первое задание -->
    <h3 class="title">Первое задание - чистый HTML</h3>
    <section class="content">
        <a href="images/photo-1.jpg" target="_blank"><img class="photo" src="images/photo-1.jpg" alt=""></a>
        <a href="images/photo-2.jpg" target="_blank"><img class="photo" src="images/photo-2.jpg" alt=""></a>
        <a href="images/photo-3.jpg" target="_blank"><img class="photo" src="images/photo-3.jpg" alt=""></a>
        <a href="images/photo-4.jpg" target="_blank"><img class="photo" src="images/photo-4.jpg" alt=""></a>
        <a href="images/photo-5.jpg" target="_blank"><img class="photo" src="images/photo-5.jpg" alt=""></a>
        <a href="images/photo-6.jpg" target="_blank"><img class="photo" src="images/photo-6.jpg" alt=""></a>
        <a href="images/photo-7.jpg" target="_blank"><img class="photo" src="images/photo-7.jpg" alt=""></a>
        <a href="images/photo-8.jpg" target="_blank"><img class="photo" src="images/photo-8.jpg" alt=""></a>
        <a href="images/photo-9.jpg" target="_blank"><img class="photo" src="images/photo-9.jpg" alt=""></a>
        <a href="images/photo-10.jpg" target="_blank"><img class="photo" src="images/photo-10.jpg" alt=""></a>
        <a href="images/photo-11.jpg" target="_blank"><img class="photo" src="images/photo-11.jpg" alt=""></a>
        <a href="images/photo-12.jpg" target="_blank"><img class="photo" src="images/photo-12.jpg" alt=""></a>
        <a href="images/photo-13.jpg" target="_blank"><img class="photo" src="images/photo-13.jpg" alt=""></a>
    </section>

    <!-- Второе задание -->
    <h3 class="title">Второе задание - подключение php-файла</h3>
    <section class="content">
        <?php
            include ("php/func_img.php");
        ?>
    </section>

    <footer class="footer">
        <div class="year">
            <?php
                echo date('Y');
            ?>
        </div>
    </footer>
    
</body>
</html>
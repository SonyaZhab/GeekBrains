<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pictures</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <header class="header">
        <h4>Вязанные вещи</h4>
    </header>

    <h3 class="title">Первое задание - подключение через базу данных</h3>
    <section class="content">
        <?php
            include ("php/content.php");
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
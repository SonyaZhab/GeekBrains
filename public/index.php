<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculators</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

    <header class="header">
        <h4>Калькулятор</h4>
    </header>

    <section class="content">
        <div>
        <h3 class="title">Первый Калькулятор</h3>
        <form action="php/firstCalc.php" method="POST">
            <p class="input_desc">Первое число
                <input type="text" name="number1" value="<?= $number1?>">
            </p>
            <p class="input_desc">Операция
                <select name="operation">
                    <option value="" name="select">Выбери операцию</option>
                    <option value="+" name="sum">' + ' - сумма</option>
                    <option value="-" name="min">' - ' - вычитание</option>
                    <option value="*" name="mult">' * ' - умножение</option>
                    <option value="/" name="div">' / ' - деление</option>
                </select>

            </p>
            <p class="input_desc">Второе число
                <input type="text" name="number2" value="<?= $number2?>">
            </p>
            <div class="input_box">
                <input type="submit" name="submit" value="Решить" class="input_but">
                <input type="reset" name="reset" value="Сбросить" class="input_but">
            </div>
        </form>
        </div>

        <div>
        <h3 class="title">Второй Калькулятор</h3>
        <form action="php/firstCalc.php" method="POST">
            <p class="input_desc">Первое число
                <input type="text" name="number1" value="<?= $number1?>">
            </p>
            <P class="input_desc">Операция
                <input  name="operation" value="<?= $operation?>" type="text">
            </P>
            <p class="input_desc">Второе число
                <input type="text" name="number2" value="<?= $number2?>">
            </p>

            <div class="input_box">
                <input type="submit" name="submit" value="Решить" class="input_but">
                <input type="reset" name="reset" value="Сбросить" class="input_but">
            </div>

        </form>
        </div>
    

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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FELWINTER PEAK </title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<div class="flex-container">


    <div class="header">
        <?php include 'birdy.inc.php' ?>
        <?php include 'greet.inc.php' ?>
        <?php include 'owly.inc.php' ?>
    </div>


    <div class="bodypart">

        <div class="block">
            <div class="block"></div>
            <div class="vipblock"><?php include 'bpic.inc.php' ?></div>
            <div class="block"></div>
        </div>

        <div class="block">

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ';
                    echo ' я из города ', $city; ?>
                </p>

                <p> Мне
                    <?php echo $age ?>
                    лет </p>
                <p> Я чуть-чуть узнал о web разработке:</p>
                <br>
                <br>
                <?php include 'knowledge.inc.php'; ?>
                <p><?php echo $c ?> </p>
                <p><?php if ($d == $e) {echo "Значения равны";} ?> </p>
                <p><?php if ($d === $e) {echo "Значения и типы данных равны";} ?> </p>
                <p><?php echo ++$f  ?> </p>
                <p><?php if ($d1 > 0 && $d2 > 0) {echo "Оба числа положительные";} ?> </p>
                <p><?php if ($d1 > 0 || $d2 < 0) {echo "Хотя бы одно число положительное";} ?> </p>
                <p><?php echo $g + $h ?> </p>
                <p><?php echo $i + $j; ?> </p>
            </div>

        </div>
        <hr>
        <div class="block">

            <div id="menu">МЕНЮ</div>
            <nav>
                <ul>
                    <li><a href="" class="menup"> Как я начал свой путь </a></li>
                    <li><a href="" class="menup"> Мои товарищи</a></li>
                    <li><a href="" class="menup"> Университетская жизнь </a></li>
                    <li><a href="" class="menup"> Музыкальное творчество </a></li>
                    <li><a href="" class="menup"> Книги </a></li>
                    <li><a href="" class="menup"> Persona 5 </a></li>
                    <li><a href="" class="menup"> Destiny </a></li>
                    <li><a href="" class="menup"> Disco Elysium </a></li>
                    <li><a href="" class="menup"> Контакты </a></li>
                </ul>
            </nav>
            <div id="menu">АНЕКДОТЫ</div>
            <?php include 'anec.inc.php' ?>
        </div>
    </div>


    <div class="footer">
        <?php include 'bye.inc.php' ?>
    </div>

</div>
>
</body>


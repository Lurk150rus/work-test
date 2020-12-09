<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Тег SELECT</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php
$result = require __DIR__ . '/calc.php';
?>
<a href="./"><- На главную</a>
<h1> Calculator for simple math</h1>
<div class="calculator">
    <form action="index.php" method="get" class="calculator__form">
        <input type="text" name="x1" class="calculator__input calculator__item" placeholder="Введите первое число">
        <select name="operation" class="calculator__select calculator__item">
            <option value="+" class="calculator__option">+</option>
            <option value="-" class="calculator__option">-</option>
            <option value="*" class="calculator__option">*</option>
            <option value="/" class="calculator__option">/</option>
        </select>
        <input type="text" name="x2" class="calculator__input calculator__item" placeholder="Введите второе число">
        <input type="submit" value="Посчитать" class="calculator__button calculator__item">
        <div class="calculator__result calculator__item">
            <b>Результат вычислений:</b>
            <span>
            <?= $result ?>
        </span>
        </div>
    </form>

</div>


</body>
</html>
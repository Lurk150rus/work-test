<?php
if (empty($_GET)) {
    return '<span class="calculator__answer_wrong> Ничего не передано</span>';
}

if (empty($_GET['operation'])) {
    return '<span class="calculator__answer_wrong>Не передана операция</span>';
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return '<span class="calculator__answer_wrong>Не переданы аргументы </span>';
}

if (is_numeric($_GET['x1']) == false || is_numeric($_GET['x2']) == false) {
    return '<span class="calculator__answer_wrong>"Неверные аргументы</span>';
}
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = <strong class="calculator__answer">';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}
echo "</strong>";
return $expression . $result;
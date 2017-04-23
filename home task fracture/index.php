<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>
</html>
<?php
error_reporting(E_ALL);

spl_autoload_register(function ($className) {
    $filePath = "classes/{$className}.php";

    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }

    require_once($filePath);
});


$dsn = 'mysql: host=localhost; dbname=fractures';
$user = 'root';
$pass = '';


/**
 * 1) вывести список логов
 * 2) под списком форма для двух дробей
 * 3) отправляем форму - проверка, создаем объекты Fraction, складываем
 * 4) сохраняем в базу, редирект на ту же страницу
 * 5) используем Fracture, FractureException, FractureForm
 *
 *
 *
 **/

echo 'Header <hr>';

$pdo = new PDO($dsn, $user, $pass);

// all records
$sth = $pdo->query('select * from log');

while ($res = $sth->fetch(PDO::FETCH_ASSOC)) {

    echo $res['fracture_1'] . "+ " . $res ['fracture_2'] . " = " . $res ['sum'];
    echo "<br><hr>";

}

// single record
//    $sth = $pdo->prepare('select * from log where id = :id');
//    $sth->execute([
//        'id' => 2
//    ]);
?>
<form method="post" action="index.php">
    <div id="fracture1">
        Числитель 1<br>
        <input type="number" name="numerator1"><br>
        Знаменатель 1<br>
        <input type="number" name="denominator1" min="1">
    </div>
    <div id="fracture2">
        Числитель 2<br>
        <input type="number" name="numerator2"><br>
        Знаменатель 2<br>
        <input type="number" name="denominator2" min="1"><br>
    </div>
    <div>
        <input type="submit" value="Отправить">
    </div>
</form>


<?php

if ($_POST){

    $n1 = $_POST['numerator1'];
    $d1 = $_POST['denominator1'];
    $n2 = $_POST['numerator2'];
    $d2 = $_POST['denominator2'];

    $f1 = new Fracture($n1,$d1);
    $f2 = new Fracture($n2,$d2);
    $sum = Fracture::add($f1,$f2);
    print_r($sum);

    $sth = $pdo->prepare('insert into log values (null, :f1, :f2, :sum)');
    $sth-> execute([
   'f1' => $f1,
   'f2' => $f2,
   'sum' => $sum
 ]);


    header('Location: index.php');
//    var_dump($sth->fetch(PDO::FETCH_ASSOC));

}
echo '<hr> Footer &copy;';


?>

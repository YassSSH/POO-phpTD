
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <p>A : <input type="text" name="Aord" /> <input type="text" name="Aabs" /></p>
    <p>B : <input type="text" name="Bord" /> <input type="text" name="Babs" /></p>
    <p>C : <input type="text" name="Cord" /> <input type="text" name="Cabs" /></p>
    <p><input type="submit" value="OK"></p>
</form>
</body>
</html>

<?php
include ("./Point.php");
include ("./TroisPoints.php");


function bool(){
    $p1 = new Point($_POST['Aord'], $_POST['Aabs']);
    $p2 = new Point('10', '10');
    $p3 = new Point('10', '10');
    $var = new TroisPoints($p1, $p2, $p3);

    var_dump($var->sontAlignes());
}
bool();

function bool1(){
    $p1 = new Point('220', '10');
    $p2 = new Point('02', '0');
    $p3 = new Point('1', '0');
    $var = new TroisPoints($p1, $p2, $p3);
    $var->isocele();




}
bool1();

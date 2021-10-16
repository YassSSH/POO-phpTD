<?php

include ("./Point.php");
include ("./TroisPoints.php");
include ("./Stagiaire.php");
include ("./Formation.php");

?>
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
    <p>A : <input type="text" name="Aord"/> <input type="text" name="Aabs"  /></p>
    <p>B : <input type="text" name="Bord" /> <input type="text" name="Babs"/></p>
    <p>C : <input type="text" name="Cord"/> <input  type="text" name="Cabs"/></p>
    <p><input type="submit" value="OK"></p>
</form>
</body>
</html>

<?php
if(!empty($_POST['Aord']) && !empty($_POST['Aabs']) && !empty($_POST['Bord']) && !empty($_POST['Babs']) && !empty($_POST['Cord']) && !empty($_POST['Cabs']))
{

    function iso(){
        $p1 = new Point($_POST['Aord'] , $_POST['Aabs']);
        $p2 = new Point($_POST['Bord'] , $_POST['Babs']);
        $p3 = new Point($_POST['Cord'] , $_POST['Cabs']);

    echo $p1 , $p2 , $p3;
        $var = new TroisPoints($p1, $p2, $p3);
        if ($var->isocele()){
            echo '<p> IL EST ISOCELE</p>';
        }else{
            echo '<p> IL EST PAS ISOCELE</p>';
        }

}
iso();
    function align(){
        $p1 = new Point($_POST['Aord'] , $_POST['Aabs']);
        $p2 = new Point($_POST['Bord'] , $_POST['Babs']);
        $p3 = new Point($_POST['Cord'] , $_POST['Cabs']);

        $var = new TroisPoints($p1, $p2, $p3);
        if ($var->sontAlignes()){
            echo '<p> IL SONT ALIGNES</p>';
        }else{
            echo '<p> IL NE SONT PAS ALIGNES</p>';
        }

    }
    align();


    }





function bool(){
    $p1 = new Point('0', '12');
    $p2 = new Point('180', '107');
    $p3 = new Point('102', '10');
    $var = new TroisPoints($p1, $p2, $p3);
$var->sontAlignes();

}
bool();

function bool1(){
    $p1 = new Point('20', '10');
    $p2 = new Point('02', '0');
    $p3 = new Point('1', '0');
    $var = new TroisPoints($p1, $p2, $p3);
    $var->isocele();




}
bool1();

function moyenne(){
    $stagiere = new Stagiaire('TOM', ['8' , '20' , '5']);
    $moy = $stagiere->calculeMoyenne();
    echo $moy . '<BR>';
}
moyenne();

function maxx() {
    $stagiere = new Stagiaire('TOM', ['8' , '20' , '5']);
    $max = $stagiere->noteMax();
    echo $max . '<BR>';
}
maxx();

function minn(){
    $stagiere = new Stagiaire('TOM', ['8' , '20' , '5']);
$min = $stagiere->noteMin();
echo $min . '<BR>';
}
minn();

function calculdefou(){
        $stagiere1 = new Stagiaire('YASS', ['20', '14', '2']);
        $stagiere2 = new Stagiaire('BIBI', ['12', '1', '14']);
        $stagiere3 = new Stagiaire('BOUBOU', ['2', '15', '17']);
    $formation =  new Formation( 'PAPIER' , '75' , [$stagiere1 , $stagiere2 , $stagiere3]);
    echo $formation;
    $result = $formation->calculerMoyenneFormation();
    var_dump($result);
}
calculdefou();
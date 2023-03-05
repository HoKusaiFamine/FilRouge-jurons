<?php

$host="localhost";
$utilisateur="tuto";
$motdepasse="tuto";
$base="tutoriel";
//$conexion =$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));;
//$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sqlQuery = "select sum(quantite) as qtvendu, libelle_produit FROM vente v join produit using(id_produit)
				where YEAR(dates)=:year AND id_type=:idType GROUP BY libelle_produit ORDER BY libelle_produit";
//$sth = $conexion->prepare($sqlQuery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//$sth->execute(array(':year' => 2008, ':idType' => 1));
/*
$element=array();
$total=0;
foreach($sth->fetchAll(PDO::FETCH_OBJ) as $row)
{
    $element[$row->libelle_produit]=$row->qtvendu;
    $total+=$row->qtvendu;
}*/
header('Content-type: image/png');
$largeur=400;
$hauteur=350;
$courbe=imagecreatetruecolor($largeur, $hauteur);
$couleur=array();
$red=0;$blue=0;$green=0;
$nbe=count($element);
$pas=round(255*3/$nbe);
for($n=0;$n<$nbe;$n++)
{
    $x = $n%3;
    switch ($x){
        case(0):
            $red+=$pas;
            break;
        case(1):
            $blue+=$pas;
            break;
        case(2):
            $green+=$pas;
            break;
    }
    $couleur[$n][0]=imagecolorallocate($courbe, $red-15,($green==0?$green:($green-15)) , ($blue==0?$blue:($blue-15)));
    $couleur[$n][1]=imagecolorallocate($courbe, $red,$green , $blue);
}
$ligne=imagecolorallocate($courbe, 220, 220, 220);
$fond=imagecolorallocate($courbe, 250, 250, 250);
$noir=imagecolorallocate($courbe, 0, 0, 0);
imagefilledrectangle($courbe,0 , 0, $largeur, $hauteur, $fond);
for ($i = 150; $i > 130; $i--)
{
        $debut=80;
        $j=0;
        foreach ($element as $libelle=>$quantite)
        {
           $valeur=$quantite/$total*360;
           $fin=$debut+$valeur;
           imagefilledarc($courbe, 200, $i, 350, 220, $debut,$fin, $couleur[$j][0], IMG_ARC_PIE);
           $j++;
           $debut=$fin;
        }
 }
$j=0;
$pasX=20;
$pasY=270;
foreach ($element as $libelle=>$quantite)
{
  $valeur=$quantite/$total*360;
   $fin=$debut+$valeur;
   imagefilledarc($courbe, 200, $i, 350, 220, $debut, $fin, $couleur[$j][1], IMG_ARC_PIE);
   $debut=$fin;
   if(($j % 5)==4)
    {
        $pasX+=150;
        $pasY=270;
    }
    imagefilledrectangle($courbe,$pasX+120 , $pasY, $pasX+140, $pasY+12, $couleur[$j][1]);
    imagestring($courbe, 2, $pasX,$pasY , $libelle.': '.$quantite, $couleur[$j][1]);
    $pasY+=20;
    $j++;
}
 imagepng($courbe);
 imagedestroy($courbe);

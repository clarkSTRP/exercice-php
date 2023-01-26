<?php
$chiffre = '5';
echo $chiffre;
?>
<?php
$word = "c'est ";
$word2 = "vie.";
$word3 = "Simplon ";
$word4 = "la ";
echo "\n";
echo $word3 , $word , $word4 , $word2 ;
echo "\n"
?>
<?php
$variable1=12;
$variable2=4;
echo "\n";
echo ($variable1/$variable2);
?>
<?php
$var="clement";
$var1= "extrapolation";
echo "\n";
echo strlen($var) + strlen($var1);

?>
<?php
$maitrise_du_code = 1000;

if ( $maitrise_du_code >= 1000 ) {
echo "\n";
echo "je maitrise tellement le code maintenant";
}
?>
<?php
$chiffre_fetiche_sandrine = 7;
$chiffre_fetiche_xavier = 130;
$chiffre_fetiche_andre = 8;
$swap = 0;
$swap = $chiffre_fetiche_sandrine;
$chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
$chiffre_fetiche_xavier = $swap;
$concat = $chiffre_fetiche_xavier.$chiffre_fetiche_andre;
$total = $chiffre_fetiche_andre + $chiffre_fetiche_sandrine + $chiffre_fetiche_xavier;
if ($total>= 50 ){

    echo "\n";
    echo $chiffre_fetiche_sandrine - $concat;;
    echo "\n";
}
?>
<?php
$compte = 100;
if ($compte>=0){
    echo "wahou tu as des sous";
}else{
    echo "wahou t pauvre";
}
?>
<?php
$vent=32;
$houle=0;
$cadence_vague=0;
if ($vent<=30 && $houle<=30 && $cadence_vague<=8) {
    echo "\n";
    echo "baignade";
    echo "\n";
}else{
    echo "\n";
    echo "pas baignade";
    echo "\n"; 
}

?>
<?php
$nombre_1 = 88;
$nombre_2 = 7;
$nombre_3 = 23;
$nombre_4 = 5;
$nombre_5 = 45;
$nombre_6 = 12;
$multiple = 2;
function multiple($nombre,$multiple){
    if($nombre%$multiple==0){
        return "multiple de 2";
    }else{
        return "pas multiple de 2";
    }
}
echo multiple(20,2);
?>

<?php
$phrase = "Aujourd'hui il fait -1000 degree";
$phrase = addslashes($phrase);

$phrase2 = "yawie wawie";

echo strtoupper($phrase2) . "<br>";
echo lcfirst($phrase2) . "<br>";
echo ucwords($phrase2) . "<br>";

$phrase3 = "YAWIE WAWIE";

echo strtolower($phrase3) . "<br>";
echo ucfirst($phrase3) . "<br>";

$mots4 = "Yawie Yawie Yawie Yawie Yawie Yawie Yawie Yawie Yawie Yawie Yawie 
Yawie Yawie Yawie Wawie Wawie Wawie Wawie Wawie Wawie Wawie Wawie Wawie Wawie Wawie";
echo "Il ya " . str_word_count($mots4) . " mots<br>";

$phrase5 = "Bray Wyatt ete nomine pour etre le catcheur de l'anee mais c'est Drew Mcintyre qui a 
gagne la recompense";

$tab = explode(" ",$phrase5);

foreach($tab as $item){
    echo $item . "<br>";
}

$tabJoin = implode(" ",$tab);

$phrase6 = "Edge a gagne le retour de l'anee grace a son retour aux Royal Rumble apre 9 ans de blessure";
echo strrev($phrase6) . "<br>";
echo str_shuffle($phrase6) . "<br>";

$phrase7 = "<strong>Hello,</strong> nous apprenons<span style='color: blue;'>PHP</span>";

echo $phrase7 . "<br>";
echo strip_tags($phrase7) . "<br>";

$phrase8 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue sem nec 
augue sagittis, ac placerat odio luctus. Proin lacus orci, sagittis vel dolor ut,
pretium bibendum arcu";
$phrase8 = substr_replace($phrase8,"|",0,0);
echo $phrase8 . "<br>";

$phrase9 = str_split("Yawie Wawie", 1);

foreach($phrase9 as $letter){
    echo $letter . "<br>";
}

$phrase10 = "text de mon choix";
echo str_replace("choix", "Hello world",$phrase10) . "<br>";

$phrase11 = "Ceci est mon test";
echo strpos($phrase11, "test") . "<br>";

function checkTextPos($chaine1,$chaine2){
    if(strpos($chaine1,$chaine2) === 0){
        echo "yes";
    }
    else {
        echo "no";
    }
    echo "<br>";
}

function checkText($chaine1, $chaine2){
    $pos = strpos($chaine1, $chaine2);
    if ($pos === strlen($chaine1) - strlen($chaine2)){
        echo "La chaine se termine bien par la portion de texte";
    }
    echo "<br>";
}

checkText("hello world", "world");
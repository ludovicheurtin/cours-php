<?php

/* $a = 10 ;
$b = $a + 5 ;

if($b > 10) {
    var_dump("Sup à 10") ;
}

if($b == 10) {
    var_dump("Ok pour 10") ;
} else {
    var_dump("Diff de 10") ;
}

if($b == 10) {
    var_dump("On passera jamais ici !!!") ;
} elseif($b == 15) {
    var_dump("Ok pour 15") ;
}

$t = array(1, 1100, 3);
var_dump($t) ;
var_dump($t[1]) ;
$t[3] = 1234 ;
var_dump($t) ;

for($i = 0; $i < 4; $i++) {
    var_dump("i == " . $t[$i]) ;
}
*/
/*
$list = array(100,200,300,4452,5345,643) ;
$compteur = 0 ;
for($i = 0; $i < 6; $i++) {
    $compteur++ ;
}
var_dump($compteur) ; */

/*
$user = array (
    "firstname" => "Bob",
    "lastname" => "Dit l'âne",
    "age" => 30,
    "key" => "valeur"
) ;

foreach ($user as $key => $value) {
    var_dump("$key = > $value") ;
} */

/*
$lastnames = array("Dit l'âne", "doe", "die");

$incompletUsers = array(
    array(
        "firstname" => "bob",
        "email" => "bob@domain.oui"
    ),
    array(
        "firstname" => "john",
        "email" => "john@domain.oui"
    ),
    array(
    "firstname" => "jane",
    "email" => "jane@domain.oui"
    ),
);

foreach ($incompletUsers as $index => $user) {
    $incompletUsers[$index]["lastname"] = $lastnames[$index];
}
var_dump($incompletUsers);
*/

/*
$persons = array();

$personJohn = array (
    "username" => "john",
    "email" => "john@domain.tld"
);

$persons[] = $personJohn ;

var_dump */

$person = array(
    "firstname" => "jOhN",
    "lastname" => "dOE"
);

function helloArray($user) {
    if(empty($user["firstname"])) {
        var_dump("Ce champ est obligatoire : prénom");
    }
    if(empty($user["lastname"])) {
        var_dump("Ce champ est obligatoire : nom");
    }
    if(empty($user["firstname"]) == false AND empty($user["lastname"]) == false) {
        var_dump("Hello " . ucfirst(strtolower($user["firstname"])) . " "  . ucfirst(strtolower($user["lastname"])));
    }
}
helloArray($person);
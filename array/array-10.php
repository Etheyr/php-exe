<?php

$numD = array(

	"02" => "Aisne",
	"59" => "Nord",
	"60" => "Oise",
	"62" => "Pas-de-Calais",
	"80" => "Somme",

	);

foreach ($numD as $key => $value) {

	echo "Le departement"." ".$value." "."a le numero"." ".$key;
}

?>
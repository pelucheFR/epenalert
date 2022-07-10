<?php

require_once './test/testFunction.php';
require_once './functions/functionsLoader.php';
functionsLoader();

## VARIABLES UTILES ##
$testPath = "./test/testFolder";

## FAIRE LA LISTE DES FICHIERS ##
test("La Fonction trouve ",makesAListOfEpenFiles($testPath),['jesuisunfichierEPEN_AAAA.epen']);
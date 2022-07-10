<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
require_once './functions/functionsLoader.php';

$Debug = true;
$EPENFilesList = null;
$SCAList = null;
$mailListBySCA = null;
$dataBaseObject = null;
$EPENFilesPath = 'D:/epen';
$mailModelPath = './data/mail.json';

functionsLoader();
$EPENFilesList = makesAListOfEpenFiles($EPENFilesPath);
if (is_array($EPENFilesList)) {
    $SCAList = getSCACodeInList($EPENFilesList);
    deleteEPENFiles($EPENFilesPath, $EPENFilesList);
    $dataBaseObject = makeADatabaseConnectionObject();
    $mailListBySCA = getMailInDataBase($dataBaseObject);
}

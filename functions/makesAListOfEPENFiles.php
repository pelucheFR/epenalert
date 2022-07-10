<?php

function makesAListOfEpenFiles(string $path){
    $list = [];

    foreach(scandir($path) as $files){
        $regexExtensionEpenChecker = '/[a-zA-Z]+\\.epen$/i';
        $condition = preg_match($regexExtensionEpenChecker, $files);
        
        if($condition){
            $list[] = $files;
        };
    }
    if($list === []){
        $list = null;
    }
    return $list;
}
<?php

function functionsLoader(){
    foreach (glob('./functions/*.php') as $functions){
        require_once $functions;
    }
}
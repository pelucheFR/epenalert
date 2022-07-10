<?php

function test(string $title, $value, $expected)
{
    $testValue = '';

    if ($value === $expected) {
        $testValue = "\033[32mPASS\033[39m";
        echo $testValue . " " . $title . "\r\n";
    } else {
        $testValue = "\033[31mFAIL\033[39m";
        echo $testValue . " " . $title . "\r\n";

        if (is_array($value)) {
            var_dump($value);
        } else {
            echo $value;
        }
    }
}

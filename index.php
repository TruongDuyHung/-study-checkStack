<?php

function check($string)
{
    $stack = new SplStack();
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === "(") {
            $stack->push("(");
        } elseif ($string[$i] === ")") {
            if ($stack->isEmpty()) {
                return false;
            }
            $stack->pop();
        }
    }
    if ($stack->isEmpty()) {
        return true;
    } else {
        return false;
    }
}

function printX($string)
{
    if (check($string)) {
        echo 'Dung';
    } else {
        echo "Sai";
    }
}

$string = "s * (s – a) * (s – b * (s – c)";
printX($string);



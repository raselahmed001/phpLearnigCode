<?php

function square($n,$c)
{
    return [$n=>$c];
}
$a = [10,20,30];
$color = ["green","blue","yellow"];
$new = array_map("square", $a,$color);
echo "<pre>";
print_r($new);
echo "</pre>";

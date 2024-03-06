<?php

function counter_inc(&$counter) : void {
    $counter++;
}

$counter = 6;

counter_inc($counter);

echo $counter;
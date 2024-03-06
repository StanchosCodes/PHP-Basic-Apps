<?php

function counter_inc($counter) : void {
    global $counter;
    $counter++;
}

$counter = 6;

counter_inc($counter);

echo $counter;
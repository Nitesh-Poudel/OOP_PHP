<?php
    $a=5;
    $b=$a;//copy_by_value
    $b=& $a;//copy_by_refrence
    $b=10;
    echo $a;//a=5
?>
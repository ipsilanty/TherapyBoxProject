<?php

function getPercentage($x) {
    $y = 1000;

    $percent = $x/$y;
    $percent_friendly = number_format( $percent * 100, 2 ) . '%';

    return $percent_friendly;
}
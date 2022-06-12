<?php 

// print_r($argv);
// print_r($argc);

$short = "";

$long = [
    "test"
];

$options = getopt($short, $long);
<?php

$time_start = microtime(true);

if (isset($argv) && isset($argv[1]) && is_numeric($argv[1])) {
    echo "------------------" . PHP_EOL;
    echo "DAY ".$argv[1] . PHP_EOL;
    echo "------------------" . PHP_EOL;

    include(__DIR__ . DIRECTORY_SEPARATOR . "day" . $argv[1]. DIRECTORY_SEPARATOR . "solution.php");
}

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start);

//execution time of the script
echo PHP_EOL . "Total Execution Time: ".number_format($execution_time * 1000, 2)."ms";
<?php

$time_start = microtime(true);

if (isset($argv) && isset($argv[1]) && is_numeric($argv[1])) {
    echo "------------------\n";
    echo "DAY ".$argv[1]."\n";
    echo "------------------\n";

    include(__DIR__ . DIRECTORY_SEPARATOR . "day" . $argv[1]. DIRECTORY_SEPARATOR . "solution.php");
}

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start);

//execution time of the script
echo "\nTotal Execution Time: ".number_format($execution_time * 1000, 2)."ms";
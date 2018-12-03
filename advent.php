<?php

if (isset($argv) && isset($argv[1]) && is_numeric($argv[1])) {
    echo "------------------\n";
    echo "DAY ".$argv[1]."\n";
    echo "------------------\n";

    include(__DIR__ . DIRECTORY_SEPARATOR . "day" . $argv[1]. DIRECTORY_SEPARATOR . "solution.php");
}
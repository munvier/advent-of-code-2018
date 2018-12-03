<?php
    $input              = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'input.txt');

    $frequency_changes  = explode("\n", $input);

    $base_frequency     = 0;

    foreach ($frequency_changes as $frequency_change) {
        $formatted_frequency = substr(trim($frequency_change), 1);

        $base_frequency += $formatted_frequency * ($frequency_change[0] === "+" ? 1 : -1);
    }

    echo "[PART 1] : ".$base_frequency;
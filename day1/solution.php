<?php
    $input              = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'input.txt');

    $frequency_changes  = explode("\n", $input);

    // PART ONE

    $base_frequency     = 0;

    foreach ($frequency_changes as $frequency_change) {
        $formatted_frequency    = substr(trim($frequency_change), 1);

        $base_frequency         += $formatted_frequency * ($frequency_change[0] === "+" ? 1 : -1);
    }

    echo "[PART ONE] : ".$base_frequency;

    // PART TWO

    $base_frequency     = 0;
    $frequencies_found  = [$base_frequency];

    foreach ($frequency_changes as $key => $frequency_change) {
        $formatted_frequency    = substr(trim($frequency_change), 1);

        $base_frequency         += $formatted_frequency * ($frequency_change[0] === "+" ? 1 : -1);
        if (in_array($base_frequency, $frequencies_found)) {

            break;
        } else {
            $frequencies_found []   = $base_frequency;
        }
    }

    sort($frequencies_found);
    print_r($frequencies_found);
    die();

    echo "\n[PART TWO] : ".$base_frequency;
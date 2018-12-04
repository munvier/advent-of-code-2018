<?php
    $input                  = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'input.txt');
    $frequency_changes      = explode(PHP_EOL, $input);
    $base_frequency         = 0;
    $frequencies_found []   = $base_frequency;
    $part_1_solution;
    $part_2_solution;

    while (true) {
        foreach ($frequency_changes as $frequency_change) {
            $base_frequency         += (double) $frequency_change;

            if (in_array($base_frequency, $frequencies_found)) {
                $part_2_solution = $base_frequency;
                break 2;
            }

            $frequencies_found []   = $base_frequency;
        }

        if (empty($part_1_solution)) {
            $part_1_solution = $base_frequency;
        }
    }

    echo "[PART ONE] : ".$part_1_solution;
    echo PHP_EOL;
    echo "[PART TWO] : ".$part_2_solution;
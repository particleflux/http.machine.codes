#!/usr/bin/env php
<?php

if (!is_dir(__DIR__ . '/../build')) {
    mkdir(__DIR__ . '/../build');
}

$statusCodes = json_decode(file_get_contents(__DIR__ . '/../_data/status-codes.json'), true);
$templates = array_diff(scandir(__DIR__ . '/../_templates'), ['.', '..']);

foreach ($templates as $template) {
    foreach ($statusCodes as $entry) {
        extract($entry, EXTR_OVERWRITE);
        ob_start();
        $name = require __DIR__ . "/../_templates/$template";
        $output = ob_get_clean();
        file_put_contents(__DIR__ . "/../build/$name", $output);
    }
}


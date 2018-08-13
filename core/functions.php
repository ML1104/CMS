<?php

/**
 * Dumps the data on the screen
 * @param $data
 */
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}


function view($file, $data = []) {
    $file = str_replace('.', '/', $file);
    extract($data);
    require "views/{$file}.view.php";
}

function redirect($path) {
    header("Location: {$path}");
}

function checkCategory($id) {
    switch ($id) {
        case 1:
            return 'Humanoid';
            break;
        case 2:
            return 'Flora';
            break;
        case 3:
            return 'Fauna';
            break;
        case 4:
            return 'Construct';
            break;
    }
}
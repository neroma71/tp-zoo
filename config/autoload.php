<?php
// Strict
declare(strict_types=1);
// Enable all php errors
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
// Pretty errors
ini_set("html_errors", "1");
ini_set("error_prepend_string", "<pre style='color: #333; font-face:monospace; white-space:
pre-wrap;font-size: 17px;color:#880808'>");
ini_set("error_append_string ", "</pre>");
// Autoload logic
function chargerClasse($classname)
{
    $directories = ['animaux', 'enclos'];

    foreach ($directories as $dir) {
        $filepath = __DIR__ . "/../class/$dir/$classname.php";
        if (file_exists($filepath)) {
            require $filepath;
            return;
        }
    }

    $filepath = __DIR__ . "/../repository/$classname.php";
    if (file_exists($filepath)) {
        require $filepath;
        return;
    }

    require __DIR__ . '/../class/' . $classname . '.php';
}

spl_autoload_register('chargerClasse');
// Session
session_start();
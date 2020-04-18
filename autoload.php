<?php
var_dump("udebug");
spl_autoload_register(function ($className) {
    $file = __DIR__ . "\\" . "Classes" . "\\" . $className . ".php";
    $file = str_replace("\\", DIRECTORY_SEPARATOR, $file);

    echo "$file <br>";

    if (file_exists($file)) {
        require $file;
    }
});

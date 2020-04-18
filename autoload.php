<?php
spl_autoload_register(function ($className) {
    // Class directories
    $dirs = array(
        "Classes\\",
        "Classes\\Pokemon\\",
        "Classes\\Property\\"
    );

    // Loop through all directories
    foreach ($dirs as $dir) {
        $file = __DIR__ . "\\" . $dir . $className . ".php";
        $file = str_replace("\\", DIRECTORY_SEPARATOR, $file);

        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});

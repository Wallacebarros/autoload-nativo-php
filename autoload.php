<?php
function autoload($class) {
    $fileBase = DIR_APP . DS;
    $class = $fileBase . str_replace('\\', DS, $class) . '.php';
    if (file_exists($class) && !is_dir($class)) {
        include $class;
    }
}

spl_autoload_register('autoload');

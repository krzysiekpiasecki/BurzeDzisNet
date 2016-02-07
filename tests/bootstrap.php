<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

spl_autoload_register(function ($className) {
    if (class_exists($className) === true) {
        return;
    }
    $filePath = sprintf('src%s%s.php',
        DIRECTORY_SEPARATOR,
        str_replace('\\', DIRECTORY_SEPARATOR, $className)
    );
    if (is_readable($filePath) === true) {
        require_once $filePath;
    }
});

require_once sprintf(
    '%s%s..%svendor%sautoload.php',
    __DIR__,
    DIRECTORY_SEPARATOR,
    DIRECTORY_SEPARATOR,
    DIRECTORY_SEPARATOR
);

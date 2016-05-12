<?php

$config      = [];

$configFiles = [
    require __DIR__ . '/autoload/module_layout.config.php',
    require __DIR__ . '/autoload/navigator.config.php',
    require __DIR__ . '/autoload/router.config.php',
    require __DIR__ . '/autoload/translator.config.php',
    require __DIR__ . '/autoload/view_manager.config.php'    
];

foreach ($configFiles as $configFile) {
    $config = \Zend\Stdlib\ArrayUtils::merge($config, $configFile);
}

return $config;
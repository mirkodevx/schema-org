#!/usr/bin/env php
<?php

if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require __DIR__.'/vendor/autoload.php';
} elseif(file_exists(__DIR__.'/../../autoload.php')) {
    require __DIR__.'/../../autoload.php';
}

$application = new Spatie\SchemaOrg\Generator\Console\Application();

$application->run();

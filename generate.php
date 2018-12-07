#!/usr/bin/env php
<?php

if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require __DIR__.'/vendor/autoload.php';
} else (file_exists(__DIR__.'/../../autoload.php')) {
    require __DIR__.'/../../autoload.php';
}else{

}

$application = new Spatie\SchemaOrg\Generator\Console\Application();

$application->run();

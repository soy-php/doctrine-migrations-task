<?php

$recipe = new \Soy\Recipe();

$recipe->component('default', function (\Soy\DoctrineMigrations\MigrateTask $migrateTask) {
    $migrateTask
        ->setBinary('../test/vendor/bin/doctrine-migrations')
        ->setCommandNamespace('migrations:')
        ->setConfiguration('migrations.yml')
        ->setDbConfiguration('db.php')
        ->setVerbose(true)
        ->run();
});

return $recipe;

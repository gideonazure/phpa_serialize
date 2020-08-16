#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ . '/../src/Serialize.php';
require_once __DIR__ . '/TestClass.php';
use Serialize\SerializeJson;
use Serialize\SerializeYaml;
use Serialize\SerializeXml;

$tester = new TestClass(
        'PHPA. Class serializer',
        'Create library for class serializing to JSON, YAML and JSON formats',
        'Worging library with composer instalation',
        ['PHP', 'GIT', 'OOP', 'COMPOSER']
);

$JSON = new SerializeJson();
$YAML = new SerializeYaml();
$XML = new SerializeXml();


echo 'JSON ' . \PHP_EOL;
try {
    echo \PHP_EOL . $JSON->serilalize($tester) . \PHP_EOL . \PHP_EOL;
} catch (\Exception $e){
    echo $e->getMessage();
}


echo 'YAML: ' . \PHP_EOL;
try {
    echo \PHP_EOL . $YAML->serilalize($tester) . \PHP_EOL . \PHP_EOL;
} catch (\Exception $e){
    echo $e->getMessage();
}


echo 'XML: ' . \PHP_EOL;
try {
    echo \PHP_EOL . $XML->serilalize($tester) . \PHP_EOL . \PHP_EOL;
} catch (\Exception $e){
    echo $e->getMessage();
}


echo 'WRONG DATA TYPE: ' . \PHP_EOL;
try {
    echo \PHP_EOL . $JSON->serilalize('SOME WRONG DATA STRING');
} catch (\Exception $e){
    echo $e->getMessage();
}
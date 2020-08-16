#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/SerializeClass.php';
require_once __DIR__ . '/../src/SerializeTest.php';

$tester = new SerializeTest(
        'PHPA. Class serializer',
        'Create library for class serializing to JSON, YAML and JSON formats',
        'Worging library with composer instalation',
        ['PHP', 'GIT', 'OOP', 'COMPOSER']
);

$JSON = new SerializeClass('JSON');
$YAML = new SerializeClass('YAML');
$XML = new SerializeClass('XML');
$Script = new SerializeClass('Script');


echo 'JSON:' . \PHP_EOL . $JSON->serilalize($tester) . \PHP_EOL . \PHP_EOL;
echo 'YAML:' . \PHP_EOL . $YAML->serilalize($tester) . \PHP_EOL . \PHP_EOL;
echo 'XML:' . \PHP_EOL . $XML->serilalize($tester) . \PHP_EOL . \PHP_EOL;
echo 'WRONG FORMAT: ' . \PHP_EOL . $Script->serilalize($tester) . \PHP_EOL . \PHP_EOL;
echo 'WRONG DATA TYPE: ' . \PHP_EOL . $JSON->serilalize('SOME WRONG DATA STRING') . \PHP_EOL . \PHP_EOL;
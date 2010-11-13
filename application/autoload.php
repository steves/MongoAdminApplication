<?php

require_once __DIR__ . '/../vendor/symfony/src/Symfony/Component/HttpFoundation/UniversalClassLoader.php';

$loader = new \Symfony\Component\HttpFoundation\UniversalClassLoader();
$loader->registerNamespaces(array(
	'Symfony'      => __DIR__ . '/../vendor/symfony/src',
	'Doctrine\ODM' => __DIR__ . '/../vendor/mongodb-odm/lib',
	'Bundle'       => __DIR__ . '/../src',
	'Zend'         => __DIR__ . '/../vendor/zend/library',
	));

$loader->registerPrefixes(array(
	'Twig_' => __DIR__ . '/../vendor/twig/lib',
	));

$loader->register();
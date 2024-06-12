<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->name('*.php');

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@PSR12' => true,
        // Add rules to be applied here
	    'no_unused_imports' => true,
        'strict_param' => true,
	     'array_syntax' => ['syntax' => 'short'],
        // Exclude specific rules
    ])
    ->setFinder($finder);

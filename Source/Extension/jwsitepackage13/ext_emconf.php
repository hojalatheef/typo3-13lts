<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 V13 JW Sitepackage',
    'description' => 'This jweiland.net sitepackage is a template for new TYPO3 projects and can be customized to ones needs.',
    'category' => 'templates',
    'author' => 'Riona Kuthe, Stefan Froemken',
    'author_email' => 'extensions@jweiland.net, extensions@jweiland.net',
    'state' => 'excludeFromUpdates',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.6',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.2-12.4.99',
            'indexed_search' => '12.4.2-12.4.99',
            'dashboard' => '12.4.2-12.4.99',
            'container' => '1.0.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

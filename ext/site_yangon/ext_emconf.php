<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Yangon Sitepackage',
    'description' => 'Yangon Sitepackage',
    'category' => 'templates',
    'author' => '...',
    'author_email' => '...',
    'author_company' => '...',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];
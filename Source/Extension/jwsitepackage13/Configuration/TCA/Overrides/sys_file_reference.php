<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [
    'desktop' => [
        'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantDefault',
        'selectedRatio' => 'NaN',
        'allowedAspectRatios' => [
            'NaN' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantFree',
                'value' => 0.0,
            ],
            '1:1' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant1to1',
                'value' => 1.0,
            ],
            '3:2' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant3to2',
                'value' => 3 / 2,
            ],
            '2:3' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant2to3',
                'value' => 2 / 3,
            ],
            '4:3' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant4to3',
                'value' => 4 / 3,
            ],
            '3:4' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant3to4',
                'value' => 3 / 4,
            ],
            '16:9' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant16to9',
                'value' => 16 / 9,
            ],
            '16:3' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant16to3',
                'value' => 16 / 3,
            ],
        ],
    ],
];

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants']['tablet'] = $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants']['desktop'];
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants']['tablet']['title'] = 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantTablet';

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants']['smartphone'] = $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants']['desktop'];
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants']['smartphone']['title'] = 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantSmartphone';

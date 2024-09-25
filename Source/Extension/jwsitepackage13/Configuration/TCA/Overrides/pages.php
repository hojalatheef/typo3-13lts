<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(static function (): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'jwsitepackage13',
        'Configuration/TSconfig/Page.tsconfig',
        'General Page TSconfig'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'jwsitepackage13',
        'Configuration/TSconfig/BackendLayouts.tsconfig',
        'Default Backend Layouts'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'jwsitepackage13',
        'Configuration/TSconfig/CropVariants.tsconfig',
        'General Crop Variants'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'jwsitepackage13',
        'Configuration/TSconfig/FooterBackendLayout.tsconfig',
        'Backend Layout Footer'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'jwsitepackage13',
        'Configuration/TSconfig/StyleguideBackendLayout.tsconfig',
        'Backend Layout Styleguide'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'jwsitepackage13',
        'Configuration/TSconfig/RTE/custom.tsconfig',
        'RTE: Custom Configuration'
    );

    $temporaryColumns = [
        'nav_image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang_db.xlf:jwsitepackage13.navimage',
            'config' => [
                'type' => 'file',
                'allowed' => 'common-media-types',
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'pages',
        $temporaryColumns
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'nav_image',
        '',
        'after:media'
    );
});

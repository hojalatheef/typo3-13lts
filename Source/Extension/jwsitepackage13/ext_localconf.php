<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:jwsitepackage12/Configuration/RTE/CustomV12.yaml';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:jwsitepackage12/Configuration/TSconfig/User.tsconfig"'
);

// Customize the label for the input field "Relationship" in the link browser
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf'][]
    = 'EXT:jwsitepackage12/Resources/Private/Language/locallang_browse_links.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf'][]
    = 'EXT:jwsitepackage12/Resources/Private/Language/de.locallang_browse_links.xlf';

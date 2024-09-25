<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:jwsitepackage13/Configuration/RTE/CustomV13.yaml';
}

// Customize the label for the input field "Relationship" in the link browser
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf'][]
    = 'EXT:jwsitepackage13/Resources/Private/Language/locallang_browse_links.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf'][]
    = 'EXT:jwsitepackage13/Resources/Private/Language/de.locallang_browse_links.xlf';

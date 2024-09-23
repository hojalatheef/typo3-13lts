<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jwsitepackage12', 'Configuration/TypoScript/Rootpages/Project1', 'TYPO3 V12 JW Sitepackage');

////// add folder for further projects within the installation here, can be selected in Root Template under Include Static /////

// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jwsitepackage12, 'Configuration/TypoScript/Rootpages/Project2', 'Individual Project Title');

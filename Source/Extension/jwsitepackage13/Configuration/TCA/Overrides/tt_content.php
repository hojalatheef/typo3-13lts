<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(static function (): void {
    $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['bodytext']['config']['enableRichtext'] = 1;
    $GLOBALS['TCA']['tt_content']['types']['heroimage']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, 
        --palette--;;general, 
        --palette--;;header, bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel, 
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media, assets,  
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, 
        --palette--;;frames, 
        --palette--;;appearanceLinks, 
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, 
        --palette--;;language, 
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, 
        --palette--;;hidden, 
        --palette--;;access, 
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, 
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, 
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ';
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:ctype.heroimage.title',
        'heroimage',
        'ext-jwsitepackage13-hero',
        'default',
    ];
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['heroimage'] = 'ext-jwsitepackage13-hero';

    $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] = [
        'cropVariants' => [
            'desktop' => [
                'disabled' => true,
            ],
            'tablet' => [
                'disabled' => true,
            ],
            'smartphone' => [
                'disabled' => true,
            ],
            'hero' => [
                'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantDefault',
                'selectedRatio' => 'NaN',
                'allowedAspectRatios' => [
                    '16:9' => [
                        'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant16to9',
                        'value' => 16 / 9,
                    ],
                    '3:1' => [
                        'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariant3to1',
                        'value' => 3 / 1,
                    ],
                    'NaN' => [
                        'title' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantFree',
                        'value' => 0.0,
                    ],
                ],
            ],
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['heroTablet'] = $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['hero'];
    $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['heroTablet']['title'] = 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantTablet';

    $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['heroSmartphone'] = $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['hero'];
    $GLOBALS['TCA']['tt_content']['types']['heroimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['heroSmartphone']['title'] = 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:cropVariantSmartphone';

    $temporaryColumn = [
        'tx_jwsitepackage13_imagesizes' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang_db.xlf:jwsitepackage13.imagesizes',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Default', '100'],
                    ['25%', '25'],
                    ['33.33%', '33'],
                ],
                'default' => '100',
            ],
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $temporaryColumn
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'mediaAdjustments',
        'tx_jwsitepackage13_imagesizes',
        'after:imageborder'
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'cols_2',
            'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:ctype.col-2.title',
            'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:ctype.col-2.desc',
            [
                [
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-201',
                        'colPos' => 201,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-202',
                        'colPos' => 202,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                ],
            ]
        )
        )
            // set and optional icon configuration
            ->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
            ->setSaveAndCloseInNewContentElementWizard(false)
    );
    $GLOBALS['TCA']['tt_content']['types']['cols_2']['showitem'] = 'sys_language_uid,hidden,CType,header,header_layout,header_position,layout,colPos,tx_container_parent,sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel';
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'cols_3',
            'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:ctype.col-3.title',
            'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:ctype.col-3.desc',
            [
                [
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-301',
                        'colPos' => 301,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-302',
                        'colPos' => 302,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-303',
                        'colPos' => 303,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                ],
            ]
        )
        )
            // set and optional icon configuration
            ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
            ->setSaveAndCloseInNewContentElementWizard(false)
    );
    $GLOBALS['TCA']['tt_content']['types']['cols_3']['showitem'] = 'sys_language_uid,hidden,CType,header,header_layout,header_position,layout,colPos,tx_container_parent,sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel';
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'cols_4',
            'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:ctype.col-4.title',
            'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:ctype.col-4.desc',
            [
                [
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-401',
                        'colPos' => 401,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-402',
                        'colPos' => 402,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-403',
                        'colPos' => 403,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                    [
                        'name' => 'LLL:EXT:jwsitepackage13/Resources/Private/Language/locallang.xlf:colpos-404',
                        'colPos' => 404,
                        'disallowed' => ['CType' => 'cols_2, cols_3, cols_4, heroimage'],
                    ],
                ],
            ]
        )
        )
            // set and optional icon configuration
            ->setIcon('EXT:container/Resources/Public/Icons/container-4col.svg')
            ->setSaveAndCloseInNewContentElementWizard(false)
    );
    $GLOBALS['TCA']['tt_content']['types']['cols_4']['showitem'] = 'sys_language_uid,hidden,CType,header,header_layout,header_position,layout,colPos,tx_container_parent,sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel';
});

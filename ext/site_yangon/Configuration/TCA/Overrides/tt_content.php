<?php
// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        'LLL:EXT:site_yangon/Resources/Private/Language/locallang.xlf:site_yangon_newcontentelement_title',
        'site_yangon_newcontentelement',
        'content-text',
    ],
    'textmedia',
    'after'
);
// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['site_yangon_newcontentelement'] = [
   'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
      ',
   'columnsOverrides' => [
      'bodytext' => [
         'config' => [
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
         ],
      ],
   ],
];

<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Extension key
     */
    $extensionKey = 'site_yangon';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Sitepackage'
    );
});
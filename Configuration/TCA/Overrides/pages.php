<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile('wwonepagetemplate','Configuration/TSconfig/Page.tsconfig','Default PageTSconfig');

$newPageColumns = array(
    'ww_css_id' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:wwonepagetemplate/Resources/Private/Site/Language/locallang.xlf:ww_css_id',
        'config' => array(
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower,unique,required'
        ),
    ),
    'ww_css_class' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:wwonepagetemplate/Resources/Private/Site/Language/locallang.xlf:ww_css_class',
        'config' => array(
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower,unique'
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newPageColumns);

$GLOBALS['TCA']['pages']['palettes']['wwonepagetemplate'] = array(
    'canNotCollapse' => 1,
    'showitem' => 'ww_css_id, ww_css_class'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;LLL:EXT:wwonepagetemplate/Resources/Private/Site/Language/locallang.xlf:palettename;wwonepagetemplate,',
    '',
    'after:layout'
);

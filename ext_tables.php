<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$extKey = 'cookie-registry-typo3-connector';

if (TYPO3_MODE === 'BE') {

};
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CookieRegistryConnector',
    'CookieList',
    'Cookie List'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CookieRegistryConnector',
    'CookieRegistryJson',
    'Cookie Registry JSON'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Cookie Registry Typo3 Connector');
$pluginSignature = str_replace('_', '', $extKey) . '_cookielist';
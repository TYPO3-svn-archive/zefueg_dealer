<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	'ZefuegDealer',
	'Pi1',
	'Zefueg Dealer Catalogue'
);

t3lib_extMgm::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'Zefueg Dealer Catalogue'
);

$GLOBALS['TCA']['tx_zefuegdealer_domain_model_region'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_region',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'default_sortby' => 'ORDER BY name',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'Configuration/TCA/tca_tx_zefuegdealer_domain_model_region.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'Resources/Public/Images/icon_tx_zefuegdealer_domain_model_region.gif',
	),
);

$GLOBALS['TCA']['tx_zefuegdealer_domain_model_dealer'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'default_sortby' => 'ORDER BY name',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_zefuegdealer_domain_model_dealer.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_zefuegdealer_domain_model_dealer.gif',
	),
);


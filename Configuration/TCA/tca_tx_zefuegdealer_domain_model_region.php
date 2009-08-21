<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_zefuegdealer_domain_model_region'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_zefuegdealer_domain_model_region']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,name,dealers',
		'maxDBListItems' => 50,
		'maxSingleDBListItems' => 50,
	),
	'feInterface' => $GLOBALS['TCA']['tx_zefuegdealer_domain_model_region']['feInterface'],
	'columns' => array(
/**
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => '30',
				'max' => '30',
			),
		),
**/
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_region.name',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'required,trim',
			),
		),
		'dealers' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer',
			'config' => array(
				'type' => 'inline',
				'foreign_class' => 'Tx_ZefuegDealer_Domain_Model_Dealer',
				'foreign_table' => 'tx_zefuegdealer_domain_model_dealer',
				'appearance' => array(
					'collapseAll' => TRUE,
					'expandSingle' => TRUE,
					'newRecordLinkAddTitle' => TRUE,
					'newRecordLinkPosition' => 'top',
				),
				'foreign_field' => 'region',
			),
		),
	),
	'types' => array(
		'0' => array('showitem' => 'hidden;;1;;1-1-1, name, dealers'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
);


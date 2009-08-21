<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_zefuegdealer_domain_model_dealer'] = array (
	'ctrl' => $GLOBALS['TCA']['tx_zefuegdealer_domain_model_dealer']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,name,owner,street,zip,city,telephone,facsimile,email,homepage,',
		'maxDBListItems' => 50,
		'maxSingleDBListItems' => 50,
	),
	'feInterface' => $GLOBALS['TCA']['tx_zefuegdealer_domain_model_dealer']['feInterface'],
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
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.name',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'required,trim',
			),
		),
		'owner' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.owner',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'required,trim',
			),
		),
		'street' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.street',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'required,trim',
			),
		),
		'zip' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.zip',
			'config' => array(
				'type' => 'input',
				'size' => '7',
				'max' => '7',
				'eval' => 'required,trim',
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.city',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'required,trim',
			),
		),
		'telephone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.telephone',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'trim',
			),
		),
		'facsimile' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.facsimile',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'trim',
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.email',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '200',
				'eval' => 'trim',
			),
		),
		'homepage' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:zefueg_dealer/Resources/Private/Language/locallang_db.xml:tx_zefuegdealer_domain_model_dealer.homepage',
			'config' => array(
				'type' => 'input',
				'size' => '15',
				'max' => '255',
				'checkbox' => '',
				'eval' => 'trim',
				'wizards' => array(
					'_PADDING' => 2,
					'link' => array(
						'type' => 'popup',
						'title' => 'Link',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
					),
				),
			),
		),
		'region' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
	'types' => array(
		'0' => array('showitem' => 'hidden;;1;;1-1-1, name, owner, street, zip, city, telephone, facsimile, email, homepage'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
);


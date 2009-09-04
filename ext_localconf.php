<?php

if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configureDispatcher(
	'ZefuegDealer',
	'Pi1',
	array(
		'Region' => 'index,show',
	),
	array(
		'Region' => 'index,show',
	)
);

t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_zefuegdealer_domain_model_region=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_zefuegdealer_domain_model_dealer=1
');

if (TYPO3_MODE == 'FE') {
	require_once(t3lib_extMgm::extPath('zefueg_dealer') . 'class.tx_zefuegdealer.php');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'tx_zefuegdealer->contentPostProc_output';


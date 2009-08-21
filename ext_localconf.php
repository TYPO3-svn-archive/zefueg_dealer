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


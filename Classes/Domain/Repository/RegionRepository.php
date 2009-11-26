<?php

/**
 * Repository for Regions
 */
class Tx_ZefuegDealer_Domain_Repository_RegionRepository extends Tx_Extbase_Persistence_Repository {

	public function __construct() {
		$dispatcher = new Tx_Extbase_Dispatcher();
		parent::__construct();
	}

	public function getOrdered() {
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);
		return $query
			->setOrderings(array('name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING))
			->execute();
	}

}


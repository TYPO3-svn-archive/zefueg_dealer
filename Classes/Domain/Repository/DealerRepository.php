<?php

/**
 * Repository for Dealers
 */
class Tx_ZefuegDealer_Domain_Repository_DealerRepository extends Tx_Extbase_Persistence_Repository {

	public function getOrderedByRegion($regionUid) {
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);
		return $query
			->setOrderings(array('name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING))
			->matching($query->equals('region', $regionUid))
			->execute();
	}

}


<?php

/**
 * A Region
 *
 * @scope prototype
 * @entity
 */
class Tx_ZefuegDealer_Domain_Model_Region extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Modification date
	 *
	 * @var int
	 */
	protected $tstamp = 0;

	/**
	 * The region name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * The dealers contained in this region
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_ZefuegDealer_Domain_Model_Dealer>
	 * @lazy
	 * @cascade remove
	 */
	protected $dealers;

	/**
	 * Constructs this region
	 *
	 * @return
	 */
	public function __construct() {
		$this->dealers = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Gets the modification date
	 *
	 * @return int
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * Sets the modification date
	 *
	 * @param int $tstamp
	 * @return void
	 */
	public function setTstamp($tstamp) {
		$this->tstamp = $tstamp;
	}

	/**
	 * Gets the name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Adds a dealer to this region
	 *
	 * @param Tx_ZefuegDealer_Domain_Model_Dealer $dealer
	 * @return void
	 */
	public function addDealer(Tx_ZefuegDealer_Domain_Model_Dealer $dealer) {
		$this->dealers->attach($dealer);
	}

	/**
	 * Removes a dealer from this region
	 *
	 * @param Tx_ZefuegDealer_Domain_Model_Dealer $dealerToRemove
	 * @return void
	 */
	public function removeDealer(Tx_ZefuegDealer_Domain_Model_Dealer $dealerToRemove) {
		$this->dealers->detach($dealerToRemove);
	}

	/**
	 * Removes all dealers from this region
	 *
	 * @return void
	 */
	public function removeAllDealers() {
		$this->dealers = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all dealers in this region
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getDealers() {
		return clone $this->dealers;
	}

	/**
	 * Returns this region as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Region: ' . $this->uid . ': ' . $this->name;
	}

}


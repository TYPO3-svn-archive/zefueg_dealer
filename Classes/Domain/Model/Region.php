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
	 * @var array
	 */
	protected $dealers = array();

	/**
	 * Constructs this region
	 *
	 * @return
	 */
	public function __construct() {
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
		$this->dealers[] = $dealer;
	}

	/**
	 * Removes a dealer from this region
	 *
	 * @param Tx_ZefuegDealer_Domain_Model_Dealer $dealerToRemove
	 * @return void
	 */
	public function removeDealer(Tx_ZefuegDealer_Domain_Model_Dealer $dealerToRemove) {

		foreach ($this->dealers as $key => $dealer) {

			if ($dealer === $dealerToRemove) {
				unset($this->dealers[$key]);
				reset($this->dealers);
				return;
			}

		}

	}

	/**
	 * Removes all dealers from this region
	 *
	 * @return void
	 */
	public function removeAllDealers() {
		$this->dealers = array();
	}

	/**
	 * Returns all dealers in this region
	 *
	 * @return array of Tx_ZefuegDealer_Domain_Model_Dealer
	 */
	public function getDealers() {
		return $this->dealers;
	}

	/**
	 * Returns single dealer by its identifier
	 *
	 * @param int $uid
	 * @return Tx_ZefuegDealer_Domain_Model_Dealer or NULL if not found
	 */
	public function findDealerByUid($uid) {

		if (array_key_exists($uid, $this->dealers)) {
			return $this->dealers[$uid];
		} else {
			return NULL;
		}

	}

	/**
	 * Returns single dealer by company
	 *
	 * @param string $dealerCompany
	 * @return Tx_ZefuegDealer_Domain_Model_Dealer or NULL if not found
	 */
	public function findDealerByCompany($dealerCompany) {

		foreach ($this->dealers as $dealer) {

			if (strtolower($dealer->getCompany()) === strtolower($dealerCompany)) {
				return $dealer;
			}

		}

		return NULL;
	}

	/**
	 * Returns the number of dealers in this region
	 *
	 * @return int Number of dealers
	 */
	public function getDealerCount() {
		return count($this->dealers);
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


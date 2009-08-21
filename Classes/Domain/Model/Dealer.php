<?php

/**
 * A Dealer
 *
 * @scope prototype
 * @entity
 */
class Tx_ZefuegDealer_Domain_Model_Dealer extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Modification Date
	 *
	 * @var int
	 */
	protected $tstamp = 0;

	/**
	 * The Company Name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * The Company Owner
	 *
	 * @var string
	 */
	protected $owner = '';

	/**
	 * The Company Street
	 *
	 * @var string
	 */
	protected $street = '';

	/**
	 * The zip of the company city
	 *
	 * @var string
	 */
	protected $zip = '';

	/**
	 * The city of the company
	 *
	 * @var string
	 */
	protected $city = '';

	/**
	 * The telephone of the company
	 *
	 * @var string
	 */
	protected $telephone = '';

	/**
	 * The facsimile of the company
	 *
	 * @var string
	 */
	protected $facsimile = '';

	/**
	 * The email of the company
	 *
	 * @var string
	 */
	protected $email = '';

	/**
	 * The homepage of the company
	 *
	 * @var string
	 */
	protected $homepage = '';

	/**
	 * The uid of the region
	 *
	 * @var int
	 */
	protected $region = 0;

	/**
	 * Constructs this dealer
	 *
	 * @return
	 */
	public function __construct() {
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
	 * Gets the modification date
	 *
	 * @return int
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * Sets the company name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Gets the company name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the company owner
	 *
	 * @param string $owner
	 * @return void
	 */
	public function setOwner($owner) {
		$this->owner = $owner;
	}

	/**
	 * Gets the company owner
	 *
	 * @return string
	 */
	public function getOwner() {
		return $this->owner;
	}

	/**
	 * Sets the company street
	 *
	 * @param string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * Gets the company street
	 *
	 * @return string
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets the company city zip
	 *
	 * @param string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Gets the company city zip
	 *
	 * @return string
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the company city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Gets the company city
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the company telephone
	 *
	 * @param string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * Gets the company telephone
	 *
	 * @return string
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Sets the company facsimile
	 *
	 * @param string $facsimile
	 * @return void
	 */
	public function setFacsimile($facsimile) {
		$this->facsimile = $facsimile;
	}

	/**
	 * Gets the company facsimile
	 *
	 * @return string
	 */
	public function getFacsimile() {
		return $this->facsimile;
	}

	/**
	 * Sets the company email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Gets the company email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the company homepage
	 *
	 * @param string $homepage
	 * @return void
	 */
	public function setHomepage($homepage) {
		$this->homepage = $homepage;
	}

	/**
	 * Gets the company homepage
	 *
	 * @return string
	 */
	public function getHomepage() {
		return $this->homepage;
	}

	/**
	 * Sets the uid of the region this dealer is related to
	 *
	 * @param int $region
	 * @return void
	 */
	public function setRegion($region) {
		$this->region = $region;
	}

	/**
	 * Returns the uid of the region this dealer is related to
	 *
	 * @return int
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * Returns this dealer as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Dealer: ' . $this->uid . ': ' . $this->name;
	}

}


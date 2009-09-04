<?php

/**
 * The region controller for the ZefuegDealer package
 */
class Tx_ZefuegDealer_Controller_RegionController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_ZefuegDealer_Domain_Repository_RegionRepository
	 */
	protected $regionRepository;

	/**
	 * @var Tx_ZefuegDealer_Domain_Repository_DealerRepository
	 */
	protected $dealerRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->regionRepository = t3lib_div::makeInstance('Tx_ZefuegDealer_Domain_Repository_RegionRepository');
		$this->dealerRepository = t3lib_div::makeInstance('Tx_ZefuegDealer_Domain_Repository_DealerRepository');
	}

	/**
	 * Sets the actual stylesheet to the HeaderData
	 *
	 * @return void
	 */
	protected function setStylesheet() {

		if (is_array($this->settings)
			&& is_array($this->settings['controllers'])
			&& is_array($this->settings['controllers']['Region'])
			&& isset($this->settings['controllers']['Region']['stylesheet'])
			&& '' != $this->settings['controllers']['Region']['stylesheet']) {
			$stylesheet = str_replace('EXT:', t3lib_extMgm::siteRelPath('zefueg_dealer'), $this->settings['controllers']['Region']['stylesheet']);
			$this->response->addAdditionalHeaderData('<link rel="stylesheet" href="' . $stylesheet . '" />');
		}

	}

	/**
	 * Index actionfor this controller. Displays a list of regions.
	 *
	 * @return string The rendered view
	 */
	public function indexAction() {
		$this->setStylesheet();
	}

	/**
	 * Shows a single region
 	 *
	 * @param Tx_ZefuegDealer_Domain_Model_Region $region The region to show
	 * @return string The rendered view of a single region
	 */
	public function showAction(Tx_ZefuegDealer_Domain_Model_Region $region) {

		if ($GLOBALS['TSFE']->config['config']['noPageTitle'] == 2) {
			$titleTagContent = $GLOBALS['TSFE']->tmpl->printTitle(
				$GLOBALS['TSFE']->altPageTitle?$GLOBALS['TSFE']->altPageTitle:$GLOBALS['TSFE']->page['title'],
				0,
				$GLOBALS['TSFE']->config['config']['pageTitleFirst']
			);

			if ($GLOBALS['TSFE']->config['config']['titleTagFunction'])     {
				$titleTagContent = $GLOBALS['TSFE']->cObj->callUserFunction($GLOBALS['TSFE']->config['config']['titleTagFunction'], array(), $titleTagContent);
			}

			$titleParts = explode('|', $titleTagContent);
			$finalTagParts = array();

			foreach ($titleParts as $titlePart) {
				$finalTagParts[] = trim($titlePart);
			}

			$finalTagParts[] = $region->getName();
			$finalTag = implode(' | ', $finalTagParts);
			$this->response->addAdditionalHeaderData('<title>' . htmlspecialchars($finalTag) . '</title>');
		}

		$this->setStylesheet();
		$this->view->assign('region', $region);
		$this->view->assign('dealers', $this->dealerRepository->getOrderedByRegion($region->getUid()));
	}

}


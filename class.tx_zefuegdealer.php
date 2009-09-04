<?php

class tx_zefuegdealer {

	function contentPostProc_output(&$params, &$reference) {

		if (t3lib_extMgm::isLoaded('piwik')) {

			if ($GLOBALS['TSFE']->config['config']['noPageTitle'] == 2) {
				preg_match('/piwik_action_name = \'(.*)\'/', $GLOBALS['TSFE']->content, $piwikMatches);
				$piwikMatches = $piwikMatches[1];

				if ('Händler' == $piwikMatches) {
					preg_match('/<title>(.*)<\/title>/', $GLOBALS['TSFE']->content, $matches);
					$matches = explode('|', $matches[1]);
					unset ($matches[0]);
					unset ($matches[1]);

					foreach ($matches as $key => $value) {
						$matches[$key] = trim($value);
					}

					$finalTag = implode(' | ', $matches);
					$GLOBALS['TSFE']->content = preg_replace('/piwik_action_name = \'(.*)\'/', "piwik_action_name = '" . $finalTag . "'", $GLOBALS['TSFE']->content);
				}

			}

		}

	}

}

?>

<?php

namespace CarbHeat\Controller\CarbHeatMain;

use CarbHeat\Common\Utility\CH_Log;
use CarbHeat\Common\Utility\CH_Utility;

class CarbHeatController {
	private $log_carbheat;
	/**
	 * Constructor function.
	 */
	public function __construct() {
		$this->log_carbheat = new CH_Log( 'CarbHeat' );
		global $smarty;
		$smarty->template_dir = '../lib/View/CarbHeatMain/Template/';
		$smarty->compile_dir = '../lib/View/CarbHeatMain/Template_c/';
		$smarty->config_dir = '../lib/View/CarbHeatMain/Config/';
	}
	/**
	 *
	 */
	public function Index() {
		$this->log_carbheat->trace( __FUNCTION__ . ' called' );
		global $smarty;
		$stylesheets = array(
			'/CSS/index.css',
		);
		$javascript = array();
		$smarty->assign( 'stylesheets', $stylesheets );
		$smarty->assign( 'javascript', $javascript );
		$smarty->assign( 'tool_fullname', CH_Utility::TOOL_FULLNAME );
		$smarty->display( $smarty->template_dir[0] . 'index.smarty' );
	}
}
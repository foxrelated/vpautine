<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * Display a "Share" link on items
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Share
 * @version 		$Id: link.class.php 4154 2012-05-07 14:32:57Z Raymond_Benc $
 */
class Share_Component_Block_Link extends Phpfox_Component
{
	/**
	 * Class process method wnich is used to execute this component.
	 */
	public function process()
	{
		// Assign template vars passed via module call
		$this->template()->assign(array(
				'sBookmarkType' => $this->getParam('type'),
				'sBookmarkUrl' => urlencode($this->getParam('url')),
				'sBookmarkTitle' => urlencode($this->getParam('title')),
				'sBookmarkDisplay' => $this->getParam('display'),
				'bIsFirstLink' => $this->getParam('first'),
				'sFeedShareId' => $this->getParam('sharefeedid'),
				'sShareModuleId' => $this->getParam('sharemodule')
			)
		);
	}
	
	/**
	 * Garbage collector. Is executed after this class has completed
	 * its job and the template has also been displayed.
	 */
	public function clean()
	{
		(($sPlugin = Phpfox_Plugin::get('share.component_block_link_clean')) ? eval($sPlugin) : false);
		
		$this->clearParam('type');
	}
}

?>
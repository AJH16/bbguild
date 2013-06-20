<?php
/**
* @package acp
* @copyright (c) 2009 bbdkp https://github.com/bbDKP
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @version 1.2.9
* 
**/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
 * @package acp
 */
class acp_dkp_adj_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_dkp_adj',
		    'title'	=> 'ACP_DKP_MDKP',
			'version'	=> '1.2.9',
			'modes'		=> array(			
				'addiadj'	=> array('title' => 'ACP_DKP_ADDADJ', 'auth' => 'acl_a_dkp', 'cat' => array('ACP_DKP_MDKP'), 'display' => false),
				'listiadj'	=> array('title' => 'ACP_DKP_LISTADJ', 'auth' => 'acl_a_dkp', 'cat' => array('ACP_DKP_MDKP'), 'display' => true),
				),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>

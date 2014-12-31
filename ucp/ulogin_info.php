<?php
/**
*
* @package ulogin
*
*/

namespace uloginteam\ulogin\ucp;

class ulogin_info
{
	function module()
	{
		return array(
			'filename'	=> '\uloginteam\ulogin\ucp\ulogin_module',
			'title'		=> 'UCP_ULOGIN',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'user_panel'		=> array('title' => 'UCP_ULOGIN_USER_PANEL', 'auth' => '', 'cat' => array('UCP_ULOGIN_USER_PANEL')),
			),
		);
	}
}

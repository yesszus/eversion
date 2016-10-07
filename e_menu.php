<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2015 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
*/

if (!defined('e107_INIT')) { exit; }

//v2.x Standard for extending menu configuration within Menu Manager. (replacement for v1.x config.php)
	
class eversion_menu
{
	function __construct()
	{
		// e107::lan('_blank','menu',true); // English_menu.php or {LANGUAGE}_menu.php
	}

	/**
	 * Configuration Fields.
	 * @return array
	 */
	public function config($menu='')
	{

		$fields = array();
		$fields['eversionCaption']     = array('title'=> "Caption", 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge') );
		$fields['eversionLimit']       = array('title'=> "Number of Items to Display", 'type'=>'number', 'writeParms'=>array('pattern'=>'[0-9]*', 'default'=>4));
    return $fields;

	}

}

 

?>
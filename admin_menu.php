<?php
/*
+---------------------------------------------------------------+
|	e107 website system
|
|	Released under the terms and conditions of the
|	GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/
if (!defined('e107_INIT')) { exit; }
if(e_LANGUAGE !="English" && file_exists(e_PLUGIN_ABS."eversion/languages/admin/".e_LANGUAGE.".php"))
{
	include_once(e_PLUGIN_ABS."eversion/languages/admin/".e_LANGUAGE.".php");
}
else
{
	include_once(e_PLUGIN_ABS."eversion/languages/admin/English.php");
}
$action = basename($_SERVER['PHP_SELF'], ".php");

$var['admin_config']['text'] = EVERSION_A21;
$var['admin_config']['link'] = "admin_config.php";

$var['admin_plugin']['text'] = EVERSION_A22;
$var['admin_plugin']['link'] = "admin_config.php?mode=main&action=list";

$var['admin_addplugin']['text'] = EVERSION_A24;
$var['admin_addplugin']['link'] = "admin_config.php?mode=main&action=create";

$var['admin_getall']['text'] = EVERSION_A25;
$var['admin_getall']['link'] = "admin_getall.php";

$var['admin_vupdate']['text'] = EVERSION_A23;
$var['admin_vupdate']['link'] = "admin_vupdate.php";

show_admin_menu(EVERSION_A20, $action, $var);
?>

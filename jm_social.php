<?php
/*
	jm_social
	2016 © Hadi Safari
*/
// No direct access
defined("_JEXEC") or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . "/helper.php";

$padded = $params->get("padded");
$center = $params->get("center");
$add = $params->get("telegram");
if($add != "")
	$socials .= ModJmSocial::getLink("telegram", $add);
$add = $params->get("instagram");
if($add != "")
	$socials .= ModJmSocial::getLink("instagram", $add);
require JModuleHelper::getLayoutPath("jm_social");
?>
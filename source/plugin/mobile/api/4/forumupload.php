<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: forumupload.php 35182 2015-01-12 02:05:50Z nemohou $
 */
if (!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

error_reporting(E_ALL ^ E_NOTICE);
mobile_core::make_cors($_SERVER['REQUEST_METHOD'], REQUEST_METHOD_DOMAIN);
$_GET['mod'] = 'swfupload';
$_GET['action'] = 'swfupload';
$_GET['operation'] = 'upload';
include_once 'misc.php';

class mobile_api {

	function common() {

	}

	function output() {

	}

}

?>
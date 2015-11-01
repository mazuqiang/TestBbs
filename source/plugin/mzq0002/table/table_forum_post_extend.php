<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_security_failedlog.php 28862 2012-03-15 08:30:54Z songlixin $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class table_forum_post_extend extends table_forum_post {
	
//	public function __construct() {
//		parent::__construct();
//	}

	public function fetch_all_by_uid($uid){
		return DB::fetch_all('SELECT * FROM %t WHERE ' . DB::field('authorid', $uid), array(self::get_tablename('0')));
	}


	
}
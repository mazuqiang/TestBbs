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

class table_reply_essence extends discuz_table {
	
	public function __construct() {
		$this->_table = 'mzq0002_reply_essence';
		$this->_pk = 'pid';
		parent::__construct();
	}

	public function fetch_by_pid($pid){
		return DB::fetch_first('SELECT * FROM %t WHERE ' . DB::field('pid', $pid) . ' ' . DB::limit(0, 1), array($this->_table), $this->_pk);
	}

	public function add($pid, $uid) {
		return parent::insert(array(
			'uid' => $uid,
			'pid' => $pid,
		));
	}
	
	
}
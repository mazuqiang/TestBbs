<?php
/**
 *	[mzq0001(mzq0001.{modulename})] (C)2015-2099 Powered by .
 *	Version: 1.0
 *	Date: 2015-10-21 22:35
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class plugin_mzq0001 {
	//TODO - Insert your code here
	public function global_header(){
		include template('mzq0001:mzqtmp001');
		return "<span style='color:red'>我是哈哈哈</span>".$aaa.lang('plugin/mzq0001', 'test');
	}
	
}

class plugin_mzq0001_forum extends plugin_mzq0001 {
	//TODO - Insert your code here
	
	public function forumdisplay_middle(){
		return "<span style='color:red'>plugin_mzq0001_forum</span>";
	}
	
	public function index_top(){
		global $_G;
		
		return "<span style='color:red'>index_top{$_G['cache']['plugin']['mzq0001']['mzqid']}</span>";
	}
}
/*
class plugin_mzq0001_forum extends plugin_mzq0001 {
	//TODO - Insert your code here
	
	public function forumdisplay_middle(){
		return "<span style='color:red'>plugin_mzq0001_forum</span>";
	}
}
*/


?>
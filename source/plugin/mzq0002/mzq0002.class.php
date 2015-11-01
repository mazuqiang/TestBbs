<?php
/**
 *	[回帖精华(mzq0002.{modulename})] (C)2015-2099 Powered by .
 *	Version: 1.0
 *	Date: 2015-10-27 19:38
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class plugin_mzq0002 {
	//TODO - Insert your code here
	function global_cpnav_top(){
		return "<span>头部</span>";
	}
}

class plugin_mzq0002_forum extends plugin_mzq0002 {
	//TODO - Insert your code here
	function viewthread_postfooter_output(){
		global $_G, $postlist;
		$d = array();
		if(!$_G[adminid]){
			return array();
		}
		$result = C::t('#mzq0002#reply_essence')->fetch_all(array_keys($postlist));
		empty($result) && ($result = array());
		foreach($postlist as $k => $v){
			if($result[$k]['uid'] == $v['authorid'] ){
				$d[$k] = "<a  onclick=showWindow({$k},'/plugin.php?id=mzq0002:mzq0002&pid={$v['pid']}&uid={$v['authorid']}&type=d') >取消</a>";
			}else{
				$d[$k] = "<a  onclick=showWindow({$k},'/plugin.php?id=mzq0002:mzq0002&pid={$v['pid']}&uid={$v['authorid']}&type=a') >推荐</a>";
			}
		}
		//var_dump($d);
		return $d;
	}
	
	
}

?>
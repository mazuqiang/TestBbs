<?php
//var_dump($_G);
if(!$_G[adminid]){
	showmessage('只有管理员才能设置精华');
	return ;
}
$resule = C::t('#mzq0002#reply_essence')->fetch_by_pid(getgpc('pid'));
if(getgpc('type') == 'a'){
	if($resule){
		showmessage('该帖子已成为精华帖');
	}else{
		$resule = C::t('#mzq0002#reply_essence')->add(getgpc('pid'), getgpc('uid'));
		if($resule){
			DB::query("UPDATE ".DB::table('common_member_count')." SET digestposts = digestposts + 1 WHERE uid = ".getgpc('uid'));
			notification_add($uid, 'system', '您的回帖已成为精华回帖，<a href="">详细查看</a>');
			showmessage('加入精华成功');
		}
	}
}else if(getgpc('type') == 'd'){
	if($resule){
		if( C::t('#mzq0002#reply_essence')->delete(getgpc('pid'))){
			DB::query("UPDATE ".DB::table('common_member_count')." SET digestposts = digestposts - 1 WHERE uid = ".getgpc('uid'));
			notification_add($uid, 'system', '您的回帖已取消精华回帖，<a href="">详细查看</a>');
			showmessage('取消精华成功');
		}
	}else{
		showmessage('该帖子已取消精华');
	}
}




//showmessage('111111'.'pid'.getgpc('pid').'uid'.getgpc('uid'));


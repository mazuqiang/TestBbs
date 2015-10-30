<?php
//var_dump($_G);
$resule = C::t('#mzq0002#reply_essence')->fetch_by_pid(getgpc('pid'));
if($resule){
	showmessage('该帖子已成为精华帖');
}

$resule = C::t('#mzq0002#reply_essence')->add(getgpc('pid'), getgpc('uid'));
if($resule){
	showmessage('加入精华成功');
}
//showmessage('111111'.'pid'.getgpc('pid').'uid'.getgpc('uid'));


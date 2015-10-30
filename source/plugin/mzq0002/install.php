<?php
//var_dump($_G);
$tablepre = $_G['config']['db'][1]['tablepre'];
$dbcharset = $_G['config']['db'][1]['dbcharset'];
$charset=$_G['config']['output']['charset'];
$dbcharset=$dbcharset?$dbcharset:str_replace('-', '', $charset);

DB::query("CREATE TABLE IF NOT EXISTS `{$tablepre}mzq0002_reply_essence` (
	`uid` INT (11) DEFAULT NULL,
	`pid` INT (11) NOT NULL,
	PRIMARY KEY (`pid`)
) ENGINE = MyISAM DEFAULT CHARSET = {$dbcharset}");
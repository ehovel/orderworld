<?php

/**
 * 生成12位流水号，应用于
 * 体育馆sid，
 * 体育馆子场馆siid，
 * 预定信息pid
 * 场地信息fid
 * 
 * @author E
 *
 */

class Uuid
{
	public function init() {
		
	}
	/**
	 * 获取id
	 */
	public function get() {
		$uuid_sn = substr(date('Y'),2).//2
		date('md').//4
		substr(time(),-2).//2
		substr(microtime(),2,2).//2
		sprintf('%02d',rand(0,99));//2
		return $uuid_sn;
	}
	
	/**
	 * 获取用户id
	 */
	public function getUid() {
		$uuid_sn = substr(date('Y'),2).//2
		date('m').//2
		substr(time(),-2).//2
		substr(microtime(),2,4);//4
		return $uuid_sn;
	}
}
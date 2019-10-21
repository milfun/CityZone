<?php

function sys_md5($string){
	return md5(md5($string));
}

function is_open(){
	//C('wz_web_open');
	return config('is_close')==1?true:false;
}
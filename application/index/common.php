<?php

function sys_md5($string){
	return md5(md5($string));
}
function is_open(){
	//C('wz_web_open');
	if(config('is_close')){
		return true;
	}
	else{
		return false;
	}
}
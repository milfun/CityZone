<?php

function sys_md5($string){
	return md5(md5($string));
}
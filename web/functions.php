<?php
require_once __DIR__.'/query-builder/init.php';
//echo BASE_URL;
function url($url=''){
 if($url=='')
 {
 	return BASE_URL;
 }
 	return BASE_URL.$url;

}
//POST function

function post($key=''){
	if($key=='')
	{
		return $_POST;
	}
	return $_POST[$key];
}
//Request Function
function request($key=''){
	if($key=='')
	{
		return $_REQUEST;
	}
	return $_REQUEST[$key];
}
//GET function
function get($key=''){
	if($key=='')
	{
		return $_GET;
	}
	return $_GET[$key];
}
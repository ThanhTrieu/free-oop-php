<?php
// noi lay cac request cua nguoi dung gui len
// noi nay se tu dong nap - trieu goi cac controller tuong ung voi request cua nguoi dung

if(!defined('APP_PATH_ROOT')){
	die('Can not access');
	// die : dung chuong trinh - khong thuc thi cac ma lenh ben duoi nua
}

require_once 'bootstrap/autoload.php';
// khoi tao doi tuong cho class autoload
new TV\Bootstrap\Autoload;
// ham __construct cua autoload se tu dong chay
// tu bay gio tat cac file se duoc tu dong nap khi khoi tao doi tuong cho chinh file do - (Ten file luon luon trung ten class)
// khai niem lazy loading php

// xu ly lay duoc cac request - param tren url cua trinh duyet
// domain.com/NameController/NameMethod
// su dung bien toan cuc (kieu mang) php : $_SERVER
// echo "<pre>";
// print_r($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
$rootPath = $_SERVER['PHP_SELF'] ;
// lay ra ten folder goc
$rootFolder = dirname($rootPath);
$strParams = substr($uri, strlen($rootFolder)+1);
if($strParams){
	$arrParams = explode('/', $strParams);
	$nameController = ucfirst($arrParams[0]);
	$nameMethod = $arrParams[1];
} else {
	$nameController = 'Home';
	$nameMethod = 'index';
}
$myNameSpace = 'App\Controller\\';
$controler = $myNameSpace.$nameController.'Controller';
$c = new $controler;
$c->$nameMethod();



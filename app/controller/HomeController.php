<?php
namespace App\Controller;

if(!defined('APP_PATH_ROOT')){
	die('Can not access');
	// die : dung chuong trinh - khong thuc thi cac ma lenh ben duoi nua
}

class HomeController
{
	public function index()
	{
		echo __CLASS__;
		// const : lay ra ten class (kem theo ca namespace)
	}
}
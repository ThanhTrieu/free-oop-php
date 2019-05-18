<?php
namespace TV\Bootstrap;

// namespace : bao ve class - sau nay muon truy cap hop le vao 1 class thi phai thong namespace cua no
// khi khai bao namespace phai dat dau tien o file va khong co bat ky cau lenh nao nam ben tren

if(!defined('APP_PATH_ROOT')){
	die('Can not access');
	// die : dung chuong trinh - khong thuc thi cac ma lenh ben duoi nua
}

class Autoload
{
	public function __construct()
	{
		// __construct : cung la 1 magic method - no se tu dong chay khi khoi tao doi cho class - no luon luon la phuong duoc chay dau tien
		spl_autoload_register(array($this,'_autoload'));
		
	}

	// dinh nghia 1 magic method de tu dong load - nap file
	// magic method: la cac phuong co cac co che chay dac biet khong nhu cac phuong thuc binh thuong khac
	
	private function _autoload($file)
	{
		$file = str_replace("\\", "/", trim($file,"\\")) . '.php';
		require_once $file;
	}
}
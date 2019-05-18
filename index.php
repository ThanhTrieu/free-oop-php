<?php
// the mo cua php
const APP_PATH_ROOT = 'index.php';
// dua vao const APP_PATH_ROOT de biet nguoi dung co truy cap hop le vao ung dung hay ko

const NAME_SPACE_CONTROLLER = 'app\controller\\';
// de su dung cho khai niem namespace sau nay trong class php

if(file_exists('route/web.php')){


	require_once 'route/web.php';
	// nhung web.php vao file index.php de co the su dung cac tien ich co san cua file web.php ma chung ta ko can phai dinh nghia lai
} else {
	echo "updating....";
}
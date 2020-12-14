<?php
// 定义应用目录
use think\App;

define('APP_PATH', __DIR__ . './application/');
// 加载框架引导文件
require __DIR__ . '/vendor/autoload.php';

define('SCRIPT_DIR', rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/\\'));

// 执行HTTP应用并响应
$http = (new App())->http;
//设置默认项目模块 $http->name('web')->run();
$response = $http->name('web')->run();

$response->send();

$http->end($response);

error_reporting(E_ALL);
ini_set('display_errors', '1');
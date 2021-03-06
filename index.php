<?php
/**
 * Project: Mutton, User: JianSuoQiYue
 * Date: 2015-7-13 14:07
 * Last: 2020-1-17 01:01:20
 */
declare(strict_types = 1);

use sys\Route;

define('START_TIME', microtime(true));
define('START_MEMORY', memory_get_usage());

/**
 * --- 获取和定义重写的 PATH ---
 */
define('PATH', isset($_GET['__path']) ? $_GET['__path'] : '');
unset($_GET['__path']);

// --- 国际化 ---

require 'sys/Locale.php';

// --- 正式启动 ---

require 'sys/Boot.php';

// --- 加载控制器 ---

require SYS_PATH.'Route.php';
Route::run();


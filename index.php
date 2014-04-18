<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//定义站点根目录绝对路径
define('SITE_ROOT', getcwd() . '/');
echo '<div align=\"center\">Site Root : ' . SITE_ROOT . '</div>';

// 定义应用目录路径
define('APP_PATH',SITE_ROOT.'Application/');
echo '<div align=\"center\">App Path : ' . APP_PATH . '</div>';

//定义ThinkPHP框架系统根目录
define('THINK_PATH',SITE_ROOT.'ThinkPHP/');
// 引入ThinkPHP入口文件
require THINK_PATH.'ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单
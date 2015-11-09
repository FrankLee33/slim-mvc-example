<?php
require __DIR__ . '/../vendor/autoload.php';
/**
 * 显示错误
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * 设置时区
 */
date_default_timezone_set('Asia/Shanghai');

//加载配置
$config=require(__DIR__ .'/../app/config.php');
/**
数据库配置
*/
ORM::configure('mysql:host=' . $config['db']['server'] . ';dbname=' . $config['db']['name']);
ORM::configure('username', $config['db']['username']);
ORM::configure('password', $config['db']['password']);
/**
 * 创建应用
 */
$app = new \Slim\Slim(array_merge_recursive([
    'debug' => true,
    'view' => new \Slim\Views\Twig(),
    'templates.path' => $config['tpl_path'],
],$config['slim']));

//添加session中间件
$app->add(new \Slim\Middleware\Session([
  'name' => 'franklee_session',
  'autorefresh' => true,
  'lifetime' => '1 hour'
]));
//添加 json支持的中间件
/*$app->add(new \SlimJson\Middleware(array(
  'json.status' => true,
  'json.override_error' => true,
  'json.override_notfound' => true,
  'json.cors'=>true
)));*/
//自动加载路由器文件
$routers =glob($config['routers_path'].'*.router.php');
foreach ($routers as $router) {
    require $router;
}
$app->run();
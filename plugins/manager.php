<?php
/**
 * Created by PhpStorm.
 * User: Juvo
 * Date: 2017/1/2
 * Time: 0:47
 */

defined('IN_QIMUREN') or die('Deny Access');
header("Content-Type:text/html;charset=utf-8");
define('SITENAME', 'QIMUREN');
define('VERSION', '1.0.0');
//基础路径..\manager\plugins/
defined('BASE_PATH') or define('BASE_PATH', dirname(__FILE__) . '/');
//echo BASE_PATH;
//父路径../manager/
defined('ROOT_PATH') or define('ROOT_PATH', str_replace('\\', '/', realpath(dirname(__FILE__) . '/../')) . '/');
//echo ROOT_PATH;

/* 系统函数 */
require(BASE_PATH . 'config/handle.php');
/*加载文件*/
//load_file(BASE_PATH . 'config/contant.php');
//require("/config/contant.php");

try {
    /* 控制器类是否存在 */
    if (empty($_GET["go"])) {
        E('控制器类不存在', 404);
    }
    if($_GET["go"]==1){
        echo file_get_contents('http://www.baidu.com/');
    }
    if($_GET["go"]==2){
        load_file(BASE_PATH . 'config/contant.php');
    }
} catch (Exception $e) {
    E('不存在', 404);
}

?>
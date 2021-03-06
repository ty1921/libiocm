<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:42
 * Source: checkactivatedstat.php
 * Project: libiocm
 */

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Reg\RequetAttribute\DeviceCredentials\RefreshKey\Request();
$request->setAppId($iotConfig['appId']);
/** @var \Zeevin\Libiocm\Reg\RefreshKeyClient $app_refreshKey] */
$app_refreshKey = $app['reg.refreshKey'];
$device_id = '2f41a999-3031-41bf-8aeb-a4d27eb9b547';

$ret =  $app_refreshKey->setUrlExtend($device_id)->request($request->serialize())->getResult();
print_r($ret);

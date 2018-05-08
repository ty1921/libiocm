<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午3:29
 * Source: ClientInterface.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Contracts;


interface ClientInterface
{
    public function getId();
    public function getPath();
    public function getMethod();


}
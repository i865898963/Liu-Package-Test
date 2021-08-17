<?php
/**
 * Created by PhpStorm.
 * User: liuSir
 * Date: 2021/8/17
 */
namespace LiuDev\WxOpenPlatForm\Facades;

use Illuminate\Support\Facades\Facade;

class OpenPlatForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'OpenPlatform';
    }

}
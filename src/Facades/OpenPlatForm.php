<?php
/**
 * Created by PhpStorm.
 * User: liuSir
 * Date: 2021/8/17
 */
namespace LiuDev\WxOpenPlatForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * User: liuSir
 * Date: 2021/8/17
 * Class OpenPlatForm
 * @package LiuDev\WxOpenPlatForm\Facades
 * @method static \LiuDev\WxOpenPlatForm\OpenPlatForm testRun()
 * @method static \LiuDev\WxOpenPlatForm\OpenPlatForm testH()
 * @method static \LiuDev\WxOpenPlatForm\OpenPlatForm testTag()
 * @method static \LiuDev\WxOpenPlatForm\OpenPlatForm getContent()
 */
class OpenPlatForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'OpenPlatform';
    }

}
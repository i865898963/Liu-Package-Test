建议使用Composer2.x 

`composer require liusir/wx-open-platform-for-laravel`

安装完成后进行发布

`php artisan vendor:publish --provider="LiuDev\WxOpenPlatForm\WxOpenPlatformServiceProvider`

在laravel中 **config/app.php** 中进行注册

providers = [

LiuDev/wxOpenPlatform/service:class

]

aliases = [

'OpenPlatform' => ''

]




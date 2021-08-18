# 基于微信官方php sdk,支持Laravel5以及Lumen5
## 安装
建议使用Composer2.x 
```php
composer require liusir/wx-open-platform-for-laravel
```
## Laravel 5.* 配置
```php
'provider' => [
       LiuDev\WxOpenPlatForm\WxOpenPlatformServiceProvider:class, 
    ],

```
配置alias:
```php
'aliases' => [
       'OpenPlatform' => 'LiuDev\WxOpenPlatForm\Facades\OpenPlatForm',
    ],
```
生成配置文件:
```php
php artisan vendor:publish --provider="LiuDev\WxOpenPlatForm\WxOpenPlatformServiceProvider"
```
配置文件wxOpenPlatForm.php中完成相应配置





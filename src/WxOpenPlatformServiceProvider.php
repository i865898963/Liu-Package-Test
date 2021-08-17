<?php

namespace LiuDev\WxOpenPlatForm;
use Illuminate\Support\ServiceProvider;

class WxOpenPlatformServiceProvider extends ServiceProvider
{
    protected $defer = true; // 延迟加载服务
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadViewsFrom(__DIR__ . '/views', 'WxOpenPlatForm'); // 视图目录指定
        $this->publishes([
//            __DIR__.'/views' => base_path('resources/views/vendor/WxOpenPlatForm'),  // 发布视图目录到resources 下
            __DIR__.'/config/wxOpenPlatForm.php' => config_path('wxOpenPlatForm.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 单例绑定服务
        $this->app->singleton('OpenPlatform', function ($app) {
                     return new OpenPlatForm($app['session'], $app['config']);
        });
    }

    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['OpenPlatform'];
    }
}

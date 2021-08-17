<?php
/**
 * Created by PhpStorm.
 * User: liuSir
 * Date: 2021/8/17
 */

namespace LiuDev\WxOpenPlatForm;


use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class OpenPlatForm
{
    protected $config;
    protected $session;

    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    public function testRun()
    {
        $config_arr = $this->config->get('wxOpenPlatForm');

        return json_encode($config_arr,JSON_UNESCAPED_UNICODE);
    }
}
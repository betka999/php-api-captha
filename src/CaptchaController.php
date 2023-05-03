<?php

namespace betka\captcha;

class CaptchaController
{
    public function index(Captcha $captcha, $config = null)
    {
        $data = $captcha->create($config);
        if(config('my_env')=='pro')
            unset($data['code']);
        return $data;
    }
}

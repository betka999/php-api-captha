<?php

namespace betka\captcha;

class CaptchaController
{
    public function index(Captcha $captcha, $config = null)
    {
        $data = $captcha->create($config);
        if(config('app.my_env')==config('captcha.unsetCodeEnv'))
            unset($data['code']);
        return toTrue($data);
    }
}

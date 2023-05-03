<?php

namespace betka\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package betka\captcha\facade
 * @mixin \betka\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \betka\captcha\Captcha::class;
    }
}

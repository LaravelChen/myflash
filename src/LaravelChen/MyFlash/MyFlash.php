<?php

namespace LaravelChen\MyFlash;


use Illuminate\Support\Facades\Facade;

class MyFlash extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'myflash';
    }
}
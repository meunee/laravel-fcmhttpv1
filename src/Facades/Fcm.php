<?php

namespace Meunee\LaravelFcmhttpv1\Facades;

use Illuminate\Support\Facades\Facade;
use Meunee\LaravelFcmhttpv1\FcmNotification;


class Fcm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FcmNotification::class;
    }
}
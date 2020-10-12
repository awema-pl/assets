<?php

namespace AwemaPL\Assets;

use AwemaPL\BaseJS\AwemaProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Cookie\Middleware\EncryptCookies;

class AssetsServiceProvider extends AwemaProvider
{

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/asset.php');

        parent::boot();
    }

    public function getPackageName(): string
    {
        return 'assets';
    }

    public function getPath(): string
    {
        return __DIR__;
    }

    public function addSrc()
    {

    }


}

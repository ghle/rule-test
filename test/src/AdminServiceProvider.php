<?php
/**
 * Created by PhpStorm.
 * User: 王金陆
 * Date: 2020/3/17
 * Time: 16:09
 */

//namespace Rule\Test;

namespace Rule\Test;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends  ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('admin', function () {
            return new AdminController;
        });
    }
}

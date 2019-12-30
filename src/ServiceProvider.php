<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/30
 * Time: 16:24
 */
namespace LanceZhen\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}

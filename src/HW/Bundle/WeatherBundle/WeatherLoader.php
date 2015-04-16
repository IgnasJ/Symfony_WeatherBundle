<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2015-04-16
 * Time: 11:15
 */

namespace HW\Bundle\WeatherBundle;


class WeatherLoader {
    public function __construct(WeatherInterface $provider)
    {
        $this->provider = $provider;
    }
    public function getTodayWeather(WeatherLocation $location)
    {
        return $this->provider->getTodayWeather($location);
    }
}
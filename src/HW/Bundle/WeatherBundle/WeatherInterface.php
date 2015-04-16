<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2015-04-16
 * Time: 11:14
 */

namespace HW\Bundle\WeatherBundle;


interface WeatherInterface {
    public function getTodayWeather(WeatherLocation $location);
}
<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2015-04-16
 * Time: 11:20
 */

namespace HW\Bundle\WeatherBundle;


class WeatherLocation {
    public $city;

    public function __construct($city)
    {
        $this->city = $city;
    }
}
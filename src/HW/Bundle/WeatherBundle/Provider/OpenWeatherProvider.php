<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2015-04-16
 * Time: 10:53
 */
namespace HW\Bundle\WeatherBundle\Provider;
use HW\Bundle\WeatherBundle\WeatherInterface;
use HW\Bundle\WeatherBundle\WeatherLocation;
class OpenWeatherProvider implements WeatherInterface
{
    /**
     * @param WeatherLocation $location
     * @return array
     */
    public function getTodayWeather(WeatherLocation $location)
    {
        $url = "http://api.openweathermap.org/data/2.5/find?q=".$location->city."&units=metric";
        $json_data = file_get_contents($url);
        $decoded_data = json_decode($json_data);
        $temp = $decoded_data->list[0]->main->temp;
        #$temp = $json['list']['main']['temp'];
        #$temp = 20;
        return $temp;
    }
}
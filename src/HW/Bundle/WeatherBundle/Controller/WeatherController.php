<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2015-04-16
 * Time: 11:27
 */

namespace HW\Bundle\WeatherBundle\Controller;
use HW\Bundle\WeatherBundle\WeatherLocation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WeatherController extends Controller
{
    public function indexAction()
    {
        $city = 'Vilnius';
        $weather = $this->container->get('hw_weather');
        $temp = $weather->getTodayWeather(new WeatherLocation($city));
        return new Response('Today in ' . $city . ':<br> ' .
            $temp .' Celcium');
    }
}
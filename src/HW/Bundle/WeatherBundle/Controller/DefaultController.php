<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2015-04-16
 * Time: 12:01
 */

namespace HW\Bundle\WeatherBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
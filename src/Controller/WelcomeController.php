<?php
/**
 * Created by PhpStorm.
 * User: sumaya
 * Date: 20/12/18
 * Time: 12:28 PM
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends AbstractController
{
    public function welcome()
    {
        return $this->render('home.html.twig');
    }


    public function details()
    {
        die("dklsad");
        return $this->render('detailedInformation.html.twig');
    }
}
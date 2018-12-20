<?php
/**
 * Created by PhpStorm.
 * User: sumaya
 * Date: 20/12/18
 * Time: 12:28 PM
 */
namespace App\Controller;

use App\Service\ScraperService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoController extends AbstractController
{
    private $scraper;

    public function __construct(ScraperService $scraper)
    {
        $this->scraper = $scraper;
    }

    /**
     * @Route("/details", name="leadDetail")
     * @return Response
     */
    public function details()
    {

        $response = $this->scraper->getPiplTestData();
        die(var_dump($response));
        return $this->render('detailedInformation.html.twig');
    }
}
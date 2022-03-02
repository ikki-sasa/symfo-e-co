<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/hello/{name?}", name="hello")
     */
    // public function hello($name)
    public function hello($name = "world", LoggerInterface $logger, Calculator $calculator, Slugify $slugify)
    {
        // Environment $twig dump($twig);

        dump($slugify->slugify("hello World"));

        $logger->error("mon message log");

        $tva = $calculator->calcul(100);
        dump($tva);

        return new Response("Hello $name");
    }
}

<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloWorldController extends AbstractController
{

    /**
     * @Route("/hello/{name?}", name="hello")
     */
    // public function hello($name)
    public function hello($prenom = "world")
    {
        // $html = $this->twig->render('hello.html.twig', [
        //     'prenom' => $prenom
        // ]);
        // return new Response($html);
        return $this->render('hello.html.twig', [
            'prenom' => $prenom
        ]);
    }

    /**
     * @Route("/example", name="example")
     */
    public function example()
    {
        return $this->render('example.html.twig', [
            'age' => 33
        ]);
    }
}

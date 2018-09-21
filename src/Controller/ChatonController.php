<?php

// src/Controller/ChatonController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChatonController extends AbstractController
{
    /**
    * @Route("/chaton")
    */

    public function cat()
    {
        $title= "Mon chaton trop mignon";
        return $this->render('/chaton.html.twig',[
            'title' => $title,
        ]);
    }
}
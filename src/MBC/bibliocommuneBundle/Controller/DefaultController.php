<?php

namespace MBC\bibliocommuneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('bibliocommuneBundle:Default:index.html.twig');
    }
}

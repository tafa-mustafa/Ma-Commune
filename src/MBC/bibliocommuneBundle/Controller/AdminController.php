<?php

namespace MBC\bibliocommuneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;




use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Dompdf\Options;
use Dompdf\Dompdf;

class AdminController extends Controller
{
    public function homeAction()
    {
        return $this->render('bibliocommuneBundle::home.html.twig', array(
            // ...
        ));
    }



    public function accueilAction()
    {
        return $this->render('bibliocommuneBundle:Admin:accueil.html.twig', array(
            // ...
        ));
    }




    /*****afficher la vue admin  */
    public function homeadminAction(Request $request){
        if($request-> isMethod('POST')){

            return $this->render('bibliocommuneBundle::homeadmin.html.twig', array(

                // redirige ver la lgin page si la methode es get
            ));
        }
        return $this->redirectToRoute('login_admin');


    }

    /*****login admin  */
    public function loginAction(Request $request)
    {


        return $this->render('bibliocommuneBundle:Admin:login.html.twig', array(

            // ...
        ));
    }

}

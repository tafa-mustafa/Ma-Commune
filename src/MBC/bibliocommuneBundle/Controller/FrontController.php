<?php

namespace MBC\bibliocommuneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class FrontController extends Controller
{


    /**
     * @Route("/construction")
     */

    public function constructAction()
    {
        return $this->render('bibliocommuneBundle:Front:construction.html.twig', array(
            // ...
        ));

    }


    /**
     * @Route("/blogs")
     */

    public function blogAction()
    {
        return $this->render('bibliocommuneBundle:Front:blog.html.twig', array(
            // ...
        ));

    }

    /**
     * @Route("/programme")
     */

    public function programeAction()
    {
        return $this->render('bibliocommuneBundle:Front:programme.html.twig', array(
            // ...
        ));

    }


    public function contactsAction()
    {
        return $this->render('bibliocommuneBundle:Front:contacts.html.twig', array(
            // ...
        ));

    }



    /**
     * @Route("/homes")
     */
    public function homesAction()
    {
        return $this->render('bibliocommuneBundle:Front:Apropo.html.twig', array(
            // ...
        ));
        
    }
    /**
     * @Route("/home")
     */
    public function homeAction()
    {



        /*liste type de bien */
      /*  $repositiry=$this
            ->getDoctrine()
            ->getManager()
            ->getRepository('bibliocommuneBundle:TypeBien');
        $listtypebien= $repositiry->findAll();

        /*liste localite */
   /*     $repositiry=$this
            ->getDoctrine()
            ->getManager()
            ->getRepository('bibliocommuneBundle:Localite');
        $localite= $repositiry->findAll();

        /*liste  des biens */
      /*  $repositiry=$this
            ->getDoctrine()
            ->getManager()
            ->getRepository('PremiumBundle:Bien')
        ;
        $listebien= $repositiry->listBien();
*/

        return $this->render('bibliocommuneBundle::home.html.twig', array(/*"types"=>$listtypebien,"localites"=>$localite,"biens"=>$listebien*/)
            // ...
        );
    }

}

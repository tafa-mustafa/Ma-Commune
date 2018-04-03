<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // bibliocommune_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'bibliocommune_homepage');
            }

            return array (  '_controller' => 'MBC\\bibliocommuneBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bibliocommune_homepage',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // home
            if ('/home' === $pathinfo) {
                return array (  '_controller' => 'MBC\\bibliocommuneBundle\\Controller\\FrontController::homeAction',  '_route' => 'home',);
            }

            // homes
            if ('/homes' === $pathinfo) {
                return array (  '_controller' => 'MBC\\bibliocommuneBundle\\Controller\\FrontController::homesAction',  '_route' => 'homes',);
            }

        }

        // accueil
        if ('/admin/accueil' === $pathinfo) {
            return array (  '_controller' => 'MBC\\bibliocommuneBundle\\Controller\\AdminController::accueilAction',  '_route' => 'accueil',);
        }

        // admins
        if ('/admins' === $pathinfo) {
            return array (  '_controller' => 'MBC\\bibliocommuneBundle\\Controller\\AdminController::adminsAction',  '_route' => 'admins',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

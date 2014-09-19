<?php

namespace Acme\DemoBundle\Controller;

use ImpressPages\ImpressPagesBundle\Controller\DefaultController;
use Ip\Application;
use Ip\Content;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DemoController
 *
 * @package Acme\DemoBundle\Controller
 */
class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        new Application('test');

        return array();
    }
}

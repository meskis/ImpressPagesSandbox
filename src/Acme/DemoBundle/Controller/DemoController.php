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
        // Testing autoloader for IP
        new Application('test');

        /**
         * @var $pageRenderer \ImpressPages\ImpressPagesBundle\Renderer\PageRenderer
         */
        $pageRenderer = $this->get('impresspages_bundle.renderer.page');
        $renderedPage = $pageRenderer->render(5);

        /**
         * @var $pageManager \ImpressPages\ImpressPagesBundle\Renderer\EditorRenderer
         */
        $editorRenderer = $this->get('impresspages_bundle.renderer.editor');
        $renderedManager = $editorRenderer->render(5);

        return array('renderedPage' => $renderedPage, 'renderedManager' => $renderedManager);
    }


    public function editAction()
    {
        //TODO change to unpriviledged user
        \Ip\Internal\Admin\Service::setAdminLogin('admin');


        /**
         * @var $pageManager \ImpressPages\ImpressPagesBundle\Renderer\EditorRenderer
         */
        $editorRenderer = $this->get('impresspages_bundle.renderer.editor');
        $renderedManager = $editorRenderer->render(5);



        echo $renderedManager;exit;

    }
}

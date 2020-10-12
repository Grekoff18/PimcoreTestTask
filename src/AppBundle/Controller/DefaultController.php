<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends FrontendController
{
    public $userName = '';

    public function getFormParameters($param)
    {
        $usrPostData = new Request($_POST);
        return $usrPostData->get($param);
    }

    public function defaultAction()
    {
        // return new RedirectResponse("http://my-project.loc/signin");
    }
}

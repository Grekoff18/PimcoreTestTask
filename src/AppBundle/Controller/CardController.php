<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use AppBundle\Controller\CatalogController;
use AppBundle\Model\CardModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CardController extends FrontendController
{

    public function cardAction()
    {

    }

    public function addAction()
    {
        $catalog   = new CatalogController();
        $cardModel = new CardModel();
        $cardModel->addToCard();
    } 

}
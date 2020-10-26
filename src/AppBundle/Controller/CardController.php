<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class CardController extends FrontendController
{

    public function cardAction()
    {

    }

    public function addTo() 
    {
        $get  = new Request($_GET);
        $session = new Session();

        $product_id = $get->get("product_id");
        $count = 1;
        $array_products = array();
        $cardSession = $session->get("products_list");

        if (isset($cardSession)) {
            $session->set("products_list", $array_products);
        }

        if (array_key_exists($product_id, $array_products)) {
            $array_products[$product_id] += $count;
        } else {
            $array_products[$product_id] = $count;
        }

        $session->set("products_list", $array_products);
        
        return $session->get("products_list");
    }

}

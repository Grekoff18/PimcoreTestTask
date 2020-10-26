<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use AppBundle\Controller\CatalogController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;


class CardController extends FrontendController
{

    public function cardAction()
    {

    }

    public function addTo() 
    {
        $get  = new Request($_GET);
        $catalog = new CatalogController();
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
// 0 0 => id
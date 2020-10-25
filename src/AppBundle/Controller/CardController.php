<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use AppBundle\Controller\CatalogController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CardController extends FrontendController
{

    public $array = [];

    public function cardAction()
    {

    }

    public function addTo() 
    {
        $get     = new Request($_GET);
        $catalog = new CatalogController();

        $product_id  = $get->get("product_id");
        $product_arr = $catalog->getArrayOfProducts(); 
        $products_in_card = [];

        if (isset($_SESSION['product_list'])) {
            $products_in_card = $_SESSION['product_list'];
        }
        
        if (array_key_exists($id, $productsInCart)){
            $productsInCart[$id] += $count;
        } else {
            $productsInCart[$id] = $count;
        }

    }

}
// 0 0 => id
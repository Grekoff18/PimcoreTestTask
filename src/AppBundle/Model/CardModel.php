<?php

namespace AppBundle\Model;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\CatalogController;

/**
 * Class CardModel
 * @package AppBundle\Model
 */

class CardModel extends FrontendController
{

    public function cardModel()
    {

    }

    public function addToCard() 
    {
        $get     = new Request($_GET);
        $catalog = new CatalogController();

        $product_array = $catalog->getArrayOfProducts();
        $product_id    = $get->get("product_id");

        if (isset($product_id) && !empty($product_id)) {

            $product_check = false;

            if (!empty($product_id)) {

                if (!isset($_SESSION["product_list"])) {
                    $_SESSION["product_list"][] = $product_id;
                }

            }

            if (isset($_SESSION["product_list"])) {

                foreach($_SESSION["product_list"] as $value) {

                    if ($value === $product_id) {
                        $product_check = true;
                    }

                }

            }

            if (!$product_check) {
                $_SESSION["product_list"][] = $product_id;
            }
               
        } else {
                echo "Hello";
        } 

    }

}
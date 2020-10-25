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

    public function addToCard($num) 
    {
        $get     = new Request($_GET);
        $catalog = new CatalogController();

        $product_array = $catalog->getArrayOfProducts();
        $product_id    = $get->get("product_id");

        if (isset($product_id)) {

            $product_check = false;

            if (count($this->array) < 0 && count($this->array) === null) {
                    
                if ($_GET["product_id"] === $product_array[$num]->getCod) {
                    array_push($this->array, [
                        $product_array[$num]->getCod(),
                        $product_array[$num]->getName(), 
                    ]);
                }

            }

            

            if (count($this->array) > 0) {

                foreach($this->array as $value) {

                    if ($value[0] === $_GET["product_id"]) {
                        $product_check = true;
                    }
                    
                }

            }

            if (!$product_check) {
                array_push($this->array, [
                    $product_array[$num]->getCod(),
                    $product_array[$num]->getName(), 
                ]);
            }
               
        } else {
                echo "Hello";
        } 

        return $this->array[0];

    }

}
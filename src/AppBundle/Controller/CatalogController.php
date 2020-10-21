<?php

    namespace AppBundle\Controller;

    use Pimcore\Controller\FrontendController;
    use Pimcore\Model\DataObject;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Session\SessionInterface;

    class CatalogController extends FrontendController
    {

        /**
         * @var $count => Count of our arrays;
         * @var $product_array => Array with info about some product;
         * @arr $items == @arr $product_array;
         */

        public $count;
        public $product_array;
        public $items = [];

        public function catalogAction(Request $request)
        {

        }

        public function getCount()
        {
            // In this method we get count of our arrays
            $this->count = new DataObject\Product\Listing();
            return $this->count->getCount();
        }

        public function getArrayOfProducts()
        {
            // Checking if the array is empty
            if (DataObject\Product::getById(4) &&
                DataObject\Product::getById(5) &&
                DataObject\Product::getById(6)) {
                // If arrays exist -> write to the item array
                array_push($this->items, DataObject\Product::getById(4), DataObject\Product::getById(5), DataObject\Product::getById(6));
            } else {
                exit();
            }

            return $this->items;

        }

        public function getProduct($product_num)
        {
            // Get an array of products
            $product_array = $this->getArrayOfProducts();

            // Return template some product with a ready-made structure
            return  "<h3 class='product_title'>".$product_array[$product_num]->getName()."</h3>"
                  . $product_array[$product_num]->getDescription()
                  . $product_array[$product_num]->getImg()->getThumbnail("logo")->getHtml()
                  . "<button class='add_to_card align-self-end' data-id='{$product_array[$product_num]->getCod()}'>
                        <a href='?product_id={$product_array[$product_num]->getCod()}' class='btn-link'>Add to card</a>
                    </button>";
        }

        public function getCurrentName($num)
        {
            $getParam = new Request($_GET);
            $product_id = $getParam->get("product_id");
            $product_array = $this->getArrayOfProducts();
            
            if (isset($product_id) && $product_array[$num]->getCod()) {
                if ($product_id == $product_array[$num]->getCod()) {
                    echo $product_array[$num]->getName();
                }
            }
        }

        public function getCurrentDescription($num) 
        {
            $getParam = new Request($_GET);
            $product_id = $getParam->get("product_id");
            $product_array = $this->getArrayOfProducts();

            if (isset($product_id) && $product_array[$num]->getCod()) {
                if ($product_id == $product_array[$num]->getCod()) {
                    echo $product_array[$num]->getDescription();
                }
            }
        }

    public function addToCard($num) 
    {
        $get     = new Request($_GET);
        $session = new SessionInterface();

        $product_id = $get->get("product_id");
        $product_array = $this->getArrayOfProducts();

        if (isset($product_id) && $product_array[$num]->getCod()) {

            if ($product_id == $product_array[$num]->getCod()) {
                
            }

        }

    }


    }

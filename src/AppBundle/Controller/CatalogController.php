<?php

    namespace AppBundle\Controller;

    use Pimcore\Controller\FrontendController;
    use Pimcore\Model\DataObject;
    use Symfony\Component\HttpFoundation\Request;

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
            if (DataObject\Product::getById(4)
                && DataObject\Product::getById(5)
                && DataObject\Product::getById(6)) {
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
                  . "<button class='add_to_card' data-id='{$product_array[$product_num]->getCod()}'>Add to card</button>";
        }
    }

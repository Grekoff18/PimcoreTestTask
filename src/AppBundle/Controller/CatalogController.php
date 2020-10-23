<?php

    namespace AppBundle\Controller;

    use Pimcore\Controller\FrontendController;
    use Pimcore\Model\DataObject;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\RedirectResponse;
    class CatalogController extends FrontendController
    {
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

            /**
             * return => (int);
             */
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

            /**
             * Return => array
             */
            return $this->items;

        }

        public function getProduct($product_num)
        {
            // Get an array of products
            $product_array = $this->getArrayOfProducts();

            /**
             * Return => template
             */
            return  "<h3 class='product_title'>".$product_array[$product_num]->getName()."</h3>"
                  . $product_array[$product_num]->getDescription()
                  . $product_array[$product_num]->getImg()->getThumbnail("logo")->getHtml()
                  . "<button class='add_to_card align-self-end' data-id='{$product_array[$product_num]->getCod()}'>
                        <a href='Card?product_id={$product_array[$product_num]->getCod()}' class='btn-link'>Add to card</a>
                    </button>";
        }

        public function addToCard($num) 
        {
            $get = new Request($_GET);

            $product_id    = $get->get("product_id");
            $product_array = $this->getArrayOfProducts();
            $product_check = false;

            if (isset($product_id) && ($product_array[$num]->getCod() > 0)) {

                if ($product_id == $product_array[$num]->getCod()) {

                    if (!isset($_SESSION["product_list"])) {
                        $_SESSION["product_list"][] = [
                            $product_array[$num]->getName(),
                            $product_array[$num]->getDescription(),
                            $product_array[$num]->getCod(),
                        ];
                    }
                    
                }

                if (isset($_SESSION["product_list"])) {

                    foreach($_SESSION["product_list"] as $value) {

                        if ($value[0] === $product_array[$num]->getName() &&
                            $value[1] === $product_array[$num]->getDescription() &&
                            $value[2] === $product_array[$num]->getCod()) {
                                $product_check = true;
                        }

                    }

                }

                if (!$product_check) {
                    $_SESSION["product_list"][] = [
                        $product_array[$num]->getName(),
                        $product_array[$num]->getDescription(),
                        $product_array[$num]->getCod(),
                    ];
                }
               
            } else {
                echo "Hello";
            } 

        }

    }

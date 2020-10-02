<?php

    namespace AppBundle\Controller;

    use Pimcore\Controller\FrontendController;
    use Pimcore\Model\DataObject;
    use Symfony\Component\HttpFoundation\Request;

    class ProductController extends FrontendController
    {
        public $count;
        public $name;
        public $list;
        public $items = [];

        public function productAction(Request $request)
        {

        }

        public function getCount()
        {
            $this->count = new DataObject\Product\Listing();
            return $this->count->getCount();
        }

        public function getArrayOfProducts()
        {
            array_push($this->items, DataObject\Product::getById(3), DataObject\Product::getById(4));
            return $this->items;
        }

        public function getProductName($product_num)
        {
            $list = self::getArrayOfProducts();
            return "<h3 class='product_title'>" . $list[$product_num]->getName() . "</h3>"
                    . "<p class='product_description'>". $list[$product_num]->getDescription() ."</p>"
                    . $list[$product_num]->getImg()->getThumbnail("logo")->getHtml();
        }
    }

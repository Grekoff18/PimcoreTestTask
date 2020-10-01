<?php

    namespace AppBundle\Controller;

    use Pimcore\Controller\FrontendController;
    use Pimcore\Model\Asset;
    use Symfony\Component\HttpFoundation\Request;

    class MainController extends FrontendController
    {
        public $image;

        public function defaultAction(Request $request)
        {

        }

        public function getImg($id)
        {
            $this->image = Asset::getById($id);
            return $this->image;
        }
    }

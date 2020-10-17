<?php

    namespace AppBundle\Controller;

    use Pimcore\Controller\FrontendController;
    use Pimcore\Model\Asset;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class MainController extends FrontendController
    {
        public $image;

        public function defaultAction(Request $request)
        {

        }

        public function getImg($id, $thumbnail_name)
        {
            // This method comeback some img with current id
            $this->image = Asset::getById($id);
            return $this->image->getThumbnail($thumbnail_name)->getHtml();
        }
    }

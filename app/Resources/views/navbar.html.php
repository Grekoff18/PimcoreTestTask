<?php
    use Pimcore\Model\Asset;
    use Pimcore\Model\Document\Page;
    use Pimcore\Navigation\Builder;
    $document = $this->document;
    if (!$document instanceof \Pimcore\Model\Document\Page) {
        $document = \Pimcore\Model\Document\Page::getById(1);
    }

    $firstLink = $this->document->getProperty("firstLink");
    if (!$firstLink instanceof \Pimcore\Model\Document\Page) {
        $firstLink = \Pimcore\Model\Document\Page::getById(1);
    }

    $mainNavigation = $this->navigation()->build(['active' => $document, 'root' => $firstLink]);

    echo $this->navigation()->render($mainNavigation);

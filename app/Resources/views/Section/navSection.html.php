<?php
    use Pimcore\Model\Document\Page;

    $document = $this->document;
    if (!$document instanceof Page) {
        $document = Page::getById(1);
    }

    $firstLink = $this->document->getProperty("firstLink");
    if (!$firstLink instanceof Page) {
        $firstLink = Page::getById(1);
    }

    $mainNavigation = $this->navigation()->build(['active' => $document, 'root' => $firstLink]);

    echo $this->navigation()->render($mainNavigation);

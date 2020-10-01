<?php
    use Pimcore\Model\Asset;
    use Pimcore\Model\Document\Page;

    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
    // displaying header section
    echo $this->template("header.html.php");


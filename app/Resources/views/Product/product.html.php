<?php
    use Pimcore\Model\Asset;
    use Pimcore\Model\Document\Page;
    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'Product');
?>

<header class="header">
    <section class="header_menu">
        <?php $this->extend("navbar.html.php"); ?>
    </section>
</header>



<?php
    use Pimcore\Model\Asset;
    use Pimcore\Model\Document\Page;
    $products = new \AppBundle\Controller\ProductController();

    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
    // displaying header section
    echo $this->template("header.html.php");
?>
<!--MAIN SECTION-->
<main class="main_section">
    <section class="product_wrapper">
        <!--PRODUCT TEMPLATINGS-->
        <?php
            for ($i = 0; $i < $products->getCount(); $i++) { ?>
                <div class="product_bloc">
                    <?=$products->getProductName($i)?>
                </div>
        <?php   } ?>
    </section>
</main>

<?php
    /**
     * @var Pimcore\Templating\PhpEngine $this
     * @var Pimcore\Templating\PhpEngine $view
     * @var Pimcore\Templating\GlobalVariables $app
     */

    $products = new \AppBundle\Controller\CatalogController();
    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'Catalog');
    // displaying header section
    echo $this->template("header.html.php");
?>
<!--MAIN SECTION-->
<main class="main_section">
    <section class="modal">
        <h3>Shopping Cart</h3>
        <div class="shopping_content">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Cost</th>
                    <th>Count</th>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        </div>
    </section>
    <section class="current_product">
        <div class="current_product-wrapper">
            <h3 class="cp_title"></h3>
            <p class="cp_description"></p>
            <img class="cp_img" src="" alt="">
        </div>
    </section>
    <section class="product_wrapper">
        <!--PRODUCT TEMPLATING-->
        <?php
        for ($i = 0; $i < $products->getCount(); $i++) { ?>
            <div class="product_bloc">
                <?= $products->getProduct($i) ?>
            </div>
        <?php   } ?>
    </section>
</main>

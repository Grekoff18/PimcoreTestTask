<?php
    // connecting to CatalogController

    $products = new \AppBundle\Controller\CatalogController();
    $card     = new AppBundle\Controller\CardController();

    // appending base template
    $this->extend("base.html.php");

    // rewriting title tag
    $this->slots()->set("title", "Catalog");

    // displaying header section
    echo $this->template("header.html.php");
?>

<!--MAIN SECTION-->
<main class="main_section">

    <!-- ModalPopUp Section -->
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
                </tr>
            </table>
        </div>
    </section>

    <!-- Current product section -->
    <section class="current_product">
        <div class="current_product-wrapper">
            <h3 class="current_product-title"></h3>
            <p class="current_product-description"></p>
            <img class="current_product-img" src="" alt="">
        </div>
        <button class="current_product-btn">X</button>
    </section>

    <!-- Section with all product objects -->
    <section class="product_wrapper justify-content-sm-center justify-content-md-between">
        <?php
        for ($i = 0; $i < $products->getCount(); $i++) { ?>
            <div class="product_bloc d-flex flex-column">
                <?= $products->getProduct($i) ?>
            </div>
        <?php } ?>
    </section>
</main>

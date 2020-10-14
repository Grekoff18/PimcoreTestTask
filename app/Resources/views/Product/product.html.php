<?php
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
    <section class="modal">
        <h3>Shopping Cart</h3>
        <div class="shoping_content">
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
    <section class="product_wrapper">
        <!--PRODUCT TEMPLATING-->
        <?php
            for ($i = 0; $i < $products->getCount(); $i++) { ?>
                <div class="product_bloc">
                    <?=$products->getProduct($i)?>
                </div>
        <?php   } ?>
    </section>
</main>

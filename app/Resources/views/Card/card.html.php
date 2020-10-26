<?php
    // connecting to CardController
    $card = new AppBundle\Controller\CardController();
    $catalogController = new AppBundle\Controller\CatalogController();

    // appending base template
    $this->extend("base.html.php");

    // rewriting title tag
    $this->slots()->set("title", "Product Card");

    // displaying header section
    echo $this->template("header.html.php");
?>

<main class="main">

    <section class="shopping_card">
        <h3>Shopping Cart</h3>
        <div class="shopping_content">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Cost</th>
                    <th>Count</th>
                </tr>
                <?php print_r($card->addTo()); ?>
            </table>
        </div>
    </section>
    
</main>
<?php
    // connecting to CardController

    use AppBundle\Controller\CatalogController;
    use AppBundle\Controller\CardController;

use function PHPSTORM_META\type;

$card = new AppBundle\Controller\CardController();
    $catalogController = new CatalogController();

    // appending base template
    $this->extend("base.html.php");

    // rewriting title tag
    $this->slots()->set("title", "Product Card");

    // displaying header section
    echo $this->template("header.html.php");

    // add shoping-card actions
    $card->addAction();
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
                <?php print_r($_SESSION["product_list"]);?>
                <?=gettype($_SESSION["product_list"]);?>
                </table>
        </div>
    </section>
</main>
<?php
    /**
     * @var Pimcore\Templating\PhpEngine $this
     * @var Pimcore\Templating\PhpEngine $view
     * @var Pimcore\Templating\GlobalVariables $app
     */

    // appending base template
    $this->extend("base.html.php");
    // rewriting title tag
    $this->slots()->set('title', "");
    // displaying header section
    echo $this->template("header.html.php");
?>

<main class="main_section">
    <section class="product_section">
        <div class="product_title"></div>
        <div class="product_img"></div>
        <div class="product_description"></div>
    </section>
</main>

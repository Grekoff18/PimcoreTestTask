<?php
    use Pimcore\Model\Asset;
    use Pimcore\Model\Document\Page;

    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
    // displaying header section
    echo $this->template("header.html.php");
?>
<main class="main_section">
    <section class="product_wrapper">
        <div class="product_bloc">
            <?php
                if ($this->editmode):
                    echo $this->relation('product');
                else: ?>
                    <?php
                    $product = $this->relation('product')->getElement();
                    $picture = $product->getImg();
                    if ($picture instanceof Pimcore\Model\Asset\Image) { ?>
                        <h2><?=$this->escape($product->getName());?></h2>
                        <p><?=$product->getDescription();?></p>
                        <?=$picture->getThumbnail("logo")->getHtml();?>
                    <?php }
                endif;?>
        </div>
    </section>
</main>

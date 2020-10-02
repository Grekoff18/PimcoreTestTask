<?php
    use Pimcore\Model\Asset;
    use Pimcore\Model\Document\Page;
    use Pimcore\Model\DataObject;

    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
    // displaying header section
    echo $this->template("header.html.php");
?>
<main class="main_section">
    <section class="product_wrapper row">
        <div class="product_bloc col-4">
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
        <?php
            $products = new \AppBundle\Controller\ProductController();
        ?>
        <div class="products">
            <?=$products->getProductName(1);?>
        </div>
    </section>
</main>

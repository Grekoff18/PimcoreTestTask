<?php
    use AppBundle\Controller\MainController;
    use Pimcore\Model\Document\Page;
    $main = new MainController();
?>
<!--HEADER SECTION-->
<header class="header">
    <!--HEADER LOGO-->
    <section class="header_logo">
        <a href="<?=Page::getById(1)?>"><?=$main->getImg(10, "logo");?></a>
    </section>
    <!--HEADER MENU-->
    <section class="header_menu">
        <nav class="navbar">
            <!--APPENDING NAV_BAR TEMPLATE-->
            <?=$this->template("Section/navSection.html.php");?>
            <button class="shopping_cart" onclick="modalPopUp();"><?=$main->getImg(14, "logo");?></button>
        </nav>
    </section>
</header>

<?php
    use AppBundle\Controller\MainController;
    use Pimcore\Model\Document\Page;
    $main = new MainController();
?>
<!--HEADER SECTION-->
<header class="header">
    <section class="header_logo">
        <a href="<?=Page::getById(1)?>"><img src="<?=$main->getImg(10);?>"></a>
    </section>
    <!--HEADER MENU-->
    <section class="header_menu">
        <nav class="navbar">
            <!--APPENDING NAV_BAR TEMPLATE-->
            <?=$this->template("Section/navSection.html.php");?>
        </nav>
    </section>
</header>

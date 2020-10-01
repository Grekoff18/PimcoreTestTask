<?php
    use AppBundle\Controller\MainController;
    use Pimcore\Model\Asset\Image\Thumbnail;
    $main = new MainController();
?>
<!--HEADER SECTION-->
<header class="header">
    <section class="header_logo">
        <img src="<?=$main->getImg(10);?>">
    </section>
    <!--HEADER MENU-->
    <section class="header_menu">
        <nav class="navbar">
            <!--APPENDING NAV_BAR TEMPLATE-->
            <?=$this->template("Sections/navbar.html.php");?>
        </nav>
    </section>
</header>

<?php
    /**
     * @var \Pimcore\Templating\PhpEngine $this
     * @var \Pimcore\Templating\PhpEngine $view
     * @var \Pimcore\Templating\GlobalVariables $app
     */
    use AppBundle\Controller\MainController;
    $main = new MainController();
    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
    /**
     * @var \Symfony\Component\Form\FormView $form
     */
    $form = $this->form;
?>
<!--Sign In Form-->
<div class="form_wrapper">
    <form action="/" method="post" id="signin">
        <label>Sign In</label>
        <input type="text" id="username" name="username" placeholder="Type your username" autofocus>
        <input type="text" id="password" name="password" placeholder="Type your password" autofocus>
        <button class="form_btn" type="submit"><?=$main->getImg(6, "logo");?></button>
        <p>
            <?=$this->input("link-description");?>
            <?php
               // Creates a block that generates links
                while ($this->block("signInLink", ["limit" => 1])->loop()) {
                    echo $this->link("link", ["class" => "register_link"]);
                }
            ?>
        </p>
    </form>
</div>




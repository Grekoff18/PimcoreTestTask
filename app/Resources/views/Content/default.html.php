<?php
    use Pimcore\Model\Asset;
    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
    $form_btn = Asset::getById(6);
?>
<!--Sign In Form-->
<div class="form_wrapper">
    <form action="" id="signin">
        <label><?=$this->input('form_headline')?></label>
        <input type="text" id="username" name="username" placeholder="Type your username">
        <input type="text" id="password" name="password" placeholder="Type your password">
        <button class="form_btn" type="submit">
            <?php if ($form_btn) { ?>
                <img src="<?=$form_btn?>"/>
            <?php } ?>
        </button>
        <p>If you don't have an account - <a class="register_link" href="#">click here</a></p>
    </form>
</div>


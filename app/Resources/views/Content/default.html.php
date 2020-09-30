<?php
    use Pimcore\Model\Asset;
    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');


?>
<!--Sign In Form-->
<h1 class="form_headline"><?=$this->input('headline')->render();?></h1>
<div class="form_wrapper">
    <form action="" id="signin">
        <input type="text" id="username" name="username" placeholder="Type your username">
        <input type="text" id="password" name="password" placeholder="Type your password">
        <button class="form_btn" type="submit">  </button>
        <p>forgot your password? <a href="#">click here</a></p>
        
    </form>
</div>

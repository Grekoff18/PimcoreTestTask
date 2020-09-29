<?php
    // appending base template
    $this->extend('base.html.php');
    // rewriting title tag
    $this->slots()->set('title', 'SignIn');
?>
<!--Sign In Form-->
<div id="form_wrapper">
    <form action="" id="signin">
        <input type="text" id="username" name="username" placeholder="Type your username">
        <input type="text" id="password" name="password" placeholder="Type your password">
        <button type="submit">&#xf0da;</button>
    </form>
</div>

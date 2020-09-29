<?php
    $this->extend('base.html.php');
    $this->slots()->set('title', 'SignIn');
?>

<h1><?=$this->input('form_headline')->render();?></h1>
<div id="form_wrapper">
    <form action="" id="signin">
        <input type="text" id="username" name="username" placeholder="Type your username">
        <input type="text" id="password" name="password" placeholder="Type your password">
        <button type="submit">&#xf0da;</button>
    </form>
</div>

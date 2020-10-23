<?php
    // appending base template
    $this->extend("base.html.php");

    // rewriting title tag
    $this->slots()->set("title", "SignIn");

    // connecting to MainController
    use AppBundle\Controller\MainController;
    $main = new MainController();
?>
<!--Sign In Form-->
<div class="form_wrapper">
   <form action="/" method="post" id="signin">
       <label>Sign In</label>
       <input type="text" id="username" name="username" placeholder="Type your username" autofocus>
       <input type="text" id="password" name="password" placeholder="Type your password" autofocus>
       <button class="form_btn text-center" type="submit">
            <!-- Block with btn img -->
           <?=$main->getImg(6, "logo");?>
       </button>
        <p>
            <!-- Block with link description -->
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




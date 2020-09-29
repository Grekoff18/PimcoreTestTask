<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
        // append some meta tags dynamically
        $this->headMeta()->appendName('viewport', 'width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0');
        $this->headMeta()->appendHttpEquiv('X-UA-Compatible', 'ie=edge');
        echo $this->headMeta();
    ?>
    <!-- this is dinamically title tag and you can rewrite it in other files -->
    <title><?php $this->slots()->output('title', 'Main Page'); ?> </title>
    <?php
        // appending dinamically stylesheets
        $this->headLink()->appendStylesheet('/var/assets/style.css');
        $this->headLink()->prependStylesheet('/var/assets/dop.css', 'screen', true);
        $this->headLink()->prependStylesheet('/var/assets/set.css', 'screen', true);
        echo $this->headLink();
    ?>

</head>
<body>
    <div class="wrapper">
        <?php $this->slots()->output('_content'); ?>
    </div>
</body>
</html>

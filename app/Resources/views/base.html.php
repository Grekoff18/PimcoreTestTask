<?php
    // Setting dynamic meta tags.
    $this->headMeta()->appendName('viewport', 'width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0')
                     ->appendHttpEquiv('X-UA-Compatible', 'ie=edge');
    // Setting dynamic stylesheets.
    $this->headLink()->appendStylesheet('/css/style.css')
                     ->prependStylesheet('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', 'screen', true, ['integrity' => 'sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z', 'crossorigin' => 'anonymous']);
    // Setting dynamic javascript files
    $this->headScript()->appendFile(
        '/js/script.js',
        'text/javascript'
    )
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Calling our meta tags -->
    <?=$this->headMeta();?>
    <!-- this is dynamically title tag and you can rewrite it in other files -->
    <title><?php $this->slots()->output('title', 'Main Page'); ?> </title>
    <!-- Calling our stylesheets -->
    <?=$this->headLink();?>
</head>
<body>
    <div class="container">
        <?php $this->slots()->output('_content'); ?>
    </div>
    <!-- Append our scripts -->
    <?=$this->headScript();?>
</body>
</html>

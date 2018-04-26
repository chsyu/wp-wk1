<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        while(have_posts()){
            the_post(); ?>
            <h2><?php the_title()  ?></h2>
            <p><?php the_content()  ?></p>
            <hr>
       <?php }
    ?>

</body>
</html>
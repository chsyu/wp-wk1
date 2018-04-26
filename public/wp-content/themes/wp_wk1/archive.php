<?php get_header('professor-page'); ?>
<h1>This is the generic archive page</h1>
<?php
        while(have_posts()){
            the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></h2>
            <p><?php the_content()  ?></p>
            <hr>
       <?php }
    ?>
<?php get_footer(); ?>



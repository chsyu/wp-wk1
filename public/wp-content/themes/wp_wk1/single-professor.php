<?php get_header('professor-page'); ?>
<h1>This is the single professor page</h1>
<?php
        while(have_posts()){
            the_post(); ?>
            <div>
                <h2><?php the_title()  ?></h2>
                <p><?php the_content()  ?></p>
            </div>
            <a href="<?php echo site_url() ?>">Home</a>
           <hr>
       <?php }
    ?>
<?php get_footer(); ?>

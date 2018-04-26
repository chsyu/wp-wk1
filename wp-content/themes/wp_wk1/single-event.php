<?php get_header(); ?>
<h1 class="event-title">Event Detail</h1>
<?php
        while(have_posts()){
            the_post(); ?>
            <h2><?php the_title()  ?></h2>
            <p><?php the_content()  ?></p>
            <hr>
            <a href="<?php echo site_url('events') ?>">EVENTS</a>
       <?php }
    ?>
<?php get_footer(); ?>

    <?php get_header(); ?>
    <h1>This is the Front Page</h1>
    <a href="<?php echo site_url('events') ?>">EVENTS</a>
    <nav>
        <ul class="clear">
            <li class="navBar__elements"><a href="<?php echo site_url('/professor') ?>">About Us</a></li>
            <li class="navBar__elements"><a href="<?php echo site_url('/professor') ?>">Professors</a></li>
            <li class="navBar__elements"><a href="<?php echo site_url('/events') ?>">Events</a></li>
        </ul>
    </nav>
    <?php
        $homepage = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'page'
        ));
        while($homepage->have_posts()){
            $homepage->the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></h2>
            <p><?php the_author()  ?></p>
            <hr>
       <?php }
    ?>
    <?php get_footer(); ?>

<?php get_header('professor-page'); ?>
<h1>This is the professor page template</h1>
<?php
        $professorPage = new WP_Query(array(
            'post_type' => 'professor',
            'meta_key' => 'rank_order',
            'orderby' => 'meta_value_num',
            // 'order' => 'ASC'
        ));
        while($professorPage->have_posts()){
            $professorPage->the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></h2>
            <p><?php the_content()  ?></p>
            <hr>
       <?php }
    ?>
<?php get_footer(); ?>



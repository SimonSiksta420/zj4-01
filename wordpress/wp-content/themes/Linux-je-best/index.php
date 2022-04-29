<?php get_header(); ?>

<?php

if (have_posts()) :

    while (have_posts()) : the_post();

?>

        

        <h2 id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        
        <?php the_author(); ?>
        
        <?php the_date(); ?>
        
        <p> <?php the_post_thumbnail('small'); ?> </p>
        
    <?php

    endwhile;

else :

    ?>

    <p>Žádné příspěvky nalezeny.</p>

<?php

endif;

?>

<?php get_footer(); ?>
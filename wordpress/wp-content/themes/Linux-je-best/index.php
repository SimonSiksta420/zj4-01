<div class="container">
    <?php get_header(); ?>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="align-self-center">
                    <h2 id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                </div>
                <div class="align-self-center">
                    <?php the_author();?>
                    <?php the_date();?>
                    <p> <?php the_post_thumbnail('small');?> </p>
                </div>
            <?php endwhile;
        else : ?>
            <p>Žádné příspěvky nalezeny.</p>
        <?php endif; ?>
        <div class="align-self-center">
            <?php get_footer(); ?>
        </div>
    </div>
</div>
<?php get_header() ;?>

<?php

if (have_posts()) :

while (have_posts()) : the_post(); 
    
?>

<h1> <?php the_title() ;?> </h1>

<?php the_author() ;?>

<?php the_date() ;?>

<?php the_content() ;?>

<?php

endwhile;

else :

?>

<p>Žádné příspěvky nalezeny.</p>

<?php

endif;

?>

<?php get_footer() ;?>

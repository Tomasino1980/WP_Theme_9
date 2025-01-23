<?php
get_header(); // Načte hlavičku šablony

if (have_posts()) :
    while (have_posts()) : the_post();
        // Zobrazí obsah příspěvku
        get_template_part('template-parts/content', get_post_format());
    endwhile;

    // Zobrazí navigaci mezi příspěvky
    the_posts_navigation();
else :
    // Zobrazí zprávu, pokud nejsou nalezeny žádné příspěvky
    get_template_part('template-parts/content', 'none');
endif;

get_footer(); // Načte patičku šablony
?>
<?php
get_header();
akaiv_before_main(); ?>

<?php get_template_part( 'templates/content', 'front' ); ?>

<?php
akaiv_after_main();
get_footer();

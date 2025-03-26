<?php get_header(); ?>

<h1>Hello from custom post-type single pet page</h1>

<?php

while (have_posts()) {
    the_post();
?>

    <div>
        <p>This is a single pet, not a post</p>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>

<?php } ?>

<?php get_footer(); ?>
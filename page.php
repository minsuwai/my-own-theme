<h1>Hello from a page</h1>

<?php

while (have_posts()) {
    the_post();
?>

    <div>
        <p>This is a page, not a post.</p>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>

<?php } ?>
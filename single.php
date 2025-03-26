<h1>Hello from single page</h1>

<?php

while (have_posts()) {
    the_post();
?>

    <div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>

<?php } ?>
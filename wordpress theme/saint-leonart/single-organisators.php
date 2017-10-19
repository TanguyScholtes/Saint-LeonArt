<?php get_header(); ?>

<?php the_post(); ?>

<div class="main main__content">
    <h1 class="page-title"><?php the_title(); ?></h1>

    <div>
        <?php the_content(); ?>
    </div>

</div>

<?php get_footer(); ?>

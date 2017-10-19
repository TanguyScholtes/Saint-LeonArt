<?php get_header(); ?>

<main class="main">
    <!-- include view depending of processing step -->
    <h1 class="page-title">Événements</h1>
    <div>
        <?php $posts = new WP_Query('post_type=events&order=DES');
            $posts = $posts -> posts;
        ?>
        <?php if ( $posts ) : ?>
            <ul class="events-list">
                <?php foreach( $posts as $post ):?>
                    <li class="events-list-item">
                        <a class="events-list-link" href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Il n'y a aucun événement à afficher pour l'instant.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

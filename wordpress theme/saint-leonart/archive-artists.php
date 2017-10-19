<?php get_header(); ?>

<main class="main">
    <!-- include view depending of processing step -->
    <h1 class="page-title">Artistes</h1>
    <div>
        <?php $posts = new WP_Query('post_type=artists&order=DES');
            $posts = $posts -> posts;
        ?>
        <?php if ( $posts ) : ?>
            <ul class="artists-list">
                <?php foreach( $posts as $post ):?>
                    <li class="artists-list-item">
                        <a class="artists-list-link" href="<?php echo get_post_permalink(); ?>">
                            <?php if( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail( 'medium', [
                                    'class' => 'artists-list-image',
                                    'alt'   => '<?php the_title(); ?>'
                                    ] ); ?>
                            <?php else: ?>
                                <img class="artists-list-image" src="<?php echo get_template_directory_uri(); ?>/img/artists/artist-placeholder.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <?php the_title(); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Il n'y a aucun artiste à afficher pour l'instant.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

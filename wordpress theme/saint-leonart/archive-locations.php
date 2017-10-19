<?php get_header(); ?>

<main class="main">
    <!-- include view depending of processing step -->
    <h1 class="page-title">Lieux d'exposition</h1>
    <div>
        <?php $posts = new WP_Query('post_type=locations&order=DES');
            $posts = $posts -> posts;
        ?>
        <?php if ( $posts ) : ?>
            <ul class="locations-list">
                <?php foreach( $posts as $post ):?>
                    <li class="locations-list-item">
                        <a class="locations-list-link" href="<?php echo get_post_permalink(); ?>">
                            <?php if( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail( 'medium', [
                                    'class' => 'locations-list-image',
                                    'alt'   => '<?php the_title(); ?>'
                                    ] ); ?>
                            <?php else: ?>
                                <img class="locations-list-image" src="<?php echo get_template_directory_uri(); ?>/img/locations/location-placeholder.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <?php the_title(); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Il n'y a aucun lieu à afficher pour l'instant.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

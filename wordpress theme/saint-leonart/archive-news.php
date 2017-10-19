<?php get_header(); ?>

<main class="main">
    <!-- include view depending of processing step -->
    <h1 class="page-title">Actualités</h1>
    <div>
        <?php $posts = new WP_Query('post_type=news&order=DES');
            $posts = $posts -> posts;
        ?>
        <?php if ( $posts ) : ?>
            <ul class="news-list">
                <?php foreach( $posts as $post ):?>
                    <li class="news-list-item">
                        <a class="news-list-link" href="<?php echo get_post_permalink(); ?>">
                            <?php if( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail( 'medium', [
                                    'class' => 'news-list-image',
                                    'alt'   => '<?php the_title(); ?>'
                                    ] ); ?>
                            <?php else: ?>
                                <img class="news-list-image" src="<?php echo get_template_directory_uri(); ?>/img/news/news-placeholder.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <?php the_title(); ?>
                            <?php the_time(); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Il n'y a aucune actualité à afficher pour l'instant.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

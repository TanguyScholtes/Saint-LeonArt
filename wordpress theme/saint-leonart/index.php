<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage saint-leonart
 * @since Saint Léon'Art 0.0.1
 */

get_header(); ?>

<?php include( 'views/event/locations.php' ); ?>
<main class="main">
    <!-- include view depending of processing step -->
    <section class="event-preview">
        <?php include( 'views/event/artists.php' ); ?>
        <?php include( 'views/event/activities.php' ); ?>
    </section>
    <?php include( 'views/news.php' ); ?>
    <?php include( 'views/instagram.php' ); ?>
</main>

<?php get_footer(); ?>

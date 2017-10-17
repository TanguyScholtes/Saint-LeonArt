<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage saint-leonart
 * @since Saint Léon'Art 0.0.1
 */
?>

	<div class="footer-wrapper">
	    <footer class="footer">
	        <?php include( 'footer/newsletter.php' ); ?>
	        <?php include( 'footer/partners.php' ); ?>
	        <?php include( 'footer/social.php' ); ?>
	        <p class="organisation">Saint Léon'Art est une initiative de <a class="footer-link" href="">L'Encreuse ASBL</a>.</p>
	        <p class="legal">Site réalisé par <a class="footer-link" href="http://tanguyscholtes.be">Tanguy Scholtés</a>, 2017.</p>
	    </footer>
	</div>

	<?php wp_footer(); ?>

	<script type="text/javascript" src="js/menu-icon-replacer.js"></script>

</body>
</html>

<section class="partners">
    <h2 class="footer-title">Nos partenaires</h2>
    <p><span class="emphasis">Saint Léon'Art</span> a lieu grâce au soutien et à la collaboration de</p>
    <?php foreach( $partners as $partner ): ?>
        <div class="partner">
            <a class="partner-link" href="#" title="Vers le site de <?php echo $partner[ 'name' ]; ?>">
                <img class="partner-logo" src="<?php echo $partner[ 'logo' ]; ?>" alt="<?php echo $partner[ 'name' ]; ?>">
            </a>
        </div>
    <?php endforeach; ?>
</section>

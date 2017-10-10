<section class="news-preview">
    <h2 class="page-title">Instagram</h2>
    <div class="flex-row">
        <?php foreach( $instagram as $image ): ?>
            <div class="instagram flex-item">
                <a class="instagram-link" href="#">
                    <img class="instagram-image" src="<?php echo $image['image'];?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <p class="button"><a class="button-link button" href=#><span class="fa fa-instagram"></span> Suivez-nous sur Instagram</a></p>
</section>

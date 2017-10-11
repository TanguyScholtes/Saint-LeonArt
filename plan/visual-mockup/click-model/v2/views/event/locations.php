<div class="locations-preview slider text-over-image-container">
    <div class="slider-container">
        <?php foreach( $artworks as $artwork ): ?>
            <picture>
                <source media="(min-width: 1025px)" srcset="<?php echo $artwork['desktop']; ?>"></source>
                <source media="(min-width: 737px)" srcset="<?php echo $artwork['tablet']; ?>"></source>
                <source media="(min-width: 481px)" srcset="<?php echo $artwork['smartphone']; ?>"></source>
                <source media="(min-width: 320px)" srcset="<?php echo $artwork['mini']; ?>"></source>
                <img class="slider-panel" src="<?php echo $artwork['full']; ?>">
            </picture>
        <?php endforeach; ?>
    </div>
    <div class="text-over-image--text-wrapper locations-text-wrapper">
        <p class="text-over-image locations-text">
            Du 19 au 21 août 2018</br>
            Dans le quartier Saint Léonard de Liège
        </p>
        <p class="button"><a class="button-link button-colored" href=#>Explorer les lieux d'expositions</a></p>
    </div>
</div>

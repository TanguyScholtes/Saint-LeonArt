<div class="artists-preview">
    <p class="event-preview-text">Avec</p>
    <div class="flex-row">
        <?php foreach( $artists as $artist ): ?>
            <div class="media artist-preview flex-item">
                <p class="media-title">
                    <a class="media-link" href="#">
                        <img class="media-image" src="<?php echo $artist['image']; ?>" alt="<?php echo $artist['name']; ?>">
                        <?php echo $artist['name']; ?>
                    </a>
                </p>
                <p class="media-text"><?php echo $artist['speciality']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <p class="button"><a class="button-link button" href=#>Et bien d'autres artistes !</a></p>
</div>

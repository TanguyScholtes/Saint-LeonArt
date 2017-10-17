
<div class="edged-wrapper">
    <section class="news-preview">
        <h2 class="page-title">Actualités</h2>
        <div class="flex-row">
            <?php foreach( $news as $new ): ?>
                <div class="media news flex-item">
                    <p class="media-title">
                        <a class="media-link" href="#">
                            <img class="media-image" src="<?php echo $new['image'];?>">
                            <?php echo $new['title'];?>
                        </a>
                    </p>
                    <p class="media-subtitle"><?php echo $new['date'];?></p>
                    <p class="media-text"><?php echo $new['text'];?></p>
                    <p><a class="content-link" href=#>Lire la suite</a></p>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="button"><a class="button-link button" href=#>Voir toutes nos actualités</a></p>
    </section>
</div>

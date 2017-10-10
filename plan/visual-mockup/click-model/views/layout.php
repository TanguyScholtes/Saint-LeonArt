<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="fr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="fr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="fr" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Accueil - Saint Léon'Art</title>
    <meta name="description" content="Homepage click model for Saint Léon'Art, artistic trail in the Saint-Léonard neighborhood of Liège (Belgium).">
    <meta name="author" content="Tanguy Scholtés">

    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include( 'views/banner.php' ); ?>

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

    <?php include( 'views/footer.php' ); ?>

    <script type="text/javascript" src="js/menu-icon-replacer.js"></script>
</body>
</html>

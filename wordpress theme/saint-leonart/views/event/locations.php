<div class="locations-preview text-over-image-container">
    <style type="text/css">
        .locations-image-container{
            background-image: url('../<?php echo $masterpiece['mini']; ?>');
            max-width: 480px;
            height: 400px;
        }
        @media only screen and (min-width: 481px) and (max-width: 736px){
            .locations-image-container{
                background-image: url('../<?php echo $masterpiece['smartphone']; ?>');
                max-width: 736px;
            }
        }
        @media only screen and (min-width: 737px){
            .locations-image-container{
                height: 500px;
            }
        }
        @media only screen and (min-width: 737px) and (max-width: 1024px){
            .locations-image-container{
                background-image: url('../<?php echo $masterpiece['tablet']; ?>');
                max-width: 1024px;
            }
        }
        @media only screen and (min-width: 1025px) and (max-width: 1366px){
            .locations-image-container{
                background-image: url('../<?php echo $masterpiece['desktop']; ?>');
                max-width: 1366px;
            }
        }
        @media only screen and (min-width: 1337px) and (max-width: 1600px){
            .locations-image-container{
                background-image: url('../<?php echo $masterpiece['large']; ?>');
                max-width: 1600px;
            }
        }
        @media only screen and (min-width: 1601px) and (max-width: 1920px){
            .locations-image-container{
                background-image: url('../<?php echo $masterpiece['hd']; ?>');
                max-width: 1920px;
            }
        }
        @media only screen and (min-width: 1921px) and (max-width: 4096px){
            .locations-image-container{
                background-image: url('../<?php echo $masterpiece['ultraHd']; ?>');
                max-width: 4096px;
            }
        }
    </style>
    <div class="locations-image-container">

    </div>
    <div class="text-over-image--text-wrapper locations-text-wrapper">
        <p class="text-over-image locations-text">
            Du 19 au 21 août 2018</br>
            Dans le quartier Saint Léonard de Liège
        </p>
        <p class="button"><a class="button-link button-colored" href=#>Explorer les lieux d'expositions</a></p>
    </div>
</div>

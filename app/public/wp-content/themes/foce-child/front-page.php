<?php

get_header();
?>

    <main id="primary" class="site-main">


        <section class="banner">
            
        <video class="video" autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() . '/medias/banner.png'; ?>">
            <source src="<?php echo get_stylesheet_directory_uri() . '/medias/koukaki-video.mp4'; ?>" type="video/mp4">      
        </video>  
            <div class="fadeInUpLogo">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="#story" class="story fadeInUp">
            <h2 class="slideInUp"><span>L'histoire</span></h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php get_template_part( 'template-parts/personnages' ); ?>


                 
            </article> 
            <article id="place" class="scrollFade">
                <div>
                <img src="<?php echo get_stylesheet_directory_uri() . './medias/big_cloud.png' ; ?>" class="clouds bigCloud"  alt="gros nuage">
                <img src="<?php echo get_stylesheet_directory_uri() . '/medias/little_cloud.png'; ?>"  class="clouds lilCloud" alt="petit nuage">
                    <h3><span>Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="studio scrollFade">
            <h2 class="slideInUp" ><span>Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

        <section id="oscars" class="oscars scrollFade">
            <h3 class="slideInUp" ><span>Fleurs d’oranger & chats errants<br>est nominé aux Oscars Short<br>Film Animated de 2022 !</span></h3>
            <img src="<?php echo get_stylesheet_directory_uri() . '/medias/oscars2022.png'; ?>" alt="nomination oscars court metrage">
        </section>



    </main><!-- #main -->

<?php
get_footer();

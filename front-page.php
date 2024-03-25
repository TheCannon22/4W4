<?php

/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>

<div id="entete" class="global clr-agencement-primaire">
    <section class="entete__header">
        <!-- facebook -->

        <div class="entete__header__texte ">
            <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
            <h2 class="bgc-text"><?php echo get_bloginfo('description'); ?></h2>
            <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
        </div>
        <div class="entete__header__button"><button class="entete__button">Événements</button></div>
    </section>
</div>
<div id="accueil" class="global clr-agencement-primaire">
    <section class="accueil__section">
        <h2>Accueil (h2)</h2>
        <div class="section__voyage">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="carte">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        <p> <a href="<?php echo get_permalink(); ?>"> Voir la suite </a></p>
                        <?php the_category(); ?>
                    </div>
                <?php endwhile;
            endif;

            // Récupérer les catégories
            $categories = get_categories();

            // Parcourir chaque catégorie
            foreach ($categories as $category) {
                // Récupérer les 10 premiers mots de la description de la catégorie
                $category_description = wp_trim_words($category->description, 10);
                // Récupérer le lien vers la liste des destinations de cette catégorie
                $category_link = get_category_link($category->term_id);
                // Récupérer le nombre d'articles pour cette catégorie
                $category_count = $category->count;
                ?>
                <div class="categories">
                    <h4><?php echo $category->name; ?></h4>
                    <p><?php echo $category_description; ?></p>
                    <p><a href="<?php echo $category_link; ?>">Voir les destinations</a></p>
                    <p><?php echo $category_count; ?> articles</p>
                </div>
            <?php } ?>

        </div>
    </section>
</div>
<div id="galerie" class="global">
    <section class="galerie__section clr-agencement-primaire">
        <h2>Galerie</h2>
        <div class="destinations-carousel">
            <div class="destination">
                <img src="destination1.jpg" alt="Destination 1">
                <h3>Destination 1</h3>
                <p>Description de la destination 1...</p>
            </div>
            <div class="destination">
                <img src="destination2.jpg" alt="Destination 2">
                <h3>Destination 2</h3>
                <p>Description de la destination 2...</p>
            </div>
            <div class="destination">
                <img src="destination2.jpg" alt="Destination 2">
                <h3>Destination 3</h3>
                <p>Description de la destination 3...</p>
            </div>
            <div class="destination">
                <img src="destination2.jpg" alt="Destination 2">
                <h3>Destination 4</h3>
                <p>Description de la destination 4...</p>
            </div>
            <div class="destination">
                <img src="destination2.jpg" alt="Destination 2">
                <h3>Destination 5</h3>
                <p>Description de la destination 5...</p>
            </div>
            <div class="destination">
                <img src="destination2.jpg" alt="Destination 2">
                <h3>Destination 6</h3>
                <p>Description de la destination 6...</p>
            </div>
            <div class="destination">
                <img src="destination2.jpg" alt="Destination 2">
                <h3>Destination 7</h3>
                <p>Description de la destination 7...</p>
            </div>
        </div>
        <div class="controls">
            <button class="precedent">❮</button>
            <button class="prochain">❯</button>
        </div>
        <blockquote>Ça fait depuis 2 ans que je suis au TIM et j'aime beaucoup le programme et les personnes dans le programme. Je veux vraiment devenir un développeur de jeu.</blockquote>
        <a href="reserver.html" class="bouton-reservation">Réserver maintenant</a>
    </section>
</div>


<div id="evenement" class="global clr-agencement-primaire">
    <section class="evenement__section">
        <h2>Événement</h2>
        <div>
            <blockquote>Bienvenue au TIM! Le programme de Techniques d'Intégration Multimédia est une formation qui vise à développer les compétences nécessaires pour concevoir, créer et intégrer des contenus multimédias variés. Il combine généralement des aspects de la conception graphique, de la programmation, de la vidéo, de l'audio et d'autres éléments multimédias.</blockquote>
        </div>
    </section>
</div>

<?php get_footer(); ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const prevBtn = document.querySelector(".precedent");
    const nextBtn = document.querySelector(".prochain");
    const carousel = document.querySelector(".destinations-carousel");

    prevBtn.addEventListener("click", function() {
        carousel.scrollBy({ left: -250, behavior: "smooth" });
    });

    nextBtn.addEventListener("click", function() {
        carousel.scrollBy({ left: 250, behavior: "smooth" });
    });
});

</script>
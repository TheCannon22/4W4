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
        <h2>Accueil</h2>
        <div class="section__voyage">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="carte">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        <p><a href="<?php echo get_permalink(); ?>">Voir la suite</a></p>
                        <?php the_category(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>

        
        <h2>Les catégories</h2>

        <div class="section__categories">
            <?php
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
                <img src="images/image-paris.jpg" alt="La ville de Paris">
                <h3>Paris, France</h3>
                <p>La ville de l'amour</p>
            </div>
            <div class="destination">
                <img src="images/image-tokyo.jpg" alt="La ville de Tokyo">
                <h3>Tokyo, Japon</h3>
                <p>La Ville du Futur</p>
            </div>
            <div class="destination">
                <img src="images/image-dubrovnik.jpg" alt="La ville de Dubrovnik">
                <h3>Dubrovnik, Croatie</h3>
                <p>La Perle de la Méditerranée</p>
            </div>
            <div class="destination">
                <img src="images/image-londres.jpg" alt="La ville de Londres">
                <h3>Londres, Royaume-Uni</h3>
                <p>La Ville du Roi</p>
            </div>
            <div class="destination">
                <img src="images/image-moscou.jpg" alt="La ville de Moscou">
                <h3>Moscou, Russie</h3>
                <p>La Ville des Mille Clochers</p>
            </div>
            <div class="destination">
                <img src="images/image-rome.jpg" alt="La ville de Rome">
                <h3>Rome, Italie</h3>
                <p>La Ville des Empereurs</p>
            </div>
            <div class="destination">
                <img src="images/image-guadelajara.jpg" alt="La ville de Guadelajara">
                <h3>Guadelajara, Mexique</h3>
                <p>La Perle de l'Ouest.</p>
            </div>
            <div class="destination">
                <img src="images/image-montreal.jpg" alt="La ville de Montréal">
                <h3>Montréal, Canada</h3>
                <p>La Ville de la Belle Province</p>
            </div>
            <div class="destination">
                <img src="images/image-vienne.jpg" alt="La ville de Vienne">
                <h3>Vienne, Autriche</h3>
                <p>La Ville de la Musique.</p>
            </div>
            <div class="destination">
                <img src="images/image-buenos-aires.jpg" alt="La ville de Buenos Aires">
                <h3>Buenos Aires, Argentine</h3>
                <p>La Ville des Tango</p>
            </div>
            <div class="destination">
                <img src="images/image-new-york.jpg" alt="la ville de New York">
                <h3>New York, États-Unis</h3>
                <p>La Grosse Pomme</p>
            </div>
        </div>
        <div class="controls">
            <button class="precedent">❮</button>
            <button class="prochain">❯</button>
        </div>
    </section>
</div>


<div id="evenement" class="global clr-agencement-primaire">
    <section class="evenement__section">
        <h2>Événement</h2>
        <div class="session-commentaire">
            <div class="publication-commentaire">
                <div class="liste-commentaire">
                    <div class="flex">
                        <div class="utilisateur">
                            <div class="image-utilisateur"><img src="images/albert-dera-ILip77SbmOE-unsplash.jpg" alt="Ceci est une image d'Albert"></div>
                            <div class="utilisateur-meta">
                                <div class="nom">Albert</div>
                                <div class="jour">Il y a 20 jours</div>
                            </div>
                        </div>
                        <div class="reponse">
                            <div class="lien icon">420<i class="fa-regular fa-thumbs-up"></i></i></div>
                            <div class="dis-lien icon"><i class="fa-regular fa-thumbs-down"></i></div>
                            <div class="re-commentaire">Réponse</div>
                        </div>
                    </div>
                    <div class="commentaire">
                        Merci bla bla bla
                    </div>
                </div>
                <div class="liste-commentaire">
                    <div class="flex">
                        <div class="utilisateur">
                            <div class="image-utilisateur"><img src="images/aiony-haust-3TLl_97HNJo-unsplash.jpg" alt="Ceci est une image d'Aiony"></div>
                            <div class="utilisateur-meta">
                                <div class="nom">Aiony</div>
                                <div class="jour">Il y a 2 jours</div>
                            </div>
                        </div>
                        <div class="reponse">
                            <div class="lien icon">23<i class="fa-regular fa-thumbs-up"></i></i></div>
                            <div class="dis-lien icon"><i class="fa-regular fa-thumbs-down"></i></div>
                            <div class="re-commentaire">Réponse</div>
                        </div>
                    </div>
                    <div class="commentaire">
                        Merci bla bla bla
                    </div>
                </div>
                <form action="" class="boite-de-commentaire">
                    <div class="utilisateur">
                        <div class="image"><img src="images/Alexander_Rankov.JPG" alt="Ceci est une photo d'Alexander"></div>
                        <div class="name">Alexander</div>
                    </div>
                    <textarea name="commentaire"></textarea>
                    <button class="commentaire-soumission">Soumettre</button>
                </form>
            </div>
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
            carousel.scrollBy({
                left: -250,
                behavior: "smooth"
            });
        });

        nextBtn.addEventListener("click", function() {
            carousel.scrollBy({
                left: 250,
                behavior: "smooth"
            });
        });
    });
</script>
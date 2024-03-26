<?php

/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class="section__voyage">
            <?php

            ?>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="carte">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        <p> <a href="<?php echo get_permalink(); ?>"> Voir la suite </a></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
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
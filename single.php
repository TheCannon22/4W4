<?php

/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class="section__cours">
            <?php

            ?>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="carte">
                        <h4><?php the_title(); ?></h4>
                        <p><?php (the_content()); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
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
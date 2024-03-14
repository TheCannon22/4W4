<?php

/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil (h2)</h2>
        <div class="section__cours">
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
        <img src="./images/Logo_Chelsea.png" alt="Image d'accueil">
    </section>
</div>
<div id="galerie" class="global diagonal">
    <section class="galerie__section">
        <h2>Galerie</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet iste aspernatur aperiam consequatur, quidem est facere tempora! Sit saepe id ut provident vero ea consectetur sequi aspernatur eaque neque, quae sapiente ab reiciendis, recusandae iusto. Recusandae incidunt explicabo, commodi ipsam ipsum reiciendis corporis. Eius voluptatem assumenda libero dolores cupiditate repudiandae voluptas dolor minima unde expedita? Obcaecati excepturi minus laudantium velit!</p>
        <blockquote>Ça fait depuis 2 ans que je suis au TIM et j'aime beaucoup le programme et les personnes dans le programme. Je veux vraiment devenir un développeur de jeu.</pblockquote>
            <select>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
    </section>
</div>
<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Événement</h2>
        <div>
            <blockquote>Bienvenue au TIM! Le programme de Techniques d'Intégration Multimédia est une formation qui vise à développer les compétences nécessaires pour concevoir, créer et intégrer des contenus multimédias variés. Il combine généralement des aspects de la conception graphique, de la programmation, de la vidéo, de l'audio et d'autres éléments multimédias.</blockquote>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, earum!</p>
        <video controls width="400" height="300">
            <source src="./videos/Match_Chelsea.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise vidéo.
        </video>
    </section>
    <?php get_template_part("gabarit/vague") ?>
</div>

<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème gr2</title>

    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!-- <link rel="stylesheet" href="style.css">  -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1>Thème d'Alexander</h1>
            <h2>4W4 - Conception d'interface <span>et développement web</span></h2>
            <h3>TIM - Collège de Maisonneuve</h3>
            <button class="entete__button">Évenements</button>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill:var(--couleur-arriere-accueil)"></path>
            </svg>
        </div>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil</h2>
            <div class="section__cours">
                <!--
                if(have_posts())
                {
                    while(have_posts()){
                        the_post();
                        the_title('<p>', '</p>');
                        $contenu = get_the_content();
                        $contenu = wp_trim_words($contenu, 10);
                        echo $contenu;
                    }
                }
                -->                
            <?php if(have_posts()):
                    while(have_posts()): the_post();
                    $titre = get_the_title();
                    $sigle = substr($titre,0,7);
                    $titreCours = substr($titre, 7, -6);
                    $dureeCours = substr($titre, -6);
                    // strpos()

                    ?>

                    <div class="carte">
                        <h3><?php echo $sigle; ?></h3>
                        <h4><?php echo $titreCours; ?> </h4>
                        <h4><?php echo $dureeCours; ?> </h4>
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?> </p>
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
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill:var(--couleur-arriere-footer)"></path>
            </svg>
        </div>
    </div>
    <div id="footer" class="global">
        <footer class="footer__section">
            <form action="" class="recherche">
                <input type="search" name="" id="" class="recherche__input" placeholder="recherche">
                <button class="recherche__button">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </button>
            </form>
            <div class="sociaux">
                <a href="#"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path fill="none" d="M0 0h24v24H0z"></path><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path></svg></a>
                <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path></svg></a>
                <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg></a>
                <a href="#"><svg width="24" height="24" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><title>YouTube icon</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path></svg></a>
                <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>Snapchat icon</title><path d="M12.206.793c.99 0 4.347.276 5.93 3.821.529 1.193.403 3.219.299 4.847l-.003.06c-.012.18-.022.345-.03.51.075.045.203.09.401.09.3-.016.659-.12 1.033-.301.165-.088.344-.104.464-.104.182 0 .359.029.509.09.45.149.734.479.734.838.015.449-.39.839-1.213 1.168-.089.029-.209.075-.344.119-.45.135-1.139.36-1.333.81-.09.224-.061.524.12.868l.015.015c.06.136 1.526 3.475 4.791 4.014.255.044.435.27.42.509 0 .075-.015.149-.045.225-.24.569-1.273.988-3.146 1.271-.059.091-.12.375-.164.57-.029.179-.074.36-.134.553-.076.271-.27.405-.555.405h-.03c-.135 0-.313-.031-.538-.074-.36-.075-.765-.135-1.273-.135-.3 0-.599.015-.913.074-.6.104-1.123.464-1.723.884-.853.599-1.826 1.288-3.294 1.288-.06 0-.119-.015-.18-.015h-.149c-1.468 0-2.427-.675-3.279-1.288-.599-.42-1.107-.779-1.707-.884-.314-.045-.629-.074-.928-.074-.54 0-.958.089-1.272.149-.211.043-.391.074-.54.074-.374 0-.523-.224-.583-.42-.061-.192-.09-.389-.135-.567-.046-.181-.105-.494-.166-.57-1.918-.222-2.95-.642-3.189-1.226-.031-.063-.052-.15-.055-.225-.015-.243.165-.465.42-.509 3.264-.54 4.73-3.879 4.791-4.02l.016-.029c.18-.345.224-.645.119-.869-.195-.434-.884-.658-1.332-.809-.121-.029-.24-.074-.346-.119-1.107-.435-1.257-.93-1.197-1.273.09-.479.674-.793 1.168-.793.146 0 .27.029.383.074.42.194.789.3 1.104.3.234 0 .384-.06.465-.105l-.046-.569c-.098-1.626-.225-3.651.307-4.837C7.392 1.077 10.739.807 11.727.807l.419-.015h.06z"></path></svg></a>
            </div>
            <div class="footer__content">
                
                <div class="footer__column">
                    <h4>Liens</h4>
                    <ul>
                        <li><a href="entete">Lien 1</a></li>
                        <li><a href="entete">Lien 2</a></li>
                        <li><a href="entete">Lien 3</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <h4>Liens</h4>
                    <ul>
                        <li><a href="entete">Lien 4</a></li>
                        <li><a href="entete">Lien 5</a></li>
                        <li><a href="entete">Lien 6</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <h4>Liens</h4>
                    <ul>
                        <li><a href="entete">Lien 7</a></li>
                        <li><a href="entete">Lien 8</a></li>
                        <li><a href="entete">Lien 9</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <h4>Liens</h4>
                    <ul>
                        <li><a href="entete">Lien 10</a></li>
                        <li><a href="entete">Lien 11</a></li>
                        <li><a href="entete">Lien 12</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    
    
</body>
</html>

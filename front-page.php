<?php 
/** 
 * index.php est le modèle par défaut du thème 4w4
*/
?>
<?php 
/** 
 * Titre d'accueil
*/
?>
<?php get_header();?>

    <main>
        <pre>front-page.php</pre>
        <h1>Bienvenue sur 4W4</h1>
        <?php 
        if (have_posts()):
                while(have_posts()):
                    the_post();//extrait un objet "post"?>
                    <article>
                        <h3><?php the_title();//afficher le titre du post?></h3>
                        <h6>Extrait:</h6><?php the_excerpt(); ?> 
                        <h6>Le contenu:</h6><?php the_content();//afficher le contenu ?>
                    </article>
                <?php endwhile; ?>
        <?php endif; ?>

    </main>

    <?php get_footer();?>    
</body>
</html>
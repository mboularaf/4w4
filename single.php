<?php 
/** 
 * single.php est le modèle pour un article
*/
?>
<?php 
/** 
 * Titre d'accueil
*/
?>
<?php get_header();?>

    <main>
        <pre>single.php</pre>
        <h1>Bienvenue sur 4W4</h1>
        <?php 
        if (have_posts()):
                while(have_posts()):
                    the_post();//extrait un objet "post"?>
                    <article>
                        <h3><?php the_title();//afficher le titre du post?></h3></a> 
                        <?php the_content();//afficher le contenu ?>
                    </article>
                    <hr>
                <?php endwhile; ?>
        <?php endif; ?>

    </main>

    <?php get_footer();?>    
</body>
</html>
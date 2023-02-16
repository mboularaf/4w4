<?php 
/** 
 * category.php est le modèle par défaut pour afficher 
 * une archive d'articles de catégorie spécifique
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
        <section class="blocflex">
            <?php if (have_posts()):
                while(have_posts()):the_post();//extrait un objet "post"?>
                <article>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title();//afficher le titre du post?></a></h3>
                    <?php the_excerpt()?>
                    <?php wp_trim_words(get_the_excerpt(), 10, "...");?>                      
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>
    </main>

    <?php get_footer();?>    
</body>
</html>
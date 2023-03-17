<?php 
/** 
 * front-page.php est le modèle par défaut utilisé 
 * pour afficher la page d'accueil avec les cours 
*/
?>
<?php 
/** 
 * Titre d'accueil
*/
?>
<?php get_header(); ?>
    <main class="site__main">
      
        <h1 class="titre__main">Bienvenue sur 4W4</h1>
        <section class="blocflex">
            <?php /*Boucle pour pouvoir créer des articles identiques et mettre une galerie fonctionnelle*/
                if(have_posts()): 
                while (have_posts()): the_post(); 
                    $la_categorie = 'note-4w4';
                    if (in_category('galerie')){
                        $la_categorie = 'galerie';}
                    get_template_part("template-parts/categorie",$la_categorie);
               endwhile; 
             endif; ?>
        </section>
    </main>
<?php get_footer(); ?>  

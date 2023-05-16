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
    <div class="sidebar">
                <?php dynamic_sidebar( 'entete_1' ); ?>
        </div>
        <h1 class="titre__main">Bienvenue sur 4W4</h1>
        
        <h2>Les Événements à venir </h2>
        <section class="blocflex">
            <?php  wp_nav_menu(array( 
                                    "menu" => "evenement",
                                    "container" => "nav",
                                    "container_class" => "menu__evenement"
                                )); ?>
        </section>
        <h2>Archive menu </h2>
        <section class="blocflex">
            <?php  wp_nav_menu(array( 
                                    "menu" => "bloc-archive",
                                    "container" => "nav",
                                    "container_class" => "menu__bloc-archive"
                                )); ?>
        </section>
        <section class="blocflex">
            <?php /*Boucle pour pouvoir créer des articles identiques et mettre une galerie fonctionnelle*/
                if(have_posts()): 
                while (have_posts()): the_post(); 
                    $la_categorie = 'note-4w4'; 
                    if (in_category('cours')){
                      $la_categorie = 'cours';} 
                    if (in_category('galerie')){
                        $la_categorie = 'galerie';}
                    get_template_part("template-parts/categorie",$la_categorie);
               endwhile; 
             endif; ?>
             
        </section>
    </main>
<?php get_footer(); ?>  

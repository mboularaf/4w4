<?php 
/** 
 * index.php est le modèle par défaut du thème 4w4
*/
?>
<?php 
/** 
 * Erreur 404. cette page s'affiche quand il ya une erreur dans la url ca va pas marcher
*/
?>
<?php get_header();?>
     
    <main class="site__main">
        <h1>Erreur 404</h1>
            <h3>Page introuvable, vous pouvez tentez une recherche<h3>
            <?= get_search_form(); ?>
        <h3>Nos choix de cours</h3>
        <?php 
        $menu = "cours"; 
        if(in_category('note-4w4')){ $menu = "note-4w4";}
        // $menu peut prendre les valeurs : "note-4w4" ou "cours"
            echo $menu;
            wp_nav_menu(array(
            "menu"=>$menu,
            "container"=>"nav"
        ))
        ?>
        <h3>Les notes de cours</h3>
        <?php 
        $menu = "note-4w4"; 
        if(in_category('cours')){ $menu = "cours";}
        // $menu peut prendre les valeurs : "note-4w4" ou "cours"
            echo $menu;
            wp_nav_menu(array(
            "menu"=>$menu,
            "container"=>"nav"
        ))
        ?>
        
    </main>
    <?php get_footer(); ?>  
</body>
</html>
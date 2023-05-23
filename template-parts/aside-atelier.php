<?php
/**
 * Template permettant d'afficher la zone aside
 */
?>
<aside class="site__aside">
    <h3>Menu atelier</h3>
    <?php 
    $menu = "atelier"; 
    if(in_category('atelier')){ $menu = "atelier";}
      // $menu peut prendre les valeurs : "note-4w4" ou "cours"
        echo $menu;
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
    )) ?>
</aside>
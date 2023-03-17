<?php 
/** 
 * footer.php 
*/
?>
<?php 
/** 
 * Titre d'accueil
*/
?>
<footer class="site__footer">
<section>
        <?php the_custom_logo() //chercher le logo ?>


        
</section>
<?php 
/*tableau qui permet de retourner une des valeurs  */
        wp_nav_menu(array( 
                                "menu" => "entete",
                                "container" => "nav",
                                "container_class" => "menu__entete"

                            )); ?>
                            
</footer>
        <?php wp_footer(); ?>
        
</body>
</html>    
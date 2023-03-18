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
        <section class="logo__footer">
                <?php the_custom_logo() //chercher le logo ?>


                
        </section>
        <section class="menu__footer">
                <?php 

        /*tableau qui permet de retourner une des valeurs  */
                wp_nav_menu(array( 
                                        "menu" => "entete",
                                        "container" => "nav",
                                        "container_class" => "menu__entete"

                                )); ?>
        </section>
                            
</footer>
        <?php wp_footer(); ?>
        
</body>
</html>    
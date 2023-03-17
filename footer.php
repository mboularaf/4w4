<footer class="site__footer">
<section>
        <?php the_custom_logo() ?>


        
</section>
<?php  wp_nav_menu(array( 
                                "menu" => "entete",
                                "container" => "nav",
                                "container_class" => "menu__entete"

                            )); ?>
                            
</footer>
        <?php wp_footer(); ?>
        
</body>
</html>    
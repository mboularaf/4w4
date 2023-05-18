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
        
        <section class="footer_col">
                <?php the_custom_logo(); ?> 
        </section>
        <section class="footer_col">
        <div class="sidebar">
                <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
        </section> 
        <section class="footer_col">
        <div class="sidebar">
                <?php dynamic_sidebar( 'footer_2' ); ?>
        </div>
        </section> 
        <section class="footer_col">
        <div class="sidebar">
                <?php dynamic_sidebar( 'footer_3' ); ?>
        </div>
        </section>
         
        

                                     

</footer>
<?php wp_footer(); ?>
</body>
</html>    
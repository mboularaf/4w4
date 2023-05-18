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
        <div class="footer_principal">
        <section>
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
        </div> 
        <div class="footer_social">
        <section class="footer_col">
        <div class="sidebar">
                <?php dynamic_sidebar( 'footer_3' ); ?>
        </div>
        </section>
        </div> 
         
        

                                     

</footer>
<?php wp_footer(); ?>
</body>
</html>    
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

       
               <section class="footer_co1">
                <div class="sidebar">
                        <?php dynamic_sidebar( 'footer_1' ); ?>
                </div>
                </section> 
                <section class="footer_co2">
                <div class="sidebar">
                        <?php dynamic_sidebar( 'footer_2' ); ?>
                </div>
                </section> 
                <section class="footer_co3">
                <div class="sidebar">
                        <?php dynamic_sidebar( 'footer_3' ); ?>
                </div>
                </section> 
        
                            
</footer>
        <?php wp_footer(); ?>
        
</body>
</html>    
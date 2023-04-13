<?php
/**
 * template part gabarit categorie-galerie permet d'afficher la galerie de cet article. 
 * Cet article contient uniquement une galerie 
 *   
 */
?>

<article class="blocflex__galerie">
    <?php the_content();//le contenu  ?>
    <p class="reference">
    <a><?php the_field('reference');?></a>
    </p>
    <p class="roulette">
    <?php the_field('roulette');?>
    </p>

</article>
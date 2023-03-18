<?php
/**
 * template part gabarit categorie-cours permet d'afficher un article bloc 
 * qui s'intégre dans la liste des cours qu'accède avec category/cours
 *   
 */ $titre =get_the_title(); //cherche le titre
    $sigle = substr($titre, 0, 7); //plus précis on a juste retiré 7 caractère du sigle
    $titre_long = substr($titre, 7, -5);//plus précis on a juste retiré 5 caractère
    $duree = substr($titre, strpos($titre, '('));//faire ca par moi le nombre d'heure pour chacun des cours
?>

<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre_long; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree; ?></h6>
</article>
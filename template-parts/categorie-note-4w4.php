<?php
/**
 * template part gabarit categorie-note-4w4 permet d'afficher un article bloc 
 * qui s'intégre dans la liste des cours qu'accède avec category/note-4w4
 *   
 */
$titre = get_the_title();
//retirer le premier du titre d'article de catégorie note-4w4
//if(substr($titre,0,1) == '0'){}...
?>

<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) // réduit les mots?></p>
</article>
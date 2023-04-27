<?php
/**
 * template part gabarit categorie-note-4w4 permet d'afficher un article bloc 
 * qui s'intégre dans la liste des cours qu'accède avec category/note-4w4
 *   
 */
$titre = get_the_title();
if(substr($titre,0,1)== '0'){
    $titre =substr($titre,1);
}
//retirer le premier du titre d'article de catégorie note-4w4
//if(substr($titre,0,1) == '0'){}...
?>

<article class="blocflex__article">
    <figure class="blocflex__figure">
    <?php
    $id_premiere_image = 0;
    if (has_post_thumbnail())  {
        the_post_thumbnail('thumbnail');
    }
    else{
        echo get_the_post_thumbnail(34, "thumbnail");
    }
     
     ?>
     </figure>
     <?php echo get_the_ID() ?>
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15, " ... ") // réduit les mots?></p>
</article>

<?php 
// the excerpt() // echo le résumé du post 
// the_content // echo le contenu complet du post
?>
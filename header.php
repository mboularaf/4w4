<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>mon 4W4</title>
    
    <?php wp_head(); ?>
</head>
<?php
//$category = get_the_category();
//$firstCategory = $category[0]->cat_name;
//echo '<h1>'.  $firstCategory  .'</h1>';
$nouvel_class="";
 if (is_front_page() or is_404() or !(is_category('cours') or is_category('note-4w4'))) {
    $nouvel_class = "no-aside";
 }?>
<body class='custom-background site <?= $nouvel_class ?> '>
<header class="site__entete">
        <section class="entete__nav">
            <?php the_custom_logo(); ?> 
            <div class="menu__recherche">
            <input type="checkbox" id="chkburger">
                <?php  wp_nav_menu(array( 
                                "menu" => "entete",
                                "container" => "nav",
                                "container_class" => "menu__entete"

                            )); ?>
                            
                <?= get_search_form(); ?>  
                
                <label class="burger" for="chkburger">
                    <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000" width="32" height="32"></button>
                </label>
                </div>         
        </section>
        <h1 class="site__titre"><a  href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
       
</header>
<?php 
if (! is_front_page() && ! is_404() &&  (is_category('cours') or is_category('note-4w4'))){
    get_template_part("template-parts/aside"); 
}
/*if (is_page_template('template-parts/template-atelier.php')) {
    get_template_part('template-parts/aside-atelier')
}
*/


?>
    
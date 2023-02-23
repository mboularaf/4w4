<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon 4w4</title>
    
    

    <?php wp_head();?>
</head>
<body>
    <header class="site__entete">
        <section class="entete__nav">
            <?php the_custom_logo();?>
            
            <div class="navi">
            <?php wp_nav_menu(array(
                            "menu"=> "entete",
                            "container" => "nav",
                            "container_class" => "menu__entete"
        
                        ));?>
            <?=get_search_form();?>
            </div>
        </section>
        <h1 class="site__titre"><a  href = "<?= bloginfo('url');?>"><?= bloginfo('name');?> </a></h1>
        <h2 class="site__description"><?= bloginfo('description');?></h2>
    </header>
    
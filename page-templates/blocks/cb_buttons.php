<?php
$theme = get_field('theme') == 'Light' ? 'pb-5' : 'has-grey-background-color py-5';
?>
<section class="buttons <?=$theme?>">
    <div class="container-xl">
        <?php
        if(get_field('title')) {
            ?>
        <h2 class="mb-4 text-center"><?=get_field('title')?></h2>
            <?php
        }
        if(get_field('intro')) {
            ?>
        <div class="text-center mw-md-75 mb-4"><?=get_field('intro')?></div>
            <?php
        }
        ?>
        <div class="d-flex flex-wrap justify-content-center gap-4">
        <?php
        foreach (get_field('links') as $l) {
            $link = get_the_permalink( $l );
            $title = get_the_title( $l );
            ?>
        <a href="<?=$link?>" class="btn btn-primary"><?=$title?></a>
            <?php
        }
        ?>
        </div>
    </div>
</section>
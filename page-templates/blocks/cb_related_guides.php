<!-- latest_guides -->
<section class="related_guides">
    <div class="has-grey-background-color">
        <div class="container-xl pt-5 pb-4">
            <h2 class="mb-4 text-center">Related <span>Guides</span></h2>
        </div>
    </div>
    <div class="bg-grey--half pb-5">
        <div class="container-xl">
            <div class="row g-4 mb-4">
                <?php
                $cats = get_field('category');
                $q = new WP_Query(array(
                    'posts_per_page' => 4,
                    'cat' => $cats
                ));
                while ($q->have_posts()) {
                    $q->the_post();
                    ?>
            <div class="col-md-6 col-xl-3">
                <a class="blog_card" href="<?=get_the_permalink($q->ID)?>">
                    <img src="<?=get_the_post_thumbnail_url($q->ID,'large')?>" alt="" class="blog_card__image">
                    <div class="blog_card__content">
                        <h3 class="blog_card__title"><?=get_the_title($q->ID)?></h3>
                    </div>
                </a>
            </div>
                    <?php
                }
                ?>
            </div>
            <div class="text-center"><a href="/guides/" class="btn btn--accent">View All Guides</a></div>
        </div>
    </div>
</section>
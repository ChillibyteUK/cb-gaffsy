<section class="bg-grey--half py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            ?>
        <h2 class="text-center pb-5"><?=get_field('title')?></h2>
            <?php
        }
        ?>
        <div class="row mx-0 mb-5 g-5 g-lg-4">
            <div class="col-lg-4">
                <div class="step_card card" data-aos="fade-up">
                    <div class="card__step" data-aos="zoom-in" data-aos-delay="250">
                        <p>1</p>
                    </div>
                    <div class="card__icon"><img src="<?=wp_get_attachment_image_url(get_field('icon_1'),'full')?>" width=120 height=80></div>
                    <div class="card__title">
                        <h3><?=get_field('title_1')?>
                        </h3>
                    </div>
                    <div class="card__content">
                        <?=get_field('content_1')?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                <div class="step_card card">
                    <div class="card__step" data-aos="zoom-in" data-aos-delay="400">
                        <p>2</p>
                    </div>
                    <div class="card__icon"><img src="<?=wp_get_attachment_image_url(get_field('icon_2'),'full')?>" width=120 height=80></div>
                    <div class="card__title">
                        <h3><?=get_field('title_2')?>
                        </h3>
                    </div>
                    <div class="card__content">
                        <?=get_field('content_2')?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="step_card card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card__step" data-aos="zoom-in" data-aos-delay="550">
                        <p>3</p>
                    </div>
                    <div class="card__icon"><img src="<?=wp_get_attachment_image_url(get_field('icon_3'),'full')?>" width=120 height=80></div>
                    <div class="card__title">
                        <h3><?=get_field('title_3')?>
                        </h3>
                    </div>
                    <div class="card__content">
                        <?=get_field('content_3')?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (get_field('cta')) {
            $cta = get_field('cta');
            ?>
        <div class="text-center">
            <a href="<?=$cta['url']?>"
                target="<?=$cta['target']?>"
                class="btn btn--accent"><?=$cta['title']?></a>
        </div>
        <?php
        }
                        ?>
    </div>
</section>
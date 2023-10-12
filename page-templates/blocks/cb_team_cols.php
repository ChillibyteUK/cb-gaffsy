<section class="team_cols">
    <div class="container-xl py-5">
        <h2><?=get_field('title')?></h2>
        <div class="row g-4 justify-content-center">
            <?php
            while(have_rows('members')) {
                the_row();
                ?>
            <div class="col-lg-6">
                <div class="team_cols__img">
                    <img src="<?=wp_get_attachment_image_url(get_sub_field('image'),'full')?>">
                </div>
                <div class="team_cols__name"><?=get_sub_field('name')?></div>
                <div class="team_cols__role"><?=get_sub_field('role')?></div>
                <div class="team_cols__bio"><?=get_sub_field('bio')?></div>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
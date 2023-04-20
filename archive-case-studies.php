<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<main id="main">
<!-- hero -->
<main id="main">
<header class="hero hero--short">
    <div class="hero_bg" style="background-image: url(/wp-content/uploads/2023/01/hero-home.jpg)"></div>
    <div class="container-xl">
        <h1>Read our <span>Case Studies</span></h1>
        <div class="mw-md-75 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam architecto ad, dolore amet temporibus obcaecati voluptatibus ducimus velit possimus dignissimos!</div>
    </div>
</header>
<div class="container-xl pb-5">
    <div class="row gx-4 gy-2 mb-4">
        <div class="col-lg-4 filters">
            <?php
        $terms = get_terms(
            array(
                'taxonomy'   => 'cstypes',
                'hide_empty' => true,
                'order' => 'DESC',
            )
        );
            ?>
            <select class="filters-select form-select" value-group="cstype">
                <option value="" disabled selected>Filter by type</option>
                <option value="*">Show all</option>
                <?php
                foreach ($terms as $term) {
                    echo '<option value=".' . $term->slug . '">' . $term->name . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-12">
            <div class="status">
                <div class="count"><span class="filter-count"></span> items found.</div>
            </div>
        </div>
    </div>
    <div class="row w-100" id="grid">
        <?php
    while (have_posts()) {
        the_post();
        $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
        if (!$img) {
            $img = get_stylesheet_directory_uri() . '/img/default.png';
        }
        $types = get_the_terms($post->ID, 'cstype');
        $type = wp_list_pluck($types, 'name');
        $catclass .= ' ' . implode(' ', array_map('cbslugify', $type));
        $the_date = get_the_date('jS F, Y');
        ?>
        <div class="<?=$catclass?> caseStudy col-12 col-lg-4 mb-4">
            <a href="<?=get_the_permalink()?>">
                <div class="post-image-container">
                    <div class="post-image mb-2"
                        style="background-image:url('<?=$img?>')">
                        <div class="img-overlay">
                            <div class="middle"><span class="arrow arrow-block arrow-white"></span></div>
                        </div>
                    </div>
                    <div class="flash"><?=$flash?></div>
                </div>
                <div class="article-title mt-2">
                    <?=get_the_title()?>
                </div>
                <div class="article-excerpt">
                    <?=wp_trim_words(get_the_content(), 20)?>
                </div>
                <div class="fw-bold py-2 arrow-link">
                    <div class="anim-arrow--slide">Read more <span class="arrow arrow-green"></span></div>
                </div>
            </a>
        </div>
        <?php
    }
    ?>
    </div>
</div>
</main>
<?php
add_action('wp_footer', function () {
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    (function($) {

        var $filterCount = $('.filter-count');

        // init Isotope
        var $grid = $('#grid').isotope({
            itemSelector: '.caseStudy'
        });
        // store filter for each group
        var filters = {};

        $('.filters').on( 'change', function( event ) {
            console.log('changed');
            var $select = $( event.target );
            // get group key
            var filterGroup = $select.attr('value-group');
            // set filter for group
            filters[ filterGroup ] = event.target.value;
            // combine filters
            var filterValue = concatValues( filters );
            // set filter for Isotope
            $grid.isotope({ filter: filterValue });
            updateFilterCount();
        });

        // flatten object by concatting values
        function concatValues( obj ) {
            var value = '';
            for ( var prop in obj ) {
                value += obj[ prop ];
            }
            console.log(value);
            return value;
        }
        var iso = $grid.data('isotope');

        function updateFilterCount() {
            $filterCount.text(iso.filteredItems.length);
        }
        updateFilterCount();

    })(jQuery);
</script>
<?php
}, 9999);

get_footer();
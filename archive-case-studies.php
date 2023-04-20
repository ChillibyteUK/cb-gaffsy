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

echo '<select class="filters-select form-select" value-group="cstype">';
echo '<option value="" disabled selected>Filter by type</option>';

echo '<option value="*">Show all</option>';

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

</div>
</main>
<?php
get_footer();
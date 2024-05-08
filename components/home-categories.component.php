<?php
$args = array(
    'orderby' => 'name', // Order by category name
    'order' => 'ASC',    // Order direction
    'parent' => 0,
    'hide_empty' => 0,
);

$categories = get_categories($args);
shuffle ( $categories );
?>



<h1 class="categories__title">Categories </h1>
<ul class="categories__buttons">

    <div class="swiper" id="homeCategoriesSwiper">
        <ul class="swiper-wrapper">
            <?php
            foreach ($categories as $category) {
                // Skip "uncategorized" category
                if ($category->slug === 'uncategorized') {
                    continue;
                }
                if ($category->slug === 'cover') {
                    continue;
                }

                $category_link = get_category_link($category->term_id);
            ?>
                <li class="swiper-slide">
                        <?php   
                                $category_image_url = get_term_meta($category->term_id, 'category_image', true);
                                $category_image_style = '';
                                if ($category_image_url) {
                                    $category_image_style ="".
                                    "background: linear-gradient(
                                        to right,
                                        rgba(0, 0, 0, 0.65),
                                        rgba(0, 0, 0, 0.25)
                                    ),
                                    url('".esc_url($category_image_url)."');".
                                    "background-size: cover;".
                                    "background-position: center center;";
                                }
                        ?>
                    <div class="categories__button" style="<?php echo $category_image_style; ?>">
                        <a class="category__link" href="<?php echo esc_url($category_link); ?>">
                            <h1 class="category__title">
                                <?php echo esc_html($category->name); ?>
                            </h1>
                        </a>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
        <div class="swiper-pagination"></div>
    </div>

</ul>



<script type="module" defer>
    var $homeCategoriesSwiper = new Swiper("#homeCategoriesSwiper", {
        slidesPerView: 4,
        spaceBetween: 50,
        loop: true
    });
</script>
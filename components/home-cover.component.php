<?php
    $args = array(
        'category_name' => 'cover', //Category Slug name
        'posts_per_page' => 5  // Number Of Post,Use -1 For All Post related This category
    );
    $coversPost = get_posts( $args );

    function get_random_post_photo(){
        $base = get_template_directory_uri(). '/images/bg-photos/';
        $images = array(
            'bg1.jpg',
            'bg2.jpg',
            'bg3.jpg',
            'bg4.jpg',
            'bg5.jpg'
        );
        // Generate a random index
        $random_index = rand(0, count($images) - 1);
        // Get the random image URL
        $random_image = $base . $images[$random_index];
        return array( 0 => $random_image );
    }
    // post-title="<?php the_title();  post-index="<?php echo $index;
?>

<div class="container upper">
    <!-- shadow -->
    <div class="swiper mySwiper" id="homeCoverSwiper">
        <div class="swiper-wrapper">
            <?php
            foreach ($coversPost as $index => $post) : setup_postdata($post); 
            ?>
            
                <div class="swiper-slide"
                post-id="<?php echo $post->ID; ?>"
                post-index="<?php echo $index; ?>"
                post-title="<?php the_title(); ?>"
                >
                    <?php if (has_post_thumbnail($post->ID)) : ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                    <?php else: $image = get_random_post_photo(); ?>
                    <?php endif; ?>
                    <div class="cover" style="
                        background: linear-gradient(
                            to right,
                            rgba(0, 0, 0, 0.5),
                            rgba(0, 0, 0, 0.05)
                        ),
                        url('<?php echo $image[0]; ?>');
                        background-size: cover;
                        background-position: center center;
                        ">
                        <div class="cover__container">


                            <?php
                                $post_tags = get_the_tags();

                                    echo '<ul class="cover__tags">';
                                    if ($post_tags) {
                                        foreach ($post_tags as $tag) {
                                            $tag_link = get_tag_link($tag); // Get the tag link
                                            $tag_name = $tag->name; // Get the tag name

                                            echo '<li class="cover__tag">';
                                            // Output the tag link within a button element
                                            echo '<a href="' . esc_url($tag_link) . '" class="category__button tag__button--main">' . esc_html($tag_name) . '</a>';
                                            echo '</li>';
                                        }
                                    }
                                    echo '</ul>';
                            ?>

                            <h2 class="cover__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <h3 class="cover__subtitle">
                                <div class="subtitle__link">
                                    <a href="<?php the_permalink(); ?>">
                                            <div class="link__icon"> <span>➜</span> </div>
                                            <div class="link__text"> <span>Read Post</span> </div>
                                    </a>
                                </div>
                                <?php
                                    // Get the reading time custom field value
                                    $reading_time = get_post_meta(get_the_ID(), 'reading_time', true);
                                    // Check if the reading time value is not empty
                                    if (!empty($reading_time)) {
                                        // Output the reading time
                                        echo '<div class="subtitle__time">';
                                            echo '<img class="time__icon" src="" alt"">';
                                            echo '<div class="time__label"><span>' . $reading_time . ' min</span></div>';
                                        echo '</div>';
                                    }
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <div class="swiper-pagination-wrapper">
             <div class="swiper-pagination-overlay"></div>
             <div class="swiper-pagination"></div>
        </div>
    </div>

</div>

<script type="module" defer>
    var $homeCoverSwiper = new Swiper("#homeCoverSwiper", {
        loop: true,
        //effect: "fade",
        autoplay: {
            delay: 20000,
            disableOnInteraction: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                const el = document.querySelector('[post-index="'+index+'"]');
                const title = el.getAttribute('post-title');
                console.log( ' title ')
                console.log(title)
                return '<div class="swiper-pagination__label ' + className + '">' +
                            '<div class="swiper-pagination__counter"> <span>' + (index + 1) + '</span></div>' +
                            '<div class="swiper-pagination__title">' +  title + '</div>' +
                        '</div>';
            },
        },
    });
</script>
<?php
    $coversPost = get_posts(get_cat_ID("Cover"));
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
                    <div class="cover" style="background-image: url('<?php echo $image[0]; ?>')">
                        <div class="cover__container">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
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
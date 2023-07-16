<?php get_header(); ?>

<body>
    <div class="container">
        <div class="item">
            <div class="sngl-testi">
                <div class="testi-user-box">
                    <div class="image-box">
                        <img width="20%" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0]; ?>" alt="client image">
                    </div>
                    <div class="text-box">
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_content(); ?></p>
                        <p><?php the_excerpt(); ?></p>
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
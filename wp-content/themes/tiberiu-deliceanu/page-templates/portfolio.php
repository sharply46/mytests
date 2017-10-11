<?php // Template Name: Portfolio ?>

<?php get_header(); ?>


<section id="portfolio">

    <div class="posts-navbar">

        <?php
            $terms = get_terms(
                array(
                'taxonomy' => 'portfolio_category',
                'hide_empty' => true,
                )
            );
        ?>

            <span data-filter="*">All</span>
        <?php foreach($terms as $term) : ?>
            <span data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></span>
        <?php endforeach; ?>

    </div>



    <div class="thumbs">

        <?php
            $args = array( 'post_type' => '_portfolio', 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>

            <?php $term = get_the_terms($post->ID,'portfolio_category'); ?>
            <div class="thumb <?php echo $term[0]->slug; ?>">
                <div class="thumb-container">
                    <?php
                    the_post_thumbnail('thumb-custom' , $attr = array(
                        'class' => "lazyload",
                    ));
                    ?>
                </div>
                <div class="thumb-footer">
                    <h3 class="thumb-button thumb-category"><?php echo $term[0]->name; ?></h3>
                    <h3 class="thumb-button thumb-title"><?php the_title(); ?></h3>
                </div>
            </div>

        <?php
            endwhile;
        ?>

    </div>

</section>

<?php get_footer(); ?>

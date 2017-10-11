<?php // Template Name: Design ?>

<?php get_header(); ?>


<section id="design">

    <!--<div class="posts-navbar">-->
    <!---->
    <!--    --><?php
    //    $terms = get_terms(
    //        array(
    //            'taxonomy' => 'design_category',
    //            'hide_empty' => true,
    //        )
    //    );
    //    ?>
    <!---->
    <!--    <span data-filter="*">All</span>-->
    <!--    --><?php //foreach($terms as $term) : ?>
    <!--        <span data-filter=".--><?php //echo $term->slug; ?><!--">--><?php //echo $term->name; ?><!--</span>-->
    <!--    --><?php //endforeach; ?>
    <!---->
    <!--</div>-->



    <div class="thumbs">

        <?php
        $args = array( 'post_type' => '_design', 'posts_per_page' => -1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            ?>

            <?php $term = get_the_terms($post->ID,'design_category'); ?>
            <div class="thumb <?php echo $term[0]->slug; ?>">
                <?php
                the_post_thumbnail('medium' , $attr = array(
                    'class' => "lazyload",
                ));
                ?>
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

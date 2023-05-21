<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package roralex
 */

if ( is_single() ) : ?>
<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item format-image ' );?>>

    <div class="wrapper">
        <div class="main-heading">
            <h2><?php the_title();?>
            </h2>
        </div>

        <!-- blog meta -->
        <div class="mb-20"><?php get_template_part( 'template-parts/blog/blog-meta' ); ?></div>


        <?php if ( has_post_thumbnail() ): ?>
        <div class="postbox__thumb mb-30">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </div>
        <?php endif;?>

        <div class="postbox__content">

            <div class="postbox__text">
                <?php the_content();?>
                <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'roralex' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
            </div>
            <div class="ts-blog-details-tag"><?php print roralex_get_tag();?></div>


        </div>
    </div>

</article>
<?php else: ?>



<article id="post-<?php the_ID();?>" <?php post_class( 'format-image' );?>>

    <div class="wrapper">
        <div class="blog-items">

            <?php if ( has_post_thumbnail() ): ?>
            <div class="main-img">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                </a>
            </div>
            <?php endif; ?>





            <div class="main-heading">

                <a href="<?php the_permalink();?>">
                    <h2><?php the_title();?></h2>
                </a>
            </div>
            <!-- blog meta -->
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

            <div class="inner-section">
                <p><?php the_excerpt();?></p>

            </div>

            <!-- blog btn -->
            <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>

        </div>
    </div>


</article>





<?php endif;?>
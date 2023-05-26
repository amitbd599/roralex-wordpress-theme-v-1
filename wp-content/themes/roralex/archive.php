<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package roralex
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

?>

<section class="blog-group-version-one blog-details-version-one bg-white pt-80 pb-140">
    <div class="container ">
        <div class="row">
            <div class="col-lg-<?php print esc_attr( $blog_column );?> blog-post-items blog-padding">
                <div class="postbox__wrapper">
                    <div class="left-side">
                        <?php
						if ( have_posts() ):
    					if ( is_home() && !is_front_page() ):
    				?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title();?></h1>
                        </header>
                        <?php
						endif;?>
                        <?php
						/* Start the Loop */
						while ( have_posts() ): the_post(); ?>
                        <?php
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_format() );?>
                        <?php
							endwhile;
						?>





                        <div class="basic-pagination mb-40 pagination ">
                            <?php roralex_pagination( '<i class="fa-light fa-angles-left"></i>', '<i class="fa-light fa-angles-right"></i>', '', ['class' => ''] );?>
                        </div>
                        <?php
						else:
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>

                    </div>
                </div>
            </div>

            <?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
            <div class="col-lg-4">
                <div class="blog__sidebar">
                    <?php get_sidebar();?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>
<?php
get_footer();
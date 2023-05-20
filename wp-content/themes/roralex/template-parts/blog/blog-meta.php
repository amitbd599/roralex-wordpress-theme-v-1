<?php

/**
 * Template part for displaying post meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package roralex
 */

$categories = get_the_terms( $post->ID, 'category' );
$roralex_blog_date = get_theme_mod( 'roralex_blog_date', true );
$roralex_blog_comments = get_theme_mod( 'roralex_blog_comments', true );
$roralex_blog_author = get_theme_mod( 'roralex_blog_author', true );
$roralex_blog_cat = get_theme_mod( 'roralex_blog_cat', false );

?>



<div class="admin-intro">
    <?php if ( !empty($roralex_blog_author) ): ?>
    <div class="name">
        <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><span><i
                    class="fa-solid fa-user"></i></span>
            <span><?php print get_the_author();?></span></a>

    </div>
    <?php endif;?>

    <?php if ( !empty($roralex_blog_cat) ): ?>
    <?php if ( !empty( $categories[0]->name ) ): ?>

    <div class="date">
        <a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>">
            <span><i class="fa-solid fa-folder"></i></span>
            <span><?php echo esc_html($categories[0]->name); ?></span></a>

    </div>
    <?php endif;?>
    <?php endif;?>

    <?php if ( !empty($roralex_blog_date) ): ?>
    <div class="date">
        <span><i class="fa-solid fa-timer"></i></span>
        <span><?php the_time( get_option('date_format') ); ?></span>
    </div>
    <?php endif;?>

    <?php if ( !empty($roralex_blog_comments) ): ?>
    <div class="comment">
        <a href="<?php comments_link();?>">
            <span><i class="fa-solid fa-comment"></i></span>
            <span><?php comments_number();?> </span></a>

    </div>
    <?php endif;?>
</div>
<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package roralex
 */

$roralex_blog_btn = get_theme_mod( 'roralex_blog_btn', 'Read More' );
$roralex_blog_btn_switch = get_theme_mod( 'roralex_blog_btn_switch', true );

?>

<?php if ( !empty( $roralex_blog_btn_switch ) ): ?>


<div class="main-btn">
    <a href="<?php the_permalink();?>">

        <span class="btn-shape">
            <?php print esc_html( $roralex_blog_btn );?>
        </span>


    </a>
</div>
<?php endif;?>
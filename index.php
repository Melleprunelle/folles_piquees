<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


    <div id="content" class="site-content">
        <div id="columns" class="columns">
        <?php if(have_posts()) :
        $counter=0;
        while(have_posts() && $counter<9) : the_post();
        $counter++; 
        ?>

            <div class="post">
                <?php the_post_thumbnail(array(325));?>
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            </div>
            <?php endwhile; ?>
        </div>
        </div>
        <?php
    // Previous/next page navigation.
			the_posts_pagination( array(
                'post_type'              => 'post',
				'prev_text'          => __( 'Previous', 'twentyfifteen' ),
				'next_text'          => __( 'Next', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'twentyfifteen' ) . ' </span>',
			) );
    // If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );
?>
            <?php endif; ?>
    </div>

    <?php get_footer(); ?>
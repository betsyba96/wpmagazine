<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package purea-magazine
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="blog-post">
            <div class="image">
            	<a href="<?php echo esc_url( get_permalink()); ?>" rel="bookmark">
	                <?php
	                    if ( has_post_thumbnail()) {
	                        the_post_thumbnail('full');
	                    }
	                ?>
	            </a>
            </div>
            <div class="content">
                <h5 class="entry-title">
                    <?php
                        if ( is_sticky() && is_home() ) :
                            echo "<i class='fas fa-thumbtack'></i>";
                        endif;
                    ?>
                    <a href="<?php echo esc_url( get_permalink()); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h5>
            </div>
            <div class="meta">
                <?php
                    $postedon = esc_html(get_theme_mod( 'purea_magazine_single_post_posted_on_text', esc_html__('Posted on','purea-magazine'))).': ';
                    $postedby = esc_html(get_theme_mod( 'purea_magazine_single_post_posted_by_text', esc_html__('Posted by','purea-magazine'))).': ';
                    $comments = esc_html(get_theme_mod( 'purea_magazine_single_post_comments_text', esc_html__('Comments','purea-magazine'))).': ';
                ?>
                <span class="meta-item"><i class="fas fa-clock"></i><?php echo $postedon ?><?php the_time(get_option('date_format')) ?></span>
                <span class="meta-item"><i class="fas fa-user"></i><?php echo $postedby ?><a class="author-post-url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author() ?></a></span>
                <span class="meta-item"><i class="fas fa-comments"></i><?php echo $comments ?><a class="post-comments-url" href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%'); ?></a></span>
            </div>
            
        </div>
    </article>
    
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
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="featured-hero" style="background-image:url('<?php the_field("blog-header-image", "option"); ?>');">
</div>
<div class="main-wrap" role="main">
	<article class="main-content">
		<div class="news">

				<?php //Run Loop on Posts Tagged News
				$args = array(
				'post_type'      => 'post',
				'orderby'        => 'date',
				'order'          => 'ASC',
				);
				$posts_array = get_posts( $args ); ?>
				<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
				<div class="columns large-4">
					<a href="<?php the_permalink(); ?>">
					<div class="card">
						<?php //grabbing all content
						$image = get_the_post_thumbnail_url();
						?>
						<?php if( !empty($image) ): ?>
						<div class="post-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" >
						</div>

						<?php else: ?>

						<div class="post-image" style="background-image:url('<?php the_field("blog-fallback-image", "option"); ?>');">
						</div>

						<?php endif; ?>
						<div class="author-bar">
							<?php
								the_date();
								echo " by ";
								the_author();
							?>
						</div>
						<div class="content">
							<h4 class="title"><?php  the_title();?></h4>
							<div class="description"><?php  the_excerpt(); ?></div>
						</div>
					</div>
				</a>
				</div>
			<?php endforeach;
			wp_reset_postdata(); ?>

		</div>
	</article>
	<?php get_sidebar(); ?>
</div>

<?php get_footer();

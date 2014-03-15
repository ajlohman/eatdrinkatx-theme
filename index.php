<?php get_header(); ?>

			

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-- start article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
		<div class="container-fluid">
			<div class="row">
				<header class="article-header">
					<div class="col-sm-12">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<?php printf( __( '<p>By <span class="author">%3$s</span>  &#8226; <time class="updated" datetime="%1$s" pubdate>%2$s</time></p> 
						                   <p>Published in %4$s</p>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));?>
					</div>
				</header>
			</div>
		</div>

		<section class="entry-content clearfix">
			<?php the_content(); ?>
		</section>

		<!-- Tags
		<footer class="article-footer">
			<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>
		</footer> -->

		<?php // comments_template(); // uncomment if you want to use them ?>

	</article>
	<!-- end article -->

	<!-- start page navigation (next and previous links) 
	<?php endwhile; ?>

			<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
					<?php bones_page_navi(); ?>
			<?php } else { ?>
					<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
								<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
							</ul>
					</nav>
			<?php } ?>

	<?php else : ?> -->

	<!-- page not found -->
		<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

	<?php endif; ?>

	<!-- start sidebar 
	<?php get_sidebar(); ?> -->

	<!-- start footer -->
	<?php get_footer(); ?>

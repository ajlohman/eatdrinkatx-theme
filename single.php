<?php get_header(); ?>

			

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-- start articel -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		<div class="container-fluid">
			<div class="row">
				<header class="article-header">
					<div class="col-sm-8">
						<p class="category"><?php printf( __( '%4$s', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));?></p>
						<h1 itemprop="headline"><?php the_title(); ?></h1>
					</div>
								
					<div class="col-sm-4 vcard">
						<p class="author">
						<?php printf( __( 'by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));?>
						<!-- <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));?> -->
						</p>
						<p>
							<?php comments_number( 'no comments', 'one comment', '% comments' ); ?>
							<span class="slash">/</span>
							<?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));?>
						</p>
					</div>
				</header>
			</div>
		</div>

		<section class="entry-content clearfix" itemprop="articleBody">
			<?php the_content(); ?>
		</section>

		<footer class="article-footer">
			<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
		</footer>

		<?php comments_template(); ?>

	</article>

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

	<!-- start sidebar -->
	<?php get_sidebar(); ?>

	<!-- start footer -->
	<?php get_footer(); ?>


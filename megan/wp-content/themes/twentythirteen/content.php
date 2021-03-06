<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="article-content">
		<div class="article-background">	
			<header class="entry-header">
				<!-- <ul class="entry-header"> -->
					<!--
					<li>
						<div class="article-date">
							<span class="month"><?php the_time('n') ?></span><span>.</span><span class="day"><?php the_time('j') ?></span><span class="year"><?php the_time('Y') ?></span>
						</div>
					</li>
					-->
					<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
					<!-- <li> -->			
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<!-- </li> -->
					<?php endif; ?>
			
					<?php if ( is_single() ) : ?>
					<!-- <li> -->
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<!-- </li> -->
					<?php else : ?>
					<!-- <li> -->
						<h1 class="entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h1>
					<!-- </li> -->
					<?php endif; // is_single() ?>
				<!-- </ul> -->
	
				<div class="entry-meta">
					<?php twentythirteen_entry_meta(); ?>
					<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					<?php if ( comments_open() && ! is_single() ) : ?>
							<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?></span>
					<?php endif; // comments_open() ?>			
				</div>
	
				<!-- .entry-meta -->
				
				<?php if ( is_single() ) : ?>
						<div class="social">
							<ul class="social">
								<li class="social--fb"><div id="fb-root"></div><div class="fb-share-button" data-href="<?php the_permalink() ?>" data-type="button_count"></div></li>
								<li class="social--twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a></li>
								<li class="social--google"><div class="g-plusone" data-href="<?php the_permalink() ?>"></div></li>
								<li class="social--email"><a href="mailto:dachille@gmail.com?subject=<?php the_title(); ?>" target="_top"></a></li>
							</ul>
						</div>
				<?php endif; ?>
				
			</header><!-- .entry-header -->
		
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			</div><!-- .entry-content -->
			<?php endif; ?>
		
			<footer class="entry-meta">
				<!--
				<?php if ( comments_open() && ! is_single() ) : ?>
					<div class="comments-link">
						<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
					</div>
				 <?php endif; // comments_open() ?>
				 -->
				<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
					<?php get_template_part( 'author-bio' ); ?>
				<?php endif; ?>
			</footer><!-- .entry-meta -->
		</div>
	</div>
	
</article><!-- #post -->

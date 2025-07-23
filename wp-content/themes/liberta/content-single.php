<?php

/**
 * The template for displaying content in the single.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php
		if ('post' === get_post_type()) {
		?>
        <div class="entry-meta">
            <?php liberta_global_article_posted_on(); ?>
        </div><!-- /.entry-meta -->
        <?php
		}
		?>
    </header><!-- /.entry-header -->
    <div class="entry-content">
        <?php
		if (has_post_thumbnail()) {
			echo '<div class="post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>';
		}

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'liberta-global') . '</span>',
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- /.entry-content -->

    <?php if (!is_single()): ?>
    <footer class="entry-meta">
        <hr>
        <?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list(__(', ', 'liberta-global'));

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list('', __(', ', 'liberta-global'));
			if ('' !== $tag_list) {
				$utility_text = __('This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'liberta-global');
			} elseif ('' !== $category_list) {
				$utility_text = __('This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'liberta-global');
			} else {
				$utility_text = __('This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'liberta-global');
			}

			printf(
				$utility_text,
				$category_list,
				$tag_list,
				esc_url(get_permalink()),
				the_title_attribute(array('echo' => false)),
				get_the_author(),
				esc_url(get_author_posts_url((int) get_the_author_meta('ID')))
			);
			?>
        <hr>
        <?php
			get_template_part('author', 'bio');
			?>
    </footer><!-- /.entry-meta -->
    <?php endif; ?>
</article><!-- /#post-<?php the_ID(); ?> -->
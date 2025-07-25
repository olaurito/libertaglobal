<?php
// If Single or Archive (Category, Tag, Author or a Date based page).
if (is_single() || is_archive()) :
?>
</div><!-- /.col -->

<?php
	get_sidebar();
	?>

</div><!-- /.row -->
<?php
endif;
?>
</main><!-- /#main -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 footer">
                <img src="<?= esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>"
                    alt="<?php bloginfo('name'); ?> Logo" class="d-td-none me-2">
            </div>
            <div class="col-md-6 footer">
                <?php
		if (has_nav_menu('footer-menu')) : // See function register_nav_menus() in functions.php
				/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
				wp_nav_menu(
					array(
						'container'       => 'nav',
						'container_class' => '',
						//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
						'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
						'theme_location'  => 'footer-menu',
						'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
					)
				);
			endif; ?>
            </div>
            <div class="col-md-6">
                <p>2601 S Bayshore Drive, Suite 1200 - Miami, FL 33133</p>
            </div>

            <div class="col-md-6">
                <p><?php printf(esc_html__('Liberta Global &copy; %1$s %2$s. Todos os direitos reservados.', 'liberta-global'), wp_date('Y'), get_bloginfo('name', 'display')); ?>
                </p>
            </div>

            <?php

		if (is_active_sidebar('third_widget_area')) :
		?>
            <div class="col-md-12">
                <?php
				dynamic_sidebar('third_widget_area');

				if (current_user_can('manage_options')) :
				?>
                <span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>"
                        class="badge bg-secondary"><?php esc_html_e('Edit', 'liberta-global'); ?></a></span>
                <!-- Show Edit Widget link -->
                <?php
				endif;
				?>
            </div>
            <?php
		endif;
		?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /#footer -->
</div><!-- /#wrapper -->
<?php
wp_footer();
?>
</body>

</html>
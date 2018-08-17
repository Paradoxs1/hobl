<?php ?>

    <p class="article-title"><?php esc_html_e( 'Извините, но по Вашему запросу ничего не найдено', 'hobl' ); ?></p>

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Готовы опубликовать свой первый пост? <a href="%1$s">Начать здесь</a>.', 'hobl' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'К сожалению, ничего не найдено. Пожалуйста, попытайтесь снова с другими ключевыми словами.', 'hobl' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'Кажется, мы не можем найти то, что вы ищете. Возможно, поиск может помочь.', 'hobl' ); ?></p>
			<?php
				get_search_form();

		endif; ?>

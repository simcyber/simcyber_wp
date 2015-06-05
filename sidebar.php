			<div class="siderbar">
				<ul>
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
				<?php _e(’Categories’); ?>
					<ul>
					<?php wp_list_cats(); ?> 
					</ul>
				<?php endif; ?>
				</ul>
			</div>
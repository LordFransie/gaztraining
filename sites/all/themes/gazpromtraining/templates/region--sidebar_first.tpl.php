<aside<?php print $attributes; ?>>
	<?php print render($branding); ?>
		<div<?php print $content_attributes; ?>>
			<div class="logo-img">
				<?php
					if (theme_get_setting('toggle_logo')) {
						$image = array(
							'path' => theme_get_setting('logo'),
							'alt' => 'my logo',
						);
						$img = theme('image', $image); 
						$url = variable_get('site_frontpage');
						print l($img, $url, array('attributes' => array('class' => array('logo-img')), 'html' => true));
					}
				?>
			</div>     
	<?php print $content; ?>
	</div>
</aside>
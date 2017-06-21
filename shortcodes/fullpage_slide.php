<?php

function acn_fullpage_slide_sc( $atts, $content ) {
	$at = shortcode_atts([
		"unique_name" => "fullpage"
	], $atts);

	ob_start();
	?>
		<div class="section" style="background: url(http://acninternational.org/wp-content/uploads/2017/06/CoverOk.jpg)">
			<?php echo do_shortcode($content) ?>
		</div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'acn_fullpage_slide', 'acn_fullpage_slide_sc' );
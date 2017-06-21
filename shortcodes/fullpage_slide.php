<?php

function acn_fullpage_slide_sc( $atts ) {
	$at = shortcode_atts([
		"unique_name" => "fullpage"
	], $atts);

	ob_start();
	?>
		<div class="section">
			<?php echo do_shortcode($content) ?>
		</div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'acn_fullpage_slide', 'acn_fullpage_slide_sc' );
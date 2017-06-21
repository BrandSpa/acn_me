<?php

function acn_fullpage_sc( $atts ) {
	$at = shortcode_atts([
		"unique_name" => "fullpage"
	], $atts);

	ob_start();
	?>
		<div id="<?php echo $at['unique_name'] ?>">
			<?php echo do_shortcode($content) ?>
		</div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'acn_fullpage', 'acn_fullpage_sc' );
<?php
/*
Plugin Name: Snowstorm!
Description: 'Tis the Season!
Version:     0.1
Author:      Kenneth Reitz
Plugin URI:  http://kennethreitz.com
Author URI:  http://kennethreitz.com

Dude, it's snowing!

*/

function get_file($filename) {
	// Prints out a file... simple enough
	return file_get_contents(get_template_directory().'/'.$filename);
}

function jb_head_meta() { ?>
	<script type="text/javascript" charset="utf-8">
		<?php echo get_file('lib'.DS.'snowstorm.js') ?>
	</script>
<?php	 }

add_action( 'wp_head', 'add_snowstorm' );

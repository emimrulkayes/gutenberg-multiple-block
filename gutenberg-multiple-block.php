<?php
/**
 * Plugin Name:       Gutenberg Multiple Block
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-multiple-block
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function gutenberg_multiple_block_gutenberg_multiple_block_block_init() {
	
	register_block_type( __DIR__ . './src/blocks/first-block' );
	register_block_type( __DIR__ . './src/blocks/scound-block' );

}
add_action( 'init', 'gutenberg_multiple_block_gutenberg_multiple_block_block_init' );

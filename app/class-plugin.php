<?php

namespace Engelpunt\KVK\App;

/**
 * Class Admin
 *
 * @package Engelpunt\KVK\app
 */
class Plugin {

	/**
	 * Load the translations for the plugin.
	 *
	 * @return void
	 */
	public static function load_textdomain() {
		load_plugin_textdomain( ENGELPUNT_KVK_SLUG, false, plugin_basename( ENGELPUNT_KVK_DIR ) . '/languages/' );
	}

	/**
	 * Run on plugin activation.
	 *
	 * @param string $plugin Path to the plugin file relative to the plugins directory.
	 * @param bool   $network_wide Whether to enable the plugin for all sites in the network or just the current site.
	 *
	 * @return void
	 */
	public static function activate( $plugin, $network_wide = false ) {
		// update_option.
	}

	/**
	 * Run on plugin deactivation. Only disable & remove temp data.
	 *
	 * @param bool $network_deactivating Is this deactivation network wide.
	 *
	 * @return void
	 */
	public static function deactivate( $network_deactivating = false ) {
		// delete_option.
	}

	/**
	 * Run when the plugin is uninstalled. Remove all traces of this plugin.
	 *
	 * @return void
	 */
	public static function uninstall() {
		// delete_option.
	}
}


<?php
/**
 * This file  defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       yapapaya.com
 * @since      1.0.0
 *
 * @package    Product_Cpt_Addon
 * @subpackage Product_Cpt_Addon/includes
 * @author     Sheeba <sheeba@isheeba.com>
 */

class Product_Addon {

	/**
	 * Define the core functionality of the plugin.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->load_dependencies();
		$this->create_product();
	}

	/**
	 * load all the actions and hooks that will be required for the plugin to function properly
	 *
	 * @return NULL
	 */
	private function load_dependencies() {

	}

	/**
	 * Create the product CPT
	 *
	 * @return NULL
	 */
	private function create_product() {

	}
}

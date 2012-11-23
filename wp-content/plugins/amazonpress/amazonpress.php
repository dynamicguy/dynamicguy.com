<?php
/*
Plugin Name: AmazonPress
Plugin URI: http://wordpress.org/extend/plugins/amazonpress/
Description: Automatically advertise related products from Amazon.com and Amazon partner sites (DE,JP,FR,CA), showing products specifically related to the topic of your posts. Easily add product related content based on category or tags and make extra money in the process. Amazon API required. 从亚马逊自动广告合作伙伴网站（美国， 署署长，太平绅士，阻燃，CA）的显示产品，具体涉及到的相关帖子主题产品。轻松添加额外的内容类别或标签上的产品为基础，并在这个过程中多余的钱。亚马逊API的要求。
Version: 9.0.1 
Author:  Tom Makela (Added: DE,FR,CA,JP), Original author - Warkior
Author URI: http://cj7.co.uk/amazonpress-free-wp-plugin/
Requires: WordPress Version 2.3 and PHP 5.x
****************************************
This was Amazonfeed 2.0.1, now forked as AmazonPress starting from ver 9.0.1
Improved by: Tom Makela - http://cj7.co.uk/
Version - 9.01 -  includes all Amazon partner sites .com, Canada, Germany, Japan and France
Updates and this download can be found at: http://cj7.co.uk/amazonpress-free-wp-plugin/
Original source -  http://www.warkensoft.com/php-downloads/amazonfeed-wordpress-plugin/
Warkior, if you can code a snippet that makes the tip feature to share it 50/50 for 2 developers, I happily include you in this fork.
*/

	// Include the class once if it doesn't exist.
	include_once("php/amazonpress.class.php");

	// Create an instance of the class once, if it doesn't exist.
	if(class_exists("AmazonPress") AND !isset($amazonPressObj))
	{
		// Instantiate new instance of the class.
		$amazonPressObj = new AmazonPress();
		
		/*
		 * Debugging Controls:
		 * Only change these if the plugin is not working properly for you and you want
		 * to try and find out why.
		 * 
		 * debug_mode: choose what level of debugging to use
		 *   options are:
		 *   off 	- nothing is sent to the log
		 *   basic	- basic messages are logged
		 *   all		- all possible debug messages are logged.
		 * 
		 * debug_visible: set this to true if you wish debugging messages to be
		 * visible on the live website as they occur.
		 *   options are:
		 *   true
		 *   false
		 *  
		 */
		$amazonPressObj->debug_mode = 'off';
		$amazonPressObj->debug_visible = false;
		
		/**
		 * You shouldn't need to edit anything beyond this point.
		 */
		 
		// Define variables for AmazonPress
		$amazonPressObj->basePath = dirname(__FILE__);
		$amazonPressObj->baseFileName = basename(__FILE__);
		$amazonPressObj->urlPath = get_option('siteurl') . str_replace(ABSPATH, "/", $amazonPressObj->basePath);

		// Add hooks as necessary to connect to WordPress
		add_action('admin_menu', array(&$amazonPressObj, 'wp_admin_init'));
		add_action('admin_menu', array(&$amazonPressObj, 'add_custom_box'));
		add_action('admin_notices', array(&$amazonPressObj, 'wp_admin_notices'));

		add_action('save_post',  array(&$amazonPressObj, 'save_postdata'));
		add_action('edit_post',  array(&$amazonPressObj, 'save_postdata'));
		add_action('publish_post',  array(&$amazonPressObj, 'save_postdata'));

		add_action('wp_head', array(&$amazonPressObj, 'wp_head'));
		add_action('admin_head', array(&$amazonPressObj, 'admin_head'));

		add_action('widgets_init', array(&$amazonPressObj, 'widget_init'));
		
		register_deactivation_hook( __FILE__, array(&$amazonPressObj, 'unInstall') );
		

		// Only add actions to the posts and live blog if the object is live (meaning ready to go)
		if($amazonPressObj->live)
		{
			add_action('the_content', array(&$amazonPressObj, 'wp_content'));
		}
	}
	
	
<?php
/*
Plugin Name: Anonymize Log 
Plugin URI: https://github.com/fenuz/yourls-anonymize-log
Description: This plugin removes the IP and User Agent from the log table.
Version: 1.0
Author: Frank Matheron
Author URI: https://github.com/fenuz
*/

function anonymize_log_return_empty_string($value) {
  return '';
}

yourls_add_filter('get_IP', 'anonymize_log_return_empty_string'); 
yourls_add_filter('get_user_agent', 'anonymize_log_return_empty_string'); 

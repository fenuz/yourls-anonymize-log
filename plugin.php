<?php
/*
Plugin Name: Anonymize Log 
Plugin URI: http://www.kennisnet.nl 
Description: This plugin prevents logging the IP and User Agent
Version: 1.0
Author: Frank Matheron <frankmatheron@gmail.com>
Author URI: https://github.com/fenuz
*/

function anonymize_log_return_empty_string($value) {
  return '';
}

yourls_add_filter('get_IP', 'anonymize_log_return_empty_string'); 
yourls_add_filter('get_user_agent', 'anonymize_log_return_empty_string'); 

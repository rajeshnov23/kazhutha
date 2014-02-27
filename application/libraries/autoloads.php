<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autoloads {

    public $CI;

    public function __construct() {

	$CI = & get_instance();
	$CI->load->helper(array('url', 'form', 'html'));
	$CI->load->library(array('session', 'form_validation'));
//	$CI->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">', '</div>');
    }

}

?>

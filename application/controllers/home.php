<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
var $regions;
    function __construct() {

        parent::__construct();
        $this->load->library(array('autoloads'));

    }

    public function index() {
        $this->template->title('home', 'Kazhutha');
        $this->template->build('welcome_message'); // application/views/layouts/two_col.php
    }
    public function kazhutha() {
        $this->template->title('home', 'Kazhutha');
	$this->template->set_layout('common');
        $this->template->build('kazhutha_view'); // application/views/layouts/two_col.php
    }
	public function test()
{

}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
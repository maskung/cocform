<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home controller - realete with the main page
 *
 * This file is main controll of main page dtkwebsite project
 * @author Suphanut Thanyaboon <suphanut@gmail.com>
 * @version 0.0.1
 *
 */

class Home extends Base_controller {


	function index() {

			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');

	}


}

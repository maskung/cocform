<?php

/*******
 * base controller - user for monitor, log, session manipulating, etc.
 * @author : suphanut thanyaboon
 *
 */

class Base_controller extends CI_Controller {

    // controller name
    var $name = "Base_controller";

    // if set measurement on  can mesure the working speed
    protected $is_measure = true;

    /**
     * beforeFilter
     */
    function _before_filter() {

        if (IS_DEBUG == true && $this->is_measure == true) {

            $this->time_start = microtime(true);
        }

        $title = "";
        if (isset($this->uri->segments[1])) {

            $title = $this->uri->segments[1];
        }

        if (isset($this->uri->segments[2])) {

            $title .= "/" . $this->uri->segments[2];
        }

        //if are in debug mode
        if (IS_DEBUG == true) {

            cake_log("\r\n #{$title}----------------------------------------------------------------","sql");
        }

        $this->rParams = $title;
    }

   /**
    * afterFilter
    */
    function _after_filter() {

        //if are in debug mode
        if (IS_DEBUG == true && $this->is_measure == true) {

            $time_end = microtime(true);
                $time = $time_end - $this->time_start;
                cake_log("■■ความเร็ว" . substr($time, 0, 6), "access");
        }

    }

    function __construct() {

        parent::__construct();

        cake_log("START-----------------------------------------------------------------------------------------------------", "access");
        $this->_before_filter();

        $uri = $_SERVER["REQUEST_URI"];

        cake_log($_SERVER["REQUEST_URI"], "access");

        if($_SERVER["REQUEST_METHOD"] != "POST"){
            cake_log("GET----------", "access");
            cake_log($_GET, "access");

        } else {
            cake_log("POST----------", "access");
            cake_log($_POST, "access");
        }

		// grab session
		cake_log("SESSION----------","access");
		cake_log($_SESSION,"access");

        $this->_after_filter();

        cake_log("END-----------------------------------------------------------------------------------------------------", "access");
  }

}

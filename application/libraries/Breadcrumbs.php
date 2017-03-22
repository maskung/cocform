<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/***
 * Class Breadcrumbs : create breadcrumbs 
 */

class Breadcrumbs {

    // breadcrumb configurateion

    private $breadcrumbs = array();
    private $separator = '&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>';
    //private $start = '<div id="breadcrumb">';
    private $start = ''; 
    private $end = ' </ol> 
                    <div class="clearfix">
                         </div>
                 </div>';


    public function __construct($params = array()) {
        if (count($params) > 0){
            $this->initialize($params);
        } 
    }


    // initialization if put the configuration on class used
    private function initialize($params = array()) {
        // if user put parameter to class
        if (count($params) > 0) {
            foreach ($params as $key => $val) {
                if (isset($this->{'_' . $key})) {
                    $this->{'_' . $key} = $val;
                }
            }
        }
    }


    /***
     * add : add a breadcrumb entity 
     * @title : title word
     * @href : link to related URL
     ***/
    function add($title, $href){ 
        if (!$title OR !$href) return;
            $this->breadcrumbs[] = array('title' => $title, 'href' => $href);
    }

    /***
     * add : create bread crumb string
     * return : breadcrumb string
     ***/

    function output() {
        if ($this->breadcrumbs) {
            $output = ''; //$this->start;
            foreach ($this->breadcrumbs as $key => $crumb) {

            if ($key){ 
                $output .= $this->separator;
            }
            $ak = array_keys($this->breadcrumbs);
            if (end($ak) == $key) {
                $output .= '<li class="active">' . $crumb['title'] . '</li>'; 
                $this->start = '<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">             
                <div class="page-title">'.$crumb['title'].'</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                ';
            } else {
                $output .= '<li><i class="fa fa-home"></i>&nbsp;<a href="' . $crumb['href'] . '">' . $crumb['title'] . '</a>';
            }
        }

        return $this->start.$output . $this->end . PHP_EOL;
    }

  

  return '';

  }


}

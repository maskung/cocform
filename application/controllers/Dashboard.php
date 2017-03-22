<?php
/**
 * Dashboard controller - show user statistic, summary of system
 *
 *
 * @author Suphanut Thanyaboon <suphanut@gmail.com>
 * @version 0.0.2
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_controller  {

public function __construct(){
    parent::__construct();
    $this->load->library('breadcrumbs');
 	//$this->load->model("influencer");
	$this->load->model("M_register");
	$this->load->model("admin/Age");
	$this->load->model("admin/Da_TIN_influencer");

    //if session lange is not here set to default

}
/* check if user login
 *
 */
private function check_isvalidated()
{

    // if user has login session return true
    if(isset($_SESSION['admin_name']))
    {
        return true;
    }
    else
    {
        return false;
    }
}
/**
  * index page show on default
  */

public function index() {

	if ($this->check_isvalidated() == true)
    {
        redirect('/Dashboard/dashboard');
    }
    else
    {
        $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Pless login!</div>');
        redirect('adm/login_form');

    }
}

public function dashboard() {

    // set admin default language to japanese
    if(isset($_SESSION['language'])) {
    } else {
        $_SESSION['language'] = "japanese";
    }

    //set menu highlight
    $data['menu_order'] = 1;

    // find the amount of member in the system
    $data['inf_amount'] = $this->M_register->getAmountAll();

    //Breadcrumb setting
    $this->breadcrumbs->add('Home', base_url().'dashboard');
    $this->breadcrumbs->add('Dashboard', base_url().'index');

    //if user login
    if ($this->check_isvalidated() == true){
    	$data['title'] = "DTK AD | Dashboard";

        $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');
        $data['header_scripts'] = array('/assets/admin/script/jplist.js');

        $data['footer_scripts'] = array();

        $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
	    $this->load->view('adm/header',$data);
	    $this->load->view('adm/dashboard',$data);
	    $this->load->view('adm/footer',$data);
    }
    //if user no login
    else
    {
        $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Pless login!</div>');
        redirect('/adm/login_form');
    }

   }

public function age() {

    //set menu highlight
    $data['menu_order'] = 2;

    //Breadcrumb setting
    $this->breadcrumbs->add('Home', base_url().'dashboard');
    $this->breadcrumbs->add('Age', base_url().'age');

	//age 10-18 years
	$data['female10'] = $this->M_register->female10()->amount;

	//age 19-25 years
	$data['female19'] = $this->M_register->female19()->amount;

	//age 26-30 years
	$data['female26'] = $this->M_register->female26()->amount;

	//age 31-35 years
	$data['female31'] = $this->M_register->female31()->amount;

	//age 36-40 years
	$data['female36'] = $this->M_register->female36()->amount;

	//age 40 years up
	$data['female40'] = $this->M_register->female40()->amount;

    // find the amount of influencer in the system

	//do_dump($data,'data');
	//if user login
    if ($this->check_isvalidated() == true){
		$data['title'] = "Sex Dashboard";
	    $this->load->view('adm/header',$data);
	    $this->load->view('adm/age',$data);
	    $this->load->view('adm/footer',$data);
    //if user no login
	}
    else
    {
        $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Pless login!</div>');
        redirect('/adm/login_form');
    }
}

public function follower() {

    // find the amount of influencer in the system

	$data['title'] = "Follower Dashboard";

    //Breadcrumb setting
    $this->breadcrumbs->add('Home', base_url().'dashboard');
    $this->breadcrumbs->add('Follower', base_url().'follower');

    $this->load->model("Influencer");
    $this->load->model("Ranges");
    //grab number of influencer

    $overalls = $this->Influencer->getOverallFollower();

    //do_dump($overalls,'overall');
    $key_range = $this->Ranges->getRanges();

    //data preparing for instagram
    $followers = array();
    foreach ($key_range as $range) {
        $followers[$range->range] = 0;

    }

    $likes = array();
    foreach ($key_range as $range) {
        $likes[$range->range] = 0;

    }

    //data preparing for facebook
    $rangess= array();
    foreach ($key_range as $range) {
        $ranges[$range->range] = array('min' => $range->min,'max' => $range->max);

    }

    //do_dump($ranges,'ranges'); die;

    /*$ranges = array( "10k - 49k" => array( 'min' => 10000, 'max' => 49999),
					 "50k - 99k" => array('min' => 50000, 'max' => 99999),
					 "100k - 199k" => array( 'min' => 100000, 'max' => 199999),
					"200k - 299k" => array( 'min' => 200000, 'max' => 299999),
				    "300k - 399k" => array( 'min' => 300000, 'max' => 399999),
					"400k - 499k" => array( 'min' => 400000, 'max' => 499999),
					"500k - 799k" => array('min' => 500000, 'max' => 799999),
				    "800k - 999k" => array( 'min' => 800000, 'max' => 999999),
				    "1M - 2M" => array( 'min' => 1000000, 'max' => 1999999),
				    "2M+"  => array( 'min' => 2000000, 'max' => 10000000000),
	);

     */

    //collect influencer range by followed
    foreach ($overalls as $overall) {
        foreach ($ranges as $key => $range) {
            if($overall->followed >= $range['min'] && $overall->followed <= $range['max']) {
                $followers[$key]++;
                break;
            }

        }
    }

    //collect influencer range by  likes
    foreach ($overalls as $overall) {
        foreach ($ranges as $key => $range) {
            if($overall->likes >= $range['min'] && $overall->likes <= $range['max']) {
                $likes[$key]++;
                break;
            }

        }
    }


    $data['followers'] = $followers;
    $data['likes'] = $likes;

    //if user login
    if ($this->check_isvalidated() == true){
	    $this->load->view('adm/header',$data);
	    $this->load->view('adm/follower',$data);
	    $this->load->view('adm/footer',$data);
	}
    //if user no login
    else
    {
        $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Pless login!</div>');
        redirect('/adm/login_form');
    }
}

public function occupation() {

    //Breadcrumb setting
    $this->breadcrumbs->add('Home', base_url().'dashboard');
    $this->breadcrumbs->add('Occupation', base_url().'occupation');

	$influ = $this->influencer->get_influ();
	$occupation = $this->Occupation->getAll();

	//count occupation type
	$occupy=array();
	foreach($occupation as $occ){
		$occupy[$occ->type]=0;
	}


	//create value
	$idOcc = array();
	foreach($occupation as $occ){
		$idOcc[$occ->type] = $occ->id_occ;
	}


	foreach($influ as $flu){
		$occ = decodeBinaryDigit($flu->occupation); //ᵡ????Ţ ???????????? ?????????Ţ???ú?ҧ
		foreach ($occupation as $id) {
			if (in_array($id->id_occ,$occ)) { //in_array = check val in array
				if($idOcc[$id->type]== $id->id_occ){
					$occupy[$id->type]++;
				}

			}
			//do_dump($idOcc[$data->type],$flu->fb_id);
		}

	}
	//do_dump($occupy);
	$data['occupation'] = $occupy;
	//if user login
    if ($this->check_isvalidated() == true){
	$data['title'] = "Occupation Dashboard";
    $this->load->view('adm/header',$data);
    $this->load->view('adm/occupation',$data);
    $this->load->view('adm/footer',$data);
   	}
    //if user no login
    else
    {
        $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Pless login!</div>');
        redirect('/adm/login_form');
    }
}

}

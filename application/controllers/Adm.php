<?php
/**
 * Adm controller - realete with the main page
 *
 * This file is main controll of main page LadyFirst project
 * @author Suphanut Thanyaboon <suphanut@gmail.com>
 * @version 0.0.1
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends Base_controller {

    var $name_array = array();

    public function __construct(){
        parent::__construct();
        $this->load->model("admin/Da_TIN_influencer");
        $this->load->library('export');
        $this->load->model("M_area");
        $this->load->model("M_tag");
        $this->load->model("T_media");
        $this->load->model("T_shop");
        $this->load->model("T_shopinformation");
        $this->load->model("Contact_form");
        $this->load->model("admin/Set_slide");
        $this->load->library("breadcrumbs");

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
            redirect('/Dashboard/index');
        }
        else
        {

            redirect('adm/login_form');

        }
    }

    public function login_form()
    {
        // set page title
        $data['title'] = "DTK AD | ADMIN ISTATION";
        $this->load->view('adm/login_form',$data);
    }
    public function login()
    {
        //get the posted values
        $data = array(
            $admin_name = $this->input->post("admin_name"),
            $admin_password = $this->input->post("admin_password"),
        );

        //set validations
        $this->form_validation->set_rules("admin_name", "Username", "trim|required");
        $this->form_validation->set_rules("admin_password", "Password", "trim|required");
        $this->form_validation->set_message("required","กรุณากรอกข้อมูล %s");

        // if form login is null
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Something Error!!!</div>');
            $data['title'] = "LadyFirst | Administrator";
            $this->load->view('adm/login_form',$data);
        }
        // if form login is not null
        else
        {
            //check if username and password is correct
            $usr_result = $this->Da_TIN_influencer->get_user($admin_name, $admin_password);
           // do_dump ($usr_result); die;
            if ($usr_result > 0) //active user record is present
            {
                //set the session variables
                $sessiondata = array(
                    'admin_name' => $admin_name,
                    'loginuser' => TRUE
                );
                // Add user data in session
             $this->session->set_userdata($sessiondata);
             $this->Da_TIN_influencer->set_active_user($admin_name, $admin_password);
//$ddd = $this->session->set_userdata('admin_name');
             //echo $ddd; die;
                redirect('/Dashboard/index');


            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                redirect('/Dashboard/index');
            }

        }

    }

    // Logout from admin page
    public function logout()
    {
        $sess_array = array
        (
            'admin_name' ,
            'loginuser'
        );
        // removing session data
        $this->session->unset_userdata($sess_array);
        $this->session->sess_destroy();
        $this->Da_TIN_influencer->set_noactive_user();
        redirect('/adm/index');

    }

    //page show  all influencers data
    public function influencer()
    {
        /* Bread crum */
        /*$this->breadcrumbs->add('Home', base_url(). "/admin/influencer");
        $data['breadcrumb'] = $this->breadcrumbs->output();  */
        //Breadcrumb setting
        $this->breadcrumbs->add('Home', base_url().'dashboard');
        $this->breadcrumbs->add('Influencer', base_url().'/adm/influencer');

        //count all num row in influencer
        $numrows =$this->db->count_all("influencer");
        //pagination section
        $config["base_url"] = base_url() . "/adm/influencer";
        $config["total_rows"] = $numrows;
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        //$config["num_links"] = floor($choice);
        $config["num_links"] = 6;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['page_query_string'] = TRUE;
        $this->pagination->initialize($config);

        //$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['page'] = isset($_GET['per_page'])?$_GET['per_page']:0;

        //call the model function to get the department data
        $data['customer'] = $this->Da_TIN_influencer->get_department_list($config["per_page"], $data['page']);

        //$this->db->limit($config['per_page'], $this->uri->segment(3));
        $data['pagination'] = $this->pagination->create_links();
        // get all data occupation data
        $occupations = $this->Occupation->getAll();
        // get all data personality data
        $personalitys = $this->Personality->getAll();

        // send to view
        $data['occupations'] = $occupations;
        $data['personalitys'] = $personalitys;

        //call the model function getSumFollower data
        $data['sumfollower'] = $this->Da_TIN_influencer->getSumFollower();

        //if user login
        if ($this->check_isvalidated() == true)
        {
            //push data to show in table
            if(!empty($data['customer']))
            {
                $data['title'] = "LadyFirst | ADMIN ISTATION";
                $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
                $this->load->view('adm/header',$data);
                $this->load->view('adm/influencer',$data);
                $this->load->view('adm/footer');
            }
            else
            {
                $this->session->set_flashdata('msg2', '<div class="alert alert-danger text-center">NO profile influencer</div>');
                $data['title'] = "LadyFirst | ADMIN ISTATION";
                $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
                $this->load->view('adm/header',$data);
                $this->load->view('adm/influencer',$data);
                $this->load->view('adm/footer');

            }
        }
        //if user no login
        else
        {
            $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Pleas login!</div>');
            redirect('adm/login_form');
        }
    }
    //jquery autocomplete
    public function jsearch()
    {
        $term = $this->input->get('term');
        $resultss = $this->Da_TIN_influencer->search($term);
        $result  = array();
        foreach ($resultss as $results) {
            $n = array( "label" =>  $results->name, "value" => $results->name);
            $n2 = array( "label" =>  $results->firstname, "value" => $results->firstname );
            $n3 = array( "label" =>  $results->lastname, "value" => $results->lastname );
            if(strpos(strtoupper($results->name),strtoupper($term)) !== FALSE)
            {
                array_push($result, $n );
            }
            if(strpos(strtoupper($results->firstname),strtoupper($term)) !== FALSE)
            {
                array_push($result, $n2 );
            }
            if(strpos(strtoupper($results->lastname),strtoupper($term)) !== FALSE)
            {
                array_push($result, $n3 );
            }
        }
        echo json_encode( $result );
    }
    //if user search data
    public function search_keyword()
    {
        //Breadcrumb setting
        $this->breadcrumbs->add('Home', base_url().'dashboard');
        $this->breadcrumbs->add('Search', base_url().'/adm/search_view');
        $keyword = $this->input->post('search');
        //get data search
        if ($this->check_isvalidated() == true)
        {
            if(isset($keyword))
            {
                // get all data occupation data
                $occupations = $this->Occupation->getAll();
                // get all data personality data
                $personalitys = $this->Personality->getAll();

                //do_dump($occupations,'occupations'); die;
                // send to view
                $data['occupations'] = $occupations;
                $data['personalitys'] = $personalitys;

                //encode occupation data
                if (isset($_POST['occupation'])) {
                    $occ_data=encodeBinaryDigit($_POST['occupation']);
                }
                //encode personality data
                if (isset($_POST['personality'])) {
                    $per_data=encodeBinaryDigit($_POST['personality']);
                }
                $data['results'] = $this->Da_TIN_influencer->search($keyword);


                //push data to show in table
                if(empty($data['results'])) {
                    $this->session->set_flashdata('msg3', '<div class="alert alert-danger text-center">NO name influencer</div>');
                }
                $data['title'] = "LadyFirst | ADMIN ISTATION";
                $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
                $this->load->view('/adm/header',$data);
                $this->load->view('/adm/search_view',$data);
                $this->load->view('/adm/footer');

            }
        }
        //if user no login
        else
        {
            $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Please login!</div>');
            redirect('adm/login_form');
        }
    }
    //up load image
    public function uploadimage()
    {
        $config = array();
            $config['upload_path'] = './profile_images';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['max_width']  = '0';
            $config['max_height']  = '0';

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());

                print_r($error); exit;
            }
            return $this->upload->data();
    }

    //if user search data
    public function links_keyword()
    {
        //Breadcrumb setting
        $this->breadcrumbs->add('Home', base_url().'dashboard');
        $this->breadcrumbs->add('Profile', base_url().'/adm/links_view');
        $links = $this->input->get('links');

        //sent to model
        $data['results'] = $this->Da_TIN_influencer->show_one($links);

        //get data search
        if ($this->check_isvalidated() == true)
        {
            if(isset($links))
            {

                $data['title'] = "LadyFirst | ADMINISTATION";
                $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
                $this->load->view('/adm/header',$data);
                $this->load->view('/adm/links_view',$data);
                $this->load->view('/adm/footer');

            }
        }
        //if user no login
        else
        {
            $this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Please login!</div>');
            redirect('adm/login_form');
        }
    }

        /**
        * add place page - administrator add the place data to system
        * this compose of input many form some should be validate before save to the databases
        */
        public function addmedia() {

            //set menu hilight
            $data['menu_order'] = 4;

            $data['title'] = "DTK AD | Add Blog";

            //load media category model
            $this->load->model('admin/M_admcategory');

            // load all media cate
            $data['category'] = $this->M_admcategory->getAll(1);

            // load all area of bangkok
            $data['areas'] = $this->M_area->getAll();

            //load company catetory
            $types = array();
            //$types = $this->Company_Type->getAll();
            $data['types'] = $types;

            // load all tags
            $data['tags'] = $this->M_tag->getAll();


            // display
            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/addmedia',$data);
            $this->load->view('adm/footer');

        }



        /**
        * addm - add media action
        * this grap data from post form and validate then save to database
        */
        public function addm() {

            //do_dump($_POST,'POST');
            //prepare multiple subcategory

            //$subcate_ids = implode(',',$this->input->post('subcategory_ids'));

            //prepare multiple tag
            $tags = implode(',',$this->input->post('tag'));
            $admin_id = $this->Da_TIN_influencer->get_active_user();
            foreach ($admin_id as $key) {
                $adm_id = $key->admin_id;
            }

            //get data from FORM
            $form_data = array(
                'title_english'     => $this->input->post('title_english'),
                'title_japanese'    => $this->input->post('title_japanese'),
                'title_thai'        => $this->input->post('title_thai'),
                'admin_id'          => $adm_id,
                'short_desc_english'=> $this->input->post('short_desc_english'),
                'short_desc_japanese'=> $this->input->post('short_desc_japanese'),
                'short_desc_thai'   => $this->input->post('short_desc_thai'),
                'small_picture'     => '',
                'big_picture'       => '',
                'tag'               => $tags,
                'category_id'       => $this->input->post('category_id'),
                'short_desc'        => $this->input->post('short_desc'),
                'content_english'   => $this->input->post('content_english'),
                'content_japanese'  => $this->input->post('content_japanese'),
                'content_thai'      => $this->input->post('content_thai'),
                'likes'             => '',
                'slug'              => $this->input->post('slug'),
                'meta-des'          => $this->input->post('meta-des'),
                'keyword'           => $this->input->post('keyword')
            );
            //do_dump ($form_data); die;
            // check if user set the media to ads
            if (isset($_POST['isads'])) {
                $form_data['is_ads'] = 1;
            } else {
                $form_data['is_ads'] = 0;
            }

            // check if user set the add no index to media
            if (isset($_POST['isnoindex'])) {
                $form_data['is_noindex'] = 1;
            } else {
                $form_data['is_noindex'] = 0;
            }

            //validate data

            //upload image
            $this->do_upload(1);

            //save to database
            $insert_id =  $this->T_media->addMedia($form_data, $this->name_array);
            $newid = $this->T_media->getOneByTitle($form_data['title_english']);
            foreach ($newid as $key) {
                $this->T_media->insert_M_url($key->id);
            }

            redirect( base_url( 'adm/slugfile' ) );
        }

        /**
         * edit - load edit media form
         * get company by id and retrive all data and put to edit form
         */
         public function editmedia($id) {

            //set menu hilight
            $data['menu_order'] = 5;

            $data['title'] = "DTK AD | Edit Blog";
            $data['title_lang'] = $this->session->userdata('language');
            //load media category model
            $this->load->model('admin/M_admcategory');
            $this->load->model('admin/M_subcategory');
            $this->load->model('M_trainstation');

            //get media data by id
            $media = $this->T_media->getOneByID($id);

            //get company data by id
            $data['media'] = $media;

            // get all sub category data
            //$data['subcate'] = $this->M_subcategory->getSub($media->category_id);

            // load all media cate
            $data['category'] = $this->M_admcategory->getAll(1);

            // load all area of bangkok
            //$data['areas'] = $this->M_area->getAll();

            // load statation of coupont
            //$data['stations'] = $this->M_trainstation->getStation($media->area_id);

            // load all tags
            $data['tags'] = $this->M_tag->getAll();


            // display
            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/editmedia',$data);
            $this->load->view('adm/footer');
         }



        /**
         * edit - edit media action
         * get media by id and retrive all data and put to edit form
         */
         public function editm() {
            //do_dump($_POST,'POST');
            //do_dump($_FILES,'FILES'); die;
            //prepare multiple subcategory

            $admin_id = $this->Da_TIN_influencer->get_active_user();
            foreach ($admin_id as $key) {
                $adm_id = $key->admin_id;
            }
            //prepare multple tag
            $tags = implode(',',$this->input->post('tag'));

            //get data from FORM
            $form_data = array(
                'title_english'     => $this->input->post('title_english'),
                'title_japanese'    => $this->input->post('title_japanese'),
                'title_thai'        => $this->input->post('title_thai'),
                'admin_id'          => $adm_id,
                'short_desc_english'=> $this->input->post('short_desc_english'),
                'short_desc_japanese'=> $this->input->post('short_desc_japanese'),
                'short_desc_thai'   => $this->input->post('short_desc_thai'),
                'tag'               => $tags,
                'category_id'       => $this->input->post('category_id'),
                'startdate'         => $this->input->post('startdate'),
                'enddate'           => $this->input->post('enddate'),
                'content_english'   => $this->input->post('content_english'),
                'content_japanese'  => $this->input->post('content_japanese'),
                'content_thai'      => $this->input->post('content_thai'),
                'content_publish'   => $this->input->post('is_publish'),
                'slug'              => $this->input->post('slug'),
                'meta-des'          => $this->input->post('meta-des'),
                'keyword'           => $this->input->post('keyword')
            );

            // check if user set the media to ads
            if (isset($_POST['isads'])) {
                $form_data['is_ads'] = 1;
            } else {
                $form_data['is_ads'] = 0;
            }

            // check if user set the add no index to media
            if (isset($_POST['isnoindex'])) {
                $form_data['is_noindex'] = 1;
            } else {
                $form_data['is_noindex'] = 0;
            }

            //do_dump ($_FILES); die;
            $this->do_upload(1);
            //do_dump($this->name_array,'namearray');

            //save to database
            $this->T_media->updateMedia($form_data, $this->name_array);

            // redirect to edit again
            redirect( base_url( '/adm/slugfile/') );
         }

        /**
         * listmedia - list of all media in the system
         *
         */
        public function listmedia() {
            $data['title'] = "DTK AD| List Blog";

            //set menu hilight
            $data['menu_order'] = 5;

            //load all media
            $media = $this->T_media->getAllMedia();
            $data['media'] = $media;

            //do_dump($media,'media');
            // display
            //load custom style
            $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');

            //load custom script
            $data['header_scripts'] = array('/assets/admin/script/jplist.min.js',
                                            '/assets/admin/script/jplist.js');
            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/listmedia',$data);
            $this->load->view('adm/footer',$data);

        }

        public function delmedia($id) {

            $data['title'] = "LadyFirst | Delete Media";

            //delete media database and picture
            $this->T_media->delMedia($id);

            //got list page
            redirect('/adm/listmedia');

        }



        /**
        * do_upload - responsible for upload multiple picture ant the same time
        * default mediatype : 1 = upload media picture, 1 = upload coupon picture
        *
        */

        private  function do_upload($mediatype) {

            //do_dump($_FILES,'_FILES'); die;
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            //do_dump($cpt,'cpt');
            for($i=0; $i<$cpt; $i++) {
                    $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                    $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                    $_FILES['userfile']['size']= $files['userfile']['size'][$i];

                    if ($mediatype == 1) {
                        $this->upload->initialize($this->set_upload_options_media());
                    }
                    else if ($mediatype == 2) {
                        $this->upload->initialize($this->set_upload_options_profile());
                    }
                    else if ($mediatype == 3) {
                        $this->upload->initialize($this->set_upload_options_slide());
                    }
                    else if($mediatype == 4) {
                        $this->upload->initialize($this->set_upload_options_customer_slide());
                    }
                    else if($mediatype == 5) {
                        $this->upload->initialize($this->set_upload_options_partner_slide());
                    }

                    if ($this->upload->do_upload('userfile')) {
                        $data = $this->upload->data();
                        //do_dump($data,'data');
                        $this->name_array[$i] = $data['file_name'];

                    } else {

                        echo $this->upload->display_errors();
                    }
                    //do_dump($data,'data'); die;

            }
                    //$this->filenames= implode(',', $name_array);
                    //do_dump($this->name_array);
        }


        private  function do_upload_slide() {

            //do_dump($_FILES,'_FILES'); die;
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            //do_dump($cpt,'cpt');
            for($i=0; $i<$cpt; $i++) {
                if ($_FILES['userfile']['name'][$i]) {
                    $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                    $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                    $_FILES['userfile']['size']= $files['userfile']['size'][$i];

                    $this->upload->initialize($this->set_upload_options_slide());

                    if ($this->upload->do_upload('userfile')) {
                        $data = $this->upload->data();
                        //do_dump($data,'data');
                        $this->name_array[$i] = $data['file_name'];

                    }
                }
                    //do_dump($data,'data'); die;

            }
                    //$this->filenames= implode(',', $name_array);
                    //do_dump($this->name_array);
        }


        private function set_upload_options_media() {
            //upload an image options
            $config = array();
            $config['upload_path'] = 'assets/images/img_media/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;

            return $config;
        }

        private function set_upload_options_profile() {
            //upload an image options
            $config = array();
            $config['upload_path'] = 'assets/images/img_profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;

            return $config;
        }

        private function set_upload_options_slide() {
            //upload an image options
            $config = array();
            $config['upload_path'] = 'assets/images/img_slide/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;

            return $config;
        }

        private function set_upload_options_customer_slide() {
            //upload an image options
            $config = array();
            $config['upload_path'] = 'img_customer_slide/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;

            return $config;
        }

        private function set_upload_options_partner_slide() {
            //upload an image options
            $config = array();
            $config['upload_path'] = 'img_partner_slide/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;

            return $config;
        }

        /**
         * tagmanage - tag management system
         *
         */
        public function tagmanage() {
            $data['title'] = "DTK AD| List Tag";

            //set menu hilight
            $data['menu_order'] = 10;

            //load all media
            $media = $this->M_tag->getAll();
            $data['media'] = $media;

            //do_dump($media,'media');
            // display
            //load custom style
            $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');

            //load custom script
            $data['header_scripts'] = array('/assets/admin/script/jplist.min.js',
                                            '/assets/admin/script/jplist.js');
            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/tagmanage',$data);
            $this->load->view('adm/footer',$data);

        }

        /**
         * addtagkeyword - add a new tag in the tag system
         *
         */

        public function addtagkeyword() {
            //data preparetion
            $keyword = $this->input->post('keyword');

            //add data to database
            $this->M_tag->addKeyword($keyword);


            //got to tagmanage
            redirect('/adm/tagmanage');


        }

        /**
         * deltagkeyword - delete a tag in the tag system
         *
         */

        public function deltagkeyword($id) {

            //add data to database
            $this->M_tag->delKeyword($id);


            //got to tagmanage
            redirect('/adm/tagmanage');


        }

        /***
         * getsubcate - get all subcategory from database return in json
         *
         */
        public function getsubcate() {

            // load subcategory model
            $this->load->model('admin/M_subcategory');

            //get  category data from form
            $cate = $this->input->post('cate');

            $subcate = $this->M_subcategory->getSub($cate);

            foreach($subcate as $cate) {
                 //echo "<option value='".$cate->id_subcate."'>".$cate->subcategory."</option>";
                echo "<input type=\"checkbox\" name=\"subcategory_ids[]\" value=".$cate->id_subcate."> ".$cate->subcategory."<br>\n";
            }


        }



        /***
         * getstation - get all station by area
         *
         */
        public function getstation() {

            // load subcategory model
            $this->load->model('M_trainstation');

            //get  category data from form
            $area_id = $this->input->post('areaid');

            $stations = $this->M_trainstation->getStation($area_id);

            foreach($stations as $station) {
                 echo "<option value='".$station->id."'>".$station->name."</option>";
            }
        }

        /**
         * publishmedia - activate the media to online
         * @parameter : id - id of media
         */
        public function publishmedia($id) {

            $data['title'] = "LadyFirst | Publish Media";

            //delete media database and picture
            $this->T_media->toggleMedia($id);

            //got list page
            redirect('/adm/listmedia');

        }

        public function publishedit($id) {

            $data['title'] = "LadyFirst | Publish Media";

            //delete media database and picture
            $this->T_media->toggleMedia($id);

            //got list page
            redirect(base_url( '/adm/editmedia/'.$id ));

        }


        /**
         * publishcoupon - activate the coupon to online
         * @parameter : id - id of coupon
         */
        public function publishcoupon($id) {

            $data['title'] = "LadyFirst | Publish Media";

            //delete media database and picture
            $this->T_shop->toggleCoupon($id);

            //got list page
            redirect('/adm/listcoupon');

        }
        public function profile() {
            $data['title'] = "DTK AD | My Profile";

            //set menu hilight
            $data['menu_order'] = 11;

            //do_dump($media,'media');
            // display
            //load custom style
            $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');

            //load custom script
            $data['header_scripts'] = array('/assets/admin/script/jplist.min.js',
                                            '/assets/admin/script/jplist.js');
            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/profile',$data);
            $this->load->view('adm/footer',$data);

        }


        public function editprofile(){
            $act = $this->Da_TIN_influencer->get_active_user();
            foreach ($act as $key) {
                $id = $key->admin_id;
            }
            $data = array(
                $username = $this->input->post("username"),
                $password = $this->input->post("password"),
                $position = $this->input->post("position")

            );


            //do_dump ($_FILES); die;
            $this->do_upload(2);

            $this->Da_TIN_influencer->update_profile($username,$password,$position,$id,$this->name_array);

            redirect( base_url( 'adm' ) );
        }

        public function slugfile(){
            $get_media = $this->T_media->getAllMedia();
            $txt = array();
            $url = array();
            $count = 0;
            foreach ($get_media as $key) {
                $txt[$count] = $key->slug;
                $url[$count] = $key->url;
                $count++;
            }

            $myfile = fopen(APPPATH."cache/newroute.php","w");
            fwrite($myfile, "<?php\r\n");
            for ($i=0;$i<$count;$i++){
                $str1 = "'blog/".$txt[$i]."'";
                $str2 = "'".$url[$i]."'";
                fwrite($myfile, '$route['.$str1.'] = '.$str2.';'."\r\n");
            }
            fwrite($myfile, "?>");
            fclose($myfile);
            redirect( base_url( '/adm/listmedia' ) );
        }

        function viewcontact() {
            $data['title'] = "DTK AD | View Contact";

            //set menu hilight
            $data['menu_order'] = 9;

            //do_dump($media,'media');
            // display
            //load custom style
            $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');

            //load custom script
            $data['header_scripts'] = array('/assets/admin/script/jplist.min.js',
                                            '/assets/admin/script/jplist.js');

            $data['inform'] = $this->Contact_form->getallcontact();
            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/viewcontact',$data);
            $this->load->view('adm/footer');
        }

        function viewonecontact($id) {
            $data['title'] = "DTK AD | View Contact";

            //set menu hilight
            $data['menu_order'] = 9;

            //do_dump($media,'media');
            // display
            //load custom style
            $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');

            //load custom script
            $data['header_scripts'] = array('/assets/admin/script/jplist.min.js',
                                            '/assets/admin/script/jplist.js');

            $data['inform'] = $this->Contact_form->getContactById($id);
            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/viewonecontact',$data);
            $this->load->view('adm/footer');
        }
        function delcontact($id){
            $this->Contact_form->deleteContactById($id);
            redirect( base_url( '/adm/viewcontact' ) );
        }

        function setslide() {
            $data['title'] = "DTK AD | Slide Picture";

            //set menu hilight
            $data['menu_order'] = 8;

            //do_dump($media,'media');
            // display
            //load custom style

            $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
            $data['slide'] = $this->Set_slide->getAllSlidePicture();
            $this->load->view('adm/header',$data);
            $this->load->view('adm/setslide',$data);
            $this->load->view('adm/footer');
        }
        public function addSlideImg(){
                $form_data = array(
                    'link'      => $this->input->post('link')
                    );

                $this->do_upload(3);
                $this->Set_slide->addSlidePicture($form_data,$this->name_array);
            redirect( base_url( '/adm/setslide' ) );
        }
        public function editSlideImg($id){
                $form_data = array(
                    'link'      => $this->input->post('link')
                    );

                $this->do_upload(3);
                if ($this->name_array) {
                    $this->Set_slide->deletePicture($id);
                }
                $this->Set_slide->updateSlidePicture($form_data,$this->name_array,$id);
            redirect( base_url( '/adm/setslide' ) );
        }

        public function delSlide($id){
            $this->Set_slide->delSlidePicture($id);
            redirect( base_url( '/adm/setslide' ) );
        }

        public function exportToExcel(){
            $sql = $this->Contact_form->getAllExceptId();
            $this->export->to_excel($sql, 'Contact');
        }


        /**
         * customer - get list of all customer logo
         *
         */
         public function customer() {

             //prerare data
             $data = array();
             $data['act_user'] = array();

             //set menu hilight
             $data['menu_order'] = 11;

             //load m_customer_slide model
             $this->load->model('M_customer_slide');

             $customers = $this->M_customer_slide->getAllCustomerLogo();
             $data['customers'] = $customers;

             //load custom style
             $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');

             //load custom script
             $data['header_scripts'] = array('/assets/admin/script/jplist.min.js',
                                            '/assets/admin/script/jplist.js');

             //load logo customer view
             $data['title'] =  "customer slide management";
             $this->load->view('adm/header',$data);
             $this->load->view('adm/listcustomerlogo',$data);
             $this->load->view('adm/footer');
         }

         /**
         * add place page - administrator add the place data to system
         * this compose of input many form some should be validate before save to the databases
         */
         public function customeradd() {

             //set menu hilight
             $data['menu_order'] = 12;

             $data['title'] = "DTK AD | Add Customer";

             //load media category model
             $this->load->model('admin/M_admcategory');

             // load all media cate
             $data['category'] = $this->M_admcategory->getAll(1);

             // load all area of bangkok
             $data['areas'] = $this->M_area->getAll();

             //load company catetory
             $types = array();
             //$types = $this->Company_Type->getAll();
             $data['types'] = $types;

             // load all tags
             $data['tags'] = $this->M_tag->getAll();


             // display
             $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
             $this->load->view('adm/header',$data);
             $this->load->view('adm/addcustomerlogo',$data);
             $this->load->view('adm/footer');

         }

        /**
         * addcustomerlogoprocess - get picture from form and keep in database
         *
         */
         public function addcustomerlogoprocess() {

             //do_dump($_POST,'POST');
             //load m_customer_slide model
             $this->load->model('M_customer_slide');

             //get data from FORM
             $form_data = array(
                 'title'     => $this->input->post('title'),
                 'logo'      => '',
             );

             //upload image
             $this->do_upload(4);

             //save to database
             $insert_id =  $this->M_customer_slide->addCustomerLogo($form_data, $this->name_array);

             redirect( base_url( 'adm/customer' ) );
         }

        /**
         * delCustomerLogo - delete logo customer data
         */
        public function delcustomerslide($id) {

             //load m_customer_slide model
             $this->load->model('M_customer_slide');

            //delete media database and picture
            $this->M_customer_slide->delCustomerLogo($id);

            //got list page
            redirect('/adm/customer');

        }

        /**
         * publishcustomerslide - activate the media to online
         * @parameter : id - id of slide
         */
        public function publishcustomerslide($id) {

            //load m_customer_slide model
            $this->load->model('M_customer_slide');

            //delete media database and picture
            $this->M_customer_slide->toggleCustomerLogo($id);

            //got list page
            redirect('/adm/customer');

        }

        /**
         * customer - get list of all customer logo
         *
         */
         public function partner() {

             //prerare data
             $data = array();
             $data['act_user'] = array();

             //set menu hilight
             $data['menu_order'] = 13;

             //load m_customer_slide model
             $this->load->model('M_partner_slide');

             $partners= $this->M_partner_slide->getAllPartnerLogo();
             $data['customers'] = $partners;

             //load custom style
             $data['header_styles'] = array('/assets/admin/styles/jplist-custom.css');

             //load custom script
             $data['header_scripts'] = array('/assets/admin/script/jplist.min.js',
                                            '/assets/admin/script/jplist.js');

             //load logo customer view
             $data['title'] =  "partner slide management";
             $this->load->view('adm/header',$data);
             $this->load->view('adm/listpartnerlogo',$data);
             $this->load->view('adm/footer');
         }

         /**
         * add partner page - administrator add the place data to system
         * this compose of input many form some should be validate before save to the databases
         */
         public function partneradd() {

             //set menu hilight
             $data['menu_order'] = 14;

             $data['title'] = "DTK AD | Add Partner";

             // display
             $data['act_user'] = $this->Da_TIN_influencer->get_active_user();
             $this->load->view('adm/header',$data);
             $this->load->view('adm/addpartnerlogo',$data);
             $this->load->view('adm/footer');

         }

        /**
         * addcustomerlogoprocess - get picture from form and keep in database
         *
         */
         public function addpartnerlogoprocess() {

             //do_dump($_POST,'POST');
             //load m_customer_slide model
             $this->load->model('M_partner_slide');

             //get data from FORM
             $form_data = array(
                 'title'     => $this->input->post('title'),
                 'logo'      => '',
             );

             //upload image
             $this->do_upload(5);

             //save to database
             $insert_id =  $this->M_partner_slide->addPartnerLogo($form_data, $this->name_array);

             redirect( base_url( 'adm/partner' ) );
         }

        /**
         * delCustomerLogo - delete logo customer data
         */
        public function delpartnerslide($id) {

             //load m_customer_slide model
             $this->load->model('M_partner_slide');

            //delete media database and picture
            $this->M_partner_slide->delPartnerLogo($id);

            //got list page
            redirect('/adm/partner');

        }

        /**
         * publishcustomerslide - activate the media to online
         * @parameter : id - id of slide
         */
        public function publishpartnerlide($id) {

            //load m_customer_slide model
            $this->load->model('M_customer_slide');

            //delete media database and picture
            $this->M_partner_slide->toggleCustomerLogo($id);

            //got list page
            redirect('/adm/partner');

        }


        function changelang($string) {

        //get string from url and set language by session

        if ($string != "") {
            $this->session->set_userdata("language",$string);
            header("Location: /adm");
            exit();
        }


    }

}
?>

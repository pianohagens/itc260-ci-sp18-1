<?php
//application/controllers/Pics.php
class Pics extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');
    }

    public function index()
    {
        $pic['pics/cows'] = $this->pics_model->get_pics();
        //$this->config->set_item('title','Cows');
        $this->load->view('pics/cows/index');
    }//end of index()
    
        public function view()
    {
        $pic['pics/cows'] = $this->pics_model->get_pics();
        $this->config->set_item('title','View Cows');
        $this->config->set_item('tags','Cows');
        $this->load->view('pics/cows/view');
    }//end of view()   
}

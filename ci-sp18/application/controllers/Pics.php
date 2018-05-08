<?php
//application/controllers/Pics.php
class Pics extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');
        $this->load->helper('url_helper');//this will be visiable, might be a built in helper
        $this->config->set_item('banner','Pics Views');
        
    }//END construct()

    public function index()
    {// will show categories of picture
        
        //$data['tags'] = $this->pics_model->get_pics();
        $data['tags'] = 'Picture Categories';
        
        $this->config->set_item('tags','Pics');
        $this->load->view('pics/index', $data);
        
        //$pic['pics/cows'] = $this->pics_model->get_pics();
        //$this->config->set_item('title','Cows');        
    }//end of index()
    
        public function view($tags = NULL)
    {//will show picture for one category only
       //$data['tags'] = $this->news_model->get_pics($tags);            
            
       $data['pics'] = $this->pics_model->get_pics($tags);    
       $data['title'] = 'Picture Categories'; 
              
        $this->config->set_item('title','Pics');
        $this->load->view('pics/view', $data);
        //$this->config->set_item('title', $data['news_item']['title']);    
    }//end of view()   
}//end Pics class

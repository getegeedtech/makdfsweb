<?php
class My_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata("userid")){
            redirect(base_url());
        }
    }
}
?>
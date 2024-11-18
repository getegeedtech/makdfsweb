<?php
class Credential extends CI_Controller {
    public function index($class=null)
	{
        //echo 'hello';
        /* if($this->session->userdata("userid")){
            redirect(base_url());
        }
		$this->load->view('credential/login'); */
    }
    public function ss(){
        echo 'hello';
    }
    
    public function logout(){
        $this->session->unset_userdata("userid");
        redirect(base_url()."credential");
    }

    public function login(){
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        print_r(json_decode($jsonobj));



        /* $this->session->set_userdata("userid","1");
        redirect(base_url()); */


        // $userData=[
        //     'uid'         =>$this->input('uid'),
        //     'password'    =>$this->input('password'),
        //     'erroruid'         =>'',
        //     'errorpassword'    =>''
        // ];

        // if(empty($userData['uid'])){
        //     $userData['erroruid']="User name is required";
        // }
        // if(empty($userData['password'])){
        //     $userData['errorpassword']="Password is required";
        // }
        // if(empty($userData['erroruid']) && empty($userData['errorpassword'])){
        //     $myModel=$this->model("userModel");
        //     $myData= $myModel->login($userData['uid'],$userData['password']);
        //     if($myData){
        //         $this->setSession("userid",$myData->id);
        //         $this->redirect("");
        //     }
        //     else{
        //         $this->setFlash("msg","Invailed userid or password!");
        //         $this->redirect("account");
        //     }
        // }
        // else{
        //     $this->view("credential/login",$userData);
        // }

        
    }
}
?>
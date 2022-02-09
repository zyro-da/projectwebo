<?php 

class Home extends Controller {

    public function index(){       	
    	$data['title'] = 'Home | Depok-News';    	
        //$this->view('template/header', $data);   
        $this->view('home/index', $data);     
        //$this->view('template/footer');
    }
}

?>
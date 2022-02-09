<?php 

class Login extends Controller {

    public function __construct(){

    }

    function sqling($str) {
        $str = stripslashes($str);
	    return addslashes($str);
    }

    function escape_html($x){
        return htmlspecialchars($_REQUEST[$x], ENT_QUOTES);
    }

    public function index(){
        $data['nama'] = $this->model('User_model')->getUser();
        $data['title'] = 'Login Page';
        $this->view('login', $data);
    }

    public function ceklogin(){
        print_r($_POST);
    }

    


}
?>
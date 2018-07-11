<?php
/**
 * Father class is parent to all controllers and is used to define properties and load modules.
 *
 * @property PostsModel $posts_model
 * @property AuthorsModel $authors_model
 * @property UsersModel $users_model
 * @property CI_Loader $load
 * @property  Layout $layout
 * @property CI_Form_Validation form_validation
 * @property CI_Input $input
 * @property Navigation $navigation
 */
class Father extends CI_Controller{

    //Constructor is used in order to load the necessary models, helpers, and libraries for controllers.
    public function __construct(){
        parent::__construct();
        $this->load->model('PostsModel','posts_model');
        $this->load->model('AuthorsModel','authors_model');
        $this->load->model('UsersModel', 'users_model');
        $this->load->helper('url_helper');
        $this->load->library('Layout');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('Navigation');
    }

    //Sets values in session to default states.
    public function setSessionValuesToDefault(){
        $_SESSION['login'] = TRUE; //Resets the session value for login so that error message is removed.
    }

    public function checkLogin(){
        if(!isset($_SESSION['username'])){
            header('Location: ' . site_url('users/login'));
        }
    }


}
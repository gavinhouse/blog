<?php
/*
 * The Home controller's only function is to display the home page.
 */
require('Father.php');
session_start();
class Home extends Father{

    //Displays home page
    public function index(){

        $this->layout->set('page_title','Home Page');
        $this->layout->load('index','home');

        $this->cleanUploads();

        //session_unset();
    }

    private function cleanUploads(){

        $path = './images/uploads/';
        $files = array_diff(scandir($path), array('.', '..'));

        $this->load->helper("file");
        foreach ($files as $file) {
            if(!$this->db->get_where('posts', array('imageName' => $file))->result_array()){
                unlink($path . $file);
            }
        }
    }
}
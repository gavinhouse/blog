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

        //session_unset();
    }
}
<?php
/**
 * The Layout class is used in order to load pages and pass data to said pages.
 *
 *
 * @property CI_Loader $load
 */
class Layout{

    private $viewVars = [];

    //initialize a CI instance to use CI_Loader
    public function __construct()
    {
        $this->CI =& get_instance();
    }

    //Sets values in viewVars for use in loaded pages
    public function set($name,$value){
        $this->viewVars[$name] = $value;
    }

    //Loads a given page

    /**
     *
     *
     *
     *
     *
     * @param $pageName
     * @param $directory
     */
    public function load($pageName, $directory) {

        $this->CI->load->view($directory .'/display/header',  $this->viewVars);
        $this->CI->load->view($directory . '/' . $pageName , $this->viewVars);
        $this->CI->load->view($directory .'/display/footer',  $this->viewVars);
    }

}

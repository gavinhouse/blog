<?php
/**
 * The navigation file contains functions that aid the navbar
 *
 * @property CI_Loader $load
 * @property Icon $icon
 */
class Navigation{

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('Icon','icon');
    }

    public function link($pageName, $directory, $iconName){
        //Check to see if link corresponds to current page
        if($this->isActive(strtolower($pageName))){
            $active = 'active';
        }
        else{
            $active = FALSE;
        }

        $directory = site_url($directory); //Get URL for link

        $icon = $this->CI->icon->get($iconName); //Get link icon

        $format = '<li class="nav-item %s">';
        $format .= '<a class="nav-link" href="%s">%s %s</a>';
        $format .= '</li>';
        return sprintf($format, $active, $directory, $icon, $pageName);

    }

    private function isActive($directory){
        $controller = $this->CI->router->fetch_class();

        return ($controller === $directory) || ($controller == 'users' && $directory === 'authors');
    }

}
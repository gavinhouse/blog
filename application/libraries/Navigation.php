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

    public function link($name, $link, $iconName){
        //Check to see if link corresponds to current page
        if($this->isActive(strtolower($name))){
            $active = 'active';
        }
        else{
            $active = FALSE;
        }

        $link = site_url($link); //Get URL for link

        $icon = $this->CI->icon->get($iconName); //Get link icon

        $format = '<li class="nav-item %s">';
        $format .= '<a class="nav-link" href="%s">%s %s</a>';
        $format .= '</li>';
        return sprintf($format, $active, $link, $icon, $name);

    }

    private function isActive($name){
        $controller = $this->CI->router->fetch_class();

        return ($controller === $name) || ($controller == 'users' && $name === 'authors');
    }

}
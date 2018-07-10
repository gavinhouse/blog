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
        if($this->isActive($directory)){
            $active = ' active';
        }
        else{
            $active = FALSE;
        }

        $directory = site_url($directory); //Get URL for link

        $icon = $this->CI->icon->get($iconName); //Get link icon

        return <<<HTML
<li class="nav-item{$active}">
    <a class="nav-link" href="{$directory}">{$icon} {$pageName}</a>
</li>
HTML;
    }

    private function isActive($directory){
        $currentURI = explode('/',$_SERVER['REQUEST_URI']);
        $directory = explode('/', $directory);

        return ($currentURI[2] === $directory[0]) || ($currentURI[2] == 'users' && $directory[0] === 'authors');
    }

}
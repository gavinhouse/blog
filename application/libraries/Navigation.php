<?php
/**
 * The navigation file contains functions that aid the navbar
 *
 * @property CI_Loader $load
 */
class Navigation{


    public function link($pageName, $directory){
        if($this->isActive($directory)){
            $active = ' active';
        }
        else{
            $active = FALSE;
        }
        $directory = site_url($directory);

        return <<<HTML
<li class="nav-item{$active}">
    <a class="nav-link" href="{$directory}">{$pageName}</a>
</li>
HTML;
    }

    private function isActive($directory){
        $currentURI = explode('/',$_SERVER['REQUEST_URI']);
        $directory = explode('/', $directory);

        return ($currentURI[2] === $directory[0]) || ($currentURI[2] == 'users' && $directory[0] === 'authors');
    }

}
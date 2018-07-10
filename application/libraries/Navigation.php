<?php
/**
 * The navigation file contains functions that aid the navbar
 *
 * @property CI_Loader $load
 */
class Navigation{

    function navbarLink($pageName, $directory){
        $directory = site_url($directory);
        return <<<HTML
<li class="nav-item">
    <a class="nav-link" href="{$directory}">{$pageName}</a>
</li>
HTML;

    }


}
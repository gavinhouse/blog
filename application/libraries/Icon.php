<?php

/**
 * Class Icon adds support for displaying icons in the navbar
 */
class Icon{

    public function get($name){
        switch($name){
            case 'pen':
                return '<i class="fas fa-pen"></i>';
                break;
            case 'post':
                return '<i class="fas fa-book-open"></i>';
                break;
            case 'users':
                return '<i class="fas fa-users"></i>';
                break;
        }
    }

}
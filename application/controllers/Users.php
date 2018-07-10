<?php
/*
 * The Users controller is used in order to handle pages within the users section.
 */
session_start();
require('Father.php');
class Users extends Father{

    //Wrapper for validateCreation
    public function create(){
        $this->creationForm();
    }

    //Calls validateLogin function and sets session variables
    public function login(){

        $_SESSION['reenter_valid'] = TRUE; //Tells session whether user correctly re-entered their password
        $_SESSION['username_exists'] = FALSE; //Tells session whether a user's username of choice already exists

        $this->loginForm();
    }

    //Function returns a boolean which states whether or not a given username exists
    private function usernameExists($username)
    {

        //Gets user with specified username. If it exists, return true.
        if($this->users_model->getUser($username) != [])
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }

    //Creates a user
    private function creationForm(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_reenter', 'Password re-entry', 'required');

        if($this->form_validation->run() === FALSE){

            $this->layout->set('page_title','Create User');

            $this->setSessionValuesToDefault(); //Resets the session values to default

            $this->layout->load('create','users');
        }
        else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $password_reenter = $this->input->post('password_reenter');

            if(!$this->usernameExists($username))
            {
                $_SESSION['username_exists'] = FALSE; //Tell session not to display a message that the username is taken
                if($password === $password_reenter){

                    $this->users_model->addUser($username, $password);
                    $_SESSION['reenter_valid'] = TRUE; //Tells session that password and password re-entry match

                    header('Location: ' . site_url('users/login'));
                }
                else
                {
                    $_SESSION['reenter_valid'] = FALSE;
                    header('Refresh: 0');
                }

            }
            else
            {
                $_SESSION['reenter_valid'] = TRUE;
                $_SESSION['username_exists'] = TRUE; //Tells session to display error message that username exists
                header('Refresh: 0');
            }
        }
    }

    //Displays login form and checks if user is an admin
    private function loginForm(){

        //Set form rules for CodeIgniter built-in form validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //Checks that form hasn't been submitted, then displays  form.
        if($this->form_validation->run() === FALSE){

            $this->layout->set('page_title','User Login');

            $this->layout->load('login','users');
        }

        //Form information is handled.
        else{

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            //Login function returns true if username and password combination match a user.
            if ($this->users_model->login($username, $password)){

                if($username === 'admin'){

                    $_SESSION['login'] = TRUE; //Tells session that login was successful
                    $_SESSION['isAdmin'] = TRUE; //Used in the index page to determine if user has the ability to delete authors.
                    header('Location: ' . site_url('authors/index'));
                }
                else{

                    $_SESSION['login'] = TRUE; //Tells session that login was successful
                    $_SESSION['isAdmin'] = FALSE;
                    header('Location: ' . site_url('authors/index'));
                }

            }
            //If login not successful, reload the page and display an error message
            else{
                $_SESSION['login'] = FALSE;

                header('Refresh: 0');
            }

        }
    }
}
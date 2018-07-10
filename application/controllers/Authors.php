<?php

/*
 * The Authors controller contains functions that are used to maintain the authors section
 */
session_start();
require('Father.php');
class Authors extends Father
{

    //Displays the index page for the authors section which contains a table of all authors.
    //Action is used to display that an action was successful. $isAdmin is sent from validateLogin.
    public function index($action = FALSE, $isAdmin = TRUE){

        $this->layout->set('page_title', 'Main Menu');
        $this->layout->set('authors', $this->authors_model->getAuthors());
        $this->layout->set('action', $action);



        $this->layout->load('index','authors');
    }

    //Wrapper for validateCreation
    public function create(){
        $this->creationForm();
    }

    //Wrapper for validateDeletion.
    //ID specifies the ID of the author slated for deletion.
    public function delete($id){
        $this->deletionForm($id);
    }

    //Performs creation of author
    private function creationForm()
    {

        //Set form rules for CodeIgniter built-in form validation
        $this->form_validation->set_rules('name', 'Author Name', 'required');

        if($this->form_validation->run() === FALSE) {

            $this->layout->set('page_title','Add Author');

            $this->layout->load('create','authors');
        }
        else {

            $this->authors_model->addAuthor($this->input->post('name')); //Adds a new author with name from form
            $this->index('add'); //Tells index to display success message
        }
    }

    //Performs deletion of author
    private function deletionForm($id){

        $this->form_validation->set_rules('commit', 'Delete Author','required');

        if($this->form_validation->run() === FALSE){

            $this->layout->set('page_title','Delete Author');
            $this->layout->set('author',$this->authors_model->getAuthor($id));

            $this->layout->load('delete','authors');
        }
        else{

            if($this->authors_model->deleteAuthor($id)){
                $this->index('delete'); //Tells index that the author has been deleted
            }
            else{
                $this->index('failed'); //Tells index that the author wasn't deleted.
            }

        }
    }

    public function test() {
        die('test');
    }
}
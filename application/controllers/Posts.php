<?php
/*
 * The Posts controller contains functions that maintain the posts section
 */
require('Father.php');
session_start();
class Posts extends Father{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('postEntry','post_entry');
    }

    //Display post index page
    public function index($action = FALSE){

        $this->layout->set('page_title','Post List');
        $refinedPosts = $this->post_entry->refinePosts($this->posts_model->getPosts());
        $this->layout->set('posts', $refinedPosts);
        $this->layout->set('action', $action);

        $this->layout->load('index','posts');
    }

    //Wrapper for validateCreation
    public function create(){
        $this->creationForm();
    }

    //wrapper for validateDeletion
    //$id is the ID of the post that will be deleted
    public function delete($id){
        $this->deletionForm($id);
    }

    //wrapper for validateEdit
    //$id is the ID of the post that will be edited
    public function edit($id){
        $this->editForm($id);
    }

    //Creates a new post
    private function creationForm(){

        $this->form_validation->set_rules('title', 'Post Title', 'required');
        $this->form_validation->set_rules('content', 'Post Content', 'required');

        if($this->form_validation->run() === FALSE){

            $this->layout->set('page_title','Add Post');

            $this->layout->load('create','posts');
        }
        else{
            $authorID = $_SESSION['username'];
            $title = $this->input->post('title');
            $content = $this->input->post('content');

            $this->posts_model->addPost($authorID,$title,$content);
            $this->index('add');
        }
    }

    //Deletes a specified post
    private function deletionForm($id){
        $this->form_validation->set_rules('commit', 'Delete Post','required');

        if($this->form_validation->run() === FALSE){

            $this->layout->set('page_title','Delete Post');
            $this->layout->set('post', $this->posts_model->getPost($id));

            $this->layout->load('delete','posts');
        }
        else{
            $this->posts_model->deletePost($id);
            $this->index('delete');
        }
    }

    //Allows user to edit fields in a specified post
    private function editForm($id){

        $this->form_validation->set_rules('title', 'Post Title', 'required');
        $this->form_validation->set_rules('content', 'Post Content', 'required');


        if($this->form_validation->run() === FALSE){

            $this->layout->set('page_title','Edit Post');
            $this->layout->set('post',$this->posts_model->getPost($id));

            $this->layout->load('edit','posts');
        }
        else{
            $authorID = $_SESSION['username'];
            $title = $this->input->post('title');
            $content = $this->input->post('content');

            $post = $this->posts_model->getPost($id);
            $this->posts_model->editPost($post, $authorID, $title, $content);
            $this->index('edit');
        }
    }
}
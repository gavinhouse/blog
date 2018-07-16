<?php
/**
 * The Posts controller contains functions that maintain the posts section
 *
 */
require('Father.php');
session_start();
class Posts extends Father{


    //Display post index page
    public function index($action = FALSE){

        $user = $this->uri->segment(3,FALSE);
        if(!$user){
            $refinedPosts = $this->postentry->refinePosts($this->posts_model->getPosts());
            $this->layout->set('page_title','Post List');
        }
        else{
            $refinedPosts = $this->postentry->refinePosts($this->posts_model->getByAuthor($user));
            $this->layout->set('page_title', $user . "'s Posts");
        }

        $this->layout->set('posts', $refinedPosts);
        $this->layout->set('action', $action);

        parent::checkLogin();

        $this->layout->load('index','posts');
    }

    public function readMore(){

        $id = $this->uri->segment(3);

        $this->layout->set('page_title', $this->posts_model->getPost($id)['title']);
        $this->layout->set('post', $this->posts_model->getPost($id));

        $this->layout->load('readMore','posts');

    }

    //Wrapper for validateCreation
    public function create(){
        $this->creationForm();

        parent::checkLogin();
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
            $date = $this->formatDate(getdate());

            $fileName = $this->uploadFile();

            if(!$this->posts_model->addPost($authorID,$title,$content, $date, $fileName))
            {
                echo $fileName;
            }
            else{
                $this->index('add');
            }

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
            header('Location: ' . site_url('posts/readMore/' . $post['id']));
        }
    }

    private function formatDate($date){
        return $date['month'] . ' ' . $date['mday'] . ', ' . $date['year'];
    }

    private function uploadFile(){
        $config['upload_path']          = './images/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';


        $this->load->library('upload', $config);
        $this->upload->do_upload();
        return $this->upload->data('file_name');
    }

}
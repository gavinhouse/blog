<?php
/*
 * The Posts model handles communication with the MySQL database
 */
require_once('MasterModel.php');
class PostsModel extends MasterModel
{

    //Adds a post to the posts table
    public function addPost($authorName, $title, $content)
    {

        $data = array(
            'authorName' => $authorName,
            'title' => $title,
            'content' => $content
        );

        return $this->db->insert('posts', $data);
    }

    //Updates a specified post in the database
    public function editPost($post, $authorID, $title, $content)
    {
        $data = array(
            'author_id' => $authorID,
            'title' => $title,
            'content' => $content
        );

        $this->db->where('id',$post['id']);

        if ($this->db->update('posts', $data)) {
            return TRUE;
        }
        else {
            echo "Update failed";
            exit;
        }
    }

    //Deletes a specified post from the database
    public function deletePost($id){
        parent::delete($id,'posts');
    }

    //Gets post associated with given ID.
    public function getPost($id){
        return parent::getEntries($id,'posts');
    }

    //Returns all entries in posts table
    public function getPosts(){
        return parent::getEntries(FALSE,'posts');
    }
}
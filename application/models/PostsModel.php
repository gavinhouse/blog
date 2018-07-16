<?php
/*
 * The Posts model handles communication with the MySQL database
 */
require_once('MasterModel.php');
class PostsModel extends MasterModel
{

    //Adds a post to the posts table
    public function addPost($authorName, $title, $content, $date, $fileName)
    {

        $data = array(
            'authorName' => $authorName,
            'title' => $title,
            'content' => $content,
            'date' => $date,
            'imageName' => $fileName
        );

        return $this->db->insert('posts', $data);
    }

    //Updates a specified post in the database
    public function editPost($post, $authorID, $title, $content)
    {
        $data = array(
            'authorName' => $authorID,
            'title' => $title,
            'content' => $content,
            'date' => $post['date'],
            'imageName' => $post['imageName']
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

    public function getByAuthor($author){
        return $this->db->get_where('posts', array('authorName' => $author))->result_array();
    }
}
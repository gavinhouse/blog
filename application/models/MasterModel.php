<?php
/**
 * The Master model opens the connection with the database and also contains some general functions.
 *
 * @property AuthorsModel authors_model
 * @property PostsModel posts_model
 * @property CI_Loader $load
 * @property CI_DB $db
 */
class MasterModel extends CI_Model{

    //Open connection to database
    public function __construct()
    {
        $this->load->database();
    }

    //Removes entry from a specific table given an ID
    public function delete($id, $table)
    {

        if($this->db->delete($table,array('id' => $id))){
            return TRUE;
        }
        else{
            echo "Failed to delete";
            exit;
        }
    }

    //Gets user given username
    public function getUser($username){

        return $this->db->get_where('users', array('username' => $username))->row_array();
    }

    //Gets entries from a specific table. If no id is specified, all entries are gathered. Otherwise, entry with given id is returned
    public function getEntries($id = FALSE, $table){

        if(!$id){

            return $this->db->get($table)->result_array();
        }

        return $this->db->get_where($table, array('id' => $id))->row_array();
    }

    public function getImage($filename){
        return $this->db->get_where('posts', array('imageName' => $filename))->result_array();
    }

}
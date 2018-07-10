<?php
/*
 * The Authors model handles communication with the MySQL database
 */
require_once('MasterModel.php');
class AuthorsModel extends MasterModel
{

    //Given a name, adds a new author to the database
    public function addAuthor($name){

        $data = array(
            'name' => $name
        );

        return $this->db->insert('authors', $data);
    }

    //Deletes author with given ID
    public function deleteAuthor($id){
        return parent::delete($id,'authors');
    }

    //Returns all authors in authors table
    public function getAuthors(){
        return parent::getEntries(FALSE,'authors');
    }

    //Returns a specific author given their ID
    public function getAuthor($id){
        return parent::getEntries($id,'authors');
    }

}
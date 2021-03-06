<?php
/*
 * The Users model handles communication with the MySQL database
 */
class UsersModel extends MasterModel{

    //Given a username and password, adds user to Users table in the MySQL database
    //Users are identified by username, passwords are hashed and salted using BCrypt
    public function addUser($username, $displayName, $password){

        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        );

        return $this->db->insert('users', $data);
    }

    //Handles user login
    public function login($username = false, $password = false){

        if (!$username) {
            return false;
        }

        $user = parent::getUser($username);

        return password_verify($password,$user['password']);
    }

    public function deleteUser($username){

        if($this->db->delete('users',array('username' => $username))){
            return TRUE;
        }
        else{
            echo "Failed to delete";
            exit;
        }
    }
}
<?php 

class UserModel {
    public $db;

    public function CheckUserLogin ($username, $password) {
        $query = " SELECT count(*) 
                   FROM tbl_user 
                   WHERE username = '{$username}' 
                   AND password = '{$password}' ";
        $stmt  = $this->db->prepare($query)->execute();
        return $stmt;
    }


    public function UserRegister ($username, $password) {
        $query = " INSERT INTO tbl_user (username, password)
                   VALUES ('".$username."', '".$password."')
        ";
        $stmt = $this->db->query($query);
        return 1;
    }


    public function GetAdmin () {
        $query = " SELECT *
                   FROM tbl_user 
                   WHERE username LIKE 'admin'";
        $stmt  = $this->db->query($query)->fetch();
        return $stmt;
    }

    public function UpdateUser ($id, $username, $password) {
        $query = " UPDATE tbl_user 
                   SET username = $username, password = $password
                   WHERE id = $id";
        $stmt  = $this->db->prepare($query)->execute();
        return $stmt;
    }
}
<?php

class CommentsModel {
    public $db;

    public function UploadComment ($comment, $userId, $imageId) {
        $query =  " INSERT INTO comments (comment, userId, imageId) VALUES ('".$comment."','".$userId."', '".$imageId."')";
        $stmt = $this->db->query($query);
        return 1;
    }

    public function AllComments ($imageId, $userId) {
        $query = " SELECT *
                   FROM comments c
                   LEFT JOIN images i
                   ON c.imageId = i.id
                   LEFT JOIN tbl_user u
                   ON c.userId = u.id
                   WHERE c.imageId = $imageId
                   AND c.userId = $userId 
                   ORDER BY i.uploaded DESC ";
       $stmt = $this->db->query($query)->fetchAll();
       return $stmt;
    }

    public function DeleteComment ($id) {
        $query = " DELETE
                   FROM comments
                   WHERE id = '$id' ";
       $stmt = $this->db->exec($query);
       return $stmt;
    }
}
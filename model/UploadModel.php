<?php

class UploadModel {
    public $db;

    public function UploadImage ($fileName) {
        $query =  " INSERT INTO images (filename, uploaded) VALUES ('".$fileName."', NOW())";
        $stmt = $this->db->query($query);
        return 1;
    }

    public function AllImages () {
        $query = " SELECT *
                   FROM images
                   ORDER BY uploaded DESC
                   LIMIT 0, 10 ";
       $stmt = $this->db->query($query)->fetchAll();
       return $stmt;
    }

    public function DeleteImage ($id) {
        $query = " DELETE
                   FROM images
                   WHERE image_id = '$id' ";
       $stmt = $this->db->exec($query);
       return $stmt;
    }
}
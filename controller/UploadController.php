<?php

class UploadController {
    public $model;

    public function uploadAction() {

        $message = "";
        if (isset($_POST['submit'])) {
            $fileName = $_FILES['uploadFile']['name'];
            $target_dir = "./uploads/";
            $target_file = $target_dir.basename($fileName);

            $this->model->UploadImage($fileName);

            if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
                $message = "The file".htmlspecialchars(basename($fileName))."has been uploaded.";

            } else {
                $message = "Sorry, there was an error!";
            }
        }
        return require_once('../view/upload.php');
    }

    public function allImagesAction(){
        $images = $this->model->allImages();
        return require_once('../view/images.php');
    }

}
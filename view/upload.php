<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('template/header.php'); ?>
    <title>Image upload</title>
</head>
<body>
<?php include_once('template/navigation.php'); ?>
    <div class="container">
        <?php if (!empty($message)) { ?>
            <div class="alert alert-primary" role="alert" id="msg"> <?php echo $message?></div>
        <?php } ?>
        <form class="row g-3" action="?action=fileUpload" method="POST" enctype="multipart/form-data" id="form_file_data">
            <div class="col-12">
                <div class="card mt-2 mb-3">
                    <div class="card-header">
                        Upload Image
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="uploadFile">Select image</label>
                            <input type="file" name="uploadFile" id="uploadFile" required>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="File Upload" name="submit" class="btn btn-success submit float right" id="submit">     
            </div>
        </form>
    </div>
<?php include_once('template/footer.php'); ?>
</body>
</html>
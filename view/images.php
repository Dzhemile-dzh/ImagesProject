<!DOCTYPE html>
<html>

<head>
    <?php include_once('template/header.php'); ?>
    <title>Image Upload Project</title>
</head>

<body>
    <?php include_once('template/navigation.php'); ?>
    <div class="container">
        <h1>Last Uploaded Ten Images</h1>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($images as $image) { ?> 
            <tr>
                <th scope="row"><?php echo $image['id']; ?></th>
                <td><div id="display-image">
                    <img src="./uploads/<?php echo $image['fileName']?>">
                </div></td>
                <td><?php echo $image['uploaded']; ?></td>
                <td>
                    <button type="submit" name="delete_image" value="<?php echo $image['id']?>" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </div>
    <?php include_once('template/footer.php'); ?>
</body>
</html>
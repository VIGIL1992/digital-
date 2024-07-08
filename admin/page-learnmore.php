<?php require_once('header.php'); ?>

<?php

if(isset($_POST['form_project_1'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo <br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='mp4' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif, mp4 or png file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing photo
        $statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $learnmore1_image = $row['learnmore1_image'];
            unlink('../uploads/projects/'.$learnmore1_image);
        }

        // updating the data
        $final_name = 'learnmore-image-1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/projects/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_learnmore SET learnmore1_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'First project image is updated successfully.';
        
    }
}


if(isset($_POST['form_project_2'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo <br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='mp4' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif, mp4 or png file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing photo
        $statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $learnmore2_image = $row['learnmore2_image'];
            unlink('../uploads/projects/'.$learnmore2_image);
        }

        // updating the data
        $final_name = 'learnmore-image-2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/projects/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_learnmore SET learnmore2_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Second project image is updated successfully.';
        
    }
}

if(isset($_POST['form_project_3'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo <br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='mp4' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif, mp4 or png file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing photo
        $statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $learnmore3_image = $row['learnmore3_image'];
            unlink('../uploads/projects/'.$learnmore3_image);
        }

        // updating the data
        $final_name = 'learnmore-image-3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/projects/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_learnmore SET learnmore3_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Third project image is updated successfully.';
        
    }
}

if(isset($_POST['product1_document_new'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a document <br>';
    } else {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file_name = basename($path, '.' . $ext);
        if($ext != 'pdf') {
            $valid = 0;
            $error_message .= 'You must have to upload a PDF file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing document
        $statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $product1_document = $row['product1_document'];
            unlink('../uploads/documents/'.$product1_document);
        }

        // updating the data
        $final_name = 'product1_document'.'.'.$ext;
        move_uploaded_file($path_tmp, '../uploads/documents/'.$final_name);

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_learnmore SET product1_document=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'First project document is updated successfully.';
    }
}

if(isset($_POST['product2_document_new'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a document <br>';
    } else {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file_name = basename($path, '.' . $ext);
        if($ext != 'pdf') {
            $valid = 0;
            $error_message .= 'You must have to upload a PDF file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing document
        $statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $product1_document = $row['product2_document'];
            unlink('../uploads/documents/'.$product2_document);
        }

        // updating the data
        $final_name = 'product2_document'.'.'.$ext;
        move_uploaded_file($path_tmp, '../uploads/documents/'.$final_name);

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_learnmore SET product2_document=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = '2nd project document is updated successfully.';
    }
}

if(isset($_POST['product3_document_new'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a document <br>';
    } else {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file_name = basename($path, '.' . $ext);
        if($ext != 'pdf') {
            $valid = 0;
            $error_message .= 'You must have to upload a PDF file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing document
        $statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $product1_document = $row['product3_document'];
            unlink('../uploads/documents/'.$product3_document);
        }

        // updating the data
        $final_name = 'product3_document'.'.'.$ext;
        move_uploaded_file($path_tmp, '../uploads/documents/'.$final_name);

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_learnmore SET product3_document=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = '3rd project document is updated successfully.';
    }
}

if(isset($_POST['form_project'])) {
    $valid = 1;

    if($valid == 1) {

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_learnmore SET 
            learnmore_heading=?,
            learnmore_sub_heading=?,
            learnmore1_name=?,
            learnmore1_desc=?,
            learnmore1_btn_name=?,
            learnmore1_btn_link=?,
            learnmore2_name=?,
            learnmore2_desc=?,
            learnmore2_btn_name=?,
            learnmore2_btn_link=?,
            learnmore3_name=?,
            learnmore3_desc=?,
            learnmore3_btn_name=?,
            learnmore3_btn_link=?
            WHERE id=1");
            $statement->execute(array(
                $_POST['learnmore_heading'],
                $_POST['learnmore_sub_heading'],
                $_POST['learnmore1_name'],
                $_POST['learnmore1_desc'],
                $_POST['learnmore1_btn_name'],
                $_POST['learnmore1_btn_link'],
                $_POST['learnmore2_name'],
                $_POST['learnmore2_desc'],
                $_POST['learnmore2_btn_name'],
                $_POST['learnmore2_btn_link'],
                $_POST['learnmore3_name'],
                $_POST['learnmore3_desc'],
                $_POST['learnmore3_btn_name'],
                $_POST['learnmore3_btn_link'],
            ));
       
        $success_message = 'Learn More Section Information is updated successfully.';
    }  
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Learn More Section</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $learnmore1_image = $row['learnmore1_image'];
    $learnmore2_image = $row['learnmore2_image'];
    $learnmore3_image = $row['learnmore3_image'];
    
    $product1_document = $row['product1_document'];
    $product2_document = $row['product2_document'];
    $product3_document = $row['product3_document'];
}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_learnmore WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $learnmore_heading = $row['learnmore_heading'];
    $learnmore_sub_heading = $row['learnmore_sub_heading'];
    $learnmore1_name = $row['learnmore1_name'];
    $learnmore1_desc = $row['learnmore1_desc'];
    $learnmore1_btn_name = $row['learnmore1_btn_name'];
    $learnmore1_btn_link = $row['learnmore1_btn_link'];
    $learnmore2_name = $row['learnmore2_name'];
    $learnmore2_desc = $row['learnmore2_desc'];
    $learnmore2_btn_name = $row['learnmore2_btn_name'];
    $learnmore2_btn_link = $row['learnmore2_btn_link'];
    $learnmore3_name = $row['learnmore3_name'];
    $learnmore3_desc = $row['learnmore3_desc'];
    $learnmore3_btn_name = $row['learnmore3_btn_name'];
    $learnmore3_btn_link = $row['learnmore3_btn_link'];
}
?>


<section class="content" style="min-height:auto;margin-bottom: -30px;">
    <div class="row">
        <div class="col-md-12">
            <?php if($error_message): ?>
            <div class="callout callout-danger">
            
            <p>
            <?php echo $error_message; ?>
            </p>
            </div>
            <?php endif; ?>

            <?php if($success_message): ?>
            <div class="callout callout-success">
            
            <p><?php echo $success_message; ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
                            
                <div class="nav-tabs-custom">

                    <!-- About us Page Content -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Learn More Section Heading </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore_heading" value="<?php echo $learnmore_heading ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Learn More Section Sub Heading </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore_sub_heading" value="<?php echo $learnmore_sub_heading ?>">
                                            </div>
                                        </div>

                                        <br><hr style="border: 1px solid black;"><br>


                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">First Product Image</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <img src="<?php echo '../uploads/projects/'.$learnmore1_image; ?>" class="existing-photo" style="width:100px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Change First Product Image</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <input type="file" name="photo">
                                                    <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_project_1">
                                                    <br>
                                                    <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">First Project Name </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore1_name" value="<?php echo $learnmore1_name ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">First Product Description </label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="learnmore1_desc" style="height:200px;"><?php echo $learnmore1_desc ?></textarea>
                                                <br>
                                                <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">First Product Document</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <!-- <img src="<?php echo '../uploads/documents/'.$product1_document; ?>" class="existing-photo" style="width:100px;"> -->
                                                    <a href="../uploads/documents/<?php echo $product1_document; ?>" class="btn btn-warning btn-xs" target="_blank">View</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Change First Product Document</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <input type="file" name="photo">
                                                    <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="product1_document_new">
                                                    <br>
                                                    <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">First Product Button Text </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore1_btn_name" value="<?php echo $learnmore1_btn_name ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">First Product Button Link </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore1_btn_link" value="<?php echo $learnmore1_btn_link ?>">
                                            </div>
                                        </div>
                                        
                                        <br><hr style="border: 1px solid black;"><br>

                                        <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Second Project Image</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="<?php echo '../uploads/projects/'.$learnmore2_image; ?>" class="existing-photo" style="width:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Change Second Project Image</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="photo">
                                                <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_project_2">
                                                <br>
                                                <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Second Project Name </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore2_name" value="<?php echo $learnmore2_name ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Second Project Description </label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="learnmore2_desc" style="height:200px;"><?php echo $learnmore2_desc ?></textarea>
                                                <br>
                                                <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">2nd Product Document</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <img src="<?php echo '../uploads/documents/'.$product2_document; ?>" class="existing-photo" style="width:100px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Change 2nd Product Document</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <input type="file" name="photo">
                                                    <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="product2_document_new">
                                                    <br>
                                                    <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Second Project Button Text </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore2_btn_name" value="<?php echo $learnmore2_btn_name ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Second Project Button Link </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore2_btn_link" value="<?php echo $learnmore2_btn_link ?>">
                                            </div>
                                        </div>

                                        <br><hr style="border: 1px solid black;"><br>

                                        <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Third Project Image</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="<?php echo '../uploads/projects/'.$learnmore3_image; ?>" class="existing-photo" style="width:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Change Third Project Image</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="photo">
                                                <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_project_3">
                                                <br>
                                                <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Third Project Name </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore3_name" value="<?php echo $learnmore3_name ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Third Project Description </label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="learnmore3_desc" style="height:200px;"><?php echo $learnmore3_desc ?></textarea>
                                                <br>
                                                <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">3rd Product Document</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <img src="<?php echo '../uploads/documents/'.$product3_document; ?>" class="existing-photo" style="width:100px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Change 3rd Product Document</label>
                                                <div class="col-sm-6" style="padding-top:6px;">
                                                    <input type="file" name="photo">
                                                    <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="product3_document_new">
                                                    <br>
                                                    <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Third Project Button Text </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore3_btn_name" value="<?php echo $learnmore3_btn_name ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Third Project Button Link </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="learnmore3_btn_link" value="<?php echo $learnmore3_btn_link ?>">
                                            </div>
                                        </div>
                                        
                                        <br>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left" name="form_project">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

            </form>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>
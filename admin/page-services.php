<?php require_once('header.php'); ?>

<?php

if(isset($_POST['form_service_1'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $service1_image = $row['service1_image'];
            unlink('../uploads/services/'.$service1_image);
        }

        // updating the data
        $final_name = 'services-image-1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/services/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_services SET service1_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'First service image is updated successfully.';
        
    }
}

if(isset($_POST['form_service_2'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $service2_image = $row['service2_image'];
            unlink('../uploads/services/'.$service2_image);
        }

        // updating the data
        $final_name = 'services-image-2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/services/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_services SET service2_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Second service image is updated successfully.';
        
    }
}

if(isset($_POST['form_service_3'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $service3_image = $row['service3_image'];
            unlink('../uploads/services/'.$service3_image);
        }

        // updating the data
        $final_name = 'services-image-3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/services/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_services SET service3_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Third service image is updated successfully.';
        
    }
}

if(isset($_POST['form_service_4'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $service4_image = $row['service4_image'];
            unlink('../uploads/services/'.$service4_image);
        }

        // updating the data
        $final_name = 'services-image-4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/services/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_services SET service4_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Fourth service image is updated successfully.';
        
    }
}

if(isset($_POST['form_service_5'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $service5_image = $row['service5_image'];
            unlink('../uploads/services/'.$service5_image);
        }

        // updating the data
        $final_name = 'services-image-5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/services/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_services SET service5_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Fifth service image is updated successfully.';
        
    }
}

if(isset($_POST['form_service_6'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $service6_image = $row['service6_image'];
            unlink('../uploads/services/'.$service6_image);
        }

        // updating the data
        $final_name = 'services-image-6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/services/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_services SET service6_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Sixth service image is updated successfully.';
        
    }
}

if(isset($_POST['form_service_7'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $service7_image = $row['service7_image'];
            unlink('../uploads/services/'.$service7_image);
        }

        // updating the data
        $final_name = 'services-image-7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/services/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_services SET service7_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Fifth service image is updated successfully.';
        
    }
}


if(isset($_POST['form_services'])) {
    $valid = 1;

    if($valid == 1) {

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_services SET 
            service_sub_heading=?,
            service_heading=?,
            service1_name=?,
            service1_desc=?,
            service2_name=?,
            service2_desc=?,
            service3_name=?,
            service3_desc=?,
            service4_name=?,
            service4_desc=?,
            service5_name=?,
            service5_desc=?,
            service6_name=?,
            service6_desc=?,
            service7_name=?,
            service7_desc=?
            WHERE id=1");
            $statement->execute(array(
                $_POST['service_sub_heading'],
                $_POST['service_heading'],
                $_POST['service1_name'],
                $_POST['service1_desc'],
                $_POST['service2_name'],
                $_POST['service2_desc'],
                $_POST['service3_name'],
                $_POST['service3_desc'],
                $_POST['service4_name'],
                $_POST['service4_desc'],
                $_POST['service5_name'],
                $_POST['service5_desc'],
                $_POST['service6_name'],
                $_POST['service6_desc'],
                $_POST['service7_name'],
                $_POST['service7_desc']
            ));
       
        $success_message = 'Services Section Information is updated successfully.';
    }  
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Service Section</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $service1_image = $row['service1_image'];
    $service2_image = $row['service2_image'];
    $service3_image = $row['service3_image'];
    $service4_image = $row['service4_image'];
    $service5_image = $row['service5_image'];
    $service6_image = $row['service6_image'];
    $service7_image = $row['service7_image'];
}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_services WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $service_sub_heading = $row['service_sub_heading'];
    $service_heading = $row['service_heading'];
    $service1_name = $row['service1_name'];
    $service1_desc = $row['service1_desc'];
    $service2_name = $row['service2_name'];
    $service2_desc = $row['service2_desc'];
    $service3_name = $row['service3_name'];
    $service3_desc = $row['service3_desc'];
    $service4_name = $row['service4_name'];
    $service4_desc = $row['service4_desc'];
    $service5_name = $row['service5_name'];
    $service5_desc = $row['service5_desc'];
    $service6_name = $row['service6_name'];
    $service6_desc = $row['service6_desc'];
    $service7_name = $row['service7_name'];
    $service7_desc = $row['service7_desc'];
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
                                        <label for="" class="col-sm-3 control-label">Services Section Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service_heading" value="<?php echo $service_heading ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Services Section Sub Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service_sub_heading" value="<?php echo $service_sub_heading ?>">
                                        </div>
                                    </div>

                                    <br><hr style="border: 1px solid black;"><br>


                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">First Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/services/'.$service1_image; ?>" class="existing-photo" style="width:100px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change First Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_service_1">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">First Service Name </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service1_name" value="<?php echo $service1_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">First Service Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="service1_desc" style="height:200px;"><?php echo $service1_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>
                                    
                                    <br><hr style="border: 1px solid black;"><br>


                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Second Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/services/'.$service2_image; ?>" class="existing-photo" style="width:100px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change Second Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_service_2">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Second Service Name </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service2_name" value="<?php echo $service2_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Second Service Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="service2_desc" style="height:200px;"><?php echo $service2_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>
                                    
                                    <br><hr style="border: 1px solid black;"><br>


                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Third Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/services/'.$service3_image; ?>" class="existing-photo" style="width:100px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change Third Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_service_3">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Third Service Name </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service3_name" value="<?php echo $service3_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Third Service Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="service3_desc" style="height:200px;"><?php echo $service3_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>
                                   
                                    <br><hr style="border: 1px solid black;"><br>


                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Fourth Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/services/'.$service4_image; ?>" class="existing-photo" style="width:100px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change Fourth Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_service_4">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Fourth Service Name </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service4_name" value="<?php echo $service4_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Fourth Service Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="service4_desc" style="height:200px;"><?php echo $service4_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>

                                    <br><hr style="border: 1px solid black;"><br>

                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Fifth Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/services/'.$service5_image; ?>" class="existing-photo" style="width:100px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change Fifth Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_service_5">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Fifth Service Name </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service5_name" value="<?php echo $service5_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Fifth Service Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="service5_desc" style="height:200px;"><?php echo $service5_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>

                                    <br><hr style="border: 1px solid black;"><br>

                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Sixth Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/services/'.$service6_image; ?>" class="existing-photo" style="width:100px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change Sixth Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_service_6">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Sixth Service Name </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service6_name" value="<?php echo $service6_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Sixth Service Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="service6_desc" style="height:200px;"><?php echo $service6_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>
                                    
                                    <br><hr style="border: 1px solid black;"><br>

                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Seventh Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/services/'.$service7_image; ?>" class="existing-photo" style="width:100px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change Seventh Service Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_service_7">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Seventh Service Name </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="service7_name" value="<?php echo $service7_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Seventh Service Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="service7_desc" style="height:200px;"><?php echo $service7_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_services">Update</button>
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
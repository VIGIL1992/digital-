<?php require_once('header.php'); ?>

<?php

if(isset($_POST['form_banner'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_aboutus WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $aboutpage_bg_image = $row['aboutpage_bg_image'];
            unlink('../uploads/'.$aboutpage_bg_image);
        }

        // updating the data
        $final_name = 'about-banner-image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_aboutus SET aboutpage_bg_image=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'About section banner is updated successfully.';
        
    }
}

if(isset($_POST['form_image'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo <br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing photo
        $statement = $pdo->prepare("SELECT * FROM tbl_aboutus WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $aboutpage_img = $row['aboutpage_img'];
            unlink('../uploads/'.$aboutpage_img);
        }

        // updating the data
        $final_name = 'about-image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_aboutus SET aboutpage_img=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'About section image is updated successfully.';
        
    }
}



if(isset($_POST['form_about'])) {
    $valid = 1;

    if($valid == 1) {

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_aboutus SET 
            aboutpage_heading=?,
            aboutpage_desc=?,
            why_we_do_it=?,
            why_we_do_it_desc=?
            
            WHERE id=1");
            $statement->execute(array(
                $_POST['aboutpage_heading'],
                $_POST['aboutpage_desc'],
                $_POST['why_we_do_it'],
                $_POST['why_we_do_it_desc']
            ));
       
        $success_message = 'About Us section Information is updated successfully.';
    }  
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>About Section</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_aboutus WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $aboutpage_bg_image = $row['aboutpage_bg_image'];
    $aboutpage_img = $row['aboutpage_img'];
    $aboutpage_heading = $row['aboutpage_heading'];
    $aboutpage_desc = $row['aboutpage_desc'];
    $why_we_do_it = $row['why_we_do_it'];
    $why_we_do_it_desc = $row['why_we_do_it_desc'];
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

                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">About Section Banner Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/'.$aboutpage_bg_image; ?>" class="existing-photo" style="width:300px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change About Section Banner Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner">
                                            <br>
								            <p><b>Image Size: ( Width: 2000px & Height: 1000px )</b></p>
                                        </div>
                                    </div>
                                    </form>
                                    <br><br>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">About Section Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="aboutpage_heading" value="<?php echo $aboutpage_heading ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">About Section Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="aboutpage_desc" style="height:200px;"><?php echo $aboutpage_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>
                                    <br><br>

                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">About Section Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="<?php echo '../uploads/'.$aboutpage_img; ?>" class="existing-photo" style="width:200px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change About Section Image</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_image">
                                            <br>
								            <p><b>Image Size: ( Width: 500px & Height: 500px )</b></p>
                                        </div>
                                    </div>
                                    </form>

                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Why We Do It Section Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="why_we_do_it" value="<?php echo $why_we_do_it ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Why We Do It Section Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="why_we_do_it_desc" style="height:200px;"><?php echo $why_we_do_it_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
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
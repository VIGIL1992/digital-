<?php require_once('header.php'); ?>

<?php

if(isset($_POST['form_slider'])) {
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
        $statement = $pdo->prepare("SELECT * FROM tbl_home WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $home_bg_video = $row['home_bg_video'];
            unlink('../uploads/'.$home_bg_video);
        }

        // updating the data
        $final_name = 'home-video'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_home SET home_bg_video=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Home section background video is updated successfully.';
        
    }
}



if(isset($_POST['form_home'])) {
    $valid = 1;

    if($valid == 1) {

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_home SET 
            home_heading=?,
            home_desc=?
            WHERE id=1");
            $statement->execute(array(
                $_POST['home_heading'],
                $_POST['home_desc']
            ));
       
        $success_message = 'Home Section Information is updated successfully.';
    }  
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Home Section</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_home WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $home_heading = $row['home_heading'];
    $home_desc = $row['home_desc'];
    $home_bg_video = $row['home_bg_video'];
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
                                        <label for="" class="col-sm-3 control-label">Existing Background Video</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                        <video width="100%" height="240" controls playsinline autoplay muted loop>
                                            <source src="<?php echo '../uploads/'.$home_bg_video; ?>" type="video/mp4" style="height:80px;">
                                        </video>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Change Background Video</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_slider">
                                        </div>
                                    </div>
                                    </form>
                                    <br><br>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Home Section Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="home_heading" value="<?php echo $home_heading ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Home Section Description </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="home_desc" style="height:200px;"><?php echo $home_desc ?></textarea>
                                            <br>
                                            <b> Tip:&nbsp; &lt;br&gt; is used to break the lines</b>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
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
<?php require_once('header.php'); ?>

<?php
//Change Logo
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['photo_logo']['name'];
    $path_tmp = $_FILES['photo_logo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo<br>';
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
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $logo = $row['logo'];
            unlink('../uploads/'.$logo);
        }

        // updating the data
        $final_name = 'logo'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_settings SET logo=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Logo is updated successfully.';
        
    }
}
// Change Favicon
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['photo_favicon']['name'];
    $path_tmp = $_FILES['photo_favicon']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo<br>';
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
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $favicon = $row['favicon'];
            unlink('../uploads/'.$favicon);
        }

        // updating the data
        $final_name = 'favicon'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_settings SET favicon=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Favicon is updated successfully.';
        
    }
}
//Footer & Contact us page
if(isset($_POST['form3'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE tbl_settings SET footer_about=?, footer_text_1=?, footer_text_2=?, footer_text_3=?, footer_text_3_link=?, footer_mail_head=?, footer_mail=?, footer_offices_head=?, footer_offices=? WHERE id=1");
    $statement->execute(array($_POST['footer_about'],$_POST['footer_text_1'],$_POST['footer_text_2'],$_POST['footer_text_3'],$_POST['footer_text_3_link'],$_POST['footer_mail_head'],$_POST['footer_mail'],$_POST['footer_offices_head'],$_POST['footer_offices']));

    $success_message = 'Footer Information is updated successfully.';
    
}

//Header Menu
if(isset($_POST['form_header'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE tbl_settings SET header_menu_one=?, header_menu_two=?, header_menu_three=?, header_menu_four=?, header_menu_five=? WHERE id=1");
    $statement->execute(array($_POST['header_menu_one'],$_POST['header_menu_two'],$_POST['header_menu_three'],$_POST['header_menu_four'],$_POST['header_menu_five']));

    $success_message = 'Header Information is updated successfully.';
    
}


if(isset($_POST['form6'])) {
    // updating the database
    $statement = $pdo->prepare("UPDATE tbl_settings SET meta_title_home=? WHERE id=1");
    $statement->execute(array($_POST['meta_title_home']));

    $success_message = 'Home Meta settings is updated successfully.';
}

?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Website Settings</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $logo                            = $row['logo'];
    $favicon                         = $row['favicon'];
    $contact_email                   = $row['contact_email'];
    $meta_title_home                 = $row['meta_title_home'];
    $featured_product_title          = $row['featured_product_title'];
    $latest_product_title            = $row['latest_product_title'];
    $popular_product_title           = $row['popular_product_title'];
    $total_featured_product_home     = $row['total_featured_product_home'];

    $footer_text_1 = $row['footer_text_1'];
    $footer_text_2 = $row['footer_text_2'];
    $footer_text_3 = $row['footer_text_3'];
    $footer_text_3_link = $row['footer_text_3_link'];
    $footer_mail_head = $row['footer_mail_head'];
    $footer_mail = $row['footer_mail'];
    $footer_offices_head = $row['footer_offices_head'];
    $footer_offices = $row['footer_offices'];

    $footer_about = $row['footer_about'];

    $header_menu_one = $row['header_menu_one'];
    $header_menu_two = $row['header_menu_two'];
    $header_menu_three = $row['header_menu_three'];
    $header_menu_four = $row['header_menu_four'];
    $header_menu_five = $row['header_menu_five'];
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
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Logo</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Meta Settings</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Header</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Footer</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Logo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../uploads/<?php echo $logo; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Logo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_logo">
                                            <br>
                                            <p><b>Try to upload a background-removed image. You can remove all image's backgrounds from this website <a href="https://www.remove.bg/" target="_blank" rel="noopener noreferrer">remove.bg</a></b></p>
                                            <p><b>Logo size ( Width: 330px & Height: 460px )</b></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form1">Update Logo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>


                        <div class="tab-pane" id="tab_2">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Favicon</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../uploads/<?php echo $favicon; ?>" class="existing-photo" style="height:40px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Favicon</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_favicon">
                                            <br>
                                            <p><b>This icon will appear on the top of the browser tab. Try to upload a background-removed image. You can remove all image's backgrounds from this website <a href="https://www.remove.bg/" target="_blank" rel="noopener noreferrer">remove.bg</a></b></p>
                                            <p><b>Icon size ( Width: 64px & Height: 64px ). Also, this icon should be in a square size</b></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form2">Update Favicon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>


                        <div class="tab-pane" id="tab_6">
                            <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title <br> (This title will appear on <br> the top of the browser tab)</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_title_home" class="form-control" value="<?php echo $meta_title_home ?>">
                                        </div>
                                    </div>      
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form6">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                            


                        <div class="tab-pane" id="tab_4">
                            <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">First Section Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="header_menu_one" value="<?php echo $header_menu_one; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Second Section Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="header_menu_two" value="<?php echo $header_menu_two; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Third Section Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="header_menu_three" value="<?php echo $header_menu_three; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Fourth Section Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="header_menu_four" value="<?php echo $header_menu_four; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Fifth Section Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="header_menu_five" value="<?php echo $header_menu_five; ?>">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_header">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>


                        <div class="tab-pane" id="tab_3">
                            <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Title 1 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_text_1" value="<?php echo $footer_text_1; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Title 2 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_text_2" value="<?php echo $footer_text_2; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Title 3 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_text_3" value="<?php echo $footer_text_3; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Title 3 Link </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_text_3_link" value="<?php echo $footer_text_3_link; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Email Title </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_mail_head" value="<?php echo $footer_mail_head; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Email </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_mail" value="<?php echo $footer_mail; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Offices Title </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_offices_head" value="<?php echo $footer_offices_head; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer Offices </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="footer_offices" style="height:100px;"><?php echo $footer_offices ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Copyright </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="footer_about" value="<?php echo $footer_about; ?>">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form3">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>


                        
                            
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>
<?php require_once('header.php'); ?>

<?php


if(isset($_POST['form_contact'])) {
    $valid = 1;

    if($valid == 1) {

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_contact SET 
            contact_heading1=?,
            contact_heading2=?,
            contact_heading3=?
            WHERE id=1");
            $statement->execute(array(
                $_POST['contact_heading1'],
                $_POST['contact_heading2'],
                $_POST['contact_heading3']
            ));
       
        $success_message = 'Contact Section Information is updated successfully.';
    }  
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Contact Section</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_contact WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $contact_heading1 = $row['contact_heading1'];
    $contact_heading2 = $row['contact_heading2'];
    $contact_heading3 = $row['contact_heading3'];
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
                                        <label for="" class="col-sm-3 control-label">Contact Section First Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="contact_heading1" value="<?php echo $contact_heading1 ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Contact Section Second Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="contact_heading2" value="<?php echo $contact_heading2 ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Contact Section Third Heading </label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="contact_heading3" value="<?php echo $contact_heading3 ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
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
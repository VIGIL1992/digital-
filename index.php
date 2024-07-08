<!-- This is main configuration File -->
<?php include 'inc/db.php';?>
<!-- This is main configuration File -->

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$meta_title_home = $row['meta_title_home'];
	$header_menu_one = $row['header_menu_one'];
  $header_menu_two = $row['header_menu_two'];
  $header_menu_three = $row['header_menu_three'];
  $header_menu_four = $row['header_menu_four'];
  $header_menu_five = $row['header_menu_five'];

  $footer_text_1 = $row['footer_text_1'];
  $footer_text_2 = $row['footer_text_2'];
  $footer_text_3 = $row['footer_text_3'];
  $footer_text_3_link = $row['footer_text_3_link'];
  $footer_mail_head = $row['footer_mail_head'];
  $footer_mail = $row['footer_mail'];
  $footer_offices_head = $row['footer_offices_head'];
  $footer_offices = $row['footer_offices'];
	$footer_about = $row['footer_about'];
}
?>

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

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#a04732"/>
<title><?php echo $meta_title_home ?></title>

<!-- FAVICON FILES -->
<link href="uploads/<?php echo $favicon; ?>" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="css/bundle.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/modded.css">
<link rel="stylesheet" href="css/back-to-top.css">

<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/marquee.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

<style>
    body {
        background-image: url('images/dark-pattern-bg.jpg') !important;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
</head>
<body>

<!--Header -->
<?php include 'inc/header.php';?> 


<header class="header" id="home">
  <div class="showcase-slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide">

        <div class="video-bg">
          <video src="<?php echo BASE_URL; ?>uploads/<?php echo $home_bg_video; ?>" loop autoplay muted preload="none" playsinline></video>
        </div>

        <!-- <div class="slide-image bg-image" data-background="images/slide01.jpg"></div> -->
        <div class="slide-image bg-image"></div>
        <!-- slide-image -->
        <div class="slide-inner" style="display:block;margin-left:auto;margin-right:auto;">
          <div class="container"> 
            <!-- <small data-splitting style="display:block;text-align:center;">
            "Thing Travel.. Think Us.."
            </small> -->
            <h1 data-splitting style="text-align:center;">
            <?php echo $home_heading ?>
            </h1>
            <p class="slider-sub-title" data-splitting>
            <?php echo $home_desc ?>
            </p>
            <div class='icon-scroll'>
            </div>

          </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->
    
  </div>
  <!-- end showcase-slider -->
</header>
<!-- end header -->



<!--About Page -->
<?php include 'about.php';?> 


<!--Services Page -->
<?php include 'services.php';?> 


<!--Learn More Projects -->
<?php include 'learn-more.php';?> 


<!--Get in Touch -->
<?php include 'get-in-touch.php';?>


<!--Footer -->
<?php include 'inc/footer.php';?> 



<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src='js/bundle.js'></script> 
<script src='js/scripts.js'></script>
<script src="js/back-to-top.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'>
</script><script  src="js/marquee.js"></script>

</body>

</html>
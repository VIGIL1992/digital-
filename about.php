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

<link rel="stylesheet" href="css/about.css">

<section id="about-us" style="background-image: url('images/dark-pattern-bg.jpg');">

<div class="full_box snipcss-LckzP" style="background-image: url('<?php echo BASE_URL; ?>uploads/<?php echo $aboutpage_bg_image; ?>');">
  <!-- <div class="cell middle left">
      <div class="text">
          <h1 class="about-heading"><?php echo $aboutpage_heading; ?></h1>
          <h2>
          <?php echo $aboutpage_desc; ?>
          </h2>
      </div>
  </div> -->
  <div class="center_box table tether-target-attached-top tether-element-attached-top tether-element-attached-center tether-target-attached-center" style="margin-bottom:0rem;">
      <div class="cell middle left">
          <div class="text">
              <h1 class="about-heading"><?php echo $why_we_do_it; ?></h1>
              <h2>
              <?php echo $why_we_do_it_desc; ?>
              </h2>
          </div>
      </div>
  </div>
</div>


<div class="full_box bird_box snipcss0-0-0-1 snipcss-cbpvt" id="bird-with-mount" style="background-image: url('images/dark-pattern-bg.jpg');height:250px;">
  <div class="center_box snipcss0-1-1-2 snipcss0-0-0-1">
    <div class="bird snipcss0-2-2-3 snipcss0-1-1-2">
      <div class="imgLoadC n_2 snipcss0-3-3-4 snipcss0-2-2-3">
        <div class="black_b image fadeStyle loaded snipcss0-4-4-5 snipcss0-3-3-4 style-QPgth" id="style-QPgth">
        </div>
      </div>
      <div class="square snipcss0-3-3-6 snipcss0-2-2-5">
        <div class="imgLoadC n_3 snipcss0-4-6-7 snipcss0-3-5-6">
          <div class="color_b image fadeStyle loaded snipcss0-5-7-8 snipcss0-4-6-7 style-xQog1" id="style-xQog1">
          </div>
        </div>
        <div class="image_container imgLoadC n_4 snipcss0-4-6-9 snipcss0-3-5-8">
          <div class="image fadeStyle loaded snipcss0-5-9-10 snipcss0-4-8-9 style-sfTQC" id="style-sfTQC"
          style="background-image: url('<?php echo BASE_URL; ?>uploads/<?php echo $aboutpage_img; ?>');">
          </div>
          <div class="imageCopyRight black snipcss0-5-9-11 snipcss0-4-8-10">
            <p class="snipcss0-6-11-12 snipcss0-5-10-11">
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-12 wow" data-splitting>
        <div class="section-titles" style="margin-top:10em;">
          <div class="container"> 
            <h1 class="section-heading"><?php echo $why_we_do_it; ?></h1>
          </div>
          <h5 class="text-center-1 service-head" style="margin-left: 5%; margin-right:5%;">
            <?php echo $why_we_do_it_desc; ?>
          </h5>
        </div>
        <!-- end section-titles --> 
      </div>
</section>
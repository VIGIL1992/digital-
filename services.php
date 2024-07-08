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

    $service1_image = $row['service1_image'];
    $service2_image = $row['service2_image'];
    $service3_image = $row['service3_image'];
    $service4_image = $row['service4_image'];
    $service5_image = $row['service5_image'];
    $service6_image = $row['service6_image'];
    $service7_image = $row['service7_image'];
}
?>

<section id="sec-btm-line" style="background-image: url('images/dark-pattern-bg.jpg');background-color:black;">
  <div class="container" style="max-width:1400px;" id="service">
    <div class="row">
      <div class="col-12 wow" data-splitting>
        <div class="section-titles" style="margin-top:10em;">
          <div class="container"> 
            <h1 class="section-heading"><?php echo $service_heading ?></h1>
          </div>
          <h5 class="text-center-1 service-head"><?php echo $service_sub_heading ?></h5>
        </div>
        <!-- end section-titles --> 
      </div>

    <div class="row bottom-line" style="margin:auto;">

      <div class="col-lg-3 wow fadeIn service-div right-line">
        <img class="service-white-img" src="<?php echo BASE_URL; ?>uploads/services/<?php echo $service1_image; ?>" alt="<?php echo $service1_name ?>">
        <h2 class="text-center-1 service-head"><strong><?php echo $service1_name ?></strong></h2>
        <h2 class="service-desc text-center-1">
        <?php echo $service1_desc ?>
        </h2>
      </div>
      
      <div class="col-lg-3 wow fadeIn service-div right-line">
        <img class="service-white-img" src="<?php echo BASE_URL; ?>uploads/services/<?php echo $service2_image; ?>" alt="<?php echo $service2_name ?>">
        <h2 class="text-center-1 service-head"><strong><?php echo $service2_name ?></strong></h2>
        <h2 class="service-desc text-center-1">
        <?php echo $service2_desc ?>
        </h2>
      </div>

      <div class="col-lg-3 wow fadeIn service-div right-line">
        <img class="service-white-img" src="<?php echo BASE_URL; ?>uploads/services/<?php echo $service3_image; ?>" alt="<?php echo $service3_name ?>">
        <h2 class="text-center-1 service-head"><strong><?php echo $service3_name ?></strong></h2>
        <h2 class="service-desc text-center-1">
        <?php echo $service2_desc ?>
        </h2>
      </div>
      
      <div class="col-lg-3 wow fadeIn service-div">
        <img class="service-white-img" src="<?php echo BASE_URL; ?>uploads/services/<?php echo $service4_image; ?>" alt="<?php echo $service4_name ?>">
        <h2 class="text-center-1 service-head"><strong><?php echo $service4_name ?></strong></h2>
        <h2 class="service-desc text-center-1">
        <?php echo $service4_desc ?>
        </h2>
      </div>

    </div>

      
    <!-- <div class="row" style="margin:auto;">

      <div class="col-lg-4 wow fadeIn service-div right-line">
        <img class="service-white-img" src="<?php echo BASE_URL; ?>uploads/services/<?php echo $service5_image; ?>" alt="<?php echo $service5_name ?>">
        <h2 class="text-center-1 service-head"><strong><?php echo $service5_name ?></strong></h2>
        <h2 class="service-desc text-center-1">
        <?php echo $service5_desc ?>
        </h2>
      </div>

      <div class="col-lg-4 wow fadeIn service-div right-line">
        <img class="service-white-img" src="<?php echo BASE_URL; ?>uploads/services/<?php echo $service6_image; ?>" alt="<?php echo $service6_name ?>">
        <h2 class="text-center-1 service-head"><strong><?php echo $service6_name ?></strong></h2>
        <h2 class="service-desc text-center-1">
        <?php echo $service6_desc ?>
        </h2>
      </div>

      <div class="col-lg-4 wow fadeIn service-div">
        <img class="service-white-img" src="<?php echo BASE_URL; ?>uploads/services/<?php echo $service7_image; ?>" alt="<?php echo $service7_name ?>">
        <h2 class="text-center-1 service-head"><strong><?php echo $service7_name ?></strong></h2>
        <h2 class="service-desc text-center-1">
        <?php echo $service7_desc ?>
        </h2>
      </div>

    </div> -->

    
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
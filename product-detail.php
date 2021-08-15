<?php 
include("header.php");
$q=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM category where status=1 and id=".$_GET['maincatid']));
$c=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM product where id=".$_GET['id']));

?>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Product Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php?id=<?php echo $q['id'];?>"><?php echo $q['name'];?></a></li>
            <li><?php echo $c['name'];?></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3">
            <div class="portfolio-details-slider swiper-container">
              <div class="align-items-center">
				<img src="<?php if($c['image']!=null && $c['image']!=''){ echo str_replace("../","",$c['image']);} else { echo "no-image-available.png";} ?>" class="img-fluid" alt="">

			</div>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="portfolio-info">
              <h3><?php echo $c['name'];?></h3>
			  <p><?php echo $c['description'];?></p>
			  <h3>Standard Data</h3>
			  <?php echo $c['sddata'];?>
              <br>
			  <div class="text-center">
				<a href="view.php?maincatid=<?php echo $_GET['maincatid'];?>&id=<?php echo $c['id'];?>"><button type="submit" class="btn btn-danger" id="VIEW" name="submit" value="submit" style="background-color: #d10027 !important;">VIEW</button></a>
				<a href="assets/pdf/<?php echo $c['catalogue'];?>" target="_blank"><button type="submit" class="btn btn-danger" id="DOWNLOADCATALOGUE" name="submit" value="submit" style="background-color: #d10027 !important;">DOWNLOAD CATALOGUE</button></a>
            </div>
            </div>
			
			
           
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
	<section id="services">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        
		<style>
			.box{
				padding: 0px !important;
			}
			.img-fluid {
			width: 100% !important;
		}
		</style>
        <div class="row gy-12">

          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
				<img src="<?php echo str_replace("../","",$c['drwaing']);?>" class="img-fluid" alt="">
          </div>
          </div>

          
        
        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php include "footer.php";?>
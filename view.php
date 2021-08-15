<?php 
include("header.php");
$q=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM category where status=1 and id=".$_GET['maincatid']));
$c=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM product where id=".$_GET['id']));
//echo "<pre>"; print_r($c);
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
<style>
.portfolio-details {
    padding-top: 0 !important;
}
#product-details,.portfolio-details h2 {
    color: #eb1a33;
    font-weight: 600;
}
	.imgcls img {
    width: 100% !important;
}
	.imgcls .col-lg-8  {
    width: 100%;
}
	.col-lg-4 {
     width: 100%;
}
</style>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="product-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-12">

			  <div class="col-lg-9">
				<div class="text-center">
					<h2><?php echo $c['name']; ?></h2>
					<hr>
					<p><?php echo $c['description'];?></p>
				</div>
			  </div>
			<div class="col-lg-3">
				<div class="portfolio-details-slider swiper-container">
				  <div class="align-items-center">
				  <img src="<?php if($c['image']!=null && $c['image']!=''){ echo str_replace("../","",$c['image']);} else { echo "no-image-available.png";} ?>" class="img-fluid" alt="">

				   </div>
				</div>
			  </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
 <section class="portfolio-details">
      <div class="container">
			<div class="row gy-12 imgcls">
			<?php echo $c['productdetails'];?>
			 </div>

      </div>
    </section><!-- End Portfolio Details Section -->
 </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php include "footer.php";?>
   
   <script>
       $(document).ready(function(){
          // alert()
         $("table").addClass('table table-bordered table-hover table-condensed');
        });

      

       
   </script>
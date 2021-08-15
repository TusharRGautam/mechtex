<?php 
include("header.php");
$q=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM category where status=1 and id=".$_GET['id']));
?>

  
  <section id="hero1">

    <div class="container">
      <div class="row" >
		<h1 class="text-center" style="color:#eb1a33;"><?php echo $q['name'];?></h1>
	  </div>
    </div>
   


  </section><!-- End Hero Section -->
<style>
[data-aos^=fade][data-aos^=fade].aos-animate {
    opacity: 1;
    transform: translateZ(0);
}
[data-aos][data-aos][data-aos-easing=ease-in-out], body[data-aos-easing=ease-in-out] [data-aos] {
    transition-timing-function: ease-in-out;
}
[data-aos][data-aos][data-aos-duration="1000"], body[data-aos-duration="1000"] [data-aos] {
    transition-duration: 1s;
}
[data-aos^=fade][data-aos^=fade] {
    opacity: 0;
    transition-property: opacity,transform;
}
@media (min-width: 576px)
.container, .container-sm {
    max-width: 540px;
}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
}
[data-aos][data-aos][data-aos-delay="100"].aos-animate, body[data-aos-delay="100"] [data-aos].aos-animate {
    transition-delay: .1s;
}
[data-aos^=fade][data-aos^=fade].aos-animate {
    opacity: 1;
    transform: translateZ(0);
}
[data-aos][data-aos][data-aos-delay="100"], body[data-aos-delay="100"] [data-aos] {
    transition-delay: 0;
}
[data-aos][data-aos][data-aos-easing=ease-in-out], body[data-aos-easing=ease-in-out] [data-aos] {
    transition-timing-function: ease-in-out;
}
[data-aos][data-aos][data-aos-duration="1000"], body[data-aos-duration="1000"] [data-aos] {
    transition-duration: 1s;
}
[data-aos^=fade][data-aos^=fade] {
    opacity: 0;
    transition-property: opacity,transform;
}
@media screen and (max-width: 768px)
[data-aos-delay] {
    transition-delay: 0 !important;
}
.align-items-stretch {
    align-items: stretch!important;
}
.d-flex {
    display: flex!important;
}
.team .member {
    margin-bottom: 20px;
    overflow: hidden;
    border-radius: 4px;
    background: #fff;
    box-shadow: 0px 2px 15px rgb(16 110 234 / 15%);
}
.team .member .member-img {
    position: relative;
    overflow: hidden;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
img, svg {
    vertical-align: middle;
}
.team .member .social {
    position: absolute;
    left: 0;
    bottom: 30px;
    right: 0;
    opacity: 0;
    transition: ease-in-out 0.3s;
    text-align: center;
}
.team .member .social a {
    transition: color 0.3s;
    color: #222222;
    margin: 0 3px;
    padding-top: 7px;
    border-radius: 4px;
    width: 36px;
    height: 36px;
    background: rgba(16, 110, 234, 0.8);
    display: inline-block;
    transition: ease-in-out 0.3s;
    color: #fff;
}
.team .member .social i {
    font-size: 18px;
}
[class^="bi-"]::before, [class*=" bi-"]::before {
    display: inline-block;
    font-family: bootstrap-icons !important;
    font-style: normal;
    font-weight: normal !important;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    vertical-align: -.125em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.team .member .member-info {
    padding: 25px 15px;
}
.team .member .member-info h4 {
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 18px;
    color: #124265;
}
.team .member .member-info span {
    display: block;
    font-size: 13px;
    font-weight: 400;
    color: #aaaaaa;
}

.btn-primary {
	color: #fff !important;
	background-color: #eb1a33 !important;
	border-color: #0d6efd !important;
}

</style>
 <section id="team" class="team section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">
	  <?php 
	   $a=mysqli_query($conn,"SELECT * FROM sub_category where catid=".$_GET['id']);
	   if(mysqli_num_rows($a)>0){
	   while($b=mysqli_fetch_array($a)){
		   //echo "<pre>"; print_r($b);
		   	  $c=mysqli_query($conn,"SELECT a.name,a.image,a.id,b.name as subcatname,b.id as scatid ,sddata FROM product a left join sub_category b ON a.subcatid=b.id where a.subcatid=".$b['id']);
		   ?>
		   <div class="row">
				<div class="section-title">
				  <h3 style="color:#eb1a33;" class="text-center"><?php echo $b['name'];?></h3>
				 </div>
				 <div class="row">
					<?php 
					$c1 = 0; 
					while($d=mysqli_fetch_array($c)){
						//echo "<pre>"; print_r($d);
						if($c1 % 6 == 0 && $c1 != 0) 
						  {
							echo '</div><div class="row">';
							$c1 = 0; 
						  }
						  else {
							$c1++;  
							  
						  }
						  
						  ?>
						  <div class="col-lg-2 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
								<div class="member">
								  <div class="member-img">
									<img src="<?php if($d['image']!=null && $d['image']!=''){ echo str_replace("../","",$d['image']);} else { echo "assets/img/product/no-image-available.png";} ?>" class="img-fluid" alt="">
								  </div>
								  <div class="member-info">
									<h4><?php echo $d['name']; ?></h4>
									<a href="<?php if($d['sddata']!=null && $d['sddata']!=''){?>product-detail.php?maincatid=<?php echo $_GET['id'];?>&id=<?php echo $d['id']; } else { echo "#";}?>" class="scroll btn btn-primary" >Read More</a>             
								</div>
								</div>
							  </div>
						  <?php
						}
					?>
					</div>
				</div>
	   <?php   }  } else {
			$c=mysqli_query($conn,"SELECT a.name,a.image,a.id,sddata,cat_id FROM product a left join category b ON a.cat_id=b.id where a.cat_id=".$_GET['id']);
		   //echo "<pre>"; print_r($b);
		   ?>
		   <div class="row">
				
				 <div class="row">
					<?php 
					$c1 = 0; 
					while($d=mysqli_fetch_array($c)){
						//echo "<pre>"; print_r($d);
						if($c1 % 6 == 0 && $c1 != 0) 
						  {
							echo '</div><div class="row">';
							$c1 = 0; 
						  }
						  else {
							$c1++;  
							  
						  }
						  
						  ?>
						  <div class="col-lg-2 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
								<div class="member">
								  <div class="member-img">
									<img src="<?php if($d['image']!=null && $d['image']!=''){ echo $d['image'];} else { echo "assets/img/product/no-image-available.png";} ?>" class="img-fluid" alt="">
								  </div>
								  <?php if($d['cat_id']==8){ ?>
								  <div class="member-info">
									<h4><?php echo $d['name']; ?></h4>
									<a href="view.php?maincatid=<?php echo $_GET['id'];?>&id=<?php echo $d['id'];?>"><button type="submit" class="btn btn-danger" id="VIEW" name="submit" value="submit" style="background-color: #d10027 !important;">Read More</button></a>
									</div>
								  <?php } else {
									  ?>
									  <div class="member-info">
									<h4><?php echo $d['name']; ?></h4>
									<a href="<?php if($d['sddata']!=null && $d['sddata']!=''){?>product-detail.php?maincatid=<?php echo $_GET['id'];?>&id=<?php echo $d['id']; } else { echo "#";}?>" class="scroll btn btn-primary" >Read More</a>   

							</div>
									  <?php 
								  }?>
								</div>
							  </div>
						  <?php
						}
					?>
					</div>
				</div>
		<?php } ?>
		
      </div>
    </section>
  <?php include "footer.php";?>
<script>
/*Scrolling*/
$(window).scroll(function(){
    var $maxScroll=300;
    var $maxScale=1.3;
    var $x=$(window).scrollTop()/100+1;
    if($(window).scrollTop()>$maxScroll) $x=$maxScale;
        $('#first .background').css({transform: 'scale('+$x+','+$x+')'});

});
</script>

<?php 
include("header.php");
?>
  <main id="main">
<style>
.blog {
    padding: 40px 0 20px 0;
}
section {
    padding: 60px 0;
    overflow: hidden;
}
*, ::after, ::before {
    box-sizing: border-box;
}
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
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
}
[data-aos=fade-up] {
    transform: translate3d(0,100px,0);
}
.blog .entry {
    padding: 30px;
    margin-bottom: 60px;
    box-shadow: 0 4px 16px rgb(0 0 0 / 10%);
}
.blog .entry .entry-img {
    max-height: 440px;
    margin: -30px -30px 20px -30px;
    overflow: hidden;
}
.blog .entry .entry-title {
    font-size: 28px;
    font-weight: bold;
    padding: 0;
    margin: 0 0 20px 0;
}
h1, h2, h3, h4, h5, h6 {
    font-family: "Roboto", sans-serif;
}
.blog .entry .entry-title a {
    color: #111;
    transition: 0.3s;
}
.blog .entry .entry-meta {
    margin-bottom: 15px;
    color: #777777;
}
.blog .entry .entry-meta ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    align-items: center;
    padding: 0;
    margin: 0;
}
.align-items-center {
    align-items: center!important;
}
.d-flex {
    display: flex!important;
}
.blog .entry .entry-meta i {
    font-size: 16px;
    margin-right: 8px;
    line-height: 0;
}
.blog .entry .entry-content .read-more a {
    display: inline-block;
    background: #1bbd36;
    color: #fff;
    padding: 6px 20px;
    transition: 0.3s;
    font-size: 14px;
    border-radius: 4px;
}
.blog .entry {
    padding: 30px;
    margin-bottom: 60px;
    box-shadow: 0 4px 16px rgb(0 0 0 / 10%);
}
.blog .entry .entry-meta a {
    color: #847872;
    font-size: 14px;
    display: inline-block;
    line-height: 1;
}
.blog .entry .entry-meta ul li + li {
    padding-left: 20px;
}
.align-items-center {
    align-items: center!important;
}
.d-flex {
    display: flex!important;
}
.blog .entry .entry-meta i {
    font-size: 16px;
    margin-right: 8px;
    line-height: 0;
}
.blog .blog-pagination {
    color: #444444;
}
.blog .blog-pagination ul {
    display: flex;
    padding: 0;
    margin: 0;
    list-style: none;
}
.justify-content-center {
    justify-content: center!important;
}
.blog .blog-pagination li {
    margin: 0 5px;
    transition: 0.3s;
}
.blog .blog-pagination li a {
    color: #111;
    padding: 7px 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}
a {
    color: #1bbd36;
    text-decoration: none;
}
.blog .blog-pagination li.active, .blog .blog-pagination li:hover {
    background: #1bbd36;
}
.blog .blog-pagination li {
    margin: 0 5px;
    transition: 0.3s;
}
.blog .blog-pagination li.active a, .blog .blog-pagination li:hover a {
    color: #fff;
}
.blog .blog-pagination li a {
    color: #111;
    padding: 7px 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}


.blog .blog-comments .reply-form {
    margin-top: 30px;
    padding: 30px;
    box-shadow: 0 4px 16px rgb(0 0 0 / 10%);
}
.blog .blog-comments .reply-form h4 {
    font-weight: bold;
    font-size: 22px;
}
.blog .blog-comments .reply-form p {
    font-size: 14px;
}
.blog .blog-comments .reply-form .form-group {
    margin-bottom: 25px;
}
.blog .blog-comments .reply-form input {
    border-radius: 4px;
    padding: 10px 10px;
    font-size: 14px;
}
.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.blog .blog-comments .reply-form .btn-primary {
    border-radius: 4px;
    padding: 10px 20px;
    border: 0;
    background-color: #111;
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
@media (min-width: 1200px){
#hero1 .container {
    max-width: 100% !important;
}
}
  #hero1 {
    width: 100%;
    height: auto;
    position: relative;
    background-color: #ffffff;
    background-size: cover;
    padding: 0;
}
.entries {
    padding: 0 !important;
}
.blog .entry .entry-img {
    max-height: 440px;
    overflow: hidden;
}
</style>
       <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->
 <section id="hero1" class="blog">

    <div class="container">
     <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/New_Blog.jpg" alt="" class="img-fluid">
              </div>
			</article>

       </div>
	   
    </div>
   </div>
   


  </section><!-- End Hero Section -->

    <section id="blog" class="blog">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                  Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut dolores velit.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                  Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est non omnis. Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem ducimus sint id earum ut nesciunt sed corrupti nemo.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

        <div class="blog-comments">

			<div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div>
		
		</div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php include "footer.php";?>
   <script>
   function checkjob(){
	  $("#portfolio-details").css("display","none");
	  $("#portfolio-details1").css("display","block");
   }
   function backto(){
	  $("#portfolio-details").css("display","block");
	  $("#portfolio-details1").css("display","none");
   }
   
   </script>
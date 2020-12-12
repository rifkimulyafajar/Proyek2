		<div class="bradcam_area breadcam_bg overlay2">
		</div>
		<!-- bradcam_area_end -->

		<!--================Blog Area =================-->
		<section class="blog_area single-post-area section-padding">
		   <div class="container">
		      <div class="row">
		         <div class="col-lg-10 posts-list">
		            <div class="single-post">
		               <h1><?= $donasi['nama']; ?></h1>
		               <br>
		               <div class="feature-img">
		                  <img width="900" height="500" src="<?= base_url('upload/tujuandonasi/' . $donasi['image']) ?>" alt="">
		               </div>
		               <div class="blog_details">
		                  <ul class="blog-info-link mt-3 mb-4">
		                     <li><h5><b>Alamat :</b> <?= $donasi['alamat']; ?></h5></li>
		                  </ul>
		                  <h5 class="text-justify">
		                  	<b>Deskripsi : </b><br><br>
		                    <?= $donasi['deskripsi']; ?>
		                  </h5> <br><hr><hr>
		                  <h5>
		                  	<b>Donasi langsung ke No. Rekening berikut :</b> <br><br>
		                  	Bank BRI &nbsp;:&nbsp; 1234-56 (admin)<br>
		                  	LinkAja &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; 119876
		                  </h5>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</section>
		<!--================ Blog Area end =================-->
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
		                  	<b>Donasi langsung melalui kami ke No. Rekening berikut :</b> <br><br>
		                  	Bank BRI &nbsp;:&nbsp; 1234-56 (admin)<br>
		                  	LinkAja &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; 119876
		                  	<hr><hr><br>
		                  </h5>
		               </div>
		            </div>
		         </div>
		      </div>

		      <div class="row">
                    <div class="col-12">
                    	<hr>
                        <h2 class="contact-title">Data Diri</h2>
                        <h5>Login dulu sebelum mengisi form dibawah</h5>
                    </div>
                    <div class="col-lg-10">

                    <?php if (!isset($_SESSION['user'])) : ?>

						<form class="form-contact contact_form" action="<?= base_url() ?>login" method="post" novalidate="novalidate">

					<?php endif;

					if (isset($_SESSION['user'])) : ?>

                        <form class="form-contact contact_form" action="<?= base_url() ?>user/tambah_donasi/<?= $donasi['id_tujuan'] ?>" method="post" novalidate="novalidate">

                            <div class="row">
                            	<div class="col-4">
                                    <div class="form-group">
                                        <input class="form-control" name="id_user" type="hidden" value="<?php echo $_SESSION['id_user']; ?>">
                                    </div>
                                </div>

                    <?php endif; ?>

                    			<div class="col-4">
                                    <div class="form-group">
                                        <input class="form-control" name="id_donasi" type="hidden" value="<?php echo $donasi['id_tujuan']; ?>">
                                    </div>
                                </div>
                    			<div class="col-4">
                                    <div class="form-group">
                                        <input class="form-control" name="tanggal" type="hidden" value="<?php echo date('Y-m-d') ?>">
                                    </div>
                                </div>
                            	<div class="col-12">
                                    <div class="form-group">
                                    	<label>Upload bukti transfer anda</label>
                                        <input class="form-control" name="bukti_tf" id="bukti_tf" type="file">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="notelp" id="notelp" type="number" placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="jumlah" id="jumlah" type="number" placeholder="Jumlah Donasi">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="note" id="note" rows="5" placeholder="Catatan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
		   </div>
		</section>
		<!--================ Blog Area end =================-->
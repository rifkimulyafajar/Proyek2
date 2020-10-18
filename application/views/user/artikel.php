        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Artikel Untuk Anda</h3>
        </div>
        <!-- bradcam_area_end -->

    <!-- our_latest_blog_start -->
    <div class="popular_courses">
        <div class="container">
        	<div class="row">
	            <div class="col-xl-12">
	                <div class="section_title text-center mb-100">
	                 	<img src="<?php echo base_url('asset/user/img/artikel.png') ?>" width=100 height=100>
	                    <h3>Ini Artikel</h3>
	                    <p>
	                    	Artikel - artikel yang kayaknya cocok untuk anda.
	                    </p>
	                </div>
	            </div>
            	<div class="row">

            		<?php foreach ($artikel as $a) { ?>

                	<div class="col-xl-4 col-md-4">
                    	<div class="single_latest_blog">
                        	<div class="thumb">
                            	<img width="362" height="250" src="<?= base_url('upload/artikel/' . $a["gambar"]) ?>" alt="">
                        	</div>
                        	<div class="content_blog">
                            	<div class="date">
                                	<p><?= $a["tanggal"] ?></p>
                            	</div>
                            	<div class="blog_meta">
                            	    <h3><a href="#"><?= $a["judul"]; ?></a></h3>
                            	    <br><br>
                            	</div>
                        	</div>
                    	</div>
                	</div>

                	<?php } ?>

	                <!-- <div class="col-xl-4 col-md-4">
	                    <div class="single_latest_blog">
	                        <div class="thumb">
	                            <img width="362" height="250" src="<?php //echo base_url('asset/user/img/default.jpg') ?>" alt="">
	                        </div>
	                        <div class="content_blog">
	                            <div class="date">
	                                <p>12 Jun, 2019</p>
	                            </div>
	                            <div class="blog_meta">
	                                <h3><a href="#">----- Judul Artikel -----</a></h3>
	                            </div>
	                            <p class="blog_text">
	                                isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel 
	                            </p>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4 col-md-4">
	                    <div class="single_latest_blog">
	                        <div class="thumb">
	                            <img width="362" height="250" src="<?php //echo base_url('asset/user/img/default.jpg') ?>" alt="">
	                        </div>
	                        <div class="content_blog">
	                            <div class="date">
	                                <p>12 Jun, 2019</p>
	                            </div>
	                            <div class="blog_meta">
	                                <h3><a href="#">----- Judul Artikel -----</a></h3>
	                            </div>
	                            <p class="blog_text">
	                                isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel isi artikel 
	                            </p>
	                        </div>
	                    </div>
	                </div> -->
	            </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->
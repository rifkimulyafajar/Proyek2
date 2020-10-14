		<div class="bradcam_area breadcam_bg overlay2">
            <h3>Kalendar Kesuburan</h3>
        </div>
        <!-- bradcam_area_end -->

        <div class="popular_courses">
	        <div class="container">
	            <div class="row">
	                <div class="col-xl-12">
	                    <div class="section_title text-center mb-100">
	                    	<img src="<?php echo base_url('asset/user/img/kalendar.png') ?>" width=100 height=100>
	                        <h3>Kalendar Kesuburan</h3>
	                        <p>Hitung dari hari pertama menstruasi dalam satu bulan hingga ke bulan berikutnya. <br>
	                        	Misalkan di bulan Juni anda datang bulan pada tanggal 1, lalu di bulan Juli pada tanggal 2. <br>
	                        	Jarak waktu 1 Juni hingga 2 Juli adalah 32 hari. <br>
	                        	Disarankan untuk menghitung siklus menstruasi selama 6 hingga 12 bulan.
	                        </p>
	                    </div>
	                </div>
	                <div class="col-lg-12">
	                	<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
		                	<div class="row">
		                        <div class="col-sm-12">
		                           	<div class="form-group">
		                                <input class="form-control valid" name="tanggal" id="tanggal" type="date" placeholder="Tanggal Datang Bulan">
		                            </div>
		                        </div>
		                        <div class="col-12">
		                            <div class="form-group">
		                                <input class="form-control" name="mpendek" id="mpendek" type="number" placeholder="Lama Siklus Menstruasi Terpendek (hari)">
		                            </div>
		                        </div>
		                        <div class="col-12">
		                            <div class="form-group">
		                                <input class="form-control" name="mpanjang" id="mpanjang" type="number" placeholder="Lama Siklus Menstruasi Terpanjang (hari)">
		                            </div>
		                        </div>
		                    </div>
		                    <div class="form-group mt-2">
		                        <button type="submit" class="button button-contactForm boxed-btn">Hitung</button>
		                    </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
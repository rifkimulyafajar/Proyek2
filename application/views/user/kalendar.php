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
	                	<form class="form-contact contact_form" action="<?= base_url()?>user/kalendar" method="post" novalidate="novalidate">
		                	<div class="row">
		                        <div class="col-sm-12">
		                           	<div class="form-group">
		                           		<label>Hari pertama haid terakhir Anda</label>
		                                <?php if (isset($_POST['hitung'])) { ?>
		                                	<?php $tanggal = $_POST['tanggal']; ?>
		                                	<input class="form-control valid" name="tanggal" id="tanggal" type="date" placeholder="Tanggal Datang Bulan" value="<?php echo($tanggal) ?>">
		                                <?php } else { ?>
		                                	<input class="form-control valid" name="tanggal" id="tanggal" type="date" placeholder="Tanggal Datang Bulan">
		                                <?php } ?>
		                            </div>
		                        </div>
		                        <div class="col-12">
		                            <div class="form-group">
		                            	<label>Lama Siklus Menstruasi Terpendek (hari)</label>
		                            	<?php if (isset($_POST['hitung'])) { ?>
		                            	<?php $mpendek = $_POST['mpendek']; ?>
		                            		<input class="form-control" name="mpendek" id="mpendek" type="number" placeholder="Lama Siklus Menstruasi Terpendek (hari)" value="<?php echo($mpendek) ?>">
		                            	<?php } else { ?>
		                            		<input class="form-control" name="mpendek" id="mpendek" type="number" placeholder="Lama Siklus Menstruasi Terpendek (hari)">
		                            	<?php } ?>
		                            </div>
		                        </div>
		                        <div class="col-12">
		                            <div class="form-group">
		                            	<label>Lama Siklus Menstruasi Terpanjang (hari)</label>
		                            	<?php if (isset($_POST['hitung'])) { ?>
		                            	<?php $mpanjang = $_POST['mpanjang']; ?>
		                            		<input class="form-control" name="mpanjang" id="mpanjang" type="number" placeholder="Lama Siklus Menstruasi Terpanjang (hari)" value="<?php echo($mpanjang) ?>">
		                            	<?php } else { ?>
		                            		<input class="form-control" name="mpanjang" id="mpanjang" type="number" placeholder="Lama Siklus Menstruasi Terpanjang (hari)">
		                            	<?php } ?>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="form-group mt-2">
		                        <button type="submit" name="hitung" class="button button-contactForm boxed-btn">Hitung</button>
		                    </div>
		                    <div class="form-group mt-2">

		                    	<?php if (isset($_POST['hitung'])) {
		                    		$tanggal = $_POST['tanggal'];
		                    		$mpendek = $_POST['mpendek'];
									$mpanjang = $_POST['mpanjang'];

									$hasil1 = $mpendek - 18;
									$hasil2 = $mpanjang - 11;

									$awal = date('d-F-Y', strtotime('+'.$hasil1.' days', strtotime($tanggal)));
									$akhir = date('d-F-Y', strtotime('+'.$hasil2.' days', strtotime($tanggal)));

		                    	?>
		                    	<br>
		                    	<center>
		                    		<div class="card text-center">
									  <div class="card-header">
									    <h3>HASIL PERHITUNGAN</h3>
									  </div>
									  <div class="card-body">
									    <h3>Masa subur anda : Mulai dari hari ke-<b><?php echo $hasil1; ?></b> dan berakhir hari ke-<b><?php echo $hasil2; ?></b></h3>

				                    	<h3>Masa subur anda : <b><?php echo $awal; ?></b> sampai <b><?php echo $akhir; ?></b></h3>
									  </div>
									  <div class="card-footer text-muted">
									    <a href="<?= base_url()?>user/kalendar" type="button" class="button button-contactForm boxed-btn">Hitung Ulang</a>
									  </div>
									</div>
		                    	</center>

		                    	<?php } ?>
		                    </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
		<div class="bradcam_area breadcam_bg overlay2">
            <h3>Forum Diskusi</h3>
        </div>

		<div class="popular_courses">
	        <div class="container">
	        	<div class="card">
				  <div class="card-header">
				    <h4>Topik <?= $topik['id_topik'] ?></h4>
				  </div>
				  <div class="card-body">
				  	<p><b><?= $topik['tanggal'] ?></b></p>
				    <h4 class="card-text">Topik : <?= $topik['topik'] ?></h4>
				    <p class="text-right">Tanggapan (<?= $diskusi ?>)</p>
				  </div>
				</div>
				<br><br>
				<div>
					<form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
	                	<div class="row">
	                        <div class="col-sm-12">
	                           	<div class="form-group">
	                                <input class="form-control valid" name="komentar" id="komentar" type="text" placeholder="Tanggapan Anda">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group mt-2">
	                        <button type="submit" class="button button-contactForm boxed-btn">KOMENTAR</button>
	                    </div>
                    </form>
                </div>
	        </div>
	        <br><br><br>
	        <div class="container">
	        	<div class="row">
					<h2>* Tanggapan</h2>
				</div>
				<br>

				<div class="card">
				  <div class="card-header">
				    <h4>Nama penanggap</h4>
				  </div>
				  <div class="card-body">
				  	<p><b>2020-10-21 12:12:12</b></p>
				  	<p>tanggapan tanggapan tanggapan tanggapan tanggapan tanggapan tanggapan tanggapan</p>
				  </div>
				</div>
				<br>

				<div class="card">
				  <div class="card-header">
				    <h4>Nama penanggap</h4>
				  </div>
				  <div class="card-body">
				  	<p><b>2020-10-21 12:12:12</b></p>
				  	<p>tanggapan tanggapan tanggapan tanggapan tanggapan tanggapan tanggapan tanggapan</p>
				  </div>
				</div>
				
	        </div>
	    </div>
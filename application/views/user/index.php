    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="<?php echo base_url('asset/user/img/banner/edu_ilastration.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Halooo.. :) <br>
                                Selamat Datang
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">
        <div class="all_courses">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <h3>Berita Untuk Anda</h3>
                            <p>
                                Berita - berita populer saat ini yang mungkin cocok untuk anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">

                            <?php
                            $query = $this->db->query("SELECT * FROM berita LIMIT 3");

                            if ($query === NULL) { ?>

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="section_title text-center mb-100">
                                            <h4>Maaf, hari ini belum ada artikel</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <?php 
                            } else {

                            foreach ($query->result_array() as $br) { ?>

                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_courses">
                                    <div class="thumb">
                                        <a href="<?= base_url()?>user/detail_berita/<?= $br['id_berita'];?>">
                                            <img width="362" height="250" src="<?= base_url('upload/berita/' . $br["foto"]) ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="courses_info">
                                        <h3><a href="<?= base_url()?>user/detail_berita/<?= $br['id_berita'];?>"><?php echo $br['judul']; ?></a></h3>
                                        <div class="star_prise d-flex justify-content-between">
                                            <div class="star">
                                                <span></span>
                                            </div>
                                            <div class="star">
                                                <span>
                                                    <?php echo $br['Tanggal']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } } ?>

                            <div class="col-xl-12">
                                <div class="more_courses text-center">
                                    <a href="<?php echo base_url('user/berita'); ?>" class="boxed_btn_rev">Lebih banyak Berita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_courses_end-->

    <!-- our_latest_blog_start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Artikel Untuk Anda</h3>
                        <p>
                            Artikel - artikel yang mungkin cocok juga untuk anda.
                        </p>
                    </div>
                </div>
                <div class="row">

                <?php
                $query = $this->db->query("SELECT * FROM artikel LIMIT 3");

                if ($query === NULL) { ?>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-100">
                                <h4>Maaf, hari ini belum ada artikel</h4>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <?php 
                } else {

                foreach ($query->result_array() as $ar) { ?>

                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <a href="<?= base_url() ?>user/detail_artikel/<?= $ar['id_artikel']; ?>">
                                <img width="362" height="250" src="<?= base_url('upload/artikel/' . $ar["gambar"]) ?>" alt="">
                            </a>                            
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p><?php echo $ar['Tanggal']; ?></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="<?= base_url()?>user/detail_artikel/<?= $ar['id_artikel'];?>"><?php echo $ar['judul']; ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } } ?>

                    <div class="col-xl-12">
                        <div class="more_courses text-center">
                            <a href="<?php echo base_url('user/artikel'); ?>" class="boxed_btn_rev">Lebih banyak Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->


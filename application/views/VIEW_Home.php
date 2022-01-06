<div class="container" style="width:100%;">

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="active" style="text-decoration: none;">
                        <a href="<?php echo site_url('CTR_Login') ?>" style="margin-left: 1090px;" class="btn btn-primary"><i class="icon-user"></i>&nbsp;Login</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main hero unit for a primary marketing message or call to action -->
        <br>
        <div class="logo">

        </div>
        <div class="banner" style="width:100%;">
        </div>

        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#"></a>
                <ul style="margin-left: 133px;" class="nav">
                    <li class="active"><a href="#"><i class="icon-home icon-large"></i> Home</a></li>
                    <li><a href="<?php echo site_url('CTR_Product'); ?>"><i class="icon-th-list icon-large"></i> Skills</a></li>
                    <li><a href="<?php echo site_url('CTR_Gallery'); ?>"><i class="icon-picture icon-large"></i> Gallery</a></li>
                    <li><a href="<?php echo site_url('CTR_About'); ?>"><i class="icon-book icon-large"></i> About Us</a></li>
                    <li><a href="<?php echo site_url('CTR_Contact'); ?>"><i class="icon-phone icon-large"></i> Contact Us</a></li>
                </ul>
            </div>
        </div>

        <div id="sliderFrame">
            <div id="slider">
                <?php foreach ($daftar_slider as $row) { ?>
                    <a href="#">
                        <img src="<?php echo base_url('gambar/gallery/' . $row->Photo) ?>">
                    </a>
                <?php } ?>
                <!--
          <a class="lazyImage" href="<?php echo base_url(); ?>assets/images/wel.png" title=""></a>
            <a href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/images/kampus.png" alt="" /></a>
            <a class="lazyImage" href="<?php echo base_url(); ?>assets/images/emyu.jpg" title=""></a>
            <a href=""><b data-src="<?php echo base_url(); ?>assets/images/ls.png"></b></a>
            <a class="lazyImage" href="<?php echo base_url(); ?>assets/images/nt.jpg" title=""></a>-->
            </div>
            <!--thumbnails-->
            <?php foreach ($daftar_skills as $row) { ?>
                <div id="thumbs">
                    <div class="thumb">
                        <div class="frame">
                            <img src="<?php echo base_url('gambar/skill/' . $row->Photo) ?>">
                        </div>
                        <div class="thumb-content">
                            <p><?php echo $row->Name; ?></p><?php echo $row->Description; ?>
                        </div>
                        <div style="clear: both;"></div>
                        <!-- <div class="frame"><img src="<?php echo base_url(); ?>assets/images/wel.png" /></div>
                <div class="thumb-content"><p>Welcome</p> Welcome To My Web Profile.</div>
                <div style="clear:both;"></div>
            </div>  
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/kampus.png" /></div>
                <div class="thumb-content"><p>My Campus</p>Politeknik LP3I Jakarta</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/emyu.jpg" /></div>
                <div class="thumb-content"><p>Football</p>My Favorite Football</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/ls.png" /></div>
                <div class="thumb-content"><p>Basketball</p>My Hobby</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/nt.jpg" /></div>
                <div class="thumb-content"><p>Naruto</p>My Favorite Anime</div>
                <div style="clear:both;"></div>
            </div>	-->

                    </div>
                </div>
            <?php } ?>
            <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
            <div style="clear:both;height:0;"></div>
        </div>
        <br><br><br>
        <!-- Example row of columns -->
        <div class="row">
            <div class="span9" style="width:70%;">
                <div class="latest"><i class="icon-info-sign icon-large"></i> Informasi Terkini </div>
                <div style="padding-left: 20px; padding-right: 10px; padding-bottom: 300px;" class="info">
                    <?php foreach ($daftar_info as $row) { ?>

                        <p style="text-align: left;"><a href="<?php echo base_url('gambar/info/' . $row->Photo) ?>" class="img-rounded" rel="zoom-id:zoom; opacity-reverse:true;"></a><br>
                            <img src="<?php echo base_url('gambar/info/' . $row->Photo) ?>" width="250" height="150" alt="" />
                        </p></a>
                        <br>
                        <center><b><?php echo $row->tgl_info; ?></b></center>
                        <div style="padding-right: 10px;"><b>
                                <?php echo $row->Title; ?>. Selengkapnya <a href="#detail<?php echo $row->Information_ID; ?>" style="color: darkred;" data-toggle="modal">Klik Disini</a></b></div>

                    <?php } ?>
                </div>
            </div>
            <?php foreach ($daftar_info as $row) { ?>
                <div style="width: 1000px; height: 600px; margin-left: -500px; margin-top: -300px;" id="detail<?php echo $row->Information_ID; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <div class="alert alert-success">
                            Informasi Terkini
                        </div>
                        <div class="modal-image">
                            <center><img src="<?php echo base_url('gambar/info/' . $row->Photo) ?>" width="250" height="150" alt="" /></center>
                        </div>
                        <hr>
                        <div class="modal-judul">
                            <center>
                                <h4><?php echo $row->Title; ?></h4>
                            </center>
                        </div>
                        <div class="modal-body" style="text-align:justify;">
                            <center><b><?php echo $row->tgl_info; ?></b></center>
                            <?php echo $row->Content; ?>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal"><i class="icon-remove"></i>Close</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="span3">
                <div class="grey">
                    <h3>
                        <center><i class="icon-book icon-large"></i> Mission and Vision</center>
                    </h3>
                </div>
                <p style="text-align: justify;"><b><i class="icon-book"></i> Visi</b><br><br>
                    Visi pribadi dalam hidup saya adalah <strong>Menjadi manusia yang tangguh, berbakat atau ahli pada satu bidang tertentu, mensejahterakan keluarga, berkarya untuk kemajuan diri sendiri dan mati dalam keadaan beriman serta bertaqwa kepada Allah.</strong>
                </p>
                <p>
                <div class="pull-right"><a class="btn" href="<?php echo site_url('CTR_About'); ?>">View More
                        &raquo;</a></div>
                </p><br>

                <br><br><br>
                <div class="grey">
                    <center>
                        <p style="font-size:18px;"><b><i class="icon-sitemap icon-large"></i> Tempat Tinggal </b>
                    </center>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3744158938584!2d106.88883561434055!3d-6.214252962596848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4a07d8667d7%3A0x601582cc6ffc934f!2sJl.%20Cipinang%20Lontar%2C%20RW.6%2C%20Cipinang%20Muara%2C%20Kecamatan%20Jatinegara%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013420!5e0!3m2!1sid!2sid!4v1626284828649!5m2!1sid!2sid" width="300" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <br><br><br>
                <a href="https://www.facebook.com/"><img src="<?php echo base_url(); ?>assets/images/bnr_facebook.png"></a><br><br>
                <a href="https://www.twitter.com/"><img src="<?php echo base_url(); ?>assets/images/bnr_twitter.png"></a>
            </div>
        </div>
        <div style="padding-left: 50px;"><?php echo $this->pagination->create_links(); ?></div>
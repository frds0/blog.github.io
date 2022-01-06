<!DOCTYPE html>
<html lang="en">
  <body>

     <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="active" style="text-decoration: none;">
                            <a href="<?php echo site_url('CTR_Login')?>" style="margin-left: 1080px;"
                                class="btn btn-primary"><i class="icon-user"></i>&nbsp;Login</a>
                        </div>
                    </div>
                </div>
            </div>

    <div style="width: 100%;" class="container">
	

      <!-- Main hero unit for a primary marketing message or call to action -->
	  <br>
			<div class="logo">
		</div>
		  <div style="width: 100%;" class="banner">
        
    
      </div>
	  
	  <div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"></a>
    <ul style="margin-left: 133px;" class="nav">
      <li><a href="<?php echo site_url('CTR_Index'); ?>"><i class="icon-home icon-large"></i> Home</a></li>
      <li><a href="<?php echo site_url('CTR_Product'); ?>"><i class="icon-th-list icon-large"></i> Skills</a></li>
       <li class="active"><a href="#"><i class="icon-picture icon-large"></i> Gallery</a></li>
      <li><a href="<?php echo site_url('CTR_About'); ?>"><i class="icon-book icon-large"></i> About Us</a></li>
      <li><a href="<?php echo site_url('CTR_Contact'); ?>"><i class="icon-phone icon-large"></i> Contact Us</a></li>
    </ul>
  </div>
</div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span9" style="width:70%;">
          <div class="latest"><i class="icon-picture icon-large"></i> Sertifikat Gallery</div>		          
    <?php foreach ($daftar_gallery as $row) {
      ?>
         <div style="padding-bottom: 300px; padding-left: 40px;">
	<div class="gallery"> <a href="<?php echo base_url('gambar/gallery/'.$row->Photo)?>" class="img-rounded" rel="zoom-id:zoom;opacity-reverse:true;"></a> 
    <img src="<?php echo base_url('gambar/gallery/'.$row->Photo)?>" width="110" alt=""></div></div>  
		<?php } ?>
        </div>
        <div class="span3">          
        <div class="grey">   <h3><center><i class="icon-book icon-large"></i> Mission and Vision</center></h3></div>
          <p style="text-align: justify;"><b><i class="icon-book"></i> Visi</b><br><br>

Visi pribadi dalam hidup saya adalah <strong>Menjadi manusia yang tangguh, berbakat atau ahli pada satu bidang tertentu, mensejahterakan keluarga, berkarya untuk kemajuan diri sendiri dan mati dalam keadaan beriman serta bertaqwa kepada Allah.</strong>
</p>
          <p><div class="pull-right"><a class="btn" href="<?php echo site_url('CTR_About'); ?>">View More &raquo;</a></div></p><br><br><br>
		  
		  
		   <div class="grey">  <center><p style="font-size:18px;"><b><i class="icon-sitemap icon-large"></i> Tempat Tinggal</b></center></div>
		  		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3744158938584!2d106.88883561434055!3d-6.214252962596848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4a07d8667d7%3A0x601582cc6ffc934f!2sJl.%20Cipinang%20Lontar%2C%20RW.6%2C%20Cipinang%20Muara%2C%20Kecamatan%20Jatinegara%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013420!5e0!3m2!1sid!2sid!4v1626284828649!5m2!1sid!2sid" width="300" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe> <br><br>

		  
		  <a href="https://www.facebook.com/"><img src="<?php echo base_url(); ?>assets/images/bnr_facebook.png"></a><br><br>
		   <a href="https://www.titter.com/"><img src="<?php echo base_url(); ?>assets/images/bnr_twitter.png"></a>
        </div>
      </div>
      <div style="padding-left: 50px;"><?php echo $this->pagination->create_links();?></div>
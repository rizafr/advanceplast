<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
						<div class="slider-text-inner">
							<h2>Who We Are</h2>
							<p class="fh5co-lead"> - Advanceplast -</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

<div class="fh5co-about animate-box">
	<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
		<h2>About Us</h2>
		<p>Company in PVC Heat Stabilizer and Plastic Masterbatch within ASIA with the commitment to increase asset of the company strategically</p>
	</div>
	<div class="container">
		<div class="col-md-12">
			<figure>
				<img src="<?php echo base_url().'assets/images/logo.png'?>" alt="Advanceplast" class="img-responsive">
			</figure>
		</div>
		
		
	</div>
</div>

<div class="fh5co-services animate-box fadeInUp animated" id="history">
	<div class="container">
	<h3>History</h3>
	<ul>
		<li>Menjadi Perusahaan IT Profesional dengan solusi dan layanan yang optimal serta memiliki daya saing</li>
		<li>Since 2006 expanded the business into Polymer Masterbatch & Compounds, PLANT 2</li>
		<li>Subsidiary of PT Lautan Luas Tbk</li>
	</ul>
</div>
</div>

<div class="fh5co-team animate-box" id="corporate-vision">
	<div class="container">
	<h3>Corporate Vision</h3>
	<quote>
		“To be the well known Company in PVC Heat Stabilizer and Plastic Masterbatch within ASIA with the commitment to increase asset of the company strategically”
	</quote>
	<p>
		Through :
	</p>
	<ul>
		<li>Producing high quality product based on customer needs</li>
		<li>Giving best services and cooperating with our valuable customers to achieve mutual benefits & partnership</li>
		<li>Rewarding all employees’ efforts with our motto:</li>
	</ul>
	<quote>
		“To be effective and efficient in all Company aspects”
	</quote>
</div>
</div>


<div class="fh5co-team animate-box" id="our-distribution-network">
	<div class="container">

		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Distribution Network</h2>
			</div>

			<div class="col-md-12">
				<a class="example-image-link" href="<?php echo base_url().'assets/images/distribution-newtork.png'?>" data-lightbox="gallery" data-title="Our Distribution Network"><img class="example-image img-responsive" src="<?php echo base_url().'assets/images/distribution-newtork.png'?>" style="display: block; margin: 0 auto;"/></a>

			</div>
		</div>
	</div>
</div>

<div class="fh5co-services animate-box" id="our-competitive-advantages">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
				<h2>Our Competitive Advantages</h2>
			</div>
			<div class="col-md-12">
				<div class="col-md-3 text-center item-block">
					<span class="icon">
						<img src="<?php echo base_url().'theme/images/30.svg'?>" class="img-responsive">
					</span>
					<h3>Product</h3>
					<p>Tingkatkan kinerja perusahaan dengan Software yang sesuai dengan Business Process anda.</p>
					<p><a href="<?php echo base_url().'portfolio'?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-3 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/18.svg'?>" class="img-responsive"></span>
					<h3>Development</h3>
					<p>Wide Network of Material source</p>
					<p>Expert and Experience R&D Team</p>
					<p>Responsive development progress</p>
					<p><a href="<?php echo base_url().'portfolio'?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-3 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/27.svg'?>" class="img-responsive"></span>
					<h3>Post-Sales Services</h3>
					<p>Strong CSR Team & Program</p>
					<p>Partnership Cooperation</p>
					<p><a href="<?php echo base_url().'portfolio'?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-3 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/27.svg'?>" class="img-responsive"></span>
					<h3>Support Services</h3>
					<p>Supporting Partners with advance experience & technology</p>
					<p>State of the art Laboratory & QC Equipment</p>
					<p>Integrated logistics</p>
					<p><a href="<?php echo base_url().'portfolio'?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="fh5co-team animate-box container" id="certifications">
	<div class="row"><br/>
		<center><h2>Certifications</h2></center>
		<?php foreach ($data->result() as $row) :	?>
			<div class="col-md-4">
				<a class="example-image-link" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-lightbox="gallery" data-title="<?php echo $row->galeri_judul;?>"><img class="example-image img-responsive" src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="<?php echo $row->galeri_judul;?>"/></a>
			</div>
		<?php endforeach;?>
	</div>
</div>

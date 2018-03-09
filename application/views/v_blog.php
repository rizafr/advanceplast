<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url().'theme/images/slide_2.jpg'?>);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
						<div class="slider-text-inner">
							<h2>Our Blog</h2>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

<div class="fh5co-services">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
				<h2>ARTIKEL TERBARU</h2>
			</div>
			<div class="col-container">
				<?php
				foreach ($data->result_array() as $j) :
					$post_id=$j['tulisan_id'];
					$post_judul=$j['tulisan_judul'];
					$post_isi=$j['tulisan_isi'];
					$post_author=$j['tulisan_author'];
					$post_image=$j['tulisan_gambar'];
					$post_tglpost=$j['tanggal'];
					$post_slug=$j['tulisan_slug'];
					?>
					<div class="col-md-4">
						<div class="col">
							<a class="fh5co-entry" href="<?php echo base_url().'artikel/'.$post_slug;?>">
								<figure>
									<img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="" class="img-responsive">
								</figure>
								<div class="fh5co-copy">
									<h3><?php echo $post_judul;?></h3>
									<span class="fh5co-date"><?php echo $post_tglpost.' | '.$post_author;?></span>
									<?php echo limit_words($post_isi,20).'...';?>
								</div>
							</a>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<center><?php echo $page;?></center>
</div>


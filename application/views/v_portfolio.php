	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
				<li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h2>Our Awesome Products</h2>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>

	<div id="fh5co-grid-products" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>See our products</h2>
				</div>
			</div>
		</div>
		<?php
		foreach ($data->result_array() as $i) :
			$port_id=$i['port_id'];
			$port_judul=$i['port_judul'];
			$port_deskripsi=$i['port_deskripsi'];
			$port_author=$i['port_author'];
			$port_image=$i['port_image'];
			$port_tglpost=$i['tanggal'];
			$port_kategori = $i['port_kategori'];
			 $options_kategori = array(
                '1' => 'Product and Application',
                '2' => 'R & D Facility',
                '3' => 'Product Facility',
              );
             $kategori =  isset($options_kategori[$port_kategori]) ? $options_kategori[$port_kategori] : 'N/A';
             $url=base_url().'portfolio/detail/'.$i['port_id'];
			?>
			<div class="col-md-4">
				<a href="<?= $url;?>" ><img src="<?php echo base_url().'assets/images/'.$port_image;?>" class="img-responsive"></a>
				<div class="v-align">
					<div class="v-align-middle"><br/>
						<h3 class="title"><?php echo $port_judul;?></h3>
						<h5 class="category"><?php echo $kategori?></h5>
					</div>
				</div>
			</div>
		<?php endforeach;?>
	</div>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<br/>
				<p><?php echo $page;?></p>
			</div>
		</div>
	</div>
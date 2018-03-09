<?php
$i=$data->row_array();
$url=base_url().'portfolio/detail/'.$i['port_id'];

$port_id=$i['port_id'];
 $port_judul=$i['port_judul'];
 $port_isi=$i['port_deskripsi'];
 $port_author=$i['port_author'];
 $port_gambar=$i['port_image'];
 $port_kategori=$i['port_kategori'];
 $options_kategori = array(
    '1' => 'Product and Application',
    '2' => 'R & D Facility',
    '3' => 'Product Facility',
  );
 $kategori =  isset($options_kategori[$port_kategori]) ? $options_kategori[$port_kategori] : 'N/A';
 $img=base_url().'assets/images/'.$i['port_image'];
?>

<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url().'theme/images/slide_2.jpg'?>);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
						<div class="slider-text-inner">
							<h2><?php echo $port_judul;?></h2>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>


<div class="fh5co-pricing">
	<div class="container">
		<div class="row">

			<div class="col-md-12 detail-article">
				<h1 style="margin-bottom:0px;"><a href="<?php echo $url;?>"><?php echo $port_judul;?></a></h1>
				<small><em>Kategori: <?php echo $kategori;?></em></small>
				<figure>
					<img src="<?php echo $img;?>" alt="" class="img-responsive" style="margin: 0 auto;">
				</figure>
				<?php echo $port_isi;?>
			</div>
		</div>

	</div>
</div>
<?php
$b=$data->row_array();
$url=base_url().'artikel/'.$b['tulisan_slug'];
$img=base_url().'assets/images/'.$b['tulisan_gambar'];
$title=$b['tulisan_judul'];
$author=$b['tulisan_author'];
$date=$b['tanggal'];
$kategori=$b['tulisan_kategori_nama'];
$deskripsi=strip_tags($b['tulisan_isi']);
$isi=$b['tulisan_isi'];
$views=$b['tulisan_views'];
$rating=$b['tulisan_rating'];
?>

<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url().'theme/images/slide_2.jpg'?>);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
						<div class="slider-text-inner">
							<h2>Enjoy the Blog</h2>
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

			<div class="col-md-8 detail-article">
				<h1 style="margin-bottom:0px;"><a href="<?php echo $url;?>"><?php echo $title;?></a></h1>
				<small><em>Posted by: <?php echo $author;?> | <?php echo $date;?> | Kategori: <?php echo $kategori;?> | <?php echo $views;?> kali dibaca | Rating: <?php echo $rating;?></em></small>
				<figure>
					<img src="<?php echo $img;?>" alt="" class="img-responsive">
				</figure>
				<?php echo $isi;?>
			
			</div>
			<?php $this->load->view('sidebar/sidebar', [
				'kat' => $kat,
				'populer' => $populer,
				'terbaru' => $terbaru,
			]);?>
		</div>

	</div>
</div>
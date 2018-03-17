<?php
class M_portfolio extends CI_Model{

	function get_all_portfolio(){
		$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio ORDER BY port_id DESC");
		return $hsl;
	} 
	
	function simpan_portfolio($judul,$isi,$user_nama,$gambar, $kategori){
		$hsl=$this->db->query("INSERT INTO tbl_portfolio (port_judul,port_deskripsi,port_author,port_image,port_kategori) VALUES ('$judul','$isi','$user_nama','$gambar', $kategori)");
		return $hsl;
	}

	function get_portfolio_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_portfolio WHERE port_id='$kode'");
		return $hsl;
	}

	function update_portfolio($port_id,$judul,$isi,$user_nama,$gambar, $kategori){
		$hsl=$this->db->query("UPDATE tbl_portfolio SET port_judul='$judul',port_deskripsi='$isi',port_author='$user_nama',port_image='$gambar', port_kategori='$kategori' WHERE port_id='$port_id'");
		return $hsl;
	}

	function update_portfolio_tanpa_img($port_id,$judul,$isi,$user_nama, $kategori){
		$hsl=$this->db->query("UPDATE tbl_portfolio SET port_judul='$judul',port_deskripsi='$isi',port_author='$user_nama', port_kategori='$kategori' WHERE port_id='$port_id'");
		return $hsl;
	}

	function hapus_portfolio($kode){
		$hsl=$this->db->query("DELETE FROM tbl_portfolio WHERE port_id='$kode'");
		return $hsl;
	}


	//Frontend
	function get_portfolio($kategoriId){
		$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio where port_kategori='$kategoriId' ORDER BY port_id DESC");
		return $hsl;
	}

	function get_portfolio_per_page($kategoriId, $offset,$limit){
		$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio where port_kategori='$kategoriId' ORDER BY port_id DESC LIMIT $offset,$limit");
		return $hsl;
	}
}
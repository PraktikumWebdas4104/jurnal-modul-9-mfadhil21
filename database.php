<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; 

	function __construct(){
		$this->conn = mysqli_connect($this ->host,$this ->uname,$this ->pass,$this ->db);
		
	}

	function tampil_data(){
		$data = mysqli_query($this ->conn, "SELECT * FROM tabel_user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		$nm=$nama;
		$alm=$alamat;
		$usia=$usia;
		$inp = mysqli_query($this ->conn, "INSERT INTO 'tabel_user'(nama, alamat, usia) VALUES ($nama,$alamat,$usia)");
		}

		//buatlah method input
		//query inset into user

	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'

		$del = mysqli_query($this->conn, "DELETE FROM `tabel_user` WHERE id='$id'");
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this ->conn, "SELECT * FROM tabel_user WHERE id=$id");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		//buatlah method update
		//query update user set blablabla where id='$id'
		$up = mysqli_query($this->conn, "UPDATE 'tabel_user' SET id=$id,nama='$nama',alamat='$alamat',usia='$usia' WHERE id=$id");

	}

} 

?>
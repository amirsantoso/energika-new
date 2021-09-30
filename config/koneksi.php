<?php
include ('parser-php-version.php');
	ini_set('display_errors',FALSE);
	$host	= "eu-cdbr-west-01.cleardb.com";
	$user	= "b08b36868116a6";
	$pass	= "c7b82c31";
	$db	= "heroku_f686e8cfe62ca31";
	
	
	$koneksi=mysql_connect($host,$user,$pass);
	$db=mysql_select_db($db);
	
	if ($koneksi&&$db){
		//echo "berhasil : )";
	}else{
?>
	<script language="javascript">alert("Gagal Koneksi Database MySql !!")</script>
<?php
	}
	
	
	class Tabungan{
		private $saldo;
		function Tabungan($a){
			$this->saldo = $a;
		}
		function simpan($sim){
			$this->saldo = $this->saldo + $sim;
		}
		function pinjam($pin){
			$this->saldo = $this->saldo - $pin;
		}
		function cek_saldo(){
			return $this->saldo;
		}
	};
?>

<?php
class transaksi{
    var $nama,$alamat,$type,$tahun,$warna,$harga,$tenor;
    function getRef(){
        $rdm=array(0,1,2,3,4,5,6,7,8,9);
        $rkey=array_rand($rdm,7);
        
        echo $rdm[$rkey[0]];
        echo $rdm[$rkey[1]];
        echo $rdm[$rkey[2]];
        echo $rdm[$rkey[3]];
        echo $rdm[$rkey[4]];
        echo $rdm[$rkey[5]];
        echo $rdm[$rkey[6]];
    }
    function getNama($nama){
        return $this->nama=$nama;
    }
    function harga($type_tmp){
        $hg=0;
        if($type_tmp=='BeAT'){
            $hg=16665000;
        }elseif($type_tmp=='VARIO'){
            $hg=21000000;
        }elseif($type_tmp=='SupraFit'){
            $hg=16970000;
        }elseif($type_tmp=='Scoopy'){
            $hg=20325000;
        }elseif($type_tmp=='Aerox'){
            $hg=25900000;
        }elseif($type_tmp=='JupiterMX'){
            $hg=18900000;
        }elseif($type_tmp=='Lexi'){
            $hg=24700000;
        }elseif($type_tmp=='Nmax'){
            $hg=32265000;
        }
        return '<li>Harga = Rp.'.number_format($hg).'</li>';
    }
    function hc($type_tmp){
        $hg=0;
        if($type_tmp=='BeAT'){
            $hg=16665000;
        }elseif($type_tmp=='VARIO'){
            $hg=21000000;
        }elseif($type_tmp=='SupraFit'){
            $hg=16970000;
        }elseif($type_tmp=='Scoopy'){
            $hg=20325000;
        }elseif($type_tmp=='Aerox'){
            $hg=25900000;
        }elseif($type_tmp=='JupiterMX'){
            $hg=18900000;
        }elseif($type_tmp=='Lexi'){
            $hg=24700000;
        }elseif($type_tmp=='Nmax'){
            $hg=32265000;
        }
        $hc=$hg+((3/100)*$hg);
        return '<li>Harga Kredit = Rp.'.number_format($hc).'</li>';
    }
    function cicil($type_tmp,$tenor_tmp,$dp_tmp){
        $hg=0;
        if($type_tmp=='BeAT'){
            $hg=16665000;
        }elseif($type_tmp=='VARIO'){
            $hg=21000000;
        }elseif($type_tmp=='SupraFit'){
            $hg=16970000;
        }elseif($type_tmp=='Scoopy'){
            $hg=20325000;
        }elseif($type_tmp=='Aerox'){
            $hg=25900000;
        }elseif($type_tmp=='JupiterMX'){
            $hg=18900000;
        }elseif($type_tmp=='Lexi'){
            $hg=24700000;
        }elseif($type_tmp=='Nmax'){
            $hg=32265000;
        }
        $hc=$hg+((3/100)*$hg);
        $sc=$hc-$dp_tmp;
        $angsuran=$sc/$tenor_tmp;
        return '<li>Cicilan('.$tenor_tmp.'x) = Rp.'.'<b>'.number_format($angsuran).'</b>'.'</li>';
    }
    function __construct(){
        $a=['A','B','C','D',0,1,2,3,4,5,6,7,8,9];
        shuffle($a); 
        echo 'Batch ID =';
        foreach($a as $b){
         echo $b;
         }
        echo "<h1><center>TRANSAKSI KREDIT MOTOR</h1><hr>";
        }
}
$n1=new transaksi();

?>
<head><link rel="icon" href="gallery/J-icon.ico">
<title>SISTEM PEMBAYARAN KREDIT MOTOR</title>
</head>

<style>
		body {
            background-image: url("gallery/udb.png");
            background-color: LightBlue;
   background-repeat: no-repeat;
   background-position: center;
            background-attachment: fixed;
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 12px;
			cursor: pointer;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
	</style>

<a href="daftar_harga.php"><button>LIHAT HARGA</button></a>
<hr>
<form method='POST'>
    <div class='row'>
Nama = <input type='text' name='nama'>
    </div>
    <div class='row'>
Alamat = <input type='text' name='alamat'>
    </div>
    <div class='row'>
Merk/Type = 
<select name='type' required>
    <option value=''>--PILIH MERK--</option>
    <optgroup label='HONDA'>
        <option value='BeAT'>BeAT</option>
        <option value='VARIO'>VARIO</option>
        <option value='SupraFit'>SupraFit</option>
        <option value='Scoopy'>Scoopy</option>
    <optgroup label='YAMAHA'>
        <option value='JupiterMX'>JupiterMX</option>
        <option value='Aerox'>Aerox</option>
        <option value='Lexi'>Lexi</option>
        <option value='Nmax'>Nmax</option>
</select>
    </div>
    <div class='row'>
Tahun = <input type='text' name='tahun' require>
    </div>
    <div class='row'>
Warna = <input type='text' name='warna' require>
    </div>
    <div class='row'>
DP = 
<select name="dp" required>
<option value="">--PILIH DP--</option>
<option value="650000">650000</option>
<option value="800000">800000</option>
<option value="900000">900000</option>
<option value="1200000">1200000</option>
</select>
    </div>
    <div class='row'>
Tenor= 
    <select name="tenor" required>
<option value="">--PILIH TENOR--</option>
<option value="35">35 Bulan</option>
<option value="24">24 Bulan</option>
<option value="18">18 Bulan</option>
<option value="12">12 Bulan</option>
</select>
    </div>
    <div class='row'>
    <input type='submit' value='kirim'>
    </div>
</form>

<?php
$nama='';
$alamat='';
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $type_tmp=$_POST['type'];
    $tahun=$_POST['tahun'];
    $warna=$_POST['warna'];
    $dp_tmp=$_POST['dp'];
    $tenor_tmp=$_POST['tenor'];
    echo '<h2>Nomor Referensi= </h2>';
    echo $n1->getRef();
    echo '<hr>';
    echo '<ul>';
    echo '<li>Nama = '.$n1->getNama($nama).'</li>';
    echo '<li>Alamat = '.$alamat.'</li>';
    echo '<li>Merk = '.$type_tmp.'</li>';
    echo '<li>Tahun = '.$tahun.'</li>';
    echo '<li>Warna = '.$warna.'</li>';
    echo $n1->harga($type_tmp).'</li>';
    echo '<li>DP = Rp.'.number_format($dp_tmp);
    echo '<li>Tenor = '.$tenor_tmp;
    echo $n1->hc($type_tmp);
    echo $n1->cicil($type_tmp,$tenor_tmp,$dp_tmp);
}
?>
<footer 
    style=  "margin:0px;
            padding:9px;
            position:fixed;
            left:450px;
            right:450px;
            bottom:0px;
            background:maroon;
            text-align:center">
            <a href="data_motor.php"><button>DATA MOTOR</button></a>
            <a href="data_pembeli.php"><button>DATA PEMBELI</button></a>
            <a href="data_angsuran.php"><button>DATA ANGSURAN</button></a>
            <a href="data_laporan.php"><button>DATA LAPORAN</button></a>        
            <a href="kel5.php"><Button>MENU</button></a>
        </footer>
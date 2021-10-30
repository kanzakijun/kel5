<?php
Class Angsuran{
    var $nama;
    var $alamat;
    var $nik;
    var $harga;
    var $cicilan;
    var $sisacicilan;

    function get_angsuran($cicilan,$harga){
        $angsur=0;
    if($cicilan=="3"){
        $angsur=$harga;
    }elseif($cicilan=="6"){
        $angsur=$harga;
    }elseif($cicilan=="9"){
        $angsur=$harga;
    }elseif($cicilan=="12"){
        $angsur=$harga;
    }elseif($cicilan=="25"){
        $angsur=$harga;
    }elseif($cicilan=="35"){
        $angsur=$harga;
    }
    $hkredit=$angsur+((3/100)*$harga);
    $bkredit=$hkredit/$cicilan;
    return 'Harga Kredit = Rp.'.number_format($hkredit).'<br>';
    }
    function sisa($bayarke,$cicilan,$harga){
        $angsur=0;
        if($cicilan=="3"){
            $angsur=$harga;
        }elseif($cicilan=="6"){
            $angsur=$harga;
        }elseif($cicilan=="9"){
            $angsur=$harga;
        }elseif($cicilan=="12"){
            $angsur=$harga;
        }elseif($cicilan=="25"){
            $angsur=$harga;
        }elseif($cicilan=="35"){
            $angsur=$harga;
        }
        $hkredit=$angsur+((3/100)*$harga);
        $bkredit=$hkredit/$cicilan;
        $sisa=$hkredit-($bayarke*$bkredit);
        return 'Sisa Angsuran = Rp.'.number_format($sisa);
        }
    function get_nama($nama){
    return $this->nama=$nama;
}
function set_alamat($alamat_txt){
    $this->alamat=$alamat_txt;
}
function get_alamat(){
    return $this->alamat;
}
function set_nik($nik_txt){
    $this->nik=$nik_txt;
}
function get_nik(){
    return $this->nik;
}
 function get_notrack(){
     $num=[0,1,2,3,4,5,6,7,8,9];
     shuffle($num); 
     echo '<b>No.Track = ';
     foreach($num as $ntr){
      echo $ntr;
      echo "<b>";
      }
 }
 function __construct(){
 echo "<h1>SISTEM PEMBAYARAN ANGSURAN</b></h1>";
 }
}

$pelanggan=new Angsuran();

?>
<form method="POST">
<table>
<tr><td>NAMA</td>
<td><input type="text" name="nama" placeholder="Nama" require></td>
</tr>
<tr><td>ALAMAT</td>
<td><input type="text" name="alamat" placeholder="Alamat" require></td>
</tr>
<tr><td>NIK</td>
<td><input type="text" name="nik" placeholder="NIK" require></td>
</tr>
<tr><td>HARGA</td>
<td><input type="number" name="harga" placeholder="Harga Unit" width='20%' required></td>
</tr>
<tr><td>ANGSURAN</td>
<td><select name="cicilan" required>
<option value="3">3x Angsuran</option>
<option value="6">6x Angsuran</option>
<option value="9">9x Angsuran</option>
<option value="12">12x Angsuran</option>
<option value="25">25x Angsuran</option>
<option value="35">35 Angsuran</option>
</select>
</td>
</tr>
<tr><td>PEMBAYARAN KE</td>
<td><input type="number" name="angsur" placeholder="Pembayaran" width='20%' required></td>
</tr>

<tr><td><input type="submit" name="Submit" value="Kalkulasi"></td>
</tr>
</table>
</form>
<?php
$nama='';
$alamat='';
$nik='';
if($_POST){
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nik=$_POST['nik'];
$cicilan=$_POST['cicilan'];
$harga=$_POST['harga'];
$bayarke=$_POST['angsur'];

echo "Nama Pelanggan = ".$pelanggan->get_nama($nama);
echo "<br>";
echo $pelanggan->set_alamat($alamat);
echo "Alamat Pelanggan = ".$pelanggan->get_alamat();
echo "<br>";
echo $pelanggan->set_nik($nik);
echo "NIK Pelanggan = ".$pelanggan->get_nik();
echo "<br>";
echo "Harga Unit = Rp.".$harga;
echo "<br>";
echo $pelanggan->get_angsuran($cicilan,$harga);
echo $pelanggan->sisa($bayarke,$cicilan,$harga);
echo "<br>";
echo "<br>";
echo $pelanggan->get_notrack();
}
?>

<footer 
    style=  "margin:0px;
            padding:9px;
            position:fixed;
            left:450px;
            right:450px;
            bottom:0px;
            background:Maroon;
            text-align:center">
            <a href="data_motor.php"><button>DATA MOTOR</button></a>
            <a href="data_pembeli.php"><button>DATA PEMBELI</button></a>
            <a href="transaksi_km.php"><button>DATA TRANSAKSI</button></a>
            <a href="data_laporan.php"><button>DATA LAPORAN</button></a>        
            <a href="kel5.php"><Button>MENU</button></a>
        </footer>
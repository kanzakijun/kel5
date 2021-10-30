<?php
class laporan{
    var $nama;
    var $nik;
    var $alamat;
    var $motor;
    var $jumlah;

public function __construct(){
    echo "<h1>LAPORAN PEMBAYARAN KREDIT MOTOR</h1>";
}
function no_laporan(){
    $a=['A','B','C','D',0,1,2,3,4,5,6,7,8,9];
    shuffle($a);
    echo 'No.Laporan =';
    foreach($a as $b){
     echo $b;
     }
}
function bayar($motor,$dp,$tenor){
    $harga=0;//if
    if($motor=='VARIO'){
        $harga=17000000;
    }elseif($motor=='NJMX'){
        $harga=19000000;
    }elseif($motor=='ASTREA'){
        $harga=5000000;
    }elseif($motor=='BEAT'){
        $harga=16000000;
    }elseif($motor=='FIZR'){
        $harga=5000000;
    }
    $kredit=$harga+((5/100)*$harga);
    $sisa=$kredit-$dp;
    $bayar=$sisa/$tenor;
    return 'Harga Kredit = '.$kredit.'<br>'.'Sisa Kredit = '.$sisa.'<br>'.'Total Cicilan('.$tenor.') = '.number_format($bayar);
}
function get_nama($nama){
   echo "Nama = ".$nama;
}
function get_nik($nik_text){
    echo "Nik = ".$nik_text;
 }
}
$lp1=new laporan();


?>
<form method="POST" >
<table >
<tr><td>Nama </td>
<td><input type="text" name="nama" placeholder="masukkan nama" requried></td>
</tr>
<tr><td>Nik </td>
<td><input type="text" name="nik" placeholder="masukkan nik" requried></td>
</tr>
<tr><td>Alamat </td>
<td><textarea name="alamat" placeholder="Alamat" required></textarea></td>
</tr>
<tr><td>Motor</td>
<td><select name="merk" required>
    <option value=''>Merk Motor</option>
    <option value="VARIO">VARIO</option>
    <option value="NJMX">NJMX</option>
    <option value="ASTREA">ASTREA GRAND</option>
    <option value="BEAT">BEAT</option>
    <option value="FIZR">FIZR</option>
</select>
<br>
<tr><td>TENOR<td><select name="tenor" required>
    <option value=''>Tenor</option>
    <option value="18">18 Bulan</option>
    <option value="25">25 Bulan</option>
    <option value="35">35 Bulan</option>
</select></td>
</tr>
<tr><td>DP </td>
<td><select name="dp" required>
<option value="">DP</option>
<option value="650000">650000</option>
<option value="800000">800000</option>
<option value="900000">900000</option>
<option value="1200000">1200000</option>
</select></td>
</tr>

<tr> <td><input type="submit" name="cetak" value="PRINT LAPORAN"></td>
</tr>
</table>
</form>

<?php
$nama="";
$nik_text="";
$alamat="";
$motor=0;
$jumlah=0;
if($_POST){
    $nama=$_POST['nama'];
    $nik_text=$_POST['nik'];
    $alamat=$_POST['alamat'];
    $motor=$_POST['merk'];
    $tenor=$_POST['tenor'];
    $dp=$_POST['dp'];

    echo $lp1->no_laporan();
    echo "<br>";
    echo $lp1->get_nama($nama);
    echo "<br>";
    echo $lp1->get_nik($nik_text);
    echo "<br>";
    echo "Alamat = ".$alamat;
    echo "<br>";
    echo "Motor = ".$motor;
    echo "<br>";
    echo $lp1->bayar($motor,$dp,$tenor);

}
?>

<body>
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
            <a href="data_angsuran.php"><button>DATA ANGSURAN</button></a>
            <a href="kel5.php"><Button>MENU</button></a>
        </footer>
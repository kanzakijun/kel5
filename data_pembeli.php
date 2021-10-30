<?php
Class data_pembeli{
    var $nik;
    var $nama;
    var $ttl;
    var $jeniskelamin;
    var $alamat;
    var $nomortelepon;
    var $pekerjaan; 
    var $ucapan="Silahkan mengisi beberapa isian seperti<br>";

   public function __construct() {
     echo "Selamat Datang<br>";
     echo $this->ucapan;
   }
   function get_isi_form(){
    $ucapan=array("NIK, ","Nama, ","TTL, ","Jenis Kelamin, ","Alamat, ","Nomor Telepon, ","Pekerjaan, ");
    foreach($ucapan as $key){
        echo $key;
    }
   }
function get_terimakasih($nama, $jeniskelamin){
    if($jeniskelamin == "Laki-laki"){
        $welcome="Terimakasih mas ".$nama." sudah mengisi form ini";
    }elseif($jeniskelamin == "Perempuan"){
        $welcome="Terimakasih mbak ".$nama." sudah mengisi form ini";
    }
    return $welcome; 
}
}

$d1=new data_pembeli();
$d1->get_isi_form();
?>
     

<form method="POST">
<table>
    <br>
    <b>DATA PEMBELI SEPEDA MOTOR</b>
    <tr><td>NIK</td>
        <td><input type="text" name="nik" placeholder="NIK" required></td>
    </tr>
    <br>
    <tr><td>Nama</td>
        <td><input type="text" name="nama" placeholder="Nama" required></td>
    </tr>
    <br>
    <tr><td>Tempat Tanggal Lahir </td>
        <td><input type="text" name="ttl" placeholder="TTL" required></td>
    </tr>
    <br>
    <tr><td>Jenis Kelamin</td>
<td><select name="jeniskelamin" required>
<option value="">--PILIH JENIS KELAMIN--</option>
<option value="Laki-laki">Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
</td>
</select>
    </tr>
    <br>
    <tr><td>Alamat</td>
        <td><textarea name="alamat" placeholder="Alamat" required></textarea></td>
    </tr>
    <br>
    <tr><td>Nomor Telepon</td>
        <td><input type="text" name="nomortelepon" placeholder="Nomor Telepon" required></td>
    </tr>
    <br>
    <tr><td>Pekerjaan</td>
        <td><input type="text" name="pekerjaan" placeholder="Pekerjaan" required></td>
    </tr>
    <br>
    <tr> <td><input type="submit" name="SIMPAN" value="SIMPAN"></td>
    </tr>
</table>
</form>


<?php
if($_POST){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $ttl=$_POST['ttl'];
    $jeniskelamin=$_POST['jeniskelamin'];
    $alamat=$_POST['alamat'];
    $nomortelepon=$_POST['nomortelepon'];
    $pekerjaan=$_POST['pekerjaan'];

    echo '<li>NIK = '.$nik.'</li>';
    echo '<li>Nama = '.$nama.'</li>';
    echo '<li>Tempat Tanggal Lahir = '.$ttl.'</li>';
    echo '<li>Jenis Kelamin = '.$jeniskelamin.'</li>';
    echo '<li>Alamat = '.$alamat.'</li>';
    echo '<li>Nomor Telepon = '.$nomortelepon.'</li>';
    echo '<li>Pekerjaan = '.$pekerjaan.'</li>';
    echo "<br>";
    echo $d1->get_terimakasih($nama,$jeniskelamin);
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
            <a href="transaksi_km.php"><button>DATA TRANSAKSI</button></a>
            <a href="data_angsuran.php"><button>DATA ANGSURAN</button></a>
            <a href="data_laporan.php"><button>DATA LAPORAN</button></a>        
            <a href="kel5.php"><Button>MENU</button></a>
        </footer>
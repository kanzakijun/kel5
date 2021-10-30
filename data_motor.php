<?php
class motor{
    var $merk,$type,$tahunbuat,$nomesin,$norangka,$warna;
    
    function get_merk($merk){
        $mrk='';
        if($merk=='1'){
            $mrk='VARIO';
        }elseif ($merk=='2') {
            $mrk='NJMX';
        }elseif ($merk=='3') {
            $mrk='ASTREA GRAND';
        }elseif ($merk=='4') {
            $mrk='BEAT';
        }elseif ($merk=='5') {
            $mrk='FIZR';
        }else{
            $mrk='TIDAK ADA MERK!';
        }
        return $this->merk=$mrk;
    }
    function get_tahunbuat($tahunbuat){
        echo "Tahun buat:".$tahunbuat;
    }
    function get_nomesin($nomesin){
        echo "No Mesin:".$nomesin;
    }
    function get_norangka($norangka){
        echo "No Rangka:".$norangka;
    }
    function get_warna($warna){
        echo "Warna:".$warna;
    }
    
    function get_notransaksi(){
        $ank=[0,1,2,3,4,5,6,7,8,9];
        shuffle($ank); 
        echo 'No.Transaksi = ';
        foreach($ank as $ntr){
         echo $ntr;
         }
    }
    function __construct(){
    echo "<h1><center>DATA MOTOR</center></h1>";
    }
}
$mt1=new motor();
?>
<form method="POST" >
<table >
<tr><td>Merk Motor</td>
<td><select name="merk" require>
    <option value=''>--PILIH MERK--</option>
    <option value="1">VARIO</option>
    <option value="2">NJMX</option>
    <option value="3">ASTREA GRAND</option>
    <option value="4">BEAT</option>
    <option value="5">FIZR</option>
</td>
</tr>
<tr><td>Tahun buat</td>
<td><input type="text" name="tahunbuat" placeholder=" -tahun buat- " requried></td>
</tr>
</tr>
<tr><td>No Mesin</td>
<td><input type="text" name="nomesin" placeholder=" -no mesin- " requried></td>
</tr>
</tr>
<tr><td>No Rangka</td>
<td><input type="text" name="norangka" placeholder=" -no rangka- " requried></td>
</tr>
</tr>
<tr><td>Warna</td>
<td><input type="text" name="warna" placeholder=" -warna- " requried></td>
</tr>
</tr>
<tr> <td><input type="submit" name="OK" value="OK"></td>
</tr>
</table>
</form>
<?php
$merk='';
$tahunbuat="";
$nomesin="";
$norangka="";
$warna="";
if($_POST){
    $merk=$_POST['merk'];
    $tahunbuat=$_POST['tahunbuat'];
    $nomesin=$_POST['nomesin'];
    $norangka=$_POST['norangka'];
    $warna=$_POST['warna'];
echo $mt1->get_notransaksi().'<br>';
echo 'MERK MOTOR= '.$mt1->get_merk($merk).'<br>';
echo $mt1->get_tahunbuat($tahunbuat).'<br>';
echo $mt1->get_nomesin($nomesin).'<br>';
echo $mt1->get_warna($warna).'<br>';
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
            <a href="data_pembeli.php"><button>DATA PEMBELI</button></a>
            <a href="transaksi_km.php"><button>DATA TRANSAKSI</button></a>
            <a href="data_angsuran.php"><button>DATA ANGSURAN</button></a>
            <a href="data_laporan.php"><button>DATA LAPORAN</button></a>        
            <a href="kel5.php"><Button>MENU</button></a>
        </footer>
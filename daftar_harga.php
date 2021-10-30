<?php
class daftar_harga{
    var $harga;
    function getHarga(){
        //ini penerapan loop foreach
        $hrg1 = [
            "BeAT = Rp.16,665,000",
            "VARIO = Rp.16,970,000",
            "Scoopy = Rp.20,325,000",
        ];
        $hrg2 = [
            "Aerox = Rp.25,900,000",
            "JupiterMX = Rp.18,900,000",
            "Lexi = Rp.24,700,000",
            "Nmax = Rp.32,265,000"
        ];
        echo "<h1><Center>DAFTAR HARGA:</h1>";
        echo "<h4><center>==HONDA==</h4>";
        foreach($hrg1 as $honda){
            echo "<h5><center>$honda</center></h5>";
            }
        echo "<h4><center>==YAMAHA==</h4>";
        foreach($hrg2 as $yamaha){
            echo "<h5><center>$yamaha</center></h5>";
        }        
    }
}
$d1=new daftar_harga();
$d1->getHarga();
?>

<head><link rel="icon" href="gallery/J-icon.ico">
<title>SISTEM PEMBAYARAN KREDIT MOTOR</title>
<style>
		body {
            background-color: LightBlue;
   background-repeat: no-repeat;
   background-position: center;
            background-attachment: fixed;
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
</style>
</head>
<center>
<footer 
    style=  "margin:0px;
            padding:9px;
            position:fixed;
            left:0px;
            right:0px;
            bottom:0px;
            background:Maroon;
            text-align:center;">
            <a href="transaksi_km.php"><button>KEMBALI</button></a></footer>
<?php

class BangunRuang
{

    private $PHI = 3.14;

    /**
     * Menghitung nilai kuadrat pangkat dua
     * pangkat = nilai^pangkat dua
     */
    function kuadrat($nilai)
    {
        $PANGKAT_DUA = 2;
        return pow($nilai, $PANGKAT_DUA);
    }

    /**
     * Menghitung Luas Lingkaran
     * Rumus: 0.25 * 3.14 * diameter kuadrat
     */
    function luasLingkaran($diameter)
    {
        $seperempat = 0.25;
        return $seperempat * $this->PHI * $this->kuadrat($diameter);
    }

    /**
     * Menghitung Keliling Lingkaran
     * Rumus: phi x 2 x jari jari
     */
    function kelilingLingkaran($jariJari)
    {
        $DUA = 2;
        return $this->PHI * $DUA * $jariJari;
    }

    /**
     * Menghitung Luas Permukaan Kubus
     * Rumus: 6 x sisi^kuadrat
     */
    function luasPermukaanKubus($sisi)
    {
        $ENAM_SISI = 6;
        return $ENAM_SISI * $this->kuadrat($sisi);
    }

    /**
     * Menghitung Volume Kubus
     * Rumus sisi*sisi*sisi
     */
    function volumeKubus($sisi)
    {
        return $sisi * $sisi * $sisi;
    }

    /**
     * Menghitung Luas Permukaan Persegi Panjang
     * Rumus: Panjang x Lebar
     */
    function luasPermukaaanPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }
    
    /**
     * Menghitung Volume Limas Segi Tiga
     * Rumus: 1/3 * Luas Alas x tinggi
     */
    public function volumeLimasSegiTiga($luasAlas, $tinggi)
    {
        return (1 / 3 * $luasAlas * $tinggi);
    }

    /**
     * Menghitung Luas Permukaan Limas Segi Tiga
     * Rumus: Luas Selubung Limas + Luas Alas
     */
    public function luasPermukaanLimasSegiTiga($luasAlas, $luasSelubungLimas)
    {
        return $luasAlas + $luasSelubungLimas;
    }
    /**
     * Menghitung Volume Balok
     * Rumus: panjang x lebar x tinggi
     */
    function volumeBalok($panjang, $lebar, $tinggi)
    {
        return $panjang * $lebar * $tinggi;
    }
}

$bangunRuang = new BangunRuang();

echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Luas permukaan kubus: ' . $bangunRuang->luasPermukaanKubus(13);
echo '<br>';
echo 'Luas permukaan persegi panjang: ' . $bangunRuang->luasPermukaaanPersegiPanjang(2, 4);
echo '<br>';

echo 'Volume Kubus: ' . $bangunRuang->volumeKubus(5);

echo 'Volume Kubus: ' . $bangunRuang->volumeKubus(5);
echo '<br>';
echo 'Volume Limas Segi Tiga: ' . $bangunRuang->volumeLimasSegiTiga(30, 10);
echo '<br>';
echo 'Luas permukaan Limas Segi Tiga: ' . $bangunRuang->luasPermukaanLimasSegiTiga(30, 40);
echo '<br>';
echo 'Volume Balok: '.$bangunRuang->volumeBalok(4,5,6);

?>
  
<html>
<head></head>
<body>
  
<h3> UI Interaktif </h3>
	<form action="" method="post">
		Masukkan angka: <input type="text" name="num"><br>
		<p>ingin cari apa ? : </p>
		<input type="submit" name="submit" value="Luas Lingkaran">
		<input type="submit" name="submit" value="Keliling Lingkaran">
		<input type="submit" name="submit" value="Luas Permukaan Kubus">
	</form>
	
	<?php
	
		$angka = 0;
		if(isset($_POST['num'])){
			$angka = floatval($_POST['num']);
		}
		
		$state = "";
		if(isset($_POST['submit'])){
			$state = $_POST['submit'];
		}
		
		if(strlen($angka) > 0 && $state === "Luas Lingkaran"){
			echo "hasil : ",$bangunRuang->luasLingkaran($angka);
		}
		else if(strlen($angka) > 0 && $state === "Keliling Lingkaran"){
			echo "hasil : ",$bangunRuang->kelilingLingkaran($angka);
		}
		else if(strlen($angka) > 0 && $state === "Luas Permukaan Kubus"){
			echo "hasil : ",$bangunRuang->luasPermukaanKubus($angka);
		}
	?>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas dan Keliling</title>
</head>
<body>
    <h1>Kalkulator Luas dan Keliling</h1>
    <form method="post">
        <label>Pilih bentuk:</label>
        <select name="bentuk">
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
        </select>
        <br>
        <label>Panjang / Alas:</label>
        <input type="number" name="panjang">
        <br>
        <label>Lebar / Tinggi:</label>
        <input type="number" name="lebar">
        <br>
        <input type="submit" value="Hitung">
    </form>

    <h1>Hasil Perhitungan</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bentuk = $_POST["bentuk"];
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];

        if ($bentuk == "persegi") {
            $luas = $panjang * $panjang;
            $keliling = 4 * $panjang;
            echo "<p>Luas Persegi: $luas</p>";
            echo "<p>Keliling Persegi: $keliling</p>";
        } elseif ($bentuk == "persegi_panjang") {
            $luas = $panjang * $lebar;
            $keliling = 2 * ($panjang + $lebar);
            echo "<p>Luas Persegi Panjang: $luas</p>";
            echo "<p>Keliling Persegi Panjang: $keliling</p>";
        } elseif ($bentuk == "segitiga") {
            $luas = 0.5 * $panjang * $lebar;
            // Di sini, karena tidak ada informasi sisi-sisi segitiga, kita tidak bisa menghitung kelilingnya.
            echo "<p>Luas Segitiga: $luas</p>";
            echo "<p>Keliling Segitiga: Tidak bisa dihitung tanpa informasi sisi-sisi</p>";
        } else {
            echo "<p>Pilihan bentuk tidak valid.</p>";
        }
    } else {
        echo "<p>Terjadi kesalahan, silakan coba lagi.</p>";
    }
    ?>
</body>
</html>
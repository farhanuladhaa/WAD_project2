<!DOCTYPE html>
<html>
<head>
    <title>WAD project 2</title>
</head>
<body>
    <h1>Latihan 2</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="angka">Masukkan angka: </label>
        <input type="text" name="angka" id="angka" required><br>

        <label for="operasi">Pilih operasi: </label>
        <select name="operasi" id="operasi">
            <option value="tambah">Penambahan (+)</option>
            <option value="kurang">Pengurangan (-)</option>
            <option value="kali">Perkalian (*)</option>
            <option value="bagi">Pembagian (/)</option>
        </select><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka = $_POST['angka'];
        $operasi = $_POST['operasi'];

        if (is_numeric($angka)) {
            if ($operasi == 'tambah') {
                // Lakukan penambahan
            } elseif ($operasi == 'kurang') {
                // Lakukan pengurangan
            } elseif ($operasi == 'kali') {
                // Lakukan perkalian
            } elseif ($operasi == 'bagi') {
                // Lakukan pembagian
            } else {
                echo "Operasi tidak valid.";
            }
        } else {
            echo "Masukkan harus berupa angka.";
        }
    }
    ?>
</body>
</html>
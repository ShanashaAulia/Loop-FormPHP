<form action="" method="POST">
        <h3>Silahkan Isi Angka!</h3>
        <table>
            <tr>
                <td>Angka</td>
                <td>:</td>
                <td><input type="number" name="number"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if ($number > 0) {
        for ($i = 0; $i < $number; $i++) {
            echo "Ini Sasa <br>";
        }
        } else {
            echo "<p>Silakan masukkan angka lebih dari 0.</p>";
        }
        }
?>



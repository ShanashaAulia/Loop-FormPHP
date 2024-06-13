<form action="" method="POST">
    <h3>Silahkan Isi Data Anda!</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="" name="NIM"></td>
        </tr>
        <tr>
            <td>Universitas</td>
            <td>:</td>
            <td><input type="text" name="Universitas"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Jurusan"></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="text" name="Hobi"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <input type="radio" name="Gender" value="Laki-Laki"> Laki-Laki
                <input type="radio" name="Gender" value="Perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Kirim"></td>
        </tr>
    </table>
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $Nama = $_POST['Nama'];
    $NIM = $_POST['NIM'];
    $Universitas = $_POST['Universitas'];
    $Jurusan = $_POST['Jurusan'];
    $Hobi = $_POST['Hobi'];
    $Gender = $_POST['Gender']; // Menggunakan $JenisKelamin sesuai dengan name input

    if (!empty($Nama) && !empty($NIM) && !empty($Universitas) && !empty($Jurusan) && !empty($Hobi) && !empty($Gender)) {
        echo "Hello, Perkenalkan Nama Saya <strong>$Nama</strong>, Dengan Nomor Induk Mahasiswa <strong>$NIM</strong>, Saya sedang berkuliah di Universitas <strong>$Universitas</strong>, dengan Jurusan <strong>$Jurusan</strong>, Hobi saya <strong>$Hobi</strong>, dan Jenis Kelamin Saya <strong>$Gender</strong>.";
    } else {
        echo "Mohon lengkapi semua data yang diminta.";
    }
}
?>



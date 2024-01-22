<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nama_orang_tua = $_POST["nama_orang_tua"];
    $asal_sekolah = $_POST["asal_sekolah"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $nomor_telepon = $_POST["nomor_telepon"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $jenis_kelamin = $_POST["jenis_kelamin"];

    // Lakukan operasi sesuai kebutuhan, misalnya simpan ke database
    // ...

    // Tampilkan pesan sukses
    echo "Pendaftaran berhasil! <br>";
    echo "Nama: $nama <br>";
    echo "Nama Orang Tua: $nama_orang_tua <br>";
    echo "Asal Sekolah: $asal_sekolah <br>";
    echo "Tempat Lahir: $tempat_lahir <br>";
    echo "Nomor Telepon: $nomor_telepon <br>";
    echo "Tanggal Lahir: $tanggal_lahir <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";
    echo "Jenis Kelamin: $jenis_kelamin <br>";

    // Redirect ke halaman sukses dengan menyertakan parameter menggunakan metode GET
    $params = "nama=$nama&nama_orang_tua=$nama_orang_tua&asal_sekolah=$asal_sekolah&tempat_lahir=$tempat_lahir&nomor_telepon=$nomor_telepon&tanggal_lahir=$tanggal_lahir&email=$email&password=$password&jenis_kelamin=$jenis_kelamin";
    
    header("Location: halaman.php?$params");
    exit();
} else {
    // Redirect jika form tidak diakses melalui metode POST
    header("Location: index.html");
    exit();
}
?>

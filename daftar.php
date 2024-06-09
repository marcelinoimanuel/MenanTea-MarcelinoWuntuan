<?php
// Mendapatkan data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];


// Menghubungkan ke database
$connect = mysqli_connect("sql200.infinityfree.com", "if0_34412521", "RTqkC9l2X6WN3J8", "if0_34412521_login");


// Menyimpan data ke database
$sql = "INSERT INTO user VALUES ('$nama', '$email', '$password')";
if ($connect->query($sql) === TRUE) {
    echo "<script>
            confirm('Berhasil daftar, silahkan login');
            document.location.href = 'login.php';
        </script>";
} else {
    echo "Terjadi kesalahan: " . $connect->error;
}
?>
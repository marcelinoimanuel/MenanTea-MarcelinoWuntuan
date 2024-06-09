<?php
// Mendapatkan data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];


// Menghubungkan ke database
$connect = mysqli_connect("sql200.infinityfree.com", "if0_34412521", "RTqkC9l2X6WN3J8", "if0_34412521_login");


// Menyimpan data ke database
$sql = "INSERT INTO pesan VALUES ('$nama', '$email', '$pesan')";
if ($connect->query($sql) === TRUE) {
    echo "<script>
            confirm('Pesan berhasil dikirim');
            document.location.href = 'index.php';
        </script>";
} else {
    echo "Terjadi kesalahan: " . $connect->error;
}
?>
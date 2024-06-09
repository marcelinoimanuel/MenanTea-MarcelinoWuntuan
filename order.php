<?
session_start();

if( isset($_SESSION["login"]) == false){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order-MENANTEA</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="order.css">
    <link rel="icon" href="img/logoicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Navbar START -->
    <nav>
        <div class="logo">
            <img src="img/logonavbar.png" alt="Logo">
        </div>
        <ul class="menu-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Menu</a></li>
            <li><a href="#">Order</a></li>
            <li><a href="index.php">About Us</a></li>
        </ul>

        <div class="akun">
            <li class="dropdown">
                <i class="gambar-akun" data-feather="user"></i>
                <ul class="submenu">
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </li>
        </div>


        <!-- sampe disini-->

    </nav>
    <!-- Navbar END -->

    <!-- Banner order Start -->
    <div class="banner">
        <img src="img/banner_order.png" alt="">
    </div>
    <!-- Banner order END -->

    <div class="nama-pemesan">
        <h1>Pesanan Atas Nama</h1>
        <div class="nama">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name">
        </div>
    </div>

    </div>

    <div class="menu">
        <h1>- PILIHAN MENU -</h1>
    </div>

    <div class="pilihan-menu">

        <div class="menu-item">
            <img src="img/1.png" alt="Menu Item">
            <h3>Mantappu TEA</h3>
            <p>Teh Indonesia dipadukan dengan leci dan cheese cloud</p>

            <div class="harga-menu">
                <h4>Rp 28.000</h4>
                <button class="tambah">Tambah ke Keranjang</button>
            </div>


        </div>



        <div class="menu-item">
            <img src="img/2.png" alt="Menu Item">
            <h3>MatemaTEAka</h3>
            <p>Perpaduan Green tea dan buah-buahan segar pilihan</p>

            <div class="harga-menu">
                <h4>Rp 25.000</h4>
                <button class="tambah">Tambah ke Keranjang</button>
            </div>


        </div>

        <div class="menu-item">
            <img src="img/3.png" alt="Menu Item">
            <h3>InTEAgral</h3>
            <p>Milk tea yang dipadukan dengan manisnya honey boba</p>

            <div class="harga-menu">
                <h4>Rp 28.000</h4>
                <button class="tambah">Tambah ke Keranjang</button>
            </div>
        </div>

        <div class="menu-item">
            <img src="img/4.png" alt="Menu Item">
            <h3>Oolong Tea</h3>
            <p>Kesegaran rasa dari wangi teh oolong begitu otentik </p>

            <div class="harga-menu">
                <h4>Rp 15.000</h4>
                <button class="tambah">Tambah ke Keranjang</button>
            </div>
        </div>

        <div class="menu-item">
            <img src="img/5.png" alt="Menu Item">
            <h3> Menantea Sunset </h3>
            <p>Teh butterfly pea yang berwarna cantik bagaikan sunset </p>

            <div class="harga-menu">
                <h4>Rp 28.000</h4>
                <button class="tambah">Tambah ke Keranjang</button>
            </div>
        </div>


        <div class="menu-item">
            <img src="img/6.png" alt="Menu Item">
            <h3>Oolong Milk Tea</h3>
            <p>Oolong tea klasik dengan perpaduan susu yang creamy</p>

            <div class="harga-menu">
                <h4>Rp 18.000</h4>
                <button class="tambah">Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Footer START -->
    <footer>
        <div class="foot">
            <img src="img/logo1.png" alt="">

            <div class="kaki">
                <div class="jalan">
                    <h2>MENANTEA GROUP</h2>
                    <h4>Jl.Tanjung Duren Raya NO.119A Grogol Petamburan Jakarta Barat 11470</h4>
                </div>


                <div class="follow">
                    <h2>FOLLOW US ON</h2>
                    <div class="link">
                        <a href="https://www.instagram.com/menantea.toko/"><i data-feather="instagram"></i></a>
                        <a href="https://twitter.com/tokomenantea"><i data-feather="twitter"></i></a>
                        <a href="https://id.linkedin.com/company/menantea"><i data-feather="linkedin"></i></a>
                    </div>
                </div>

                <div class="partner">
                    <h2>PARTNERSHIP</h2>
                    <a href="mailto: marketing@menantea.co.id" class="mailto">
                        <h3>marketing@menantea.co.id</h3>
                    </a>
                </div>

            </div>
        </div>

        <div class="copyright">
            <p>Copyright © 2023 Holly Lapian - Wendy Dasuki - Marcelino Wuntuan | WEB PROGRAMMING</p>
        </div>
    </footer>
    <!-- Footer END -->

    <script src="main.js"></script>
    <script>
        feather.replace()
    </script>

</body>

</html>
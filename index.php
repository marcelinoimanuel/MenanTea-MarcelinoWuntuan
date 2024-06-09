<?
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MENANTEA</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logoicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!-- Navbar START -->
    <nav>
        <div class="logo">
            <img src="img/logonavbar.png" alt="Logo">
        </div>
        <ul class="menu-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <!-- da tambah dari sini -->

            <?php if (isset($_SESSION["login"]) == false) : ?>
                <li><a href="#about">About Us</a></li>
                <div class="sub-about">
                    <li class="panah-bawah"> <i data-feather="chevron-down"></i>
                        <ul class="submenu-about">
                            <li><a href="#about">AboutUs</a></li>
                            <li><a href="#news">News</a></li>
                            <li><a href="#contact">ContactUs</a></li>
                        </ul>
                    </li>
                </div>

            <?php else : ?>
                <li><a href="order.php">Order</a></li>
                <li><a href="#about">About Us</a></li>
                <div class="sub-about">
                    <li class="panah-bawah"> <i data-feather="chevron-down"></i>
                        <ul class="submenu-about">
                            <li><a href="#about">AboutUs</a></li>
                            <li><a href="#news">News</a></li>
                            <li><a href="#contact">ContactUs</a></li>
                        </ul>
                    </li>
                </div>
            <?php endif; ?>


        </ul>

        <div class="akun">
            <li class="dropdown">
                <i class="gambar-akun" data-feather="user"></i>
                <ul class="submenu">
                    <?php if (isset($_SESSION["login"]) == false) : ?>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="signup.php" target="_blank">SIGNUP </a></li>
                    <?php else : ?>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="signup.php" target="_blank">SIGNUP </a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                    <?php endif; ?>
                </ul>
            </li>
        </div>


        <!-- sampe disini-->

    </nav>
    <!-- Navbar END -->

    <!-- Hero Section START -->
    <div class="section2">
        <div class="carousel">
            <div class="carousel-container">
                <div class="carousel-item">
                    <video src="bannerutama.mp4" autoplay loop muted alt="Video 1"></video>
                </div>
                <div class="carousel-item">
                    <img src="img/banner2.jpg" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="img/banner3.jpg" alt="Image 3">
                </div>
            </div>
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
        <!-- Hero Section END -->


        <!-- Promo START -->
        <div class="promo">
            <h1>Promo Menarik</h1>
        </div>

        <div class="container">
            <div class="card">
                <img src="img/promo1.jpg" alt="Avatar">
                <h2>Promo Teahr</h2>
                <ul>Syarat dan Ketentuan:
                    <li>Periode promo berlaku dari tanggal 21 - 30 April 2023</li>
                    <li>Promo tidak dapat digabungkan dengan promo lainnya</li>
                </ul>
            </div>
            <div class="card">
                <img src="img/promo2.jpg" alt="Avatar">
                <h2>Promo Anniversary</h2>
                <ul>Syarat dan Ketentuan:
                    <li>Periode promo berlaku dari tanggal 12 - 16 April 2023</li>
                    <li>Promo tidak dapat digabungkan dengan promo lainnya</li>
                </ul>
            </div>
            <div class="card">
                <img src="img/promo3.jpg" alt="Avatar">
                <h2>Promo Flash Sale</h2>
                <ul>Syarat dan Ketentuan:
                    <li>Periode promo berlaku dari tanggal 3 - 5 Maret 2023</li>
                    <li>Promo tidak dapat digabungkan dengan promo lainnya</li>
                </ul>
            </div>
        </div>
        <!-- Promo END -->

        <!-- Menu Start -->
        <div class="menucontainer" id="menu">

            <h1 class="ourmenu">Our Signature Menu</h1>

            <div class="menu">

                <div class="menu-item">
                    <img src="img/menu1.png" alt="Menu Item">
                </div>

                <div class="menu-item">
                    <img src="img/menu4.png" alt="Menu Item">
                </div>

                <div class="menu-item">
                    <img src="img/menu5.png" alt="Menu Item">
                </div>

                <div class="menu-item">
                    <img src="img/menu2.png" alt="Menu Item">
                </div>

                <div class="menu-item">
                    <img src="img/menu3.png" alt="Menu Item">
                </div>

                <div class="menu-item">
                    <img src="img/menu6.png" alt="Menu Item">
                </div>
            </div>


            <?php if (isset($_SESSION["login"]) == false) : ?>
                <div class="button">
                    <a href="login.php">Login For Order</a>
                </div>
            <?php else : ?>
                <div class="button">
                    <a href="order.php" target="_blank">Order</a>
                </div>
            <?php endif; ?>



        </div>
        <!-- Menu END -->


        <!-- About Us START -->
        <div class="about" id="about">
            <div class="judulabout">
                <!-- <p>&#8203;</p>
                    <p>&#8203;</p> -->
                <h1>About Us</h1>
            </div>


            <div class="isiabout">
                <iframe width="800" height="315" src="https://www.youtube.com/embed/rDsH4gBZIXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>

                <p>"Menantea" adalah merek teh fusi modern di Indonesia, <br>
                    didirikan oleh 5 orang dengan masing-masing keahlian <br>
                    dalam industri FnB dan pemasaran digital.<br>
                    Tiga di antaranya adalah Hendy Setiono (pendiri BabaRafi Enterprise),<br>
                    Sylvia Surya (pendiri Kopisoe), dan Bisma Adi Putra (Konsultan F&B Masakin Group),<br>
                    sedangkan 2 lainnya adalah saudara manajer-talenta: <br>
                    Jehian Panangian Sijabat dan Jerome Polin Sijabat.<br>
                    Dengan berbagai menu teh seperti teh buah modern, teh krim keju, dan lainnya,<br>
                    Menantea ingin merevolusi cara orang Indonesia menikmati minuman teh.<br>
                    Dengan teknologi eksklusif FnB kami dan sisi pemasaran digital yang kuat, <br>
                    Menantea bercita-cita menjadi salah satu merek teh yang tumbuh tercepat, <br>
                    dengan 420.000+ pengikut di Instagram dan 109 toko (di 50 kota di Indonesia) dibuka dalam 6
                    bulan sejak pembukaan grand opening-nya."
                </p>
            </div>

            <div class="fotoabout">
                <h2>"Kami mulai beroperasi pada tahun 2020, dan hingga saat ini"</h2>
                <img src="img/footprintsfix.png" alt="" class="footprints">
            </div>
        </div>
        <!-- About Us END -->


        <!-- News Start -->
        <div>
            <div class="news" id="news">
                <h1>News and Article of Menantea</h1>

                <div class="article1">
                    <h2>THE MOST INNOVATIVE BRANDS of 2021</h2>
                    <div class="artimg-container">
                        <img src="img/berita1.jpg" alt="Avatar">
                        <img src="img/berita11.jpg" alt="">
                    </div>
                    <p>
                        Meski baru dibuka tahun lalu, ternyata Menantea sudah mampu meraih prestasi di kancah
                        internasional.
                        Hal ini diungkap dalam unggahan akun Twitter milik kakak Jerome Polin @jehianps pada 13 November
                        2021 lalu. Lewat unggahan tersebut, disebut bahwa Menantea mendapatkan penghargaan dari IFRA
                        (International Franchise, License and Business Concept Expo & Conference) 2021.
                    </p>
                </div>

                <div class="article2">
                    <h2>Anniversary Menantea, Jerome vs Wasedaboys Hijrah ke Indonesia</h2>
                    <img src="img/berita2.jpg" alt="Avatar">
                    <p>
                        Menantea, untuk pertama kalinya merayakan Anniversary ke-1 tahun, Minggu 10/02/2022
                        Hebohnya lagi ulang tahun menantea yang ke-1 tahun WASEDABOYS untuk pertama kalinya datang ke
                        Indonesia.
                        Anggota WASEDABOYS Jerome diantaranya Tomo, Yusuke,dan, Otsuka. Tampaknya mereka asik melayani
                        pengunjung hingga menjadi barista di toko menantea.
                    </p>
                </div>
                <div class="article3">
                    <h2>Menantea, Minuman Teh Buah Kekinian</h2>
                    <img src="img/berita3.jpg" alt="Avatar">
                    <p>
                        Mengenal Menantea, Teh Buah Paling Enak
                        Sesuai dengan akun Instagramnya, Menantea mengklaim bahwa mereka memiliki teh buah paling enak.
                        Perusahaan ini resmi membuka toko pada 10 April 2021. Sampai saat ini, sudah terdapat 204 toko
                        yang
                        tersebar di 74 kota.
                        Kedai teh satu ini memberikan pengalaman unik yang mungkin kamu tidak dapat temukan di tempat
                        lain.
                        Kamu dapat menambahkan topping yang kamu inginkan ke dalam minumanmu. Topping yang tersedia
                        adalah
                        mango pudding, popping boba jelly, honey boba, grass jelly, dan cheese cloud.
                    </p>
                </div>
            </div>
        </div>
        <!-- News END -->

        <!-- Contact START -->
        <section class="contact" id="contact">

            <div class="cus">
                <h2>Contact Us !</h2>
                <p>Our Partner Relation,Ready to help you </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6377209495977!2d106.78121830882962!3d-6.179223360518683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6f795df7d55%3A0xdedac1bc4baf87b2!2sJl.%20Tanjung%20Duren%20Raya%20No.119A%2C%20RT.1%2FRW.4%2C%20Tj.%20Duren%20Sel.%2C%20Kec.%20Grogol%20petamburan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011470!5e0!3m2!1sid!2sid!4v1683008538891!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <form class="form" action="proses.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="nama" name="nama"><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <label for="message">Message:</label>
                <textarea id="pesan" name="pesan"></textarea><br>

                <input type="submit" value="Submit" class="submitbtn">
            </form>
        </section>
        <!-- Contact END -->

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
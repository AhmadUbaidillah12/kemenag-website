<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Tempat Ibadah</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&family=Unbounded:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <!-- fonts -->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- my icons -->

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/tmp-ibadah.css">
    
</head>

<body>
    <!-- include php -->
    <?php include 'index.php'; ?>
    <!-- include php -->

    <!-- navbar start -->
    <nav class="navbar">
        <img src="img/KDA.png" alt="logos" class="logo" />

        <div class="navbar-nav">
            <a href="index.html">Halaman Utama</a>
            <a href="#">Kegiatan</a>
            <!-- dropdown start -->
            <div class="dropdown">
                <button class="dropbtn">Data Tempat Ibadah <i data-feather="chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="#buddha">Buddha</a>
                    <a href="#hindu">Hindu</a>
                    <a href="#kristen">Kristen</a>
                    <a href="#katholik">Katholik</a>
                    <a href="#konghuchu">Konghuchu</a>
                </div>
            </div>
            <!-- dropdown end -->
            <a href="#">Data Penduduk</a>
            <a href="#contact">Kontak Kami</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="cta-login"><i data-feather="user"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!--  Hero Section Start-->
    <section class="hero-tmp" id="home">
        <main class="content">
            <h1>
                Disini Tempatnya Data <span> Rumah Ibadah </span> di Seluruh <span>Yogyakarta</span>
            </h1>
            <p>
                Disini kamu dapat menemukan data rumah ibadah umat
                beragama non-muslim yang ada di seluruh Yogyakarta
            </p>
            <a href="#options" class="cta">Lihat Data </a>
        </main>
    </section>
    <!--  Hero Section End -->

    <!-- section buddha start-->
    <section id="buddha" class="buddha">
        <h2>Tempat Ibadah Agama Buddha</h2>
        <p>Berupa rekapan data tempat ibadah agama Buddha di seluruh Daerah Istimewa Yogyakarta</p>

        <div class="row">
            <div class="buddha-table">
                <table id="buddha">
                    <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM penduduk";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["nomor"]. "</td>";
                            echo "<td>" . $row["wilayah"]. "</td>";
                            echo "<td>" . $row["agama"]. "</td>";
                            echo "<td>" . $row["laki_laki"]. "</td>";
                            echo "<td>" . $row["perempuan"]. "</td>";
                            echo "<td>" . $row["total"]. "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </table>
                
            </div>
            <div class="content">
                <h3>Tempat Ibadah Agama Buddha</h3>
                <p>"Tempat Ibadah Agama Buddha di Yogyakarta merupakan sebuah tempat yang dibangun untuk keperluan ibadah bagi umat Buddha di kota Yogyakarta. Pada tahun 2019, terdapat sebanyak 15 tempat ibadah agama Buddha yang tersebar di berbagai wilayah di Yogyakarta, dengan jumlah pengunjung sebanyak 25.000 orang per bulannya. Tempat ibadah ini menyediakan berbagai fasilitas yang dibutuhkan oleh umat Buddha, seperti ruang meditasi, perpustakaan, serta pengajaran ajaran Buddha yang diberikan oleh para biksu. Selain itu, tempat ibadah juga menyelenggarakan berbagai acara keagamaan seperti upacara puja dan pemujaan."</p>
            </div>
        </div>
    </section>
    <!-- section buddha end-->

    <!-- section hindu start -->
    <section id="hindu" class="buddha">
        <h2>Tempat Ibadah Agama Hindu</h2>
        <p>Berupa rekapan data tempat ibadah agama Hindu di seluruh Daerah Istimewa Yogyakarta</p>

        <div class="row">
            <div class="buddha-table">
                <table id="hindu">
                    <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                </table>
                
            </div>
            <div class="content">
                <h3>Tempat Ibadah Agama Hindu</h3>
                <p>"Tempat Ibadah Agama Buddha di Yogyakarta merupakan sebuah tempat yang dibangun untuk keperluan ibadah bagi umat Buddha di kota Yogyakarta. Pada tahun 2019, terdapat sebanyak 15 tempat ibadah agama Buddha yang tersebar di berbagai wilayah di Yogyakarta, dengan jumlah pengunjung sebanyak 25.000 orang per bulannya. Tempat ibadah ini menyediakan berbagai fasilitas yang dibutuhkan oleh umat Buddha, seperti ruang meditasi, perpustakaan, serta pengajaran ajaran Buddha yang diberikan oleh para biksu. Selain itu, tempat ibadah juga menyelenggarakan berbagai acara keagamaan seperti upacara puja dan pemujaan."</p>
            </div>
        </div>
        
    </section>
    <!-- section hindu end -->

    <!-- section kristen start -->
    <section id="kristen" class="buddha">
        <h2>Tempat Ibadah Agama kristen</h2>
        <p>Berupa rekapan data tempat ibadah agama Hindu di seluruh Daerah Istimewa Yogyakarta</p>

        <div class="row">
            <div class="buddha-table">
                <table id="hindu">
                    <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                </table>
                
            </div>
            <div class="content">
                <h3>Tempat Ibadah Agama Hindu</h3>
                <p>"Tempat Ibadah Agama Buddha di Yogyakarta merupakan sebuah tempat yang dibangun untuk keperluan ibadah bagi umat Buddha di kota Yogyakarta. Pada tahun 2019, terdapat sebanyak 15 tempat ibadah agama Buddha yang tersebar di berbagai wilayah di Yogyakarta, dengan jumlah pengunjung sebanyak 25.000 orang per bulannya. Tempat ibadah ini menyediakan berbagai fasilitas yang dibutuhkan oleh umat Buddha, seperti ruang meditasi, perpustakaan, serta pengajaran ajaran Buddha yang diberikan oleh para biksu. Selain itu, tempat ibadah juga menyelenggarakan berbagai acara keagamaan seperti upacara puja dan pemujaan."</p>
            </div>
        </div>

    </section>
    <!-- section kristen end -->

    <!-- section katholik start -->
    <section id="katholik" class="buddha">
        <h2>Tempat Ibadah Agama katholik</h2>
        <p>Berupa rekapan data tempat ibadah agama Hindu di seluruh Daerah Istimewa Yogyakarta</p>

        <div class="row">
            <div class="buddha-table">
                <table id="hindu">
                    <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                </table>
                
            </div>
            <div class="content">
                <h3>Tempat Ibadah Agama katholik</h3>
                <p>"Tempat Ibadah Agama Buddha di Yogyakarta merupakan sebuah tempat yang dibangun untuk keperluan ibadah bagi umat Buddha di kota Yogyakarta. Pada tahun 2019, terdapat sebanyak 15 tempat ibadah agama Buddha yang tersebar di berbagai wilayah di Yogyakarta, dengan jumlah pengunjung sebanyak 25.000 orang per bulannya. Tempat ibadah ini menyediakan berbagai fasilitas yang dibutuhkan oleh umat Buddha, seperti ruang meditasi, perpustakaan, serta pengajaran ajaran Buddha yang diberikan oleh para biksu. Selain itu, tempat ibadah juga menyelenggarakan berbagai acara keagamaan seperti upacara puja dan pemujaan."</p>
            </div>
        </div>

    </section>
    <!-- section katholik end -->

    <!-- section konghuchu start -->
    <section id="konghuchu" class="buddha">
        <h2>Tempat Ibadah Agama konghuchu</h2>
        <p>Berupa rekapan data tempat ibadah agama Hindu di seluruh Daerah Istimewa Yogyakarta</p>

        <div class="row">
            <div class="buddha-table">
                <table id="hindu">
                    <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                </table>
                
            </div>
            <div class="content">
                <h3>Tempat Ibadah Agama konghuchu</h3>
                <p>"Tempat Ibadah Agama Buddha di Yogyakarta merupakan sebuah tempat yang dibangun untuk keperluan ibadah bagi umat Buddha di kota Yogyakarta. Pada tahun 2019, terdapat sebanyak 15 tempat ibadah agama Buddha yang tersebar di berbagai wilayah di Yogyakarta, dengan jumlah pengunjung sebanyak 25.000 orang per bulannya. Tempat ibadah ini menyediakan berbagai fasilitas yang dibutuhkan oleh umat Buddha, seperti ruang meditasi, perpustakaan, serta pengajaran ajaran Buddha yang diberikan oleh para biksu. Selain itu, tempat ibadah juga menyelenggarakan berbagai acara keagamaan seperti upacara puja dan pemujaan."</p>
            </div>
        </div>

    </section>
    <!-- section konghuchu end -->

    <!-- contact section start -->
    <section id="contact" class="contact">
        <h2>Kontak Kami</h2>
        <p>Tempat Kamu Bisa Tanya dan Cari Tahu Alamat Kami</p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9153503008874!2d110.382092!3d-7.7987867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577ed86f0911%3A0xcd971222910daa89!2sKanwil%20Kementerian%20Agama%20DIY!5e0!3m2!1sen!2sid!4v1674132976720!5m2!1sen!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-group">
                    <i data-feather="type"></i>
                    <input type="text" placeholder="Subjek">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- contact section end -->

    <!-- footer -->
    <footer>
        <div class="social">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="youtube"></i></a>
        </div>

        <div class="links">
            <a href="#home">Halaman Utama</a>
            <a href="#buddha">Kegiatan</a>
            <a href="#place">Tempat Ibadah</a>
            <a href="#umat">Data Penduduk</a>
            <a href="#contact">Kontak Kami</a>
        </div>

        <div class="credit">
            <p>Created by <a href="#">aubaidillah</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- footer -->


    <!-- JS -->
    <script src="js/script.js"></script>

    <!-- icons -->
    <script>
        feather.replace();
    </script>
    <!-- icons -->
</body>

</html>
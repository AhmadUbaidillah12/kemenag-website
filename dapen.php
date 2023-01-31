<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Penduduk</title>
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
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/dapen-style.css">
    
</head>
<body>
    <!-- include php -->
    <?php include 'indeg.php'; ?>
    <!-- include php -->

    <!-- navbar start -->
    <nav class="navbar">
        <img src="img/KDA.png" alt="logos" class="logo" />

        <div class="navbar-nav">
            <a href="index.html">Halaman Utama</a>
            <a href="#">Kegiatan</a>
            <a href="tempat-ibadah.php">Data Tempat Ibadah</a>
            <!-- dropdown start -->
            <div class="dropdown">
                <button class="dropbtn">Data Penduduk <i data-feather="chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="#yk">Yogyakarta</a>
                    <a href="#bantul">Bantul</a>
                    <a href="#sleman">Sleman</a>
                    <a href="#gunkid">Gunungkidul</a>
                    <a href="#westpro">Kulonprogo</a>
                </div>
            </div>
            <!-- dropdown end -->
            <a href="#contact">Kontak Kami</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="cta-login"><i data-feather="user"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Hero Section Start -->
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
    <section id="provinsi" class="buddha">
        <h2>Data Penduduk Provinsi DIY</h2>
        <p>Berupa rekapan data penduduk di seluruh Daerah Istimewa Yogyakarta tahun 2021</p>
        <div class="row">
            <div class="buddha-table">
                <table id="buddha">
                    <tr>
                        <td>Nomor</td>
                        <td>Wilayah</td>
                        <td>Agama</td>
                        <td>Laki-laki </td>
                        <td>Perempuan</td>
                        <td>Total</td>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM semester_2';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>

                </table>
            </div>
            </section>

<!-- Kota Yogyakarta Start -->

<div class="container">
  <div class="card">
  <button class="collapsible">Kota Yogyakarta</button>
  <div class="content">
    <button class="sub-collapsible">Wirobrajan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_wirobrajan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
  
    <button class="sub-collapsible">Umbulharjo</button>
    <div class="sub-content">
      <table>
        <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_umbulharjo';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Tegalrejo</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_tegalrejo';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Pakualaman</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_pakualaman';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">ngampilan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_ngnampilan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Mergangsan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_mergangsan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Mantrijeron</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_mantrijeron';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Kraton</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_kraton';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Kotagede</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_kotagede';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Jetis</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_jetis';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Gondomanan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_gondomanan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Gondokusuman</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_gondokusuman';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Gedongtengen</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_gedongtengen';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Danurejan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kota_yogyakarta_danurejan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
  </div>
  </div>
  <!-- Kota Yogyakarta End -->

<!-- Kabupaten Sleman Start -->
<div class="container">  
<div class="card">
  <button class="collapsible">Kabupaten Sleman</button>
  <div class="content">
    <button class="sub-collapsible">Turi</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_turi';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Tempel</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_tempel';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Sleman</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_sleman';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Seyegan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_seyegan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Prambanan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_prambanan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Pakem</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_pakem';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Ngemplak</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_ngemplak';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Ngaglik</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_ngaglik';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Moyudan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_moyudan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Mlati</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_mlati';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Minggir</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_minggir';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Kalasan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_kalasan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Godean</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_godean';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Gamping</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_gamping';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Depok</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_depok';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Cangkringan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_cangkringan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Berbah</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_sleman_berbah';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
                </div>
    <!-- Kabupaten Sleman End -->

<!-- Kabupaten Gunungkidul Start -->
<div class="container">    
<div class="card">
  <button class="collapsible">Kabupaten Gunungkidul</button>
  <div class="content">
    <button class="sub-collapsible">Wonosari</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_wonosari';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Tepus</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_tepus';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Tanjungsari</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_tanjungsari';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Semin</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_semin';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Semanu</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_semanu';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Saptosari</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_saptosari';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Rongkop</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_rongkop';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Purwosari</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_purwosari';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Ponjong</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_ponjong';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Playen</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_playen';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Patuk</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_patuk';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Panggang</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_panggang';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Paliyan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_paliyan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Nglipar</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_nglipar';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Ngawen</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_ngawen';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Karangmojo</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_karangmojo';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Girisubo</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_girisubo';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">gedangsari</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_gunungkidul_gedangsari';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    </div>
    <!-- Kabupaten Gunungkidul End -->

    <!--Kabupaten Bantul Start -->
    <div class="container">
    <div class="card">
  <button class="collapsible">Kabupaten Bantul</button>
  <div class="content">
    <button class="sub-collapsible">Sewon</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_sewon';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Sedayu</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_sedayu';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Sanden</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_sanden';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Pundong</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_pundong';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Pleret</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_pleret';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Piyungan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_piyungan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Pandak</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_pandak';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Pajangan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_pajangan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Kretek</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_kretek';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Kasihan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_kasihan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Jetis Bantul</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_jetisbantul';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Imogiri</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_imogiri';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Dlingo</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_dlingo';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Bantul</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_bantul';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Banguntapan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_banguntapan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Bambanglipuro</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_bantul_bambanglipuro';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    </div>
    <!-- Kabupten Bantul End -->

    <!-- Kabupten Kulonprogo Start -->
    <div class="container">
    <div class="card">
  <button class="collapsible">Kabupaten Kulonprogo</button>
  <div class="content">
    <button class="sub-collapsible">Wates</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_wates';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Temon</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_temon';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Sentolo</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_sentolo';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Samigaluh</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_samigaluh';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Pengasih</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_pengasih';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Panjatan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_panjatan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Nanggulan</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_nanggulan';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Lendah</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_lendah';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Kokap</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_kokap';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Kalibawang</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_kalibawang';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Girimulyo</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_girimulyo';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    <button class="sub-collapsible">Galur</button>
    <div class="sub-content">
      <table>
      <tr>
                        <th>Nomor</th>
                        <th>Wilayah</th>
                        <th>Agama</th>
                        <th>Laki-laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $conn = new mysqli(
                        $servername,
                        $username,
                        $password,
                        $dbname
                    );

                    if (!$conn) {
                        die('Koneksi gagal: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * FROM kab_kulonprogo_galur';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['Wilayah'] . '</td>';
                            echo '<td>' . $row['Agama'] . '</td>';
                            echo '<td>' . $row['L'] . '</td>';
                            echo '<td>' . $row['P'] . '</td>';
                            echo '<td>' . $row['Total'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo 'Tidak ada hasil';
                    }

                    $conn->close();
                    ?>
      </table>
    </div>
    </div>
  </div>
</div>
</section>



    <!-- section Provinsi start-->

    <!-- Kabupaten Kulonprogo End -->
           
    </section>
 

    <script>
    feather.replace();
  </script>
</body>

<!-- JS -->
<script src="js/dapen.js"></script>
<script src="js/script.js"></script>
</html>

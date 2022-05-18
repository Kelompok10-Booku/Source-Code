<?php
  include "connect.php";
  $id = $_GET['id'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Goldman&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comforter&display=swap" rel="stylesheet">
    <title>Booku</title>
    <style>
        .card{
            width:500px;
            padding:10px;
            background-color:#F1F9FC;
            margin:auto;
        }
        .navbar{
            background-color:#F0E68C;
        }
        .footer{
            margin-top : 400px;
        }
        .card img{
            width:100px;
        }

    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light"style="background-color:#F0E68C;">
        <div class="container">
          <a class="navbar-brand" href="#" style="font-family: 'Permanent Marker', cursive; font-size: 45px;">Booku.Com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left: auto; font-family: bebas neue;font-size: 20px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="keranjang.php">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="daftar_order.php">Daftar Order</a>
              </li>
              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Username</a>
                                <div class="dropdown-menu dropdown-menu-dark">
                                        <a class="dropdown-item" href="profil.php">Profil</a>
                                        <p class="dropdown-item">Nama Lengkap</p>
                                        <p class="dropdown-item">
                                            <img class="img img-responsive rounded-circle mb-3" width="160" src="assets/images/profile.png"> 
                                        </p>
                                        <p class="dropdown-item">Email</p>
                                        <a class="dropdown-item" href="logout.php">Log Out</a>
                                </div>
                            </li>
            </ul>
          </div>
        </div>
      </nav>
    
<!-- End navbar -->

<!-- content -->
    <div class="container">
        <div class="card mt-5 mb-5">
        <p>
          <?php 
            $query = mysqli_query($koneksi,"select * from pesanan");
            $hasil = (mysqli_fetch_assoc($query));
          ?>
        <h4 class="mb-4">Alamat Pengiriman</h4>
            <?= $hasil['nama'] ?><br>
            <?= $hasil['no_handphone'] ?><br>
            <?= $hasil['alamat'] ?> <br>
            <?= $hasil['kota'] ?><br> 
            <?= $hasil['provinsi'] ?><br>
            <div class="border"style="border-bottom:2px solid black"></div>
        </p>
            <div class="row">
            <?php $query = mysqli_query($koneksi,"SELECT * FROM buku WHERE id = '$id'");
                  $data = mysqli_fetch_assoc($query)
            ?>
                <div class="col"><img src="img/<?= $data['gambar'] ?>" alt=""></div>
                <div class="col md-3">
                    <h5><?= $data['judul'] ?></h5>
                    <div class="row"><p><?= $data['harga'] ?></p></div>
                    <div class="row">
                        <div class="col"><a href="detail_buku.php?id=<?php echo $data['id'] ?>"><button class="btn btn-warning">Lihat Buku</button></a></div>
                        <div class="col"><a href="home.php"><button class="btn btn-primary">Pesan Lagi</button></a></div>
                    </div>
                </div>  
            </div>
            <div class="border"style="border-bottom:2px solid black; margin-top:15px"></div>
            <div class="row">
                <div class="col">
                    <h4>Kupon atau diskon : 10%</h4>
                    <img src="" alt="">
                </div>
            </div>
            <div class="border"style="border-bottom:2px solid black"></div>
            <div class="row">
                <div class="col">
                    <div class="row"><p>Harga Pesanan :</p></div>
                    <div class="row"><p>Ongkos Kirim :</p></div>
                    <div class="row"><p>Diskon :</p></div>
                    <div class="row"><p>Total Pembayaran :</p></div>
                </div>
                <div class="col">
                  <?php
                    $ongkir = 10000;
                    $diskon = 10/100 * $data['harga'];
                    $total = ($data['harga'] - $diskon ) + $ongkir;
                  ?>
                    <div class="row"><p>Rp.<?= $data['harga'] ?></p></div>
                    <div class="row"><p>Rp.10000</p></div>
                    <div class="row"><p>Rp.<?= $diskon ?></p></div>
                    <div class="row"><p>Rp.<?= $total; ?></p></div>
                </div>
                <h3>Segera Melakukan Pembayaran ke nomor berikut :</h3>
                <h3>123456778</h3>
                <form action="" method="post">
                <div class="form-group mb-4 mt-4">
                <label for="keterangan_alamat">Upload Bukti Pembayaran</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
                </form>
            </div>
            <div class="border"style="border-bottom:2px solid black"></div>
            <button class="btn btn-success">Konfirmasi</button>
        </div>
    </div>

        <!--Footer-->
        <div class="text-center p-3" style="background-color: #F0E68C; font-family: 'Goldman', cursive; font-size:20px">
        © Copyright by Booku 2022
        </div>
        <footer class=" text-center text-white pb-5"style="background-color:#F0E68C;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fa fa-twitter"></i
          ></a>
          <!-- WhatsApp -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fa fa-whatsapp"></i
          ></a>
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fa fa-instagram"></i
          ></a>
          
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </footer>

  </body>
</html>


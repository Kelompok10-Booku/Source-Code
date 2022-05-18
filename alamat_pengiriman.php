<?php
  $id = $_GET['id'];
  include "connect.php";

  if(isset($_POST['kirim'])) {
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $no_handphone = filter_input(INPUT_POST, 'no_handphone', FILTER_SANITIZE_STRING);
    // enkripsi password
    $alamat = filter_input(INPUT_POST, 'alamat');
    $kota = filter_input(INPUT_POST, 'kota');
    $provinsi = filter_input(INPUT_POST, 'provinsi');
    $deskripsi = filter_input(INPUT_POST, 'deskripsi');


    $sql = "INSERT INTO pesanan(nama, no_handphone, alamat, kota,provinsi,deskripsi)VALUES ('$nama', '$no_handphone', '$alamat', '$kota', '$provinsi', '$deskripsi')";
    $data = mysqli_query($koneksi,$sql);

  }

  session_start();
// $_SESSION['nama_pembeli'] = $name;
// $_SESSION['email_pembeli'] = $email;

//mengecek username pada session
if( !isset($_SESSION['user']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}

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
            margin-bottom: 400px;
        }
        .navbar{
            background-color:#F0E68C;
        }
        .footer{
            margin-top : 400px;
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
        <div class="card mt-5">
            <h3 style=" font-family: comforter; font-weight:bolder">Informasi Pengiriman</h3>
                <!-- <table class="mb-5" cellpadding="10">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input type="text"></td>
                    <tr>
                        <td>No.handphone</td>
                        <td><input type="text"></td>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text"></td>
                    <tr>
                        <td>Kabupaten/Kota</td>
                        <td><input type="text"></td>
                    <tr>
                        <td>Provinsi</td>
                        <td><input type="text"></td>
                    <tr>
                        <td>Pekerjaan</td>
                        <td><input type="text"></td>
                    <tr>
                        <td>Alamat</td>
                        <td>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        </td>
                    </tr>
                </table> -->
                <form action="" method="POST" class="">

            <div class="form-group mb-2">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama lengkap anda" required/>
            </div>

            <div class="form-group mb-2">
                <label for="no_handphone">No handphone</label>
                <input class="form-control" type="text" name="no_handphone" placeholder="No.handphone" required/>
            </div>

            <div class="form-group mb-2">
                <label for="username">Alamat</label>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" required/>
            </div>

            <div class="form-group mb-2">
                <label for="password">Kabupaten/Kota</label>
                <input class="form-control" type="text" name="kota" placeholder="Kabupaten/Kota" required/>
            </div>

            <div class="form-group mb-2">
                <label for="provinsi">Provinsi</label>
                <input class="form-control" type="text" name="provinsi" placeholder="Provinsi" required/>
            </div>

            <div class="form-group mb-4">
                <label for="keterangan_alamat">Keterangan Alamat</label>
                <textarea class="form-control" name="deskripsi" placeholder="Keterangan Alamat Anda" id="floatingTextarea"></textarea>
            </div>

            <input type="submit" class="btn btn-success btn-block" name="kirim" value="Konfirmasi"/>
            <input type="reset" class="btn btn-danger btn-block"  value="Batal"/>
        </form>
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
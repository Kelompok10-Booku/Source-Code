<?php
//inisialisasi session
include "connect.php";

$s = $_POST['Search'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Booku</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Goldman&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>
        .batas{
            border-bottom:2px solid lime;
            margin : 20px;
        }
        .card img{
            height: 200px
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Kategori</h3>
            </div>

            <?php
                $query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori ASC");
                while($data = mysqli_fetch_assoc($query)) { ?> 
            
            <ul class="list-unstyled components">
                <li>
                    <a href="kategori.php?id_kategori=<?php echo $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></a>
                </li>
            </ul>
            <?php } ?>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light"style="background-color:#F0E68C;">
        <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
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
                                        <a href="kupon_saya.php"><p class="dropdown-item">Kupon</p></a>
                                        <a class="dropdown-item" href="logout.php">Log Out</a>
                                </div>
                            </li>
            </ul>
          </div>
        </div>
      </nav>
            
            <div class="row">
                <div class="col-md-6">
                    <form action="search.php" method="post">
                        <div class="input-group mb-3">
                            <input required type="text" class="form-control" placeholder="Search" name="Search" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?= $s ?>">
                            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Carousel -->
            
            <!-- End Carousel -->
            
            <div class="row">
                <?php 
                //    $data =  "select * from buku order by id asc";
                //    $query = mysqli_query($koneksi,$data);
                //    while($hasil=mysqli_fetch_assoc($query)) {
                ?>
                <?php 
					$brgs=mysqli_query($koneksi,"SELECT * from buku where judul like '%$s%' or pengarang like '%$s%' order by id ASC");
					$x = mysqli_num_rows($brgs);
					
					if($x>0){
					while($hasil=mysqli_fetch_array($brgs)){
					?>
                <div class="col-md-3">
                <div class="card mb-5" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                    <img src="img/<?= $hasil['gambar'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $hasil['judul'] ?></h5>
                        <p class="card-text"><?= $hasil['deskripsi'] ?></p>
                        <h4 class="card-text"><?= $hasil['harga'] ?></h4>
                        <a href="detail_buku.php?id=<?php echo $hasil['id'] ?>" class="btn btn-success">Lihat Detail</a>
                    </div>
                    </div>
                </div>

                <?php } ?>
                <?php } else{ ?>
                    <div class="alert alert-danger ml-3" role="alert">
                        Data Tidak Ditemukan
                    </div>
               <?php }?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-white pb-5"style="background-color:#F0E68C;">
        <div class="text-center p-3" style="background-color: #F0E68C; font-family: 'Goldman', cursive; font-size:20px;color:black">
        © Copyright by Booku 2022
        </div>
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
    </footer>
    <!-- End Footer -->

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>


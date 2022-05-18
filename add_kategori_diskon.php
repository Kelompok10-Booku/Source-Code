<?php
//inisialisasi session
// $_SESSION['nama_pembeli'] = $name;
// $_SESSION['email_pembeli'] = $email;

//mengecek username pada session
// if( !isset($_SESSION['user']) ){
//   $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
//   header('Location: login.php');
// }
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

    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>BOOKU</h3>
            </div>
            
            <ul class="list-unstyled components">
                <li>
                    <a href="home_admin.php">Home</a>
                </li>
                <li class="">
                    <a href="kelola_pesanan.php">Kelola Pesanan</a>
                </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kelola Buku
                        </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <!-- <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="add_kategori.php">Kategori Buku</a></li>
                                <li><a class="dropdown-item" href="#">Kategori Diskon</a></li>
                            </ul>
                        </li> -->
                        <li><a class="dropdown-item" href="add_kategori.php">Kategori Buku</a></li>
                        <li><a class="dropdown-item" href="add_kategori_diskon.php">Kategori Diskon</a></li>
                        <li><a class="dropdown-item" href="buku.php">Buku</a></li>
                        <li><a class="dropdown-item" href="konfirmasi_pembayaran.php">Konfirmasi Pembayaran</a></li>
                    </ul>
                </li>
                <li>
                    <a href="diskon.php">Diskon</a>
                </li>
                <li></li>
            </ul>

        </nav>


        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg ">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                <div class="container">

                    <h3 style="margin-left: 10px;font-family:'Permanent Marker', cursive;">Booku.Com</h3>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto" style="font-family:Bebas Neue; font-size:20px">
                            <li class="nav-item active">
                                <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="keranjang.php">Keranjang</a>
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
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-success col-md-2">Tambah</button>
            <div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Kategori</h4>
						</div>
						<div class="modal-body">
							<form method="post">
								<div class="form-group">
									<label>Nama Kategori</label>
									<input name="namakategori" type="text" class="form-control" required autofocus>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="addcategory" type="submit" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>
                <table class="table table-striped" style="margin-top:20px">
                    <tr class="thead-dark">
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pengguna Baru</td>
                        <td>10</td>
                        <td><button class="btn btn-danger">Hapus</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Voucher Diskon 20%</td>
                        <td>20</td>
                        <td><button class="btn btn-danger">Hapus</button></td>
                    </tr>
                </table>
            

    <!-- Footer -->
    <footer class="text-center text-white pb-5"style="background-color:#F0E68C;margin-top:350px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
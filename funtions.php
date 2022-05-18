<?php
function cari($keyword){
    $query = "SELECT * FROM buku WHERE judul LIKE %$keyword%";
}

?>
<div class="container">
<br>

<?php
//mekanisme/trik untuk menjalankan file php dari url/link tampa ekstensi php dengan menggunakan get
//trik seperti ini akan sering digunakan pada framework laravel untuk membedakan halaman utama (home page) dengan page yang lain.
//pertama akan mengecek apakah variabel $_GET['f'] ada value-nya atau tidak. value get berupa 
//kl ada, akan digunakan untuk memanggil file sesuai dengan value yang diperoleh dari $_GET dengan code include_once
if (isset($_GET['f'])) {
    $file = $_GET['f'];
    if (file_exists("$file.php")) {
        include_once "$file.php";
    } else {
        echo 'File Tidak ada</b>';
    }
} else {
    echo "<div class='jumbotron text-center'> <h1>Selamat Datang di Database Akademik Bootleg</h1></div>";
    echo "
    <div class='container '>
        <div class='row'>
            <div class='col text-center'>
    <ul class='navbar nav'>
    <li class='nav-item btn-1'>
      <a class='nav-link btn btn-success' href='" . BASEURL . "/dosen'>Data Dosen</a>
    </li>
    <li class='nav-item btn-1'>
      <a class='nav-link btn-warning btn' href='" . BASEURL . "/mahasiswa'>Data Mahasiswa</a>
    </li>
    <li class='nav-item btn-1'>
      <a class='nav-link btn btn-primary' href='" . BASEURL . "/matkul'>Data Matakuliah</a>
    </li></div></div></div>";
}
?>
</div> 
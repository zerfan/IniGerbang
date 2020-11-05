<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <title><?= $data['judul']; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a href="<?= BASEURL;?>">
  <img class="logo-main scale-with-grid" href="index.php" src="https://itk.ac.id/wp-content/uploads/2016/01/Logo-Web-ITK.png" alt="Institut Teknologi Kalimantan"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL;?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL;?>/dosen">Dosen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL;?>/mahasiswa">Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL;?>/matkul">Mata Kuliah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL;?>/about">About</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
    <!-- Optional JavaScript; choose one of the two! -->
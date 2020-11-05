<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL;?>/mahasiswa/cari" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
            <button class="btn btn-primary" type="Submit" id="tombolCari" >Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row ">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach ( $data['mhs'] as $mhs ) : ?>
              <li class="list-group-item">
                  <?= $mhs['nama'];?>
                  <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda yakin ingin menghapus data ?');">Hapus</a>
                  <a data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];?>" class="badge badge-success float-right ml-1 tampilModalUbah">Edit</a>
                  <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right ml-1">Details</a>
                  <a href="<?= BASEURL;?>/mahasiswa/frs/<?= $mhs['id'];?>" class="badge badge-success float-right ml-1">FRS</a>
              </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama">  
        </div>

        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim">
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <select class="form-control" id="id_prodi" name="id_prodi">
              <option value="1">Fisika</option>
              <option value="2">Matematika</option>
              <option value="3">Teknik Mesin</option>
              <option value="4">Teknik Elektro</option>
              <option value="5">Teknik Kimia</option>
              <option value="6">Teknik Material dan Metalurgi</option>
              <option value="7">Teknik Sipil</option>
              <option value="8">Perencanaan Wilayah dan Kota</option>
              <option value="9">Teknik Perkapalan</option>
              <option value="10">Sistem Informasi</option>
              <option value="11">Informatika</option>
              <option value="12">Teknik Industri</option>
              <option value="13">Teknik Lingkungan</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submitTambah" class="btn btn-primary">Tambah Data</button>
    </form>
      </div>
    </div>
  </div>
</div>
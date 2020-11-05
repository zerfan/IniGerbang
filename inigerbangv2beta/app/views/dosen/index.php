<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDataDosen" data-toggle="modal" data-target="#formModalDosen">
            Tambah Data Dosen
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL;?>/dosen/cari" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Dosen.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
            <button class="btn btn-primary" type="Submit" id="tombolCari" >Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row ">
    <div class="col-lg-6">
        <h3>Daftar Dosen</h3>
        <ul class="list-group">
            <?php foreach ( $data['dosen'] as $dosen ) : ?>
              <li class="list-group-item">
                  <?= $dosen['nama_dosen'];?>
                  <a href="<?= BASEURL;?>/dosen/hapus/<?= $dosen['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda yakin ingin menghapus data ?');">Hapus</a>
                  <a  data-toggle="modal" data-target="#formModalDosen" data-id="<?= $dosen['id'];?>"  class="badge badge-success float-right ml-1 tampilModalUbahDosen">Edit</a>
                  <a href="<?= BASEURL;?>/dosen/detail/<?= $dosen['id'];?>" class="badge badge-primary float-right ml-1">Details</a>
              </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>

<div class="modal fade" id="formModalDosen" tabindex="-1" aria-labelledby="formModalLabelDosen" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelDosen">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/dosen/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama Dosen</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">  
        </div>

        <div class="form-group">
            <label for="nim">NIP</label>
            <input type="number" class="form-control" id="nip" name="nip">
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

        <div class="form-group">
          <input type="radio" id="pendidikan" name="pendidikan" value="S2">
          <label for="S2">S2</label>
          <input type="radio" id="pendidikan" name="pendidikan" value="S3">
          <label for="S3">S3</label>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
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
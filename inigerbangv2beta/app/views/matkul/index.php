<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <h1>Data Mata Kuliah</h1>
            <a class="btn btn-success tombolTambahMatkul" data-toggle="modal" data-target="#formModal" href="<?= BASEURL; ?>/matkul/tambah">Input Data Mata Kuliah</a>
        </div>
    </div>
  
    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL;?>/matkul/cari" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Matkul.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
            <button class="btn btn-primary" type="Submit" id="tombolCari" >Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

<?= var_dump($_POST); ?>
    <table class='table'>  
        <thead>
        <tr>
        <th scope='col'>NAMA MATA KULIAH</th>
        <th scope='col'>SKS</th>
        <th scope='col'>KODE</th>
        <th scope='col'>DOSEN PENGAMPU</th>
        <th scope='col'>AKSI</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data['mk'] as $matkul) : ?>
                <tr>
                <td><?= $matkul["nama_mk"];?></td>
                <td><?= $matkul["sks"];?></td>
                <td><?= $matkul["kode"]?></td>
                <td><?= $matkul["nama_dosen"]?></td>
                <td>
                    <div class='col'>
                        <a class='btn btn-primary mr-2 tombolEditMatkul' data-toggle="modal" data-target="#formModal">Edit</a>
                        <a class='btn-danger btn' href="<?= BASEURL;?>/matkul/hapus/<?= $matkul['id'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data ?');">Hapus</a>
                    </div>
                </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabelMatkul" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelMatkul">Tambah Data Mata Kuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/matkul/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama_mk">Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="nama_mk" name="nama_mk">
        </div>

        <div class="form-group">
            <label for="sks">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks">
        </div>

        <div class="form-group">
            <label for="kode">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode" name="kode">
        </div>

        <div class="form-group">
            <label for="id_dosen">Dosen Pengampu</label>
            <select class="form-control" id="id_dosen" name="id_dosen">
            <?php foreach($data['dosen'] as $dosen) : ?>
                <option value="<?= $dosen['id']?>"><?= $dosen['nama_dosen'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </form>
    </div>
  </div>
</div>
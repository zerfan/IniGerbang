<div class="container mt-4">
    <div class="jumbotron">
    <div class="container ">
    <div class="row text-center">
        <div class="col-lg">
            <h2 class='lead'>DATA MAHASISWA</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
        Nama 
        </div>
        <div class="col-lg-6">
        : <?= $data['mhs']['nama']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
        NIM 
        </div>
        <div class="col-lg-6">
        : <?= $data['mhs']['nim']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
        Prodi
        </div>
        <div class="col-lg-6">
        : <?= $data['mhs']['nama_prodi']; ?>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <form method="POST" action="<?= BASEURL; ?>/mahasiswa/tambahfrs">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Ambil Rencana Studi</label>
            <select class="form-control" name="id_matkul">
            <?php foreach( $data['mk'] as $matkul) : ?>
            <option value="<?= $matkul['id'];?>"><?= $matkul['nama_mk'] ?> | <?= $matkul['sks']; ?> SKS | <?= $matkul['nama_dosen'];?></option>
            <?php endforeach; ?>
            <input type="hidden" name="id_mahasiswa" id="id_mahasiswa" value="<?= $data['mhs']['id']; ?>">
            <input type="hidden" name="id_frs" id="id_frs">
            </select>
        </div>
        <input class="btn btn-primary mb-5" type="submit" value="Submit">
    </form>
    <?= var_dump( $data['mhs']); ?>
        <div class="row">
            <div class="col">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama Mata kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Dosen Pengampu</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php // foreach( $data['mhs'] as $mhs) : ?>
                    <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><div class='col'><a class='btn btn-danger mr-2' href="<?= BASEURL;?>/mahasiswa/hapus/<?= $data['id'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data ?');">Hapus</a></div></td>
                    </tr>
                    <?php // endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
</div>
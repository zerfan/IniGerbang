<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['dosen']['nama_dosen']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['dosen']['nip']; ?></h6>
            <p class="card-text"><?= $data['dosen']['nama_prodi']; ?></p>
            <p class="card-text"><?= $data['dosen']['pendidikan']; ?></p>
            <p class="card-text"><?= $data['dosen']['alamat']; ?></p>
            <a href="<?= BASEURL;?>/dosen" class="card-link">Kembali</a>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="mt-3">Ubah data dosen</h3>
    <div class="row mt-2">
    <div class="col-lg-6">
    <form action="">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div class="form-group">
            <label for="nama">nip</label>
            <input type="number" class="form-control" id="nip">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <?=  var_dump($data['dosen']); ?>
            <?php foreach($data['dosen'] as $dosen) : ?>
                <option value="<?php $dosen['idprodi'];?>"><?= $dosen['namaprodi'];?></option>

            <?php endforeach; ?>
            </select>
        </div>

    </form>
    </div>
    </div>
</div>
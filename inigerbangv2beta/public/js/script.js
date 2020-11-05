$(function() {
    
    // mahasiswa
    $('.tombolTambahData').on('click', function() {
        $('.modal-footer button[type=submit]').html('Tambah Data');
        document.getElementById("nama").value = "";
        document.getElementById("nim").value = "";
        document.getElementById("id_prodi").value = "";
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah data');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/pabw/inigerbangv2beta/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url:        'http://localhost/pabw/inigerbangv2beta/public/mahasiswa/getubah',
            data:       {id : id},
            method:     'post',
            dataType:   'json',
            success:    function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#id_prodi').val(data.id_prodi);
                $('#id').val(data.id);
            }
        });
    });

    // dosen
    $('.tombolTambahDataDosen').on('click', function() {
        $('#formModalLabelDosen').html('Tambah Data Dosen');
        document.getElementById("nama_dosen").value = "";
        document.getElementById("nip").value = "";
        document.getElementById("id_prodi").value = "";
        document.getElementById("pendidikan").value = "";
        document.getElementById("alamat").value = "";
    });
    
    $('.tampilModalUbahDosen').on('click', function() {
        $('#formModalLabelDosen').html('Ubah data Dosen');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/pabw/inigerbangv2beta/public/dosen/ubah');
        
        const id = $(this).data('id');
        
        $.ajax({
            url:        'http://localhost/pabw/inigerbangv2beta/public/dosen/getubah',
            data:       {id : id},
            method:     'post',
            dataType:   'json',
            success:    function(data) {
                $('#nip').val(data.nip);
                $('#nama_dosen').val(data.nama_dosen);
                $('#id_prodi').val(data.id_prodi);
                $('#pendidikan').val(data.pendidikan);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });
    });
    
    // Mata kuliah
    $('.tombolTambahMatkul').on('click', function() {
        $('#formModalLabelMatkul').html('Tambah Data Mata Kuliah');
        document.getElementById("nama_mk").value = "";
        document.getElementById("sks").value = "";
        document.getElementById("kode").value = "";
        document.getElementById("pendidikan").value = "";
        document.getElementById("id_dosen").value = "";
    });
    
    $('.tombolEditMatkul').on('click', function() {
        $('#formModalLabelMatkul').html('Ubah data Mata Kuliah');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/pabw/inigerbangv2beta/public/matkul/ubah');
        
        const id = $(this).data('id');
        $.ajax({
            url:        'http://localhost/pabw/inigerbangv2beta/public/matkul/getubah',
            data:       {id : id},
            method:     'post',
            dataType:   'json',
            success:    function(data) {
                $('#nama_mk').val(data.nama_mk);
                $('#sks').val(data.sks);
                $('#kode').val(data.kode);
                $('#id_dosen').val(data.id_dosen);
                $('#id').val(data.id);
            }
        });
    });
});

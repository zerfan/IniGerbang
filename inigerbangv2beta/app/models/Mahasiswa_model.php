<?php 

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT mahasiswa.id,nama,nim, prodi.nama_prodi FROM ' . $this->table.' join prodi on mahasiswa.id_prodi = prodi.id_prodi');
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT mahasiswa.*, prodi.nama_prodi FROM ' . $this->table . ' join prodi on mahasiswa.id_prodi = prodi.id_prodi WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('' ,:nama, :nim, :id_prodi)";
        
        $this->db->query($query);
        $this->db->bind('nama',     $data['nama']);
        $this->db->bind('nim',      $data['nim']);
        $this->db->bind('id_prodi',  $data['id_prodi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {   
        $query = "UPDATE mahasiswa SET
                    nama = :nama, nim = :nim, id_prodi = :id_prodi
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama',     $data['nama']);
        $this->db->bind('nim',      $data['nim']);
        $this->db->bind('id_prodi',  $data['id_prodi']);
        $this->db->bind('id',  $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function getFrsById($id)
    {   
        // $id = intval($id);
        // var_dump($data);
        $query = "SELECT * FROM frs WHERE id_mahasiswa = :id";
        $this->db->bind('id', "$id");
        return $this->db->resultSet();
    }

    public function tambahDataFrs($data)
    {
        $query = "INSERT INTO frs
        VALUES
        ('', :id_mahasiswa, :id_matkul)";
        $this->db->query($query);
        $this->db->bind('id_mahasiswa', $data['id_mahasiswa']);
        $this->db->bind('id_matkul', $data['id_matkul']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataFrs($id_frs)
    {
        $query = "DELETE FROM frs WHERE id_frs = :id_frs";
        $this->db->query($query);
        $this->db->bind('id_frs', $id_frs);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

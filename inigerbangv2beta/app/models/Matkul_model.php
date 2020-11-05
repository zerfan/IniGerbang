<?php 

class Matkul_model {
    private $table = 'matkul';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatkul()
    {
        $this->db->query('SELECT
        matkul.*,
        matkul.id_dosen,
        dosen.nama_dosen FROM ' . $this->table . ' JOIN dosen ON matkul.id_dosen = dosen.id');
        return $this->db->resultSet();
    }

    public function getMatkulById($id)
    {
        $this->db->query('SELECT
        matkul.*,
        dosen.nama_dosen FROM ' . $this->table . ' JOIN dosen ON matkul.id_dosen = dosen.id WHERE matkul.id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMatkul($data)
    {
        $query = "INSERT INTO matkul
                    VALUES
                    ('' ,:nama_mk, :sks, :kode, :id_dosen)";
        
        $this->db->query($query);
        $this->db->bind('nama_mk',  $data['nama_mk']);
        $this->db->bind('sks',      $data['sks']);
        $this->db->bind('kode',     $data['kode']);
        $this->db->bind('id_dosen', $data['id_dosen']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMatkul($id)
    {
        $query = "DELETE FROM matkul WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMatkul($data)
    {   
        $query = "UPDATE matkul SET
                    nama_mk = :nama_mk, sks = :sks, kode = :kode, id_dosen = :id_dosen
                    WHERE id = :id";
                    
        $this->db->query($query);
        $this->db->bind('nama_mk',  $data['nama_mk']);
        $this->db->bind('sks',      $data['sks']);
        $this->db->bind('kode',     $data['kode']);
        $this->db->bind('id_dosen', $data['id_dosen']);
        $this->db->bind('id',       $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMatkul()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM matkul WHERE nama_mk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}

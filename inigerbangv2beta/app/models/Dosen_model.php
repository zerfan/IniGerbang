<?php 

class Dosen_model {
    private $table = 'dosen';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDosen()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDosenById($id)
    {
        $this->db->query('SELECT dosen.*, prodi.id_prodi, prodi.nama_prodi FROM ' . $this->table . ' join prodi on dosen.id_prodi = prodi.id_prodi WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataDosen($data)
    {
        $query = "INSERT INTO dosen
                    VALUES
                    ('' ,:nip,:nama_dosen, :id_prodi, :pendidikan, :alamat)";
        
        $this->db->query($query);
        $this->db->bind('nama_dosen',     $data['nama_dosen']);
        $this->db->bind('nip',     $data['nip']);
        $this->db->bind('id_prodi',  $data['id_prodi']);
        $this->db->bind('pendidikan',  $data['pendidikan']);
        $this->db->bind('alamat',  $data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataDosen($id)
    {
        $query = "DELETE FROM dosen WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataDosen($data)
    {
        $query = "UPDATE dosen SET
                    nama_dosen = :nama_dosen, nip = :nip, id_prodi = :id_prodi, pendidikan = :pendidikan, alamat = :alamat
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama_dosen',   $data['nama_dosen']);
        $this->db->bind('nip',          $data['nip']);
        $this->db->bind('id_prodi',     $data['id_prodi']);
        $this->db->bind('pendidikan',   $data['pendidikan']);
        $this->db->bind('alamat',       $data['alamat']);
        $this->db->bind('id',           $data['id']);
        var_dump($data);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataDosen()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM dosen WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();

        
    }
}

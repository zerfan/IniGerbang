<?php 

class Mahasiswa extends Controller {
    public function index()
    {   
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {   
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
    
    public function frs($id)
    {
        $data['judul'] = 'FRS';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $data['mk'] = $this->model('Matkul_model')->getAllMatkul();
        // $data['mk'] = $this->model('Matkul_model')->getMatkulById($id);
        // $data['frs'] = $this->model('Mahasiswa_model')->getFrsById($id);
        
        $this->view('templates/header', $data);
        $this->view('mahasiswa/frs', $data);
        $this->view('templates/footer');

    }

    public function tambahfrs()
    {
        if( $this->model('Mahasiswa_model')->tambahDataFrs($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'FRS');
            header('Location: ' . BASEURL . '/mahasiswa/frs/' . $_POST['id_mahasiswa']);
            exit;
        } else { 
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa/frs/' . $_POST['id_mahasiswa']);
            exit;
        }
    }
    
    public function hapusfrs($id)
    {   
        if( $this->model('Mahasiswa_model')->hapusDataFrs($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'FRS');
            header('Location: ' . BASEURL . '/mahasiswa/frs/' . $_POST['id_mahasiswa']);
            exit;
        } else { 
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa/frs/' . $_POST['id_mahasiswa']);
            exit;
        }
    }

    public function tambah()
    {   
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {   
        if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'diubah', 'danger', 'mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    
}
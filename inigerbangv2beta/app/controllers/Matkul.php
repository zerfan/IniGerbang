<?php 

class Matkul extends Controller {
    public function index()
    {   
        $data['judul'] = 'Mata Kuliah';
        $data['mk'] = $this->model('Matkul_model')->getAllMatkul();
        $data['dosen'] = $this->model('Dosen_model')->getAllDosen();
        $this->view('templates/header', $data);
        $this->view('matkul/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {   
        $data['judul'] = 'Detail Mata Kuliah';
        $data['mk'] = $this->model('Matkul_model')->getMatkulById($id);
        $this->view('templates/header', $data);
        $this->view('matkul/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {   
        if( $this->model('Matkul_model')->tambahDataMatkul($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'matkul');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'matkul');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        }
    }

    public function hapus($id)
    {   
        if( $this->model('Matkul_model')->hapusDataMatkul($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'matkul');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'matkul');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Matkul_model')->getMatkulById($_POST['id']));
    }

    public function ubah()
    {   
        if( $this->model('Matkul_model')->ubahDataMatkul($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'matkul');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'diubah', 'danger', 'matkul');
            header('Location: ' . BASEURL . '/matkul');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['mk'] = $this->model('Matkul_model')->cariDataMatkul();
        $this->view('templates/header', $data);
        $this->view('matkul/index', $data);
        $this->view('templates/footer');
    }
    
}
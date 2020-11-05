<?php 

class Dosen extends Controller {
    public function index()
    {   
        $data['judul'] = 'Dosen';
        $data['dosen'] = $this->model('Dosen_model')->getAllDosen();
        $this->view('templates/header', $data);
        $this->view('dosen/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {   
        $data['judul'] = 'Detail Dosen';
        $data['dosen'] = $this->model('Dosen_model')->getDosenById($id);
        $this->view('templates/header', $data);
        $this->view('dosen/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id) 
    {
        $data['judul'] = 'Edit Dosen';
        $data['dosen'] = $this->model('Dosen_model')->getDosenById($id);
        $this->view('templates/header', $data);
        $this->view('dosen/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {   
        if( $this->model('Dosen_model')->tambahDataDosen($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'dosen');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'dosen');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        }
    }

    public function hapus($id)
    {   
        if( $this->model('Dosen_model')->hapusDataDosen($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'dosen');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'dosen');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Dosen_model')->getDosenById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Dosen_model')->ubahDataDosen($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'dosen');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'diubah', 'danger', 'dosen');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Dosen';
        $data['dosen'] = $this->model('Dosen_model')->cariDataDosen();
        $this->view('templates/header', $data);
        $this->view('dosen/index', $data);
        $this->view('templates/footer');
    }
    
}
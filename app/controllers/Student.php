<?php
class Student extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['student'] = $this->model('Student_model')->getAllStudent();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['student'] = $this->model('Student_model')->getById($id);
        $this->view('templates/header', $data);
        $this->view('student/detail', $data);
        $this->view('templates/footer');
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $studentModel = $this->model('Student_model');
            $result = $studentModel->createData($_POST);
            if ($result > 0) {
                Flasher::setFlash('berhasil', ' ditambah', 'success');
                header('Location: ' . BASEURL . '/student');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambah', 'danger');
                header('Location: ' . BASEURL . '/student');
                exit;
            }
        }
    }

    public function getupdate()
    {
        echo json_encode($this->model('Student_model')->getById($_POST['id']));
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $studentModel = $this->model('Student_model');
            $result = $studentModel->updateData($_POST);
            if ($result > 0) {
                Flasher::setFlash('berhasil', ' update', 'success');
                header('Location: ' . BASEURL . '/student');
                exit;
            } else {
                Flasher::setFlash('gagal', 'update', 'danger');
                header('Location: ' . BASEURL . '/student');
                exit;
            }
        }
    }

    public function delete($id)
    {
        if ($this->model('Student_model')->deleteData($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/student');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['student'] = $this->model('Student_model')->cariStudent();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
    }
}

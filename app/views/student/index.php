<br><br>
<div class="container mt-5">
    <div class="container-fluid justify-content-center m-5">
        <div class="row d-flex justify-content-start">
            <div class="col-3 m-0">
                <h3>List Mahasiswa</h3>
            </div>
            <div class="col text-start">
                <form class="form-inline my- my-lg-0" method="post" action="<?= BASEURL; ?>/student/cari">
                    <input class="form-control mr-sm-1" type="search" placeholder="Search..." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-success my-2 my-sm-0" id="cari" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <div class="col">
                <?php Flasher::flash(); ?>
            </div>
            <div class="col-2 text-right">
                <button type="button" id="createData" class="btn btn-primary mb-2 buttonAddData" data-toggle="modal" data-target="#addForm">
                    <i class="bi bi-person-plus-fill"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA MAHASISWA</th>
                        <th scope="col">NIM</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">ANGKATAN</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['student'] as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><a class="text-decoration-none" href="<?= BASEURL; ?>/student/detail/<?= $row['id']; ?>"><?= $row['nama']; ?></a></td>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['jurusan']; ?></td>
                            <td><?= $row['angkatan']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/student/update/<?= $row['id']; ?>" data-target="#updateForm" data-toggle="modal" class="badge badge-success text-light viewModalUpdate" data-id="<?= $row['id']; ?>">Update</a>
                                <a href="<?= BASEURL; ?>/student/delete/<?= $row['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ?' );">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once 'modal/create.php';
include_once 'modal/update.php';
?>
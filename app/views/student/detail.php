<div class="container m-5">
    <div class="card text-center" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['student']['nama']; ?></h5>
            <p class="card-text"><?= $data['student']['nim']; ?></p>
            <p class="card-text"><?= $data['student']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/student" class="btn btn-primary">Go back</a>
        </div>
    </div>
</div>
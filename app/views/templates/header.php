<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Halaman <?= $data['title']; ?> </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top m-0">
        <a class="navbar-brand" href="<?= BASEURL; ?>/home">PhpMVC</a>
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="<?= BASEURL; ?>/home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/student">Mahasiswa</a>
                </div>
            </div>
        </div>
    </nav>
    <br><br>
<?php if (!session_id()) session_start(); ?>

<div class="jumbotron m-5">
    <h1 class="display-4">Selamat Datang di Website MVC!</h1>
    <p class="lead">Hallo, My name is <?= $data['nama']; ?> </p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
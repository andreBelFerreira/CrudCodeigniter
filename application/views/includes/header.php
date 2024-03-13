<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CRUD</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Favicons -->
    <link href="<?php echo base_url('/assets/img/TDAHjudandoIcon.png') ?>" rel="icon">
    <link href="<?php echo base_url('/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <script src="<?php echo base_url('/assets/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/jquery-3.7.1.min.map') ?>"></script>
    <script src="<?php echo base_url('/assets/js/jQueryConsu.js') ?>"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <script>
        base_url = "<?php echo base_url() ?>"
    </script>

    <!-- ======= Header ======= -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url() ?>">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
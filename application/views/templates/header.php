<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <title>Czartery</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url() ?>">Czartery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?= base_url() ?>">Start <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?= base_url() ?>form">Dodaj przejazd</a>
        <a class="nav-item nav-link" href="<?= base_url() ?>find">Szukaj przejazdu</a>
        </div>
    </div>
    <form class="form-inline my-2 my-lg-0">
    <?php
        if(isset($this->session->userdata['logged_in']))
        {
            echo '<a class="nav-item nav-link" href="'. base_url() . 'logout"><button type="button" class="btn btn-outline-info">Wyloguj</button></a>';
        }
        else
        {
            echo '<a class="nav-item nav-link" href="'. base_url() . 'logout"><button type="button" class="btn btn-outline-info">Administrator</button></a>';
        }
    ?>
    </form>
    </nav>
</header>


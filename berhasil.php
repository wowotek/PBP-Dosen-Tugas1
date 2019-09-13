<!DOCTYPE html>
<html lang="en" style="overflow:hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBP Tugas-1</title>
    <script src="res/fontawesome-all.js"></script>
    <link rel="stylesheet" href="res/bulma.min.css">
</head>

<body class="has-background-success" style="height:100vh;">
    <?php
    require("constant.php");

    // Requests Data
    $name = ucfirst($_POST["name_input"]);
    $nim = $_POST["nim_input"];
    $gender = $_POST["gender_radio"];

    // Data Process
    $nama_depan = explode(" ", $name)[0];
    $digit_prodi = $nim[0] . $nim[1];
    $digit_angkatan = $nim[2] . $nim[3] . $nim[4] . $nim[5];
    $prodi = "Program Studi Yang Anda Pilih Tidak Tersedia";
    $jk = $gender == "pria" ? "Mahasiswa" : "Mahasiswi";

    if (isset($KODE_PRODI[$digit_prodi])) {
        $prodi = $KODE_PRODI[$digit_prodi];
    }

    ?>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="./res/header_logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="./">
                    Daftar Ulang
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <button class="button is-primary" disabled>
                            <strong>Pendaftaran Mahasiswa</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container has-background-danger" style="height: 100%">
        <br>
        <h1 class="title has-text-centered has-text-white">
            Selamat Datang <?php echo $nama_depan ?> !
        </h1>
        <hr>
        <div class="columns">
            <div class="column">
                <div class="box" style="margin: 10px; height: 100%">
                    <h1 class="title has-text-centered has-text-info">
                        Informasi
                    </h1>
                    <div class="box">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="./res/uksw.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Administrasi UKSW</strong> <small>@infoBaraUKSW</small> <small>31m</small>
                                        <br>
                                        Anda telah berhasil terdaftar sebagai <?php echo $jk . " " . $prodi ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="box">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="./res/fti.jpg">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>HMPTI</strong> <small>@hmp_ti</small> <small>31m</small>
                                        <br>
                                        Waaah... Anak TI Baru ya ? Jangan Lupa Daftar FTI-Days Ya Dek <?php echo $name ?>!
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="box" style="margin: 10px; height: 100%">
                    <h1 class="title has-text-centered has-text-info">
                        Biodata Diri
                    </h1>
                    <div class="field">
                        <label class="label">Nama Lengkap</label>
                        <div class="control">
                            <input class="input" type="text" value="<?php echo $name ?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nomer Induk Mahasiswa</label>
                        <div class="control">
                            <input class="input" type="text" value="<?php echo $nim ?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Program Studi</label>
                        <div class="control">
                            <input class="input" type="text" value="<?php echo $prodi ?>" disabled>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Jenis Kelamin</label>
                        <div class="control">
                            <div class="select">
                                <select name="gend" disabled>
                                    <option value=""><?php echo ucfirst($gender) ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
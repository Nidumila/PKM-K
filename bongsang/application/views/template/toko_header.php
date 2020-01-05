<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Ane</title>

    <link rel="shortcut icon" href="<?= base_url('Asset/img/');  ?>LogoBongsang.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url('Asset/');  ?>css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('Asset/');  ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('Asset/');  ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?= base_url('Asset/');  ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url('Asset/');  ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url('Asset/');  ?>js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        #searchbox {
            border: 2px solid gray;
            -moz-border-radius: 20px;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            width: 100%;
            height: 40px;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        #searchbox input {
            outline: none;
        }

        #searchbox input[type="text"] {
            background: transparent;
            padding: 5px 0px 5px 10px;
            border-width: 0px;
            font-family: "Arial Narrow", Arial, sans-serif;
            font-size: 18px;
            color: #828282;
            width: 70%;
            display: inline-table;
            vertical-align: top;
        }

        #button-submit {
            background: url(<?= base_url('Asset/img/');  ?>off.png);
            float: left;
            margin-top: 7px;
            border-width: 0px;
            cursor: pointer;
            margin-left: 10px;
            width: 20px;
            height: 21px;
        }

        #button-submit:hover {
            background: url(<?= base_url('Asset/img/');  ?>on.png);
            float: left;
        }

        #button-submit:active {
            background: url(<?= base_url('Asset/img/');  ?>on.png);
            float: left;
            outline: none;
        }

        #button-submit::-moz-focus-inner {
            border: 0;
        }

        .kotak {
            border: 2px solid gray;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 3px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container row mx-auto" width="100%" style="text-align: center;">
            <div class="col-3">
                <div class="btn-group" style="height: 40px">
                    <button type="button" style="-moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px;" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="<?= base_url('Asset/img/profile/') . $member['gambar']; ?>" alt="logo" height="28px" width="28px">
                        <?= $member['nama_member']; ?>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('user/profile'); ?>">Profil Saya</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('awal/logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-4" style="text-align: left;">
                <form id="searchbox" method="get" action="/search" autocomplete="off" style="background-color: white;">
                    <input name="cari" type="text" size="20" placeholder="Mau cari apa?" />
                    <input id="button-submit" type="submit" value="" />
                </form>
            </div>
            <div class="col-3 bg-primary p-0" style="text-align: center; height:40px; -moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px;">
                <a href="<?= base_url('user/'); ?>" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> home </a>
                <a href="<?= base_url('user/procom'); ?>" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> about </a>
                <a href="#" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> toko </a>
                <a href="<?= base_url('user/help'); ?>" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> help </a>
            </div>
            <div class="col-2">
                <a href="<?= base_url('user/keranjang'); ?>" class="btn btn-primary w-100" style=" height:40px;-moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px;"><i class="fa fa-shopping-cart"></i> Keranjang</a>
            </div>
        </div>
    </nav>
    <br>